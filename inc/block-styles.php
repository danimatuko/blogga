<?php
/**
 * Block Styles Registration
 *
 * This file contains the code for registering custom block styles in WordPress.
 *
 * @package Blogga
 */
function blogga_register_block_styles() {
	// Register a block style for the Navigation block.
	register_block_style(
		'core/navigation', // Target the Navigation block.
		array(
			'name'  => 'blogga-navigation', // Unique slug for the block style.
			'label' => __( 'Blogga', 'blogga' ), // Display name for the block style.
			// 'style_handle' => 'blogga-nav', // Handle for the style
		)
	);
}
add_action( 'init', 'blogga_register_block_styles' );
