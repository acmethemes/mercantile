<?php
/**
 * Callback functions for comments
 *
 * @since Mercantile 1.0.0
 *
 * @param $comment
 * @param $args
 * @param $depth
 * @return void
 */
if ( ! function_exists( 'mercantile_commment_list' ) ) :

	function mercantile_commment_list( $comment, $args, $depth ) {
		if ( 'div' == $args['style'] ) {
			$tag       = 'div';
			$add_below = 'comment';
		} else {
			$tag       = 'li';
			$add_below = 'div-comment';
		}
		?>
		<<?php echo esc_html( $tag ); ?>
		<?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID(); ?>">
		<?php if ( 'div' != $args['style'] ) : ?>
			<div id="div-comment-<?php comment_ID(); ?>" class="comment-body clearfix">
		<?php endif; ?>
		<div class="comment-author vcard">
			<?php
			if ( $args['avatar_size'] != 0 ) {
				echo get_avatar( $comment, '64' );
			}
			printf( __( '<cite class="fn">%s</cite>', 'mercantile' ), get_comment_author_link() );
			?>
		</div>
		<?php if ( $comment->comment_approved == '0' ) : ?>
			<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'mercantile' ); ?></em>
			<br/>
		<?php endif; ?>
		<div class="comment-meta commentmetadata">
			<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
				<i class="fa fa-clock-o"></i>
				<?php
				/* translators: 1: date, 2: time */
				printf( __( '%1$s at %2$s', 'mercantile' ), get_comment_date(), get_comment_time() );
				?>
			</a>
			<?php edit_comment_link( __( '(Edit)', 'mercantile' ), '  ', '' ); ?>
		</div>
		<?php comment_text(); ?>
		<div class="reply">
			<?php
			comment_reply_link(
				array_merge(
					$args,
					array(
						'add_below' => $add_below,
						'depth'     => $depth,
						'max_depth' => $args['max_depth'],
					)
				)
			);
			?>
		</div>
		<?php if ( 'div' != $args['style'] ) : ?>
			</div>
			<?php
		endif;
	}
endif;

/**
 * BreadCrumb Settings
 */
if ( ! function_exists( 'mercantile_breadcrumbs' ) ) :
	function mercantile_breadcrumbs() {
		if ( ! function_exists( 'breadcrumb_trail' ) ) {
			require mercantile_file_directory( 'acmethemes/library/breadcrumbs/breadcrumbs.php' );
		}
		$breadcrumb_args = array(
			'container'   => 'div',
			'show_browse' => false,
		);
		echo "<div class='breadcrumbs col-md-6 init-animate fadeInDown1'><div id='mercantile-breadcrumbs'>";
		breadcrumb_trail( $breadcrumb_args );
		echo '</div></div>';
	}
endif;

/**
 * Return content of fixed length
 *
 * @since Mercantile 1.0.0
 *
 * @param string $mercantile_content
 * @param int $length
 * @return string
 */
if ( ! function_exists( 'mercantile_words_count' ) ) :
	function mercantile_words_count( $mercantile_content = null, $length = 16 ) {
		$length          = absint( $length );
		$source_content  = preg_replace( '`\[[^\]]*\]`', '', $mercantile_content );
		$trimmed_content = wp_trim_words( $source_content, $length, '...' );
		return $trimmed_content;
	}
endif;

/**
 * More Text
 *
 * @since Mercantile 1.0.0
 *
 * @param null
 * @return string
 */
if ( ! function_exists( 'mercantile_blog_archive_more_text' ) ) :
	function mercantile_blog_archive_more_text() {
		$mercantile_customizer_all_values  = mercantile_get_theme_options();
		$mercantile_blog_archive_read_more = $mercantile_customizer_all_values['mercantile-blog-archive-more-text'];
		$mercantile_blog_archive_read_more = esc_html( $mercantile_blog_archive_read_more );
		return $mercantile_blog_archive_read_more;
	}
endif;

/*https://gist.github.com/mikejolley/2044109*/
add_filter( 'woocommerce_add_to_cart_fragments', 'mercantile_header_add_to_cart_fragment' );
function mercantile_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;
	$cart_url = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : WC()->cart->get_cart_url();
	ob_start();
	?>
	<a href="<?php echo esc_url( $cart_url ); ?>" class="cart-contents cart-customlocation">
		<i class="fa fa-shopping-cart"></i>
		<span class="cart-value"><?php echo wp_kses_post( WC()->cart->cart_contents_count ); ?></span>
	</a>
	<?php
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
}

/**
 * check if WooCommerce activated
 */
function mercantile_is_woocommerce_active() {
	return class_exists( 'WooCommerce' ) ? true : false;
}
