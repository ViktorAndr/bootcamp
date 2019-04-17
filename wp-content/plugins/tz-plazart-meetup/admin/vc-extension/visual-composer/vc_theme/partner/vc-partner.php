<?php

vc_map (array(
    "name"      => esc_html__("Partner", "tz-plazart"),
    "base"      =>  "tz_partner",
    "icon"      => "icon-element",
    "category"  => esc_html__("Maniva Meetup", "tz-plazart"),
    "params"    =>  array(
        array(
            "type"          =>  "attach_images",
            "holder"        =>  "div",
            "admin_label"   =>  true,
            "heading"       => esc_html__("Upload images", "tz-plazart"),
            "param_name"    =>  "image_partner",
            "value"         =>  ""
        ),
        array(
            "type"          =>  "textfield",
            "holder"        =>  "div",
            "admin_label"   =>  true,
            "heading"       => esc_html__("Input number items", "tz-plazart"),
            "param_name"    =>  "number_items",
            "value"         =>  5
        ),
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("Auto Partner", "tz-plazart"),
            "param_name"    => "auto_partner",
            "value"         => array(
                esc_html__("No", "tz-plazart")    => 0,
                esc_html__("Yes", "tz-plazart")   => 1,
            ),
        ),
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("Loop Partner", "tz-plazart"),
            "param_name"    => "loop_partner",
            "value"         => array(
                esc_html__("No", "tz-plazart")    => 0,
                esc_html__("Yes", "tz-plazart")   => 1,
            ),
        ),
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("RTL Partner", "tz-plazart"),
            "param_name"    => "rtl_partner",
            "value"         => array(
                esc_html__("No", "tz-plazart")    => 0,
                esc_html__("Yes", "tz-plazart")   => 1,
            ),
        ),
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("Option link", "tz-plazart"),
            "param_name"    => "on_click",
            "value"         => array(
                esc_html__("None", "tz-plazart")               => 'link_no',
                esc_html__("Open custom links", "tz-plazart")  => 'custom_link',
            ),
        ),
        array(
            "type"          => "checkbox",
            "class"         => "",
            "heading"       => "",
            "param_name"    => "open_link",
            "value"         => array(
                'Open link in a new window/tab'      => 'link_target',
            ),
            "dependency"    => Array('element' => "on_click", 'value' => array('custom_link')),
        ),
        array(
            "type"          => "textarea",
            "class"         => "",
            "heading"       => esc_html__("Custom links", "tz-plazart"),
            "param_name"    => "custom_links",
            "value"         => "",
            "dependency"    => Array('element' => "on_click", 'value' => array('custom_link')),
            "description"   => "Enter links for each slide (Note: divide links with linebreaks (Enter)).",
        ),
        array(
            "type"          => "dropdown",
            "class"         => "",
            "heading"       => esc_html__("Type prev/next", "tz-plazart"),
            "param_name"    => "type_prev_next",
            "description"   => esc_html__("Type of transition between slides", "tz-plazart"),
            "value"         => array(
                esc_html__("Type 1", "tz-plazart") =>  1,
                esc_html__("Type 2", "tz-plazart") =>  2,
            ),
        ),
        array(
            "type"          =>  "checkbox",
            "admin_label"   =>  false,
            "heading"       => esc_html__("Hide prev/next", "tz-plazart"),
            "param_name"    =>  "hide_prev_next",
            "value"         =>  array(
                esc_html__("Hide", "tz-plazart")        => 'hide',
            )
        ),
    ),
));