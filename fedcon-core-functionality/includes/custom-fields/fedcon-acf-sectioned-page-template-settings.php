<?php 
if(!defined('ABSPATH')){ exit; }

// sectioned page template settings
acf_add_local_field_group(array(
	'key' => 'group_5c48b77cdbee4',
	'title' => esc_html__('Sectioned Page Template Settings', 'fedcon'),
	'fields' => array(
		array(
			'key' => 'field_5c48b8c3647d8',
			'label' => esc_html__('Page Intro', 'fedcon'),
			'name' => 'page_intro',
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
			'key' => 'field_5c48b8e2647d9',
			'label' => esc_html__('Page Sections', 'fedcon'),
			'name' => 'page_sections',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => esc_html__('Add Page Section', 'fedcon'),
			'sub_fields' => array(
				array(
					'key' => 'field_5c48b922647da',
					'label' => esc_html__('Page Section', 'fedcon'),
					'name' => 'page_section',
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
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/sectioned-page-template.php',
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