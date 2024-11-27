<?php

// Define constants for easier path management
define( 'THEME_DIR', get_template_directory() );
define( 'THEME_URI', get_template_directory_uri() );
define( 'THEME_INC', THEME_DIR . '/inc' );
define( 'THEME_DIST', THEME_DIR . '/dist' );

/**
 * Include necessary files for theme functionality
 *
 * This section includes all essential files that manage various theme features.
 * Add future includes here as the theme develops, ensuring that functionality
 * is separated into distinct modules.
 */

// Include the file responsible for enqueuing styles
require_once THEME_INC . '/enqueue-styles.php';
// Include the file responsible for enqueuing scripts
require_once THEME_INC . '/enqueue-scripts.php'; // Enqueue scripts
