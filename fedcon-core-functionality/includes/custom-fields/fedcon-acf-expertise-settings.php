<?php
if(!defined('ABSPATH')){ exit; }

// expertise page settings
acf_add_local_field_group(array(
	'key' => 'group_5c48a59410f24',
	'title' => esc_html__('Expertise Page Settings', 'fedcon'),
	'fields' => array(
		array(
			'key' => 'field_5c48a59fc163b',
			'label' => esc_html__('Expertise Intro', 'fedcon'),
			'name' => 'expertise_intro',
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
			'key' => 'field_5c48a5b7c163c',
			'label' => esc_html__('Expertise Section', 'fedcon'),
			'name' => 'expertise_section',
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
				'value' => 'templates/expertise-icon-template.php',
			),
		),
	),
	'menu_order' => 1,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

// expertise post type settings
acf_add_local_field_group(array(
	'key' => 'group_5c48a661b990a',
	'title' => esc_html__('Expertise Settings', 'fedcon'),
	'fields' => array(
		array(
			'key' => 'field_5c48a6766d392',
			'label' => esc_html__('Service Icon', 'fedcon'),
			'name' => 'service_icon',
			'type' => 'textarea',
			'instructions' => esc_html__('Enter the html for the icon svg.', 'fedcon'),
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
				'value' => 'expertise',
			),
		),
	),
	'menu_order' => 1,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));