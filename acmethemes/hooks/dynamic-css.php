<?php
/**
 * Dynamic css
 *
 * @since Mercantile 1.0.0
 *
 * @param null
 * @return null
 *
 */
if ( ! function_exists( 'mercantile_dynamic_css' ) ) :

    function mercantile_dynamic_css() {

	    $mercantile_customizer_all_values = mercantile_get_theme_options();
        /*Color options */
        $mercantile_primary_color = esc_attr( $mercantile_customizer_all_values['mercantile-primary-color'] );
        $mercantile_menu_active_hover_options = esc_attr( $mercantile_customizer_all_values['mercantile-menu-active-hover-options'] );
        $custom_css = '';

        /*background*/
        $bg_image_url ='';
        if( get_header_image() ){
            $bg_image_url = esc_url( get_header_image() );
        }
        $custom_css .= "
              .inner-main-title {
                background-image:url('{$bg_image_url}');
                background-repeat:no-repeat;
                background-size:cover;
                background-attachment:fixed;
                background-position: center;
            }";
        /*color*/
        $custom_css .= "
            a:hover,
            a:active,
            a:focus,
            .btn-primary:hover,
            .wpcf7-form input.wpcf7-submit:hover,
            .widget li a:hover,
            .posted-on a:hover,
            .cat-links a:hover,
            .comments-link a:hover,
            article.post .entry-header .entry-title a:hover, 
            article.page .entry-header .entry-title a:hover,
            .edit-link a:hover,
            .tags-links a:hover,
            .byline a:hover,
            .nav-links a:hover,
             .main-navigation ul ul a:hover,
             .primary-color,
             #mercantile-breadcrumbs .breadcrumb-container a:hover,
             .btn-primary:focus,
            .wpcf7-form input.wpcf7-submit:focus,
            .widget li a:focus,
            .posted-on a:focus,
            .cat-links a:focus,
            .comments-link a:focus,
            article.post .entry-header .entry-title a:focus, 
            article.page .entry-header .entry-title a:focus,
            .edit-link a:focus,
            .tags-links a:focus,
            .byline a:focus,
            .nav-links a:focus,
             .main-navigation ul ul a:focus,
             .primary-color,
             #mercantile-breadcrumbs .breadcrumb-container a:focus,
            .owl-buttons >div i,
            .col-details > h2,
             .contact-form i,
             #mercantile-breadcrumbs,
             #mercantile-breadcrumbs a{
                color: {$mercantile_primary_color};
            }";
        if( 'text-color' == $mercantile_menu_active_hover_options ){
            $custom_css .= "
            .main-navigation .acme-normal-page .current-menu-item a,
            .main-navigation .acme-normal-page .current_page_item a,
            .main-navigation .active a,
            .main-navigation .navbar-nav >li a:hover,
            .main-navigation .navbar-nav >li a:focus{
                color: {$mercantile_primary_color};
            }";
        }
        else{
            $custom_css .= "
            .main-navigation .acme-normal-page .current-menu-item,
            .main-navigation .acme-normal-page .current_page_item,
            .main-navigation .active ,
            .main-navigation .navbar-nav >li:hover,
            .main-navigation .navbar-nav >li:focus-within{
                background-color: {$mercantile_primary_color};
                color:#fff;
            }";
        }
        /*background color*/
        $custom_css .= "
            .navbar .navbar-toggle:hover,
            .navbar .navbar-toggle:focus,
            .comment-form .form-submit input,
            .read-more,
            .btn-primary,
            .circle,
            .rectangle,
            .wpcf7-form input.wpcf7-submit,
            .breadcrumb,
            .owl-buttons >div i:hover,
            .owl-buttons >div i:focus,
            .top-header,
            .sm-up-container,
            .testimonial-content,
            .team-item :hover,
            .team-item :focus-within,
            .primary-bg-color,
            .acme-portfolio .round-icon{
                background-color: {$mercantile_primary_color};
                color:#fff;
            }";

        /*borders*/
        $custom_css .= "
            .comment-form .form-submit input,
            .read-more,
            .at-btn-wrap .btn-primary,
            .wpcf7-form input.wpcf7-submit,
            .rectangle,
            .contact-form i{
                border: 1px solid {$mercantile_primary_color};
            }";

        $custom_css .= "
            article.post .entry-header, 
            article.page .entry-header,
            .at-remove-width .widget-title{
                border-left: 3px solid {$mercantile_primary_color};
            }
            .rtl article.post .entry-header, 
            .rtl article.page .entry-header,
            .rtl .at-remove-width .widget-title{
                border-right: 3px solid {$mercantile_primary_color};
                border-left:medium none;
            }
            ";
        $custom_css .= "
            .blog article.sticky {
                border-top: 2px solid {$mercantile_primary_color};
            }";

        $custom_css .= "
             .breadcrumb::after {
                border-left: 5px solid {$mercantile_primary_color};
            }
            .rtl .breadcrumb::after {
                border-right: 5px solid {$mercantile_primary_color};
                border-left:medium none;
            }
            ";
        wp_add_inline_style( 'mercantile-style', $custom_css );
    }
endif;
add_action( 'wp_enqueue_scripts', 'mercantile_dynamic_css', 99 );