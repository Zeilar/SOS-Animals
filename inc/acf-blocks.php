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
		'description'       => __('Put a nice hero on the top of your page!', 'myportfolio'),
		'render_template'   => 'loop-templates/block/hero.php',
		'category'          => 'formatting',
		'icon'              => 'admin-comments',
		'keywords'          => array('Hero', 'Jumbotron'),
	));

	// register a success story block
	acf_register_block(array(
		'name'              => 'SS',
		'title'             => 'Success Story',
		'description'       => __('Make some success stories!', 'myportfolio'),
		'render_template'   => 'loop-templates/block/ss.php',
		'category'          => 'formatting',
		'icon'              => 'admin-comments',
		'keywords'          => array('SS', 'Success Story'),
	));
	
	// register a fas icon
	acf_register_block(array(
		'name'              => 'FAS',
		'title'             => 'Font Awesome',
		'description'       => __('Add any Font Awesome icon you like!', 'myportfolio'),
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
