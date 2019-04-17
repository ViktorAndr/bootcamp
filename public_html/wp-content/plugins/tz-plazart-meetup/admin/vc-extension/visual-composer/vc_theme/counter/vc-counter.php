<?php

/*** tz_counter ***/

vc_map( array(
    "name"          => esc_html__("Counter", "tz-plazart"),
    "weight"        => 1,
    "base"          => "tz-counter",
    "icon"          => "icon-counter",
    "description"   => "",
    "class"         => "tzElement_extended",
    "category"      => esc_html__("Maniva Meetup", "tz-plazart"),
    "params"        => array(
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("Option of Icon", "tz-plazart"),
            "param_name"    => "icon_option",
            "description"   => esc_html__("Show or hide icon", "tz-plazart"),
            "value"         => array(
                esc_html__("Icon", "tz-plazart")   => 'icon',
                esc_html__("Image", "tz-plazart")  => 'image'),
        ),
        array(
            "type"          =>  "textfield",
            "class"         =>  "",
            "heading"       =>  esc_html__("Icon font", "tz-plazart"),
            "param_name"    =>  "icon_font",
            "description"   =>  "EX: fa-users, Element collection support font awesome, you can click <a href='http://fortawesome.github.io/Font-Awesome/icons/' target='_blank'>Click</a>",
            "dependency"    =>  Array('element' => "icon_option", 'value' => array('icon')),
            "value"         =>  "",
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         =>  "hide_in_vc_editor",
            "heading"       =>  "Color Icon",
            "param_name"    =>  "color_icon",
            "description"   =>  "Choose color of icon",
            "dependency"    =>  Array('element' => "icon_option", 'value' => array('icon')),
        ),
        array(
            "type"          =>  "attach_image",
            "heading"       =>  esc_html__("Upload Image Counter", "tz-plazart"),
            "param_name"    =>  "image",
            "dependency"    =>  Array('element' => "icon_option", 'value' => array('image')),
        ),
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("Count Stop", "tz-plazart"),
            "param_name"    => "count_stop",
            "value"         => array(
                esc_html__("No", "tz-plazart")     => 0,
                esc_html__("Yes", "tz-plazart")    => 1,
            ),
        ),
        array(
            "type"          =>  "textfield",
            "class"         =>  "",
            "heading"       =>  esc_html__("Count", "tz-plazart"),
            "param_name"    =>  "count"
        ),
        array(
            "type"          =>  "textfield",
            "class"         =>  "",
            "heading"       =>  esc_html__("Number Speed", "tz-plazart"),
            "param_name"    =>  "number_speed",
            "value"         => 1,
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         =>  "hide_in_vc_editor",
            "heading"       =>  "Color Count",
            "param_name"    =>  "color_count",
            "description"   =>  "Choose color of count",
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Title", "tz-plazart"),
            "param_name"    => "title"
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         =>  "hide_in_vc_editor",
            "heading"       =>  "Color Title",
            "param_name"    =>  "color_title",
            "description"   =>  "Choose color of title",
        ),
    )
) );