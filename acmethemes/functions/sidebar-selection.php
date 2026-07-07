<?php
/**
 * Select sidebar according to the options saved
 *
 * @since Mercantile 1.0.0
 *
 * @param null
 * @return string
 *
 */
if ( !function_exists('mercantile_sidebar_selection') ) :
	function mercantile_sidebar_selection( ) {
		wp_reset_postdata();
		$mercantile_customizer_all_values = mercantile_get_theme_options();
		global $post;
		if(
			isset( $mercantile_customizer_all_values['mercantile-single-sidebar-layout'] ) &&
			(
				'left-sidebar' == $mercantile_customizer_all_values['mercantile-single-sidebar-layout'] ||
				'both-sidebar' == $mercantile_customizer_all_values['mercantile-single-sidebar-layout'] ||
				'middle-col' == $mercantile_customizer_all_values['mercantile-single-sidebar-layout'] ||
				'no-sidebar' == $mercantile_customizer_all_values['mercantile-single-sidebar-layout']
			)
		){
			$mercantile_body_global_class = $mercantile_customizer_all_values['mercantile-single-sidebar-layout'];
		}
		else{
			$mercantile_body_global_class= 'right-sidebar';
		}

		if ( mercantile_is_woocommerce_active() && ( is_product() || is_shop() || is_product_taxonomy() )) {
			if( is_product() ){
				$post_class = get_post_meta( $post->ID, 'mercantile_sidebar_layout', true );
				$mercantile_wc_single_product_sidebar_layout = $mercantile_customizer_all_values['mercantile-wc-single-product-sidebar-layout'];

				if ( 'default-sidebar' != $post_class ){
					if ( $post_class ) {
						$mercantile_body_classes = $post_class;
					} else {
						$mercantile_body_classes = $mercantile_wc_single_product_sidebar_layout;
					}
				}
				else{
					$mercantile_body_classes = $mercantile_wc_single_product_sidebar_layout;

				}
			}
			else{
				if( isset( $mercantile_customizer_all_values['mercantile-wc-shop-archive-sidebar-layout'] ) ){
					$mercantile_archive_sidebar_layout = $mercantile_customizer_all_values['mercantile-wc-shop-archive-sidebar-layout'];
					if(
						'right-sidebar' == $mercantile_archive_sidebar_layout ||
						'left-sidebar' == $mercantile_archive_sidebar_layout ||
						'both-sidebar' == $mercantile_archive_sidebar_layout ||
						'middle-col' == $mercantile_archive_sidebar_layout ||
						'no-sidebar' == $mercantile_archive_sidebar_layout
					){
						$mercantile_body_classes = $mercantile_archive_sidebar_layout;
					}
					else{
						$mercantile_body_classes = $mercantile_body_global_class;
					}
				}
				else{
					$mercantile_body_classes= $mercantile_body_global_class;
				}
			}
		}
		elseif( is_front_page() ){
			if( isset( $mercantile_customizer_all_values['mercantile-front-page-sidebar-layout'] ) ){
				if(
					'right-sidebar' == $mercantile_customizer_all_values['mercantile-front-page-sidebar-layout'] ||
					'left-sidebar' == $mercantile_customizer_all_values['mercantile-front-page-sidebar-layout'] ||
					'both-sidebar' == $mercantile_customizer_all_values['mercantile-front-page-sidebar-layout'] ||
					'middle-col' == $mercantile_customizer_all_values['mercantile-front-page-sidebar-layout'] ||
					'no-sidebar' == $mercantile_customizer_all_values['mercantile-front-page-sidebar-layout']
				){
					$mercantile_body_classes = $mercantile_customizer_all_values['mercantile-front-page-sidebar-layout'];
				}
				else{
					$mercantile_body_classes = $mercantile_body_global_class;
				}
			}
			else{
				$mercantile_body_classes= $mercantile_body_global_class;
			}
		}

		elseif ( is_singular() && isset( $post->ID ) ) {
			$post_class = get_post_meta( $post->ID, 'mercantile_sidebar_layout', true );
			if ( 'default-sidebar' != $post_class ){
				if ( $post_class ) {
					$mercantile_body_classes = $post_class;
				} else {
					$mercantile_body_classes = $mercantile_body_global_class;
				}
			}
			else{
				$mercantile_body_classes = $mercantile_body_global_class;
			}

		}
		elseif ( is_archive() ) {
			if( isset( $mercantile_customizer_all_values['mercantile-archive-sidebar-layout'] ) ){
				$mercantile_archive_sidebar_layout = $mercantile_customizer_all_values['mercantile-archive-sidebar-layout'];
				if(
					'right-sidebar' == $mercantile_archive_sidebar_layout ||
					'left-sidebar' == $mercantile_archive_sidebar_layout ||
					'both-sidebar' == $mercantile_archive_sidebar_layout ||
					'middle-col' == $mercantile_archive_sidebar_layout ||
					'no-sidebar' == $mercantile_archive_sidebar_layout
				){
					$mercantile_body_classes = $mercantile_archive_sidebar_layout;
				}
				else{
					$mercantile_body_classes = $mercantile_body_global_class;
				}
			}
			else{
				$mercantile_body_classes= $mercantile_body_global_class;
			}
		}
		else {
			$mercantile_body_classes = $mercantile_body_global_class;
		}
		return $mercantile_body_classes;
	}
endif;