<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
vc_map( array(
    'name' => esc_html__( 'Pricing Table', 'plazart-plugin' ),
    'base' => 'tel_pricing_table',
    'class' => 'tel_pricing_table',
    'show_settings_on_create' => true,
    'category' => esc_html__( 'Maniva Meetup', 'plazart-plugin'),
    'params' => array(
        array(
            'type' => 'textfield',
            'class' => '',
            'admin_label' => true,
            'heading' => esc_html__( 'Title', 'plazart-plugin' ),
            'param_name' => 'tel_pricing_table_title',
            'description' => esc_html__( 'Enter your title', 'plazart-plugin' )
        ),
        array(
            'type' => 'textfield',
            'class' => '',
            'admin_label' => true,
            'heading' => esc_html__( 'Sub title', 'plazart-plugin' ),
            'param_name' => 'tel_pricing_table_subtitle',
            'description' => esc_html__( 'Enter your sub title', 'plazart-plugin' )
        ),
        array(
            'type' => 'textfield',
            'class' => '',
            'admin_label' => true,
            'heading' => esc_html__( 'Price', 'plazart-plugin' ),
            'param_name' => 'tel_pricing_table_price',
            'description' => esc_html__( 'Accept HTML format', 'plazart-plugin' ),
            'weight' => 3,
        ),
        array(
            'type' => 'textarea_html',
            'class' => '',
            'admin_label' => true,
            'heading' => esc_html__( 'Content', 'plazart-plugin' ),
            'param_name' => 'content',
            'description' => esc_html__( 'Use ul,li tags', 'plazart-plugin' ),
            'weight' => 0,
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Button label', 'plazart-plugin' ),
            'param_name' => 'tel_pricing_table_label',
            'description' => esc_html__( '', 'plazart-plugin' ),
            'admin_label' => false,
            'weight' => 0,
        ),
        array(
            'type' => 'vc_link',
            'heading' => esc_html__( 'URL (Link)', 'plazart-plugin' ),
            'param_name' => 'link',
            'description' => esc_html__( '', 'plazart-plugin' ),
            'admin_label' => false,
            'weight' => 0,
        ),
    )
) );