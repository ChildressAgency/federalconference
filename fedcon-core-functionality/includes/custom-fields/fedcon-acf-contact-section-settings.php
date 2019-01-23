<?php
if(!defined('ABSPATH')){ exit; }

// contact us section settings
acf_add_local_field_group(array(
	'key' => 'group_5c48973681a7d',
	'title' => esc_html__('Contact Section Settings', 'fedcon'),
	'fields' => array(
		array(
			'key' => 'field_5c4897411b604',
			'label' => esc_html__('Use Settings From Home Page', 'fedcon'),
			'name' => 'use_settings_from_home_page',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => esc_html__('Set to No to customize the Contact Us section for this page.', 'fedcon'),
			'default_value' => 1,
			'ui' => 1,
			'ui_on_text' => 'Yes',
			'ui_off_text' => 'No',
		),
		array(
			'key' => 'field_5c4898081b605',
			'label' => esc_html__('Contact Section Background Image', 'fedcon'),
			'name' => 'contact_section_background_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
      'conditional_logic' => array(
        array(
          array(
            'field' => 'field_5c4897411b604',
            'operator' => '!=',
            'value' => '1'
          )
        )
          ),
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
			'key' => 'field_5c4898191b606',
			'label' => esc_html__('Contact Section Background Image CSS', 'fedcon'),
			'name' => 'contact_section_background_image_css',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
        array(
          array(
            'field' => 'field_5c4897411b604',
            'operator' => '!=',
            'value' => '1'
          )
        )
      ),
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
			'key' => 'field_5c4898291b607',
			'label' => esc_html__('Contact Section Title', 'fedcon'),
			'name' => 'contact_section_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
        array(
          array(
            'field' => 'field_5c4897411b604',
            'operator' => '!=',
            'value' => '1'
          )
        )
      ),
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
			'key' => 'field_5c4898341b608',
			'label' => esc_html__('Contact Section Content', 'fedcon'),
			'name' => 'contact_section_content',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
        array(
          array(
            'field' => 'field_5c4897411b604',
            'operator' => '!=',
            'value' => '1'
          )
        )
      ),
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
				'value' => '107', //contact us page
			),
			array(
				'param' => 'page',
				'operator' => '!=',
				'value' => '109', //careers page
			),
		),
	),
	'menu_order' => 9,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));