<?php 
if(!defined('ABSPATH')){ exit; }

// hero slider fields
acf_add_local_field_group(array(
	'key' => 'group_5c488c02195bc',
	'title' => esc_html__('Home Page Hero Settings', 'fedcon'),
	'fields' => array(
		array(
			'key' => 'field_5c488c3ad893c',
			'label' => esc_html__('Hero Slides', 'fedcon'),
			'name' => 'hero_slides',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_5c488c78d893f',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => esc_html__('Add Hero Slide', 'fedcon'),
			'sub_fields' => array(
				array(
					'key' => 'field_5c488c44d893d',
					'label' => esc_html__('Slide', 'fedcon'),
					'name' => 'slide',
					'type' => 'image',
					'instructions' => '',
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
					'key' => 'field_5c488c55d893e',
					'label' => esc_html__('Slide CSS', 'fedcon'),
					'name' => 'slide_css',
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
				array(
					'key' => 'field_5c488c78d893f',
					'label' => esc_html__('Title', 'fedcon'),
					'name' => 'title',
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
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '9',
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

// home page fields
acf_add_local_field_group(array(
	'key' => 'group_5c488d6a28dbb',
	'title' => esc_html__('Home Page Settings', 'fedcon'),
	'fields' => array(
		array(
			'key' => 'field_5c488d8ad79d4',
			'label' => esc_html__('First Section Content', 'fedcon'),
			'name' => 'first_section_content',
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
			'key' => 'field_5c488ddb48f31',
			'label' => esc_html__('First Section Image', 'fedcon'),
			'name' => 'first_section_image',
			'type' => 'image',
			'instructions' => '',
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
			'key' => 'field_5c488df348f32',
			'label' => esc_html__('Services Section Content', 'fedcon'),
			'name' => 'services_section_content',
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
			'key' => 'field_5c488e4bdf405',
			'label' => esc_html__('Featured Services', 'fedcon'),
			'name' => 'featured_services',
			'type' => 'post_object',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'expertise',
			),
			'taxonomy' => '',
			'allow_null' => 1,
			'multiple' => 1,
			'return_format' => 'object',
			'ui' => 1,
		),
		array(
			'key' => 'field_5c488e9e9f7a0',
			'label' => esc_html__('Video Section Content', 'fedcon'),
			'name' => 'video_section_content',
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
			'key' => 'field_5c488ec29f7a1',
			'label' => esc_html__('Video Section Video', 'fedcon'),
			'name' => 'video_section_video',
			'type' => 'oembed',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'width' => '',
			'height' => '',
		),
		array(
			'key' => 'field_5c488fd0015ee',
			'label' => esc_html__('Testimonials Section', 'fedcon'),
			'name' => 'testimonials_section',
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
				0 => 'field_5c45f9c979584',
				1 => 'field_5c45fe3cc7f88',
				2 => 'field_5c45f9db79585',
				3 => 'field_5c45feedc7f89',
			),
			'display' => 'group',
			'layout' => 'block',
			'prefix_label' => 1,
			'prefix_name' => 1,
		),
		array(
			'key' => 'field_5c488ee596da5',
			'label' => esc_html__('Testimonials', 'fedcon'),
			'name' => 'testimonials',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_5c488f1d96da7',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => esc_html__('Add Testimonial', 'fedcon'),
			'sub_fields' => array(
				array(
					'key' => 'field_5c488f1196da6',
					'label' => esc_html__('Testimonial', 'fedcon'),
					'name' => 'testimonial',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
					'delay' => 0,
				),
				array(
					'key' => 'field_5c488f1d96da7',
					'label' => esc_html__('Testimonial Author', 'fedcon'),
					'name' => 'testimonial_author',
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
		),
		array(
			'key' => 'field_5c48903c16f98',
			'label' => esc_html__('Careers Section Title', 'fedcon'),
			'name' => 'careers_section_title',
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
		array(
			'key' => 'field_5c48904f16f99',
			'label' => esc_html__('Careers Section Content', 'fedcon'),
			'name' => 'careers_section_content',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5c48907325499',
			'label' => esc_html__('Awards Section Title', 'fedcon'),
			'name' => 'awards_section_title',
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
		array(
			'key' => 'field_5c4890832549a',
			'label' => esc_html__('Awards', 'fedcon'),
			'name' => 'awards',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_5c48908b2549b',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => 'Add Award',
			'sub_fields' => array(
				array(
					'key' => 'field_5c48908b2549b',
					'label' => esc_html__('Award Title', 'fedcon'),
					'name' => 'award_title',
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
				array(
					'key' => 'field_5c4890982549c',
					'label' => esc_html__('Award Link', 'fedcon'),
					'name' => 'award_link',
					'type' => 'url',
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
				),
				array(
					'key' => 'field_5c4890a32549d',
					'label' => esc_html__('Award Image', 'fedcon'),
					'name' => 'award_image',
					'type' => 'image',
					'instructions' => '',
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
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '9',
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