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

function creative_customize_register( $wp_customize ) {
	// Add sections.
	$wp_customize->add_section( 'creative_hero_section', array(
		'title'           => __( 'Hero Section' ),
		'active_callback' => 'is_front_page',
		'priority'        => - 10,
	) );

	// Hero image.
	$wp_customize->add_setting( 'creative_hero_image' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'creative_hero_image', array(
		'label'    => __( 'Hero Image' ),
		'section'  => 'creative_hero_section',
		'settings' => 'creative_hero_image',
	) ) );

	// Heading 1.
	$wp_customize->add_setting( 'creative_heading_1' );
	$wp_customize->add_control( 'creative_heading_1', array(
		'label'   => __( 'Heading Line 1' ),
		'section' => 'creative_hero_section',
		'type'    => 'text',
	) );

	// Heading 2
	$wp_customize->add_setting( 'creative_heading_2' );
	$wp_customize->add_control( 'creative_heading_2', array(
		'label'   => __( 'Heading Line 2' ),
		'section' => 'creative_hero_section',
		'type'    => 'text',
	) );

	// Button text.
	$wp_customize->add_setting( 'creative_button_text' );
	$wp_customize->add_control( 'creative_button_text', array(
		'label'   => __( 'Button Text' ),
		'section' => 'creative_hero_section',
		'type'    => 'text',
	) );

	// Button url.
	$wp_customize->add_setting( 'creative_button_url' );
	$wp_customize->add_control( 'creative_button_url', array(
		'label'   => __( 'Button URL' ),
		'section' => 'creative_hero_section',
		'type'    => 'text',
	) );
}

// Add actions.
add_action( 'after_setup_theme', 'creative_theme_features' );
add_action( 'widgets_init', 'creative_widgets_init' );
add_action( 'wp_enqueue_scripts', 'creative_theme_assets' );
add_action( 'customize_register', 'creative_customize_register' );