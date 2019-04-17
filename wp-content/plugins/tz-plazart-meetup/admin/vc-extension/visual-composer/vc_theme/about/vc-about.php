<?php

vc_map( array(
    "name"          =>  esc_html__("About Meetup", "tz-plazart"),
    "icon"          =>  "icon-element",
    "base"          =>  "tz_about_meetup",
    "class"         =>  "tzElement_extended",
    "category"      =>  esc_html__("Maniva Meetup", "tz-plazart"),
    "params"        =>  array(
        array(
            "type"          => "attach_image",
            "class"         => "",
            "heading"       => esc_html__("Image About Meetup", "tz-plazart"),
            "param_name"    => "image_about_meetup",
            "value"         =>  "",
        ),
        array(
            "type"          => "vc_link",
            "heading"       => esc_html__( "URL (Link)", "tz-plazart" ),
            "param_name"    => "link",
            "description"   => esc_html__( "Add custom link.", "tz-plazart" ),
        ),
        array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "admin_label" => true,
            "heading" => esc_html__("Title About Meetup", "tz-plazart"),
            "param_name" => "title"
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         =>  "hide_in_vc_editor",
            "heading"       => "Color title",
            "param_name"    => "color_title",
            "description"   => "Choose color of title"
        ),
        array(
            "type"          => "textarea_html",
            "holder"        => "div",
            "class"         => "",
            "heading"       => "Content",
            "param_name"    => "content",
            "value"         => "",
        ),
    )
));