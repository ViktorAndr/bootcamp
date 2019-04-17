<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
vc_map( array(
    'name' => esc_html__( 'Count Down', 'plazart-plugin' ),
    'base' => 'tel_countdown',
    'class' => 'tel-countdown',
    'show_settings_on_create' => true,
    'category' => esc_html__( 'Maniva Meetup', 'plazart-plugin'),
    'params' => array(

        // Timer coundown setting

        // Year
        array(
            'type' => 'textfield',
            'class' => '',
            'admin_label' => true,
            'heading' => esc_html__( 'Year', 'plazart-plugin' ),
            'param_name' => 'tel_countdown_year',
            'description' => esc_html__( 'Eg: 2018', 'plazart-plugin' ),
            "value"         => '',
        ),
        // Month
        array(
            'type' => 'dropdown',
            'class' => '',
            'admin_label' => true,
            'heading' => esc_html__( 'Month', 'plazart-plugin' ),
            'param_name' => 'tel_countdown_month',
            'description' => esc_html__( '', 'plazart-plugin' ),
            "value"         => array(
                "January"   => "Jan",
                "February"  => "Feb",
                "March"     => "Mar",
                "April"     => "Apr",
                "May"       => "May",
                "June"      => "Jun",
                "July"      => "Jul",
                "August"    => "Aug",
                "September" => "Sep",
                "October"   => "Oct",
                "November"  => "Nov",
                "December"  => "Dec"
            )
        ),
        // Day
        array(
            'type' => 'textfield',
            'class' => '',
            'admin_label' => true,
            'heading' => esc_html__( 'Day', 'plazart-plugin' ),
            'param_name' => 'tel_countdown_day',
            'description' => esc_html__( 'Max: 31', 'plazart-plugin' ),
            "value"         => '01',
        ),
        // Hour
        array(
            'type' => 'textfield',
            'class' => '',
            'admin_label' => true,
            'heading' => esc_html__( 'Hour', 'plazart-plugin' ),
            'param_name' => 'tel_countdown_hour',
            'description' => esc_html__( 'Max: 24', 'plazart-plugin' ),
            "value"         => '00',
        ),
        // Minute
        array(
            'type' => 'textfield',
            'class' => '',
            'admin_label' => true,
            'heading' => esc_html__( 'Minute', 'plazart-plugin' ),
            'param_name' => 'tel_countdown_minute',
            'description' => esc_html__( 'Max: 60', 'plazart-plugin' ),
            "value"         => '00',
        ),
        // Second
        array(
            'type' => 'textfield',
            'class' => '',
            'admin_label' => true,
            'heading' => esc_html__( 'Second', 'plazart-plugin' ),
            'param_name' => 'tel_countdown_second',
            'description' => esc_html__( 'Max: 60', 'plazart-plugin' ),
            "value"         => '00',
        ),
        // Animation, ID, Class
        vc_map_add_css_animation(),
        array(
            'type' => 'el_id',
            'heading' => esc_html__( 'Element ID', 'plazart-plugin' ),
            'param_name' => 'tel_countdown_id',
            'description' => sprintf( __( 'Enter element ID (Note: make sure it is unique and valid according to <a href="%s" target="_blank">w3c specification</a>).', 'js_composer' ), 'http://www.w3schools.com/tags/att_global_id.asp' ),
        ),
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Extra class name', 'plazart-plugin' ),
            'param_name' => 'tel_countdown_class',
            'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'plazart-plugin' ),
        ),

    )
) );