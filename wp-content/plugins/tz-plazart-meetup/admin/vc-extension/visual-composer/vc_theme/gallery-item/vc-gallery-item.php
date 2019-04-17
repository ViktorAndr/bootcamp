<?php

/*** tz_twitter_slider ***/

vc_map( array(
    "name" => esc_html__("Gallery Item", "tz-plazart"),
    "weight"        => 1,
    "base" => "tz-gallery-item",
    "icon" => "icon-element",
    "description" => "",
    "class" => "tzElement_extended",
    "category" => esc_html__("Maniva Meetup", "tz-plazart"),
    "params" => array(
        array(
            "type"          => "attach_image",
            "class"         => "",
            "heading"       => esc_html__("Upload thumbnail image", "tz-plazart"),
            "param_name"    => "tz_gallery_item_upload",
            "value"         => "",
        ),

        array(
            "type"          => "attach_images",
            "class"         => "",
            "heading"       => esc_html__("Upload image gallery", "tz-plazart"),
            "param_name"    => "tz_gallery_item_uploads",
            "value"         => "",
        ),
    )
) );