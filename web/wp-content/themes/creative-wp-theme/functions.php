<?php

// Theme features.
function creative_theme_features() {
  // Add theme features.
	add_theme_support( 'custom-logo' );
	add_theme_support( 'title-tag' );

	// Remove some theme features.
	remove_theme_support( 'colors' );

	// Add menus.
	register_nav_menu( 'header_nav_menu', 'Header' );
	register_nav_menu( 'footer_nav_menu', 'Footer' );
}

// Add any CSS and JS to our project.
function creative_theme_assets() {
  wp_enqueue_style('style', get_template_directory_uri() . '/dist/style.css');
  wp_enqueue_script('script', get_template_directory_uri() . '/dist/app.js');
}

// Add actions.
add_action('after_setup_theme', 'creative_theme_features');
add_action('wp_enqueue_scripts', 'creative_theme_assets');