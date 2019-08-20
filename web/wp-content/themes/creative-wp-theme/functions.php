<?php

// Theme features.
function creative_theme_features() {
	// Add theme features.
	add_theme_support( 'post-thumbnails' );

	// Remove some theme features.
	remove_theme_support( 'colors' );

	// Add menus.
	register_nav_menu( 'header_menu', 'Header Menu' );
	register_nav_menu( 'footer_menu', 'Footer Menu' );
}

function creative_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'creative' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}

// Add any CSS and JS to our project.
function creative_theme_assets() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/dist/style.css' );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/dist/app.js' );
	wp_enqueue_script( 'details-polyfill', get_template_directory_uri() . '/vendor/details-element-polyfill.js' );
}

// Add actions.
add_action( 'after_setup_theme', 'creative_theme_features' );
add_action ( 'widgets_init', 'creative_widgets_init' );
add_action( 'wp_enqueue_scripts', 'creative_theme_assets' );
