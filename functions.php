<?php

function blogga_enqueue_styles() {
	// Enqueue the main Tailwind CSS file for the frontend
	wp_enqueue_style(
		'tailwind-main',
		get_template_directory_uri() . '/dist/main.css', // Adjust the path if needed
	);
}
add_action( 'wp_enqueue_scripts', 'blogga_enqueue_styles' );

// Enqueue Tailwind CSS for the block editor
function blogga_enqueue_block_editor_styles() {

	wp_enqueue_style(
		'tailwind-main-editor', // Unique handle for the block editor
		get_template_directory_uri() . '/dist/main.css', // Adjust the path if needed
	);
}
add_action( 'enqueue_block_editor_assets', 'blogga_enqueue_block_editor_styles' );
