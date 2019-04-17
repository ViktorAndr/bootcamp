<?php

vc_map( array(
    "name"          => esc_html__("Gmap Meetup", "tz-plazart"),
    "icon"          => "icon-element",
    "base"          => "tz-contact-meetup-gmap",
    "weight"        => 1,
    "description"   => "",
    "class"         => "tzElement_extended",
    "category"      => esc_html__("Maniva Meetup", "tz-plazart"),
    "params"        => array(
        array(
            "type"          =>  "colorpicker",
            "class"         =>  "",
            "heading"       =>  esc_html__("Overlay Gmap", "tz-plazart"),
            "param_name"    =>  "overlay_gmap",
            "value"         =>  "",
        ),
        array(
            "type"          => "textarea_raw_html",
            "class"         => "",
            "heading"       => esc_html__("Map embed iframe", "tz-plazart"),
            "param_name"    => "content",
            "description"   => "",
        ),
        array(
            "type"          =>  "textfield",
            "class"         =>  "",
            "heading"       =>  esc_html__("Text button contact", "tz-plazart"),
            "param_name"    =>  "text_btn_contact",
            "description"   =>  "",
            "value"         =>  "Contact us",
        ),
        array(
            "type"          => "vc_link",
            "heading"       => esc_html__( "URL (Link)", "tz-plazart" ),
            "param_name"    => "link",
            "description"   => esc_html__( "Add custom link.", "tz-plazart" ),
        ),
        array(
            "type"          => "checkbox",
            "class"         => "",
            "heading"       => esc_html__("Equal height","tz-plazart"),
            "param_name"    => "equal_height",
            "value"         => array( '' => 1),
        ),
    )
) );