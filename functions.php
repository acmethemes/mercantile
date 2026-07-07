<?php
/**
 * Mercantile functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Acme Themes
 * @subpackage Mercantile
 */


/**
 *  Default Theme layout options
 *
 * @since Mercantile 1.0.0
 *
 * @param null
 * @return array $mercantile_theme_layout
 */
if ( ! function_exists( 'mercantile_get_default_theme_options' ) ) :
	function mercantile_get_default_theme_options() {

		$default_theme_options = array(
			/*header*/
			'mercantile-header-top-left-option'          => 'none',
			'mercantile-phone-number'                    => '',
			'mercantile-top-email'                       => '',
			'mercantile-header-top-right-option'         => 'none',
			'mercantile-enable-sticky'                   => 1,
			'mercantile-menu-active-hover-options'       => 'text-color',
			'mercantile-enable-search'                   => '',
			'mercantile-enable-woo-cart'                 => '',

			/*feature section options*/
			'mercantile-feature-page'                    => 0,
			'mercantile-featured-slider-number'          => 2,
			'mercantile-enable-feature'                  => '',
			'mercantile-feature-slider-text-align'       => 'alternate',
			'mercantile-feature-slider-enable-animation' => 1,
			'mercantile-feature-slider-image-only'       => '',
			'mercantile-fs-image-display-options'        => 'full-screen-bg',
			'mercantile-slider-know-more-text'           => __( 'Know More', 'mercantile' ),

			/*header options*/
			'mercantile-header-id-display-opt'           => 'title-only',
			'mercantile-facebook-url'                    => '',
			'mercantile-twitter-url'                     => '',
			'mercantile-youtube-url'                     => '',
			'mercantile-google-plus-url'                 => '',
			'mercantile-enable-social'                   => '',

			/*footer options*/
			'mercantile-footer-copyright'                => __( '&copy; All right reserved 2016', 'mercantile' ),
			'mercantile-footer-bg-img'                   => '',

			/*layout/design options*/
			'mercantile-hide-front-page-content'         => '',

			'mercantile-single-sidebar-layout'           => 'right-sidebar',
			'mercantile-front-page-sidebar-layout'       => 'right-sidebar',
			'mercantile-archive-sidebar-layout'          => 'right-sidebar',

			'mercantile-blog-archive-layout'             => 'full-image',

			'mercantile-primary-color'                   => '#2196F3',

			'mercantile-blog-archive-more-text'          => __( 'Read More', 'mercantile' ),

			/*theme options*/
			'mercantile-search-placholder'               => __( 'Search', 'mercantile' ),
			'mercantile-store-title'                     => __( 'Store', 'mercantile' ),
			'mercantile-show-breadcrumb'                 => 0,
		);
		return apply_filters( 'mercantile_default_theme_options', $default_theme_options );
	}
endif;

/**
 *  Get theme options
 *
 * @since Mercantile 1.0.0
 *
 * @return array mercantile_theme_options
 */
if ( ! function_exists( 'mercantile_get_theme_options' ) ) :
	function mercantile_get_theme_options() {
		static $cached_theme_options = null;

		// Skip caching when in the Customizer preview
		if ( null !== $cached_theme_options && ! is_customize_preview() ) {
			return $cached_theme_options;
		}

		$mercantile_default_theme_options = mercantile_get_default_theme_options();
		$mercantile_get_theme_options     = get_theme_mod( 'mercantile_theme_options' );

		if ( is_array( $mercantile_get_theme_options ) ) {
			$cached_theme_options = array_merge( $mercantile_default_theme_options, $mercantile_get_theme_options );
		} else {
			$cached_theme_options = $mercantile_default_theme_options;
		}

		return $cached_theme_options;
	}
endif;

/**
 * Require init.
 */
require trailingslashit( get_template_directory() ) . 'acmethemes/init.php';
