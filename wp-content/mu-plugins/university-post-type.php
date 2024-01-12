<?php

// EVENT Custom Post Type

function university_post_types() {
  register_post_type('event', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'events'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => __( 'Events' ),
      'add_new_item' => __( 'Add New Event' ),
      'add_new' => __( 'Add New Event' ),
      'edit_item' => __( 'Edit Event' ),
      'all_items' =>__('All Events'),
      'singular_name' => __( 'Event' ),
      'menu_name' => __( 'Manage Events' )
    ),
    'menu_icon' => 'dashicons-calendar'
  ));

  // Program Custom Post Type

  register_post_type('program', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor'),
    'rewrite' => array('slug' => 'programs'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => __( 'Programs' ),
      'add_new_item' => __( 'Add New Program' ),
      'add_new' => __( 'Add New Program' ),
      'edit_item' => __( 'Edit Program' ),
      'all_items' =>__('All Programs'),
      'singular_name' => __( 'Program' )
    ),
    'menu_icon' => 'dashicons-awards'
  ));


  // Professor Custom Post Type

  register_post_type('professor', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor'),
    'public' => true,
    'labels' => array(
      'name' => __( 'Professors' ),
      'add_new_item' => __( 'Add New Professor' ),
      'add_new' => __( 'Add New Professor' ),
      'edit_item' => __( 'Edit Professor' ),
      'all_items' =>__('All Professors'),
      'singular_name' => __( 'Professor' )
    ),
    'menu_icon' => 'dashicons-welcome-learn-more'
  ));

}

add_action('init', 'university_post_types');