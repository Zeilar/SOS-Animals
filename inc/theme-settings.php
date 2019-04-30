<?php
/**
 * Check and setup theme's default settings
 *
 * @package myportfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'myportfolio_setup_theme_default_settings' ) ) {
	function myportfolio_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$myportfolio_posts_index_style = get_theme_mod( 'myportfolio_posts_index_style' );
		if ( '' == $myportfolio_posts_index_style ) {
			set_theme_mod( 'myportfolio_posts_index_style', 'default' );
		}

		// Sidebar position.
		$myportfolio_sidebar_position = get_theme_mod( 'myportfolio_sidebar_position' );
		if ( '' == $myportfolio_sidebar_position ) {
			set_theme_mod( 'myportfolio_sidebar_position', 'right' );
		}

		// Container width.
		$myportfolio_container_type = get_theme_mod( 'myportfolio_container_type' );
		if ( '' == $myportfolio_container_type ) {
			set_theme_mod( 'myportfolio_container_type', 'container' );
		}
	}
}
