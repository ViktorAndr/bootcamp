<?php

vc_map( array(
    "name"          =>  esc_html__("Contact Meetup 2", "tz-plazart"),
    "icon"          =>  "icon-element",
    "base"          =>  "tz_contact_meetup_2",
    "description"   =>  "",
    "class"         =>  "tzElement_extended",
    "category"      =>  esc_html__("Maniva Meetup", "tz-plazart"),
    "params"        =>  array(
        array(
            "type"          =>  "textfield",
            "class"         =>  "",
            "heading"       =>  esc_html__("Icon font", "tz-plazart"),
            "param_name"    =>  "icon_font",
            "description"   =>  "EX: fa-clock-o, Element collection support font awesome, you can click <a href='http://fortawesome.github.io/Font-Awesome/icons/' target='_blank'>Click</a>",
            "value"         =>  "fa-clock-o",
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         =>  "",
            "heading"       =>  esc_html__("Background icon", "tz-plazart"),
            "param_name"    =>  "bk_icon",
            "value"         =>  "",
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         =>  "",
            "heading"       =>  esc_html__("Color icon", "tz-plazart"),
            "param_name"    =>  "color_icon",
            "value"         =>  "",
        ),
        array(
            "type"          =>  "textfield",
            "class"         =>  "",
            "admin_label"   => true,
            "heading"       =>  esc_html__("Title", "tz-plazart"),
            "param_name"    =>  "title",
            "value"         =>  "",
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         =>  "",
            "heading"       =>  esc_html__("Color title", "tz-plazart"),
            "param_name"    =>  "color_title",
            "value"         =>  "",
        ),
        array(
            "type"          => "textarea_html",
            "heading"       => "Content",
            "param_name"    => "content",
            "value"         => "",
        ),
    )
) );