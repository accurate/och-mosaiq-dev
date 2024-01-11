<?php
/**
 * UnderStrap enqueue scripts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

        
        // CSS
        $css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
        wp_enqueue_style( 'understrap-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );

        // Hover CSS
        wp_enqueue_style( 'hover-css', get_template_directory_uri() . '/css/hover-min.css', array(), $css_version );

        // Slick Slider CSS
        wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/slick/slick.css', 1, null);

        // Slick Slider Theme CSS
        //wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/slick/slick-theme.css', array('slick-css'), null);

        // Featherlight (Lightbox for image galleries, etc.)
        wp_enqueue_style( 'featherlight-css', 'https://cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css', array(), $css_version );

        // Lity (Lightbox for external MC form ONLY)
        wp_enqueue_style( 'lity-css', get_template_directory_uri() . '/css/lity.css', array('slick-css'), null);
        



        // Mosaïq theme - Main CSS
        wp_enqueue_style( 'mosaiq-css', get_template_directory_uri() . '/css/mosaiq.css', array(), $css_version );

        // Mosaïq theme - Responsive CSS
        wp_enqueue_style( 'mosaiq-css-responsive', get_template_directory_uri() . '/css/mosaiq-responsive.css', array(), $css_version );





        // JS
        wp_enqueue_script( 'jquery' );
        
        // Slick Slider JS
        wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/slick/slick.js', array(), $js_version, true );


        // Featherlight (Lightbox for image galleries, etc.)
        wp_enqueue_script( 'featherlight-js', 'https://cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js', array(), $js_version, true );


        // Lity (Lightbox for external MC form ONLY)
        wp_enqueue_script( 'lity-js', get_template_directory_uri() . '/js/lity.js', array(), $js_version, true );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		
        wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );

 
        
        // General JS for Mosaiq811 site
        wp_enqueue_script( 'mosaiq-general-js', get_template_directory_uri() . '/js/mosaiq-general.js', array(), $js_version, true );



        
        


        
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
        }
        
	}
} // End of if function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );