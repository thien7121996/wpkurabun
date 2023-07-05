<?php
/**
 * BBase Code enqueue scripts
 *
 * @package BBase_Code
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'bbase_code_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function bbase_code_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/assets/css/theme.min.css' );
		// wp_enqueue_style( 'bbase-code-styles', get_template_directory_uri() . '/assets/css/theme.min.css', array(), $css_version );

		// wp_enqueue_style( 'bbase-code-style', get_template_directory_uri() . '/assets/css/style.css', array(), $css_version );
		wp_enqueue_style( 'bbase-code-custom', get_template_directory_uri() . '/assets/css/custom.css', array(), $css_version );

		wp_enqueue_script( 'jquery' );

		// $js_version = $theme_version . '.' . filemtime( get_template_directory() . '/assets/js/theme.min.js' );
		// wp_enqueue_script( 'bbase-code-scripts', get_template_directory_uri() . '/assets/js/theme.min.js', array(), $js_version, true );

		// wp_enqueue_script( 'tbang-scripts', get_template_directory_uri() . '/assets/js/tbang.js', array(), $js_version, true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
			
	}
} // endif function_exists( 'bbase_code_scripts' ).

add_action( 'wp_enqueue_scripts', 'bbase_code_scripts' );
