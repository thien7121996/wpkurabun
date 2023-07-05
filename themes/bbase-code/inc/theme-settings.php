<?php
/**
 * Check and setup theme's default settings
 *
 * @package bbase_code
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'bbase_code_setup_theme_default_settings' ) ) {
	function bbase_code_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$bbase_code_posts_index_style = get_theme_mod( 'bbase_code_posts_index_style' );
		if ( '' == $bbase_code_posts_index_style ) {
			set_theme_mod( 'bbase_code_posts_index_style', 'default' );
		}

		// Sidebar position.
		$bbase_code_sidebar_position = get_theme_mod( 'bbase_code_sidebar_position' );
		if ( '' == $bbase_code_sidebar_position ) {
			set_theme_mod( 'bbase_code_sidebar_position', 'right' );
		}

		// Container width.
		$bbase_code_container_type = get_theme_mod( 'bbase_code_container_type' );
		if ( '' == $bbase_code_container_type ) {
			set_theme_mod( 'bbase_code_container_type', 'container' );
		}
	}
}
