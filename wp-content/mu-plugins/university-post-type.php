<?php

// Custom Post Type

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
}

add_action('init', 'university_post_types');