<?php

vc_map( array(
    "name"          =>  esc_html__("Asked Questions", "tz-plazart"),
    "base"          =>  "tz_ask_question",
    "icon"          =>  "icon-element",
    "description"   =>  "",
    "class"         =>  "tzElement_extended",
    "category"      =>  esc_html__("Maniva Meetup", "tz-plazart"),
    "params"        =>  array(
        array(
            "type"          =>  "textfield",
            "class"         =>  "",
            "heading"       =>  esc_html__("Icon font", "tz-plazart"),
            "param_name"    =>  "icon_font",
            "description"   =>  "EX: fa-question, Element collection support font awesome, you can click <a href='http://fortawesome.github.io/Font-Awesome/icons/' target='_blank'>Click</a>",
            "value"         =>  "fa-question",
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
            "type"          =>  "textfield",
            "class"         =>  "",
            "heading"       =>  esc_html__("Question", "tz-plazart"),
            "param_name"    =>  "question",
            "value"         =>  "",
            "admin_label"   => true,
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         =>  "hide_in_vc_editor",
            "heading"       =>  "Color Question",
            "param_name"    =>  "color_question",
            "description"   =>  "Choose color of question",
        ),
        array(
            "type"          => "textarea_html",
            "heading"       => "Answer",
            "param_name"    => "content",
            "value"         => "",
        ),
    )
) );