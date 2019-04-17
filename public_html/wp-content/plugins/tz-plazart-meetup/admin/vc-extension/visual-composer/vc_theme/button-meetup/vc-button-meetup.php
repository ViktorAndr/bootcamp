<?php

vc_map( array(
    "name" => esc_html__("Button meetup", "tz-plazart"),
    "base" => "tz-button",
    "icon" => "icon-element",
    "description" => "",
    "class" => "tzElement_extended",
    "category" => esc_html__("Maniva Meetup", "tz-plazart"),
    "params" => array(
        array(
            "type"          =>  "textfield",
            "class"         =>  "",
            "heading"       =>  esc_html__("Title button", "tz-plazart"),
            "param_name"    =>  "title_text_btn",
            "value"         =>  "",
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         =>  "",
            "heading"       =>  esc_html__("Color text button", "tz-plazart"),
            "param_name"    =>  "color_text_title_btn",
            "value"         =>  "",
            "dependency"    => Array('element' => "type_chef_menu", 'value' => 'type4')
        ),
        array(
            "type"          =>  "textfield",
            "class"         =>  "",
            "heading"       =>  esc_html__("Text on the button", "tz-plazart"),
            "param_name"    =>  "button_text",
            "value"         =>  "",
        ),
        array(
            "type"          => "dropdown",
            "class"         => "",
            "heading"       => esc_html__("Click Button One Page", "tz-plazart"),
            "param_name"    => "tz_btn_one_page",
            "value"         => array(
                esc_html__("No", "tz-plazart")     =>    0,
                esc_html__("Yes", "tz-plazart")    =>    1,
            ),
        ),
        array(
            "type"          => "vc_link",
            "heading"       => esc_html__("URL (link)", "tz-plazart"),
            "param_name"    => "link",
            "description"   => esc_html__( "Add custom link.", "tz-plazart" ),
        ),
        array(
            "type"          =>  "textfield",
            "class"         =>  "",
            "heading"       =>  esc_html__("Icon font", "tz-plazart"),
            "param_name"    =>  "icon_font",
            "description"   =>  "EX: fa-download, Element collection support font awesome, you can click <a href='http://fortawesome.github.io/Font-Awesome/icons/' target='_blank'>Click</a>",
            "value"         =>  "",
        ),
        array(
            "type"          => "dropdown",
            "class"         => "",
            "admin_label"   => true,
            "heading"       => esc_html__('Color button', 'tz-plazart'),
            "param_name"    => "color_button",
            "value"         => array(
                esc_html__("Default", "tz-plazart")                => 'tz_meetup_default',
                esc_html__("White", "tz-plazart")                  => 'tz_meetup_btn_white',
                esc_html__("Orange", "tz-plazart")                 => 'tz_meetup_bnt_orange',
                esc_html__("Orange background", "tz-plazart")      => 'tz_meetup_bnt_orange_bk',
            ),
        ),
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("Text Align", "tz-plazart"),
            "param_name"    => "text_align",
            "description"   => esc_html__("Select text align left or right or center.", "tz-plazart"),
            "value"         => array(
                esc_html__("Center", "tz-plazart") => 'center',
                esc_html__("Left", "tz-plazart")   => 'left',
                esc_html__("Right", "tz-plazart")  => "right",
            ),
        ),
        array(
            "type"       => "textfield",
            "class"      => "",
            "heading"    => esc_html__("Padding button", "tz-plazart"),
            "param_name" => "padding_btn",
            "value"     =>  "",
            "description"   => "ex: 0 25px 0 0( top, right, bottom, left )"
        ),
        array(
            "type"       => "textfield",
            "class"      => "",
            "heading"    => esc_html__("Extra class name", "tz-plazart"),
            "param_name" => "extra_class",
            "value"     =>  "",
            "description"   => esc_html__("Style particular content element differently - add a class name and refer to it in custom CSS.","tz-plazart" ),
        ),
    )
) );