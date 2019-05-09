<?php
/**
 * Register ACF Blocks
 *
 */

function register_acf_blocks() {

	// register a hero block
	acf_register_block(array(
		'name'              => 'Hero',
		'title'             => 'Hero',
		'description'       => __('Put a nice hero on the top of your page!', 'sosa'),
		'render_template'   => 'loop-templates/block/hero.php',
		'category'          => 'formatting',
		'icon'              => 'admin-comments',
		'keywords'          => array('Hero', 'Jumbotron'),
	));
	
	// register a fas icon
	acf_register_block(array(
		'name'              => 'FAS',
		'title'             => 'Font Awesome',
		'description'       => __('Add any Font Awesome icon you like!', 'sosa'),
		'render_template'   => 'loop-templates/block/fas.php',
		'category'          => 'formatting',
		'icon'              => 'admin-comments',
		'keywords'          => array('FAS', 'Font Awesome'),
	));
}



// Check if function exists and hook into setup.
if (function_exists('acf_register_block')) {
	add_action('acf/init', 'register_acf_blocks');
}
