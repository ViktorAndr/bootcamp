<?php

vc_map( array(
    "name"          => esc_html__("Slider Meetup", "tz-plazart"),
    "base"          => "tz_meetup_slider",
    "icon"          => "icon-element",
    "description"   => "",
    "class"         => "tzElement_extended",
    "category"      => esc_html__("Maniva Meetup", "tz-plazart"),
    "params"        => array(
        array(
            "type"          =>  "attach_images",
            "heading"       =>  esc_html__("Upload Image Slider", "tz-plazart"),
            "param_name"    =>  "image_slider",
        ),
        array(
            "type"          =>  "dropdown",
            "heading"       =>  esc_html__("Slider auto", "tz-plazart"),
            "param_name"    =>  "slider_auto",
            "value"         => array(
                "No"        => 0,
                "Yes"       => 1
            ),
        ),
        array(
            "type"          =>  "dropdown",
            "heading"       =>  esc_html__("Pagination", "tz-plazart"),
            "param_name"    =>  "pagination",
            "value"         => array(
                "Show"       => 1,
                "Hide"       => 0
            ),
        ),
        array(
            "type"          =>  "dropdown",
            "heading"       =>  esc_html__("Type Pagination", "tz-plazart"),
            "param_name"    =>  "type_pagination",
            "value"         => array(
                "Clickable" => 0,
                "Number"    => 1
            ),
            "dependency"    => Array('element' => "pagination", 'value' => array('true')),
        ),
        array(
            "type"          =>  "checkbox",
            "heading"       =>  esc_html__("Full with skill", "tz-plazart"),
            "param_name"    =>  "full_width",
            "value"         => array(
                ""          => 1,
            ),
        ),
    )
) );