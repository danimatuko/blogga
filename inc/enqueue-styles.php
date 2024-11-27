<?php
/**
 * Enqueue styles for the frontend
 */
function blogga_enqueue_styles() {
	wp_enqueue_style(
		'blogga-tailwind',
		THEME_URI . '/dist/main.css'
	);

	wp_enqueue_style(
		'blogga-nav',
		THEME_URI . '/assets/css/nav.css'
	);
}
add_action( 'wp_enqueue_scripts', 'blogga_enqueue_styles' );

/**
 * Enqueue styles for the block editor
 */
function blogga_enqueue_block_editor_styles() {
	wp_enqueue_style(
		'blogga-tailwind-editor',
		THEME_URI . '/dist/main.css'
	);

	wp_enqueue_style(
		'blogga-nav-editor',
		THEME_URI . '/assets/css/nav.css'
	);
}
add_action( 'enqueue_block_editor_assets', 'blogga_enqueue_block_editor_styles' );
