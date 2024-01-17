<?php

function university_post_types() {
// EVENT Custom Post Type


  register_post_type('event', array(
    'show_in_rest' => true,
    'capability_type' => 'event',
    'map_meta_cap' => true,
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
    ),
    'menu_icon' => 'dashicons-calendar'
  ));

  // Program Custom Post Type

  register_post_type('program', array(
    'show_in_rest' => true,
    'capability_type' => 'program',
    'map_meta_cap' => true,
    'supports' => array('title'),
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
    'supports' => array('title', 'editor', 'thumbnail'),
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

    // Notes post Custom Post Type

    register_post_type('note', array(
      'show_in_rest' => true,
      'supports' => array('title', 'editor'),
      'public' => false,
      'show_ui' => true,
      'labels' => array(
        'name' => __( 'Notes' ),
        'add_new_item' => __( 'Add New Note' ),
        'add_new' => __( 'Add New Note' ),
        'edit_item' => __( 'Edit Note' ),
        'all_items' =>__('All Notes'),
        'singular_name' => __( 'Note' )
      ),
      'menu_icon' => 'dashicons-welcome-write-blog'
    )); 

}


add_action('init', 'university_post_types');