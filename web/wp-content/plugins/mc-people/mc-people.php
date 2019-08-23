<?php
/**
 * @package PeoplePlugin
 *
 */
/*
Plugin Name: Michigan Creative - People Custom Post Type
Plugin URI:
Description: Plugin to create a People custom post type
Version: 1.0.0
Author: Michigan Creative, University of Michigan
Author URI: https://creative.umich.edu
License: GPLv2 or later
Text Domain: mc-people
*/

defined( 'ABSPATH' ) or die( 'Hey, what are you doing here? GET OUT!' );

class PeoplePlugin {

   function __construct() {
      add_action('init', array( $this, 'custom_post_type') );
      // add_action( 'init', array( $this, 'people_custom_taxonomy') );

   }

   function register() {
      add_action( 'admin_enqueue_scripts', array( $this, 'enqueue'));
   }

   function activate() {
      // generate a CPT
      $this->custom_post_type();
      // flush rewrite rules
      flush_rewrite_rules();
   }

   function deactivate() {
       // flush rewrite rules
      flush_rewrite_rules();
   }

   function custom_post_type() {
      register_post_type('people', array(
         'public'          => 'true',
         // 'publicly_queryable'  => false,
         'label'           => 'people',
         'labels'          => array(
                                 'name'          => 'People',
                                 'add_new_item'  => 'Add New Person',
                                 'edit_item'     => 'Edit Person',
                                 'all_items'     => 'All People',
                                 'singular_name' => 'Person'
                              ),
         'description'     => 'The leadership and affiliates of MiCDA',
         'menu_icon'      => 'dashicons-admin-users',
         'rewrite'         => array(
                                 'slug' => 'people',
                                 'delete_with_author' => false
                              ),
         'supports'        => array(
                              'title', 'editor', 'page-attributes', 'custom-fields', 'categories'
                              ),
         'taxonomies'      => array( 'category' ),
         'show_ui'         => true,
         'show_in_menu'    => true,
         'show_in_nav_menu' => true,
         'menu_position'   => 20,
         'show_in_rest'    => true,
      ) );
   }

   function enqueue() {
      wp_enqueue_style('peoplestyle', plugins_url( '/assets/mc-people.css', __FILE__ ));
      wp_enqueue_script('peoplescript', plugins_url( '/assets/mc-people.js', __FILE__ ));
   }
}

if ( class_exists( 'PeoplePlugin' ) ) {
   $peoplePlugin = new PeoplePlugin();
   $peoplePlugin->register();
}

//activation
register_activation_hook( __FILE__, array( $peoplePlugin, 'activate' ) );

//deactivation
register_deactivation_hook( __FILE__, array( $peoplePlugin, 'deactivate' ) );

// uninstall
// register_uninstall_hook( __FILE__, array( $peoplePlugin, 'uninstall' ) );
// Now handled with uninstall.php

?>