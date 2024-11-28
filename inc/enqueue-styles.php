<?php
/**
 * Blogga Styles Enqueue
 *
 * This file handles the enqueueing of styles for both the frontend and block editor.
 * It includes Tailwind CSS and custom styles for the navigation block.
 *
 * @package Blogga
 */

/**
 * Enqueue styles for the frontend.
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
 * Enqueue styles for the block editor.
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
