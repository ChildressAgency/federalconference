<?php
if(!defined('ABSPATH')){ exit; }

// Your Event Icon Template settings
acf_add_local_field_group(array(
	'key' => 'group_5c48e52c844e2',
	'title' => esc_html__('Your Event Icon Template Settings', ' fedcon'),
	'fields' => array(
		array(
			'key' => 'field_5c48e561de43b',
			'label' => esc_html__('Your Event Intro', 'fedcon'),
			'name' => 'your_event_intro',
			'type' => 'clone',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'clone' => array(
				0 => 'group_5c45f9c30b235',
			),
			'display' => 'group',
			'layout' => 'block',
			'prefix_label' => 0,
			'prefix_name' => 1,
		),
		array(
			'key' => 'field_5c48e5b8de43c',
			'label' => esc_html__('Your Event Section', 'fedcon'),
			'name' => 'your_event_section',
			'type' => 'clone',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'clone' => array(
				0 => 'group_5c45f9c30b235',
			),
			'display' => 'group',
			'layout' => 'block',
			'prefix_label' => 0,
			'prefix_name' => 1,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/yourevent-icon-template.php',
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

// Your Event post type settings
acf_add_local_field_group(array(
	'key' => 'group_5c48e631ee2a3',
	'title' => esc_html__('Your Event Settings', 'fedcon'),
	'fields' => array(
		array(
			'key' => 'field_5c48e6408bde8',
			'label' => esc_html__('Service Icon', 'fedcon'),
			'name' => 'service_icon',
			'type' => 'textarea',
			'instructions' => esc_html__('Enter the html for the icon svg', 'fedcon'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'yourevent',
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