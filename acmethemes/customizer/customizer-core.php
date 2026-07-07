<?php
/**
 * Header Top Left Options
 *
 * @since Mercantile 1.0.0
 *
 * @param null
 * @return array $mercantile_header_top_left_options
 *
 */
if ( !function_exists('mercantile_header_top_left_options') ) :
    function mercantile_header_top_left_options() {
        $mercantile_header_top_left_options =  array(
            'email' => __( 'Email', 'mercantile' ),
            'phone' => __( 'Phone', 'mercantile' ),
            'both' =>  __( 'Both', 'mercantile' ),
            'none' =>  __( 'None', 'mercantile' )
        );
        return apply_filters( 'mercantile_header_top_left_options', $mercantile_header_top_left_options );
    }
endif;

/**
 * Header Top Right Options
 *
 * @since Mercantile 1.0.0
 *
 * @param null
 * @return array $mercantile_header_top_right_options
 *
 */
if ( !function_exists('mercantile_header_top_right_options') ) :
    function mercantile_header_top_right_options() {
        $mercantile_header_top_right_options =  array(
            'social' => __( 'Social Links', 'mercantile' ),
            'none' =>  __( 'None', 'mercantile' )
        );
        return apply_filters( 'mercantile_header_top_right_options', $mercantile_header_top_right_options );
    }
endif;

/**
 * Header Top Left Options
 *
 * @since Mercantile 1.0.0
 *
 * @param null
 * @return array $mercantile_menu_active_hover_options
 *
 */
if ( !function_exists('mercantile_menu_active_hover_options') ) :
    function mercantile_menu_active_hover_options() {
        $mercantile_menu_active_hover_options =  array(
            'bg-color' => __( 'Background Color', 'mercantile' ),
            'text-color' => __( 'Text Color', 'mercantile' )
        );
        return apply_filters( 'mercantile_menu_active_hover_options', $mercantile_menu_active_hover_options );
    }
endif;

/**
 * Featured Slider Number
 *
 * @since Mercantile 1.0.0
 *
 * @param null
 * @return array $mercantile_featured_slider_number
 *
 */
if ( !function_exists('mercantile_featured_slider_number') ) :
    function mercantile_featured_slider_number() {
        $mercantile_featured_slider_number =  array(
            1 => __( '1', 'mercantile' ),
            2 => __( '2', 'mercantile' ),
            3 =>  __( '3', 'mercantile' )
        );
        return apply_filters( 'mercantile_featured_slider_number', $mercantile_featured_slider_number );
    }
endif;

/**
 * Featured Slider Image Options
 *
 * @since Mercantile 1.0.0
 *
 * @param null
 * @return array $mercantile_fs_image_display_options
 *
 */
if ( !function_exists('mercantile_fs_image_display_options') ) :
	function mercantile_fs_image_display_options() {
		$mercantile_fs_image_display_options =  array(
			'full-screen-bg' => __( 'Full Screen Background', 'mercantile' ),
			'responsive-img' => __( 'Responsive Image', 'mercantile' )
		);
		return apply_filters( 'mercantile_fs_image_display_options', $mercantile_fs_image_display_options );
	}
endif;

/**
 * Header logo/text display options alternative
 *
 * @since Mercantile 1.0.2
 *
 * @param null
 * @return array $mercantile_header_id_display_opt
 *
 */
if ( !function_exists('mercantile_header_id_display_opt') ) :
    function mercantile_header_id_display_opt() {
        $mercantile_header_id_display_opt =  array(
            'logo-only' => __( 'Logo Only ( First Select Logo Above )', 'mercantile' ),
            'title-only' => __( 'Site Title Only', 'mercantile' ),
            'title-and-tagline' =>  __( 'Site Title and Tagline', 'mercantile' ),
            'disable' => __( 'Disable', 'mercantile' )
        );
        return apply_filters( 'mercantile_header_id_display_opt', $mercantile_header_id_display_opt );
    }
endif;

/**
 * Feature slider selection
 *
 * @since Mercantile 1.0.0
 *
 * @param null
 * @return array $mercantile_slider_text_align
 *
 */
if ( !function_exists('mercantile_slider_text_align') ) :
    function mercantile_slider_text_align() {
        $mercantile_slider_text_align =  array(
            'alternate'   => __( 'Alternate', 'mercantile' ),
            'text-left'   => __( 'Left', 'mercantile' ),
            'text-right'  => __( 'Right', 'mercantile' ),
            'text-center' => __( 'Center', 'mercantile' )
        );
        return apply_filters( 'mercantile_slider_text_align', $mercantile_slider_text_align );
    }
endif;

/**
 * Sidebar layout options
 *
 * @since Mercantile 1.0.0
 *
 * @param null
 * @return array $mercantile_sidebar_layout
 *
 */
if ( !function_exists('mercantile_sidebar_layout') ) :
    function mercantile_sidebar_layout() {
        $mercantile_sidebar_layout =  array(
	        'right-sidebar' => esc_html__( 'Right Sidebar', 'mercantile' ),
	        'left-sidebar'  => esc_html__( 'Left Sidebar' , 'mercantile' ),
	        'both-sidebar'  => esc_html__( 'Both Sidebar' , 'mercantile' ),
	        'middle-col'    => esc_html__( 'Middle Column' , 'mercantile' ),
	        'no-sidebar'    => esc_html__( 'No Sidebar', 'mercantile' )
        );
        return apply_filters( 'mercantile_sidebar_layout', $mercantile_sidebar_layout );
    }
endif;

/**
 * Blog layout options
 *
 * @since Mercantile 1.0.0
 *
 * @param null
 * @return array $mercantile_blog_layout
 *
 */
if ( !function_exists('mercantile_blog_layout') ) :
    function mercantile_blog_layout() {
        $mercantile_blog_layout =  array(
            'full-image' => __( 'Show Image', 'mercantile' ),
            'no-image' => __( 'No Image', 'mercantile' )
        );
        return apply_filters( 'mercantile_blog_layout', $mercantile_blog_layout );
    }
endif;