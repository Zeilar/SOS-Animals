<?php
/**
 * Check and setup theme's default settings
 *
 * @package sosa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'sosa_setup_theme_default_settings' ) ) {
	function sosa_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$sosa_posts_index_style = get_theme_mod( 'sosa_posts_index_style' );
		if ( '' == $sosa_posts_index_style ) {
			set_theme_mod( 'sosa_posts_index_style', 'default' );
		}

		// Sidebar position.
		$sosa_sidebar_position = get_theme_mod( 'sosa_sidebar_position' );
		if ( '' == $sosa_sidebar_position ) {
			set_theme_mod( 'sosa_sidebar_position', 'right' );
		}

		// Container width.
		$sosa_container_type = get_theme_mod( 'sosa_container_type' );
		if ( '' == $sosa_container_type ) {
			set_theme_mod( 'sosa_container_type', 'container' );
		}
	}
}
