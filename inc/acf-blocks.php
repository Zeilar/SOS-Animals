<?php
/**
 * Register ACF Blocks
 *
 */

function register_acf_blocks() {

	// register a USP block.
	acf_register_block(array(
		'name'              => 'USP',
		'title'             => __('Unique selling point', 'myportfolio'),
		'description'       => __('Sell yourself with these blocks.', 'myportfolio'),
		'render_template'   => 'loop-templates/block/usp.php',
		'category'          => 'formatting',
		'icon'              => 'admin-comments',
		'keywords'          => array('USP', 'Unique selling point'),
	));
}

// Check if function exists and hook into setup.
if (function_exists('acf_register_block')) {
	add_action('acf/init', 'register_acf_blocks');
}
