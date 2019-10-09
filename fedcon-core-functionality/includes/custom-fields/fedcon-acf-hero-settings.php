<?php
if(!defined('ABSPATH')){ exit; }

// hero settings
acf_add_local_field_group(array(
	'key' => 'group_5c489578c019c',
	'title' => esc_html__('Hero Settings', 'fedcon'),
	'fields' => array(
		array(
			'key' => 'field_5c4895d7833b6',
			'label' => esc_html__('Hero Title', 'fedcon'),
			'name' => 'hero_title',
			'type' => 'text',
			'instructions' => esc_html__('If no title is entered here, the page title will be used instead.', 'fedcon'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5c48957f833b4',
			'label' => esc_html__('Hero Image', 'fedcon'),
			'name' => 'hero_image',
			'type' => 'image',
			'instructions' => wp_kses_post('If no image is selected the image selected under General Settings -> Default Hero Image will be used.', 'fedcon'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'full',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5c48959a833b5',
			'label' => esc_html('Hero Image CSS', 'fedcon'),
			'name' => 'hero_image_css',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
			array(
				'param' => 'page',
				'operator' => '!=',
				'value' => '9',
      ),
    ),
    array(
      array(
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'expertise',
      ),
    ),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));