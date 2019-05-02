<?php
/**
 * Register ACF Blocks
 *
 */

function register_acf_blocks() {

	// register a USP block
	acf_register_block(array(
		'name'              => 'USP',
		'title'             => __('Unique selling point', 'myportfolio'),
		'description'       => __('Sell yourself with these blocks.', 'myportfolio'),
		'render_template'   => 'loop-templates/block/usp.php',
		'category'          => 'formatting',
		'icon'              => 'admin-comments',
		'keywords'          => array('USP', 'Unique selling point'),
	));

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
}



// Check if function exists and hook into setup.
if (function_exists('acf_register_block')) {
	add_action('acf/init', 'register_acf_blocks');
}
