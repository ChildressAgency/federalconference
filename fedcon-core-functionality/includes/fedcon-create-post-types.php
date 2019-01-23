<?php
if(!defined('ABSPATH')){ exit; }

function fedcon_create_post_types(){
  $expertise_labels = array(
    'name' => esc_html_x('Expertise', 'post type name', 'fedcon'),
    'singular_name' => esc_html_x('Expertise', 'post type singular name', 'fedcon'),
    'menu_name' => esc_html_x('Expertise', 'post type menu name', 'fedcon'),
    'add_new_item' => esc_html__('Add New Expertise', 'fedcon'),
    'search_items' => esc_html__('Search Expertise', 'fedcon'),
    'edit_item' => esc_html__('Edit Expertise', 'fedcon'),
    'view_item' => esc_html__('View Expertise', 'fedcon'),
    'all_items' => esc_html__('All Expertise', 'fedcon'),
    'new_item' => esc_html__('New Expertise', 'fedcon'),
    'not_found' => esc_html__('No Expertise Found', 'fedcon')
  );
  $expertise_args = array(
    'labels' => $expertise_labels,
    'capability_type' => 'post',
    'public' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-awards',
    'query_var' => 'expertise',
    'has_archive' => false,
    'show_in_rest' => true,
    'supports' => array(
      'title',
      'editor',
      'custom-fields',
      'revisions'
    )
  );
  register_post_type('expertise', $expertise_args);

  $eventtypes_labels = array(
    'name' => esc_html_x('Event Types', 'post type name', 'fedcon'),
    'singular_name' => esc_html_x('Event Type', 'post type singular name', 'fedcon'),
    'menu_name' => esc_html_x('Event Types', 'post type menu name', 'fedcon'),
    'add_new_item' => esc_html__('Add New Event Type', 'fedcon'),
    'search_items' => esc_html__('Search Event Types', 'fedcon'),
    'edit_item' => esc_html__('Edit Event Type', 'fedcon'),
    'view_item' => esc_html__('View Event Type', 'fedcon'),
    'all_items' => esc_html__('All Event Types', 'fedcon'),
    'new_item' => esc_html__('New Event Type', 'fedcon'),
    'not_found' => esc_html__('No Event Types Found', 'fedcon')
  );

  $eventtypes_args = array(
    'labels' => $eventtypes_labels,
    'capability_type' => 'post',
    'public' => true,
    'menu_position' => 6,
    'menu_icon' => 'dashicons-tickets-alt',
    'query_var' => 'eventtypes',
    'has_archive' => false,
    'show_in_rest' => true,
    'supports' => array(
      'title',
      'editor',
      'custom-fields',
      'revisions'
    )
  );
  register_post_type('eventtypes', $eventtypes_args);
}