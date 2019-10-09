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

  // for the Your Event stuff
  $yourevent_labels = array(
    'name' => esc_html_x('Your Event', 'post type name', 'fedcon'),
    'singular_name' => esc_html_x('Your Event', 'post type singular name', 'fedcon'),
    'menu_name' => esc_html_x('Your Event', 'post type menu name', 'fedcon'),
    'add_new_item' => esc_html__('Add New Your Event', 'fedcon'),
    'search_items' => esc_html__('Search Your Events', 'fedcon'),
    'edit_item' => esc_html__('Edit Your Event', 'fedcon'),
    'view_item' => esc_html__('View Your Event', 'fedcon'),
    'all_items' => esc_html__('All Your Events', 'fedcon'),
    'new_item' => esc_html__('New Your Event', 'fedcon'),
    'not_found' => esc_html__('No Your Events Found', 'fedcon')
  );

  $yourevent_args = array(
    'labels' => $yourevent_labels,
    'capability_type' => 'post',
    'public' => true,
    'menu_position' => 6,
    'menu_icon' => 'dashicons-tickets-alt',
    'query_var' => 'yourevent',
    'has_archive' => false,
    'show_in_rest' => true,
    'supports' => array(
      'title',
      'editor',
      'custom-fields',
      'revisions'
    )
  );
  register_post_type('yourevent', $yourevent_args);
}