<?php

/*** tz-video-meetup ***/

vc_map ( array(
    "name"          =>  esc_html__("Video Meetup", "tz-plazart"),
    "icon"          =>  "tz-icon-video",
    "base"          =>  "tz_meetup_video",
    "class"         =>  "tzElement_extended",
    "category"      =>  esc_html__("Maniva Meetup", "tz-plazart"),
    "params"        =>  array(
        array(
            "type"          => "attach_image",
            "heading"       => esc_html__("Background image", "tz-plazart"),
            "param_name"    => "image_background",
            'admin_label'   =>  true,
        ),
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("Style id video", "tz-plazart"),
            "param_name"    => "style_id_video",
            "value"         => array(
                esc_html__("Vimeo", "tz-plazart")      => "vimeo",
                esc_html__("Youtube", "tz-plazart")    => "youtube",
            ),
            "description"   => "Example: Vimeo ID is 130856876 in this link https://vimeo.com/130856876",
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Input id vimeo", "tz-plazart"),
            "param_name"    => "id_video_vimeo",
            "dependency"    => Array('element' => "style_id_video", 'value' => array('vimeo')),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Input id youtube", "tz-plazart"),
            "param_name"    => "id_video_tube",
            "dependency"    => Array('element' => "style_id_video", 'value' => array('youtube')),
        ),
        array(
            "type"          => "checkbox",
            "class"         => "",
            "heading"       => esc_html__("Equal height","tz-plazart"),
            "param_name"    => "equal_height",
            "value"         => array( '' => 1),
        ),
        array(
            "type"          => "dropdown",
            "class"         => "",
            "heading"       => esc_html__("Show Or Hide Overlay Video", "tz-plazart"),
            "param_name"    => "show_hide_overlay_bk_video",
            "value"         => array(
                esc_html__("Show", "tz-plazart")   =>  1,
                esc_html__("Hide", "tz-plazart")   =>  0,
            ),
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         =>  "",
            "heading"       =>  esc_html__("Color Overlay Video", "tz-plazart"),
            "param_name"    =>  "color_overlay_video",
            "value"         =>  "",
            "dependency"    => Array('element' => "show_hide_overlay_bk_video", 'value' => '1'),
        ),
    )
));