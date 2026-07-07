<?php
/**
 * The sidebar containing the left widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Acme Themes
 * @subpackage Mercantile
 */
if ( ! is_active_sidebar( 'mercantile-sidebar-left' ) ) {
	return;
}
$sidebar_layout = mercantile_sidebar_selection();
?>
<?php if( $sidebar_layout == "left-sidebar" || $sidebar_layout == "both-sidebar"  ) : ?>
    <div id="secondary-left" class="widget-area at-remove-width sidebar secondary-sidebar" role="complementary">
        <div id="sidebar-section-top" class="widget-area sidebar clearfix">
			<?php dynamic_sidebar( 'mercantile-sidebar-left' );; ?>
        </div>
    </div>
<?php endif;