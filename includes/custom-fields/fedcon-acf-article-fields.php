<?php
if(!defined('ABSPATH')){ exit; }

// article fields
acf_add_local_field_group(array(
	'key' => 'group_5c45f9c30b235',
	'title' => esc_html__('Section Article', 'fedcon'),
	'fields' => array(
		array(
			'key' => 'field_5c45f9c979584',
			'label' => esc_html__('Title', 'fedcon'),
			'name' => 'title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '75',
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
			'key' => 'field_5c45fe3cc7f88',
			'label' => esc_html__('Title Color', 'fedcon'),
			'name' => 'title_color',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'fedcon-white' => esc_html__('White', 'fedcon'),
				'fedcon-green' => esc_html__('FedCon Green', 'fedcon'),
				'fedcon-light-green' => esc_html__('FedCon Light Green', 'fedcon'),
				'fedcon-blue' => esc_html__('FedCon Blue', 'fedcon'),
				'fedcon-light-blue' => esc_html__('FedCon Light Blue', 'fedcon')
			),
			'default_value' => array(
				0 => 'fedcon-green',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 1,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5c45f9db79585',
			'label' => esc_html__('Subtitle', 'fedcon'),
			'name' => 'subtitle',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '75',
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
			'key' => 'field_5c45feedc7f89',
			'label' => esc_html__('Subtitle Color', 'fedcon'),
			'name' => 'subtitle_color',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'fedcon-white' => esc_html__('White', 'fedcon'),
				'fedcon-green' => esc_html__('FedCon Green', 'fedcon'),
				'fedcon-light-green' => esc_html__('FedCon Light Green', 'fedcon'),
				'fedcon-blue' => esc_html__('FedCon Blue', 'fedcon'),
				'fedcon-light-blue' => esc_html__('FedCon Light Blue', 'fedcon')
			),
			'default_value' => array(
				0 => 'fedcon-light-green',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 1,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5c46023ae4443',
			'label' => esc_html__('Title Border Color', 'fedcon'),
			'name' => 'title_border_color',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'title-border-none' => esc_html__('None', 'fedcon'),
				'title-border-white' => esc_html__('White', 'fedcon'),
				'title-border-black' => esc_html__('Black', 'fedcon')
			),
			'default_value' => array(
				0 => 'title-border-white',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 1,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5c45f9f079586',
			'label' => esc_html__('Article', 'fedcon'),
			'name' => 'article',
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
			'key' => 'field_5c473f645e0e2',
			'label' => esc_html__('Article Button', 'fedcon'),
			'name' => 'article_button',
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
				0 => 'group_5c473e1de1db8',
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
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 0,
	'description' => '',
));

// article section button
acf_add_local_field_group(array(
	'key' => 'group_5c473e1de1db8',
	'title' => esc_html__('Button', 'fedcon'),
	'fields' => array(
		array(
			'key' => 'field_5c473fcbfc0a8',
			'label' => esc_html__('Link', 'fedcon'),
			'name' => 'link',
			'type' => 'link',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
		),
		array(
			'key' => 'field_5c473fecfc0a9',
			'label' => esc_html__('Style', 'fedcon'),
			'name' => 'style',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'btn-main' => esc_html__('Green', 'fedcon'),
				'btn-main btn-alt' => esc_html__('Blue', 'fedcon')
			),
			'default_value' => array(
				0 => 'btn-main',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 1,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
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
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 0,
	'description' => '',
));