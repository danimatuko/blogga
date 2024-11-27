<?php
/**
 * Enqueue JavaScript files for the theme
 *
 * This file is responsible for enqueuing all necessary JavaScript files
 * for both the frontend and the block editor. You can add more script files
 * as needed, ensuring that the paths are relative to the theme’s `assets/js` folder.
 */

/**
 * Enqueue scripts for the frontend
 */
function blogga_enqueue_scripts() {
	// Enqueue main theme JavaScript
}
add_action( 'wp_enqueue_scripts', 'blogga_enqueue_scripts' );




/**
 * Enqueue block editor scripts for the theme
 */
function blogga_enqueue_block_editor_scripts() {
	wp_enqueue_script(
		'theme-block-editor', // Handle for the script
		THEME_URI . '/assets/js/variations.js', // Path to your block editor JavaScript file
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ), // Dependencies: WordPress blocks and editor JS
		null, // Version (use null to let WordPress handle it)
		true // Load in the footer
	);
}
add_action( 'enqueue_block_editor_assets', 'blogga_enqueue_block_editor_scripts' );
