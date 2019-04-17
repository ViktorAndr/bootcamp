<?php

/*** Custom vc-row ***/

vc_add_param('vc_row', array(
        "type"        =>  "dropdown",
        "class"       =>  "hide_in_vc_editor",
        "admin_label" =>  true,
        "heading"     =>  "Row Type",
        "param_name"  =>  "tz_row_type",
        "weight"      =>    1,
        "value"       => array(
            "Full Width" => "full_width",
            "Boxed"      => "boxed"
        )
    )
);

vc_add_param('vc_row', array(
        "type"          =>  "colorpicker",
        "class"         =>  "hide_in_vc_editor",
        "admin_label"   => true,
        "heading"       => "Overlay Parallax",
        "param_name"    => "tz_overlay_parallax",
        'weight'        => 1,
));

vc_add_param('vc_row', array(
    "type"        =>  "checkbox",
    "class"       =>  "hide_in_vc_editor",
    "admin_label" => true,
    "heading"     => "Row Hyphen",
    "param_name"  => "row_hyphen",
    "value"       => array( '' => '1')
));

vc_add_param('vc_row', array(
    "type"          =>  "colorpicker",
    "class"         =>  "hide_in_vc_editor",
    "admin_label"   => true,
    "heading"       => "Color Background Hyphen",
    "param_name"    => "color_hyphenbg",
    "description"   => "Choose color background of hyphen",
    "group"         => esc_html__( 'Row Hyphen Option', 'tz-plazart' ),
    "dependency"    => Array('element' => "row_hyphen", 'value' => array('1')),
));

vc_add_param('vc_row', array(
    "type"        =>  "checkbox",
    "class"       =>  "hide_in_vc_editor",
    "admin_label" => true,
    "heading"     => "Check Use WP Search",
    "param_name"  => "check_wp_search",
    "value"       => array( '' => '1')
));

///*** Custom vc-column ***/

vc_add_param('vc_column',array(
    "type"          => "checkbox",
    "class"         => "",
    "heading"       => esc_html__("Check user our team member element", "tz-plazart"),
    "description"   => esc_html__("user check our team member element", "tz-plazart"),
    "param_name"    => "check_our_team_member",
    "value"         => array( '' => 1)
));

vc_add_param('vc_column',array(
    "type"          => "checkbox",
    "class"         => "",
    "heading"       => esc_html__("check width", "tz-plazart"),
    "description"   => esc_html__("user check width", "tz-plazart"),
    "param_name"    => "check_width",
    "value"         => array( '' => 1)
));

vc_add_param('vc_column',array(
    "type"          => "dropdown",
    "heading"       => esc_html__("Position", "tz-plazart"),
    "param_name"    => "type_position",
    "value"         => array(
        esc_html__("Left position", "tz-plazart")      => 'left_position',
        esc_html__("Right position", "tz-plazart")     => 'right_position',
        esc_html__("Center position", "tz-plazart")    => 'center_position',
    ),
    "dependency"    => Array('element' => "check_width", 'value' => array('1'))
));
vc_add_param('vc_column',array(
    "type"          => "checkbox",
    "class"         => "",
    "heading"       => esc_html__("Check this box to adjust padding for responsiveness", "tz-plazart"),
    "param_name"    => "responsiveness_padding",
    "value"         => array( '' => 1)
));

/*** Tabs ***/

vc_add_param("vc_tabs", array(
    "type"          => "dropdown",
    "class"         => "",
    "weight"        => 1,
    "heading"       => "Style Of Tabs",
    "param_name"    => "style_tabs",
    "value"         => array(
        "Default"   => 1,
        "Meetup"    => 2,
    ),
));

vc_add_param("vc_tabs", array(
    "type"          => "dropdown",
    "class"         => "",
    "heading"       => "Type Of Tabs",
    "param_name"    => "type",
    "value"         => array(
        "Tabs Align Left"            => "left",
        "Tabs Align center"          => "center",
    ),
    "description" => ""
));

/*** Tour ***/

vc_add_param('vc_tour', array(
        "type"          => "dropdown",
        "class"         => "",
        "heading"       => "Option Navigation",
        "param_name"    => "navigation",
        "value"         => array(
            "Hide"      => "hide",
            "Show"      => "show",
        ),
        "description" => ""
    )
);

$tz_date    =   array(
    1     =>  1,
    2     =>  2,
    3     =>  3,
    4     =>  4,
    5     =>  5,
    6     =>  6,
    7     =>  7,
    8     =>  8,
    9     =>  9,
    10    =>  10,
    11    =>  11,
    12    =>  12,
    13    =>  13,
    14    =>  14,
    15    =>  15,
    16    =>  16,
    17    =>  17,
    18    =>  18,
    19    =>  19,
    20    =>  20,
    21    =>  21,
    22    =>  22,
    23    =>  23,
    24    =>  24,
    25    =>  25,
    26    =>  26,
    27    =>  27,
    28    =>  28,
    29    =>  29,
    30    =>  30,
    31    =>  31
);
$tz_month   =   array(
    esc_html__("January", "tz-plazart")    =>  1,
    esc_html__("February", "tz-plazart")   =>  2,
    esc_html__("March", "tz-plazart")      =>  3,
    esc_html__("April", "tz-plazart")      =>  4,
    esc_html__("May", "tz-plazart")        =>  5,
    esc_html__("June", "tz-plazart")       =>  6,
    esc_html__("July", "tz-plazart")       =>  7,
    esc_html__("August", "tz-plazart")     =>  8,
    esc_html__("September", "tz-plazart")  =>  9,
    esc_html__("October", "tz-plazart")    =>  10,
    esc_html__("November", "tz-plazart")   =>  11,
    esc_html__("December", "tz-plazart")   =>  12,
);


/***********************************************************************************
 * Class WPBakeryShortCode_Tz_Slider_Multi_Countdown
 */

class WPBakeryShortCode_Tz_Slider_Multi_Countdown extends WPBakeryShortCodesContainer {}
vc_map( array(
    "name"              =>  "Home Slide Multi Countdown",
    "base"              =>  "tz_slider_multi_countdown",
    "as_parent"         =>  array('only' => 'tz_slider_multi_countdown_item'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
    "content_element"   =>  true,
    "category"          =>  'Maniva Meetup',
    "icon"              =>  "icon-slide-multi-countdown",
    "js_view"           => 'VcColumnView',
    "params"            =>  array(
        array(
            "type"          => "dropdown",
            "class"         => "",
            "heading"       => esc_html__("Overlay Slider", "tz-plazart"),
            "param_name"    => "type_overlay_slider",
            "description"   => esc_html__("Type of transition between slides", "tz-plazart"),
            "value"         => array(
                esc_html__("Show", "tz-plazart")   =>  1,
                esc_html__("Hide", "tz-plazart")   =>  0,
            ),
            "group"         => esc_html__("Slider Home","tz-plazart"),
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         =>  "",
            "heading"       =>  esc_html__("Color Overlay Slider", "tz-plazart"),
            "param_name"    =>  "color_overlay_slider",
            "value"         =>  "",
            "dependency"    => Array('element' => "type_overlay_slider", 'value' => '1'),
            "group"         => esc_html__("Slider Home","tz-plazart"),
        ),
        array(
            "type"          => "dropdown",
            "class"         => "",
            "heading"       => esc_html__("Auto Slide", "tz-plazart"),
            "param_name"    => "auto_slider_multi",
            "description"   => esc_html__("Slides will automatically transition", "tz-plazart"),
            "value"         => array(
                esc_html__("No", "tz-plazart")     =>    0,
                esc_html__("Yes", "tz-plazart")    =>    1,
            ),
            "group"         => esc_html__("Slider Home","tz-plazart"),
        ),
        array(
            "type"          =>  "textfield",
            "class"         =>  "",
            "heading"       =>  esc_html__("Speed Next Slide Automatically", "tz-plazart"),
            "param_name"    =>  "speed",
            "value"         =>  6000,
            "description"   => esc_html__("Slide transition duration (in ms)", "tz-plazart"),
            "dependency"    =>  Array('element' => "auto_slider_multi", 'value' => array('1')),
            "group"         => esc_html__("Slider Home","tz-plazart"),
        ),
        array(
            "type"          =>  "textfield",
            "class"         =>  "",
            "heading"       =>  esc_html__("Speed Slider", "tz-plazart"),
            "param_name"    =>  "speed_slider",
            "value"         =>  1000,
            "description"   => esc_html__("Slide transition duration (in ms)", "tz-plazart"),
            "group"         => esc_html__("Slider Home","tz-plazart"),
        ),
        array(
            "type"          => "dropdown",
            "class"         => "",
            "heading"       => esc_html__("Type modem slider", "tz-plazart"),
            "param_name"    => "modem",
            "description"   => esc_html__("Type of transition between slides", "tz-plazart"),
            "value"         => array(
                esc_html__("Fade", "tz-plazart")   =>  'fade',
                esc_html__("Slide", "tz-plazart")  =>  'slide',
            ),
            "group"         => esc_html__("Slider Home","tz-plazart"),
        ),
        array(
            "type"          => "dropdown",
            "class"         => "",
            "heading"       => esc_html__("Slider navigation", "tz-plazart"),
            "param_name"    => "slider_navigation",
            "value"         => array(
                esc_html__("Show", "tz-plazart")   =>  1,
                esc_html__("Hide", "tz-plazart")   =>  0,
            ),
            "group"         => esc_html__("Slider Home","tz-plazart"),
        ),
        array(
            "type"          => "dropdown",
            "class"         => "",
            "heading"       => esc_html__("Slides pagination", "tz-plazart"),
            "param_name"    => "slides_pagination",
            "value"         => array(
                esc_html__("Show", "tz-plazart")   =>  1,
                esc_html__("Hide", "tz-plazart")   =>  0,
            ),
            "group"         => esc_html__("Slider Home","tz-plazart"),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Text Days", "tz-plazart"),
            "param_name"    => "text_day",
            "value"         => "days",
            "group"         =>  esc_html__("Count Down","tz-plazart"),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Text Hours", "tz-plazart"),
            "param_name"    => "text_hour",
            "value"         => "hours",
            "group"         =>  esc_html__("Count Down","tz-plazart"),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Text Mins", "tz-plazart"),
            "param_name"    => "text_min",
            "value"         => "mins",
            "group"         =>  esc_html__("Count Down","tz-plazart"),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Text Secs", "tz-plazart"),
            "param_name"    => "text_sec",
            "value"         => "secs",
            "group"         =>  esc_html__("Count Down","tz-plazart"),
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         => "",
            "heading"       => "Color Text Address",
            "param_name"    => "color_address",
            "value"         =>  "",
            "group"         =>  esc_html__("Setting Color","tz-plazart"),
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         => "",
            "heading"       => "Color Title Event",
            "param_name"    => "color_title_event",
            "value"         =>  "",
            "group"         =>  esc_html__("Setting Color","tz-plazart"),
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         => "",
            "heading"       => "Color Event Time",
            "param_name"    => "color_event_time",
            "value"         =>  "",
            "group"         =>  esc_html__("Setting Color","tz-plazart"),
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         => "",
            "heading"       => "Color Countdown",
            "param_name"    => "color_countdown",
            "value"         =>  "",
            "group"         =>  esc_html__("Setting Color","tz-plazart"),
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         => "",
            "heading"       => "Color Border Button Ticket",
            "param_name"    => "color_btn_ticket",
            "value"         =>  "",
            "group"         =>  esc_html__("Setting Color","tz-plazart"),
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         => "",
            "heading"       => "Color Text Button Ticket",
            "param_name"    => "color_text_btn",
            "value"         =>  "",
            "group"         =>  esc_html__("Setting Color","tz-plazart"),
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         => "",
            "heading"       => "Color Hover Text Button Ticket",
            "param_name"    => "color_hover_text_btn",
            "value"         =>  "",
            "group"         =>  esc_html__("Setting Color","tz-plazart"),
        ),
    )
) );

/* Class WPBakeryShortCode_slider_multi_countdown_item */

class WPBakeryShortCode_Tz_Slider_Multi_Countdown_Item extends WPBakeryShortCode {}
vc_map( array(
    "name"                      => "Home Slider Multi Countdown Item",
    "base"                      => "tz_slider_multi_countdown_item",
    "icon"                      => "icon-slide-multi-countdown-item",
    "category"                  => 'Maniva Meetup',
    "allowed_container_element" => 'vc_row',
    "as_child"                  =>  array('only' => 'tz_slider_multi_countdown'),
    "params"                    =>  array(


        array(
            "type"          => "dropdown",
            "class"         => "",
            "heading"       => esc_html__("Type multi slider item", "tz-plazart"),
            "param_name"    => "multi_slider_item_type",
            "value"         => array(
                esc_html__("Default", "tz-plazart")     =>  0,
                esc_html__("Type1", "tz-plazart")    =>  1,
            ),
            'default'       => 0,
            "group"         => esc_html__("Setting","tz-plazart"),
        ),
        // type 1 option for module multi slider countdown

        /* Social Network */
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Facebook Url", "tz-plazart"),
            "param_name"    => "t1_facebook_url",
            "value"         => "",
            "group"         =>  esc_html__("Type1 Setting","tz-plazart"),
            "dependency"    =>  Array('element' => "multi_slider_item_type", 'value' => array('1')),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("twitter Url", "tz-plazart"),
            "description"   => "",
            "param_name"    => "t1_twitter_url",
            "value"         => "",
            "group"         =>  esc_html__("Type1 Setting","tz-plazart"),
            "dependency"    =>  Array('element' => "multi_slider_item_type", 'value' => array('1')),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Flickr Url", "tz-plazart"),
            "description"   => "",
            "param_name"    => "t1_flickr_url",
            "value"         => "",
            "group"         =>  esc_html__("Type1 Setting","tz-plazart"),
            "dependency"    =>  Array('element' => "multi_slider_item_type", 'value' => array('1')),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("GooglePlus Url", "tz-plazart"),
            "description"   => "",
            "param_name"    => "t1_googleplus_url",
            "value"         => "",
            "group"         =>  esc_html__("Type1 Setting","tz-plazart"),
            "dependency"    =>  Array('element' => "multi_slider_item_type", 'value' => array('1')),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Instagram Url", "tz-plazart"),
            "description"   => "",
            "param_name"    => "t1_instagram_url",
            "value"         => "",
            "group"         =>  esc_html__("Type1 Setting","tz-plazart"),
            "dependency"    =>  Array('element' => "multi_slider_item_type", 'value' => array('1')),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Linkedln Url", "tz-plazart"),
            "description"   => "",
            "param_name"    => "t1_linkedln_url",
            "value"         => "",
            "group"         =>  esc_html__("Type1 Setting","tz-plazart"),
            "dependency"    =>  Array('element' => "multi_slider_item_type", 'value' => array('1')),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Title", "tz-plazart"),
            "description"   => "",
            "param_name"    => "t1_title",
            "value"         => "",
            "group"         =>  esc_html__("Type1 Setting","tz-plazart"),
            "dependency"    =>  Array('element' => "multi_slider_item_type", 'value' => array('1')),
        ),

        array(
            "type"          => "attach_image",
            "class"         => "",
            "heading"       => esc_html__("Image on slider", "tz-plazart"),
            "description"   => "",
            "param_name"    => "t1_img",
            "value"         => "",
            "group"         =>  esc_html__("Type1 Setting","tz-plazart"),
            "dependency"    =>  Array('element' => "multi_slider_item_type", 'value' => array('1')),
        ),

        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Slogan", "tz-plazart"),
            "description"   => "",
            "param_name"    => "t1_slogan",
            "value"         => "",
            "group"         =>  esc_html__("Type1 Setting","tz-plazart"),
            "dependency"    =>  Array('element' => "multi_slider_item_type", 'value' => array('1')),
        ),
        
        // end setting type 1 multi slider item

        array(
            'type'          =>  "textfield",
            'heading'       =>  esc_html__("Address", "tz-plazart"),
            'param_name'    =>  "address_event",
            "value"         =>  "",
            "group"         => esc_html__("Event","tz-plazart"),
        ),

        array(
            'type'          =>  "textfield",
            'heading'       =>  esc_html__("Title Event", "tz-plazart"),
            'param_name'    =>  "title_event",
            'admin_label'   =>  true,
            "value"         =>  "",
            "group"         => esc_html__("Event","tz-plazart"),
        ),

        array(
            "type"          => "dropdown",
            "class"         => "",
            "heading"       => esc_html__("Type Slider", "tz-plazart"),
            "param_name"    => "type_slider",
            "description"   => esc_html__("Type of transition between slides", "tz-plazart"),
            'admin_label'   =>  true,
            "value"         => array(
                esc_html__("Slider Images", "tz-plazart")          =>  'slider_img',
                esc_html__("Video Background", "tz-plazart")       =>  'video_bk',
            ),
            "group"         => esc_html__("Event","tz-plazart"),
        ),

        array(
            "type"          =>  "attach_image",
            "heading"       => esc_html__("Upload images slider", "tz-plazart"),
            "param_name"    =>  "image_slider",
            "value"         =>  "",
            "dependency"    =>  Array('element' => "type_slider", 'value' => array('slider_img')),
            "group"         => esc_html__("Event","tz-plazart"),
        ),

        array(
            'type'          =>  "textfield",
            'heading'       =>  esc_html__("Video mp4 url eg: .mp4", "tz-plazart"),
            'param_name'    =>  "video_multi_countdown_mp4",
            "value"         =>  "",
            "dependency"    =>  Array('element' => "type_slider", 'value' => array('video_bk')),
            "group"         => esc_html__("Event","tz-plazart"),
        ),

        array(
            'type'          =>  "textfield",
            'heading'       =>  esc_html__("Video ogv url eg: .ogv", "tz-plazart"),
            'param_name'    =>  "video_multi_countdown_ogv",
            "value"         =>  "",
            "dependency"    =>  Array('element' => "type_slider", 'value' => array('video_bk')),
            "group"         => esc_html__("Event","tz-plazart"),
        ),

        array(
            'type'          =>  "textfield",
            'heading'       =>  esc_html__("Video web url eg: .webm", "tz-plazart"),
            'param_name'    =>  "video_multi_countdown_web",
            "value"         =>  "",
            "dependency"    =>  Array('element' => "type_slider", 'value' => array('video_bk')),
            "group"         => esc_html__("Event","tz-plazart"),
        ),

        array(
            "type"          =>  "textfield",
            "class"         =>  "",
            "heading"       =>  esc_html__("Event Time", "tz-plazart"),
            "description"   =>  "Eg: August 25-27",
            "param_name"    =>  "event_time",
            "value"         =>  "August 25-27",
            "group"         =>  esc_html__("Event Time","tz-plazart"),
        ),

        array(
            "type"          => "dropdown",
            "class"         => "",
            "heading"       => esc_html__("Show Or Hide Count Down", "tz-plazart"),
            "param_name"    => "show_hide_count_down",
            "value"         => array(
                esc_html__("Show", "tz-plazart")   =>  1,
                esc_html__("Hide", "tz-plazart")   =>  0,
            ),
            'group'         => esc_html__( 'Event Time', 'tz-plazart' ),
        ),

        array(
            "type"          =>  "dropdown",
            "class"         =>  "",
            "heading"       =>  esc_html__("Date", "tz-plazart"),
            "param_name"    =>  "date",
            "value"         => $tz_date,
            'group'         => esc_html__( 'Event Time', 'tz-plazart' ),
        ),

        array(
            "type"          =>  "dropdown",
            "class"         =>  "",
            "heading"       =>  esc_html__("Month", "tz-plazart"),
            "param_name"    =>  "month",
            "value"         => $tz_month,
            "group"         =>  esc_html__("Event Time","tz-plazart"),
        ),

        array(
            "type"          =>  "textfield",
            "class"         =>  "",
            "heading"       =>  esc_html__("Year", "tz-plazart"),
            "description"   =>  "import year by number eg: 2016",
            "param_name"    =>  "year",
            "value"         =>  2016,
            "group"         =>  esc_html__("Event Time","tz-plazart"),
        ),

        array(
            "type"          =>  "textfield",
            "class"         =>  "",
            "heading"       =>  esc_html__("Time", "tz-plazart"),
            "description"   =>  "Import time eg: 23:59:59",
            "param_name"    =>  "time",
            "value"         =>  '23:59:59',
            "group"         =>  esc_html__("Event Time","tz-plazart"),
        ),

        array(
            "type"          =>  "textfield",
            "class"         =>  "",
            "heading"       =>  esc_html__("Text Link", "tz-plazart"),
            "param_name"    =>  "text_link",
            "value"         =>  'Buy tickets',
            "group"         => esc_html__("Event Time","tz-plazart"),
        ),

        array(
            "type"          => "vc_link",
            "heading"       => esc_html__( "URL (Link)", "tz-plazart" ),
            "param_name"    => "link",
            "description"   => esc_html__( "Add custom link.", "tz-plazart" ),
            "group"         => esc_html__("Event Time","tz-plazart"),
        ),

    )
) );

/* Our Speakers Slider Start*/
class WPBakeryShortCode_our_speakers_slider extends WPBakeryShortCodesContainer {}
vc_map( array(
    "name"              =>  "Our Speakers Slider",
    "base"              =>  "our_speakers_slider",
    "as_parent"         =>  array('only' => 'our_speakers_slider_item'),
    "content_element"   =>  true,
    "category"          =>  'Maniva Meetup',
    "icon"              =>  "icon-speakers-slider",
    "js_view"           => 'VcColumnView',
    "params"            =>  array(
        array(
            "type"          =>  "attach_images",
            "heading"       => esc_html__("Images Speakers", "tz-plazart"),
            "param_name"    =>  "image_speakers",
            "value"         =>  "",
            "group"         => esc_html__("Speakers","tz-plazart"),
        ),
        array(
            "type"          => "dropdown",
            "class"         => "",
            "heading"       => esc_html__("Auto Slide", "tz-plazart"),
            "param_name"    => "auto_slide",
            "value"         => array(
                esc_html__("No", "tz-plazart")     =>  0,
                esc_html__("Yes", "tz-plazart")    =>  1,
            ),
            "group"         => esc_html__("Setting","tz-plazart"),
        ),
        array(
            "type"          => "dropdown",
            "class"         => "",
            "heading"       => esc_html__("Mode Slide", "tz-plazart"),
            "param_name"    => "mode_slide",
            "value"         => array(
                esc_html__("Slide", "tz-plazart")  =>  'slide',
                esc_html__("Fade", "tz-plazart")   =>  'fade',
            ),
            "group"         => esc_html__("Setting","tz-plazart"),
        ),
    ),
) );

class WPBakeryShortCode_our_speakers_slider_item extends WPBakeryShortCode {}
vc_map( array(
    "name"                      => "Our Speakers Slider Item",
    "base"                      => "our_speakers_slider_item",
    "icon"                      => "icon-speakers-slider",
    "category"                  => 'Maniva Meetup',
    "allowed_container_element" => 'vc_row',
    "as_child"                  =>  array('only' => 'our_speakers_slider'),
    "params"                    =>  array(
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => "Name",
            "admin_label"   =>  true,
            "param_name"    => "name_speakers",
            "group"         =>  esc_html__("Speakers","tz-plazart"),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => "Employment",
            "param_name"    => "employment_speakers",
            "group"         =>  esc_html__("Speakers","tz-plazart"),
        ),
        array(
            "type"          => "textarea_html",
            "heading"       => "Content",
            "param_name"    => "content",
            "value"         => "",
            "group"         =>  esc_html__("Speakers","tz-plazart"),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Facebook Url", "tz-plazart"),
            "param_name"    => "facebook_url",
            "value"         => "",
            "group"         =>  esc_html__("Social Network","tz-plazart"),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("twitter Url", "tz-plazart"),
            "description"   => "",
            "param_name"    => "twitter_url",
            "value"         => "",
            "group"         =>  esc_html__("Social Network","tz-plazart"),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Flickr Url", "tz-plazart"),
            "description"   => "",
            "param_name"    => "flickr_url",
            "value"         => "",
            "group"         =>  esc_html__("Social Network","tz-plazart"),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("GooglePlus Url", "tz-plazart"),
            "description"   => "",
            "param_name"    => "googleplus_url",
            "value"         => "",
            "group"         =>  esc_html__("Social Network","tz-plazart"),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Instagram Url", "tz-plazart"),
            "description"   => "",
            "param_name"    => "instagram_url",
            "value"         => "",
            "group"         =>  esc_html__("Social Network","tz-plazart"),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Linkedln Url", "tz-plazart"),
            "description"   => "",
            "param_name"    => "linkedln_url",
            "value"         => "",
            "group"         =>  esc_html__("Social Network","tz-plazart"),
        ),
    ),
) );
/* Our Speakers Slider End */


/* Start partner 2 */
class WPBakeryShortCode_Tz_Partner_New  extends WPBakeryShortCodesContainer {}

vc_map( array(
    "name"              =>  "Partner New",
    "base"              =>  "tz_partner_new",
    "as_parent"         =>  array('only' => 'tz_partner_new_item'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
    "content_element"   =>  true,
    "category"          =>  'Maniva Meetup',
    "icon"              =>  "icon-element",
    "js_view"           =>  'VcColumnView',
    "params"            =>  array(
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("Show Or Hide prev/next", "tz-plazart"),
            "param_name"    => "prev_next_show_hide",
            "value"         => array(
                esc_html__("Hide", "tz-plazart")   => 0,
                esc_html__("Show", "tz-plazart")   => 1,
            ),
        ),
        array(
            "type"          =>  "textfield",
            "holder"        =>  "div",
            "admin_label"   =>  true,
            "heading"       => esc_html__("Input number items", "tz-plazart"),
            "param_name"    =>  "new_number_items",
            "value"         =>  5
        ),
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("Auto Partner", "tz-plazart"),
            "param_name"    => "new_auto_partner",
            "value"         => array(
                esc_html__("No", "tz-plazart")    => 0,
                esc_html__("Yes", "tz-plazart")   => 1,
            ),
        ),
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("Loop Partner", "tz-plazart"),
            "param_name"    => "new_loop_partner",
            "value"         => array(
                esc_html__("No", "tz-plazart")    => 0,
                esc_html__("Yes", "tz-plazart")   => 1,
            ),
        ),
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("RTL Partner", "tz-plazart"),
            "param_name"    => "new_rtl_partner",
            "value"         => array(
                esc_html__("No", "tz-plazart")    => 0,
                esc_html__("Yes", "tz-plazart")   => 1,
            ),
        ),
    )
) );

class WPBakeryShortCode_Tz_Partner_New_Item  extends WPBakeryShortCode {}

vc_map( array(
    "name"                      => "Partner New Item",
    "base"                      => "tz_partner_new_item",
    "icon"                      => "icon-element",
    "category"                  => 'Maniva Meetup',
    "allowed_container_element" => 'vc_row',
    "as_child"                  =>  array('only' => 'tz_partner_new'),
    "params"                    =>  array(
        array(
            "type"          =>  "attach_image",
            "holder"        =>  "div",
            "admin_label"   =>  true,
            "heading"       => esc_html__("Upload images", "tz-plazart"),
            "param_name"    =>  "new_image_partner",
            "value"         =>  ""
        ),
        array(
            "type"          => "vc_link",
            "heading"       => esc_html__( "URL (Link)", "tz-plazart" ),
            "param_name"    => "link",
            "description"   => esc_html__( "Add custom link.", "tz-plazart" ),
        ),
    )
) );
/* End partner 2 */


/***********************************************************************************
 * Class WPBakeryShortCode_Tz_Register_Meetup
 */

class WPBakeryShortCode_Tz_Register_Meetup  extends WPBakeryShortCodesContainer {}

vc_map( array(
    "name"              =>  "Register Meetup paypal",
    "base"              =>  "tz_register_meetup",
    "as_parent"         =>  array('only' => 'tz_register_meetup_item'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
    "content_element"   =>  true,
    "category"          =>  'Maniva Meetup',
    "icon"              =>  "icon-element",
    "js_view"           => 'VcColumnView'
) );

// Customer tz_register_meetup_item

class WPBakeryShortCode_Tz_Register_Meetup_Item  extends WPBakeryShortCode {}

vc_map( array(
    "name"                      => "Register Meetup Item Paypal",
    "base"                      => "tz_register_meetup_item",
    "icon"                      => "icon-element",
    "category"                  => 'Maniva Meetup',
    "allowed_container_element" => 'vc_row',
    "as_child"                  => array('only' => 'tz_register_meetup'),
    "params"                    => array(
        array(
            "type"          =>  "textfield",
            "holder"        =>  "div",
            "class"         =>  "",
            "heading"       =>  esc_html__("Title", "tz-plazart"),
            "param_name"    =>  "title",
            "value"         =>  "",
        ),
        array(
            "type"          => "textarea_html",
            "heading"       => "Content",
            "param_name"    => "content",
            "value"         => "",
        ),
        array(
            "type"          => "textfield",
            "heading"       => "Currency",
            "param_name"    => "currency",
            "value"            => "$",
        ),
        array(
            "type"          =>  "textfield",
            "heading"       =>  esc_html__("Price", "tz-plazart"),
            "param_name"    =>  "price",
            "value"         =>  380,
        ),
    )
) );


/************************************************************************
 * Class WPBakeryShortCode_event_meetup
 */

class WPBakeryShortCode_Event_Meetup  extends WPBakeryShortCodesContainer {}

vc_map( array(
    "name"                      => "Event Meetup",
    "base"                      => "event_meetup",
    "as_parent"                 => array('only' => 'event_meetup_item'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
    "content_element"           => true,
    "category"                  => 'Maniva Meetup',
    "icon"                      => "icon-element",
    "show_settings_on_create"   => true,
    "params"                    =>  array(
        array(
            "type"          => "textfield",
            "class"         => "",
            "admin_label"   => true,
            "heading"       => esc_html__("Title", "tz-plazart"),
            "param_name"    => "title",
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Sub Title", "tz-plazart"),
            "param_name"    => "sub_title",
        ),

        /* Setting Color */
        array(
            "type"          =>  "colorpicker",
            "class"         => "",
            "heading"       => "Color Title",
            "param_name"    => "color_title",
            "value"         =>  "",
            "group"         =>  esc_html__("Setting Color","tz-plazart"),
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         => "",
            "heading"       => "Color Sub Title",
            "param_name"    => "color_sub_title",
            "value"         =>  "",
            "group"         =>  esc_html__("Setting Color","tz-plazart"),
        ),

    ),
    "js_view" => 'VcColumnView'
) );

/* Class WPBakeryShortCode_event_meetup_item */

class WPBakeryShortCode_Event_Meetup_item  extends WPBakeryShortCode {}

vc_map( array(
    "name"                      => "Event Meetup Item",
    "base"                      => "event_meetup_item",
    "icon"                      => "icon-element",
    "category"                  => 'Maniva Meetup',
    "allowed_container_element" => 'vc_row',
    "as_child"                  =>  array('only' => 'event_meetup'),
    "params"                    =>  array(
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Start time", "tz-plazart"),
            "param_name"    => "start_time",
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Duration", "tz-plazart"),
            "param_name"    => "time_event",
            "admin_label"   => true,
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Title Event", "tz-plazart"),
            "param_name"    => "title_event",
            "admin_label"   => true,
        ),
        array(
            "type"          =>  "dropdown",
            "heading"       =>  esc_html__("Title Event Click", "tz-plazart"),
            "param_name"    =>  "title_event_click",
            "value"         => array(
                "Custom Link"               =>  1,
                "Show Effects Light Box"    =>  2,
            ),
        ),
        array(
            "type"          => "vc_link",
            "heading"       => esc_html__( "URL (Link Title Event)", "tz-plazart" ),
            "param_name"    => "link",
            "description"   => esc_html__( "Add custom link.", "tz-plazart" ),
            "dependency"    => Array('element' => "title_event_click", 'value' => array('1')),
        ),
        array(
            "type"          => "textarea_html",
            "heading"       => "Content",
            "param_name"    => "content",
            "value"         => "",
        ),
        array(
            "type"          => "textarea",
            "class"         => "",
            "heading"       => esc_html__("Excerpt", "tz-plazart"),
            "param_name"    => "excerpt_event",
            "value"         => "",
            "description"   => "Excerpts are optional hand-crafted summaries of your content that can be used in your theme",
        ),

        /* Effects Color */
        array(
            "type"          =>  "dropdown",
            "heading"       =>  esc_html__("Use Effects Light Box", "tz-plazart"),
            "param_name"    =>  "use_effects",
            "value"         => array(
                "No"    =>  0,
                "Yes"   =>  1,
            ),
            "group"         =>  esc_html__("Effects Light Box","tz-plazart"),
        ),
        array(
            "type"          => "attach_image",
            "heading"       => esc_html__("Image Event Square", "tz-plazart"),
            "param_name"    => "event_image_square",
            "description"   => esc_html__("Upload an square image. This image will be shown in lightbox.  In case, this image is not uploaded.", "tz-plazart"),
            "group"         =>  esc_html__("Effects Light Box","tz-plazart"),
        ),
        array(
            "type"          =>  "dropdown",
            "heading"       =>  esc_html__("Style Effects Light Box", "tz-plazart"),
            "param_name"    =>  "effects_light_box",
            "description"   =>  '<a href="http://tympanus.net/Development/ModalWindowEffects/" target="_blank">Demo Effects Light Box</a>',
            "value"         => array(
                "Fade In &amp; Scale"   =>  1,
                "Slide in (right)"      =>  2,
                "Slide in (bottom)"     =>  3,
                "Newspaper"             =>  4,
                "Fall"                  =>  5,
                "Side Fall"             =>  6,
                "Sticky Up"             =>  7,
                "3D Flip (horizontal)"  =>  8,
                "3D Flip (vertical)"    =>  9,
                "3D Sign"               =>  10,
                "Super Scaled"          =>  11,
                "Just Me"               =>  12,
                "3D Slit"               =>  13,
                "3D Rotate Bottom"      =>  14,
                "3D Rotate In Left"     =>  15,
                "Blur"                  =>  16,
                "Let me in"             =>  17,
                "Make way!"             =>  18,
                "Slip from top"         =>  19
            ),
            "group"         =>  esc_html__("Effects Light Box","tz-plazart"),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Text", "tz-plazart"),
            "description"   => "",
            "param_name"    => "text_thank",
            "value"         => "Thanks for watching!",
            "group"         =>  esc_html__("Effects Light Box","tz-plazart"),
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         => "",
            "heading"       => "Color Text",
            "param_name"    => "color_text_thank",
            "value"         =>  "",
            "group"         =>  esc_html__("Effects Light Box","tz-plazart"),
        ),

        /* Social Network */
        array(
            "type"          => "checkbox",
            "class"         => "",
            "heading"       => "",
            "param_name"    => "open_link",
            "value"         => array(
                'Open link in a new window/tab'      => 'link_target',
            ),
            "group"         =>  esc_html__("Social Network","tz-plazart"),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Facebook Url", "tz-plazart"),
            "param_name"    => "facebook_url",
            "value"         => "",
            "group"         =>  esc_html__("Social Network","tz-plazart"),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("twitter Url", "tz-plazart"),
            "description"   => "",
            "param_name"    => "twitter_url",
            "value"         => "",
            "group"         =>  esc_html__("Social Network","tz-plazart"),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Flickr Url", "tz-plazart"),
            "description"   => "",
            "param_name"    => "flickr_url",
            "value"         => "",
            "group"         =>  esc_html__("Social Network","tz-plazart"),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("GooglePlus Url", "tz-plazart"),
            "description"   => "",
            "param_name"    => "googleplus_url",
            "value"         => "",
            "group"         =>  esc_html__("Social Network","tz-plazart"),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Instagram Url", "tz-plazart"),
            "description"   => "",
            "param_name"    => "instagram_url",
            "value"         => "",
            "group"         =>  esc_html__("Social Network","tz-plazart"),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Linkedln Url", "tz-plazart"),
            "description"   => "",
            "param_name"    => "linkedln_url",
            "value"         => "",
            "group"         =>  esc_html__("Social Network","tz-plazart"),
        ),

        /* Setting Color */
        array(
            "type"          =>  "colorpicker",
            "class"         => "",
            "heading"       => "Color Title Event",
            "param_name"    => "color_title_event",
            "value"         =>  "",
            "group"         =>  esc_html__("Setting Color","tz-plazart"),
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         => "",
            "heading"       => "Color icon time",
            "param_name"    => "color_icon_time",
            "value"         =>  "",
            "group"         =>  esc_html__("Setting Color","tz-plazart"),
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         => "",
            "heading"       => "Color text time",
            "param_name"    => "color_text_time",
            "value"         =>  "",
            "group"         =>  esc_html__("Setting Color","tz-plazart"),
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         => "",
            "heading"       => "background Content",
            "param_name"    => "bk_content",
            "value"         =>  "",
            "group"         =>  esc_html__("Setting Color","tz-plazart"),
        ),

        array(
            "type"          =>  "colorpicker",
            "class"         => "",
            "heading"       => "Color Excerpt",
            "param_name"    => "color_excerpt",
            "value"         =>  "",
            "group"         =>  esc_html__("Setting Color","tz-plazart"),
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         => "",
            "heading"       => "Color Title Effects",
            "param_name"    => "color_title_effects",
            "value"         =>  "",
            "group"         =>  esc_html__("Setting Color","tz-plazart"),
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         => "",
            "heading"       => "Color Social Network",
            "param_name"    => "color_social_network",
            "value"         =>  "",
            "group"         =>  esc_html__("Setting Color","tz-plazart"),
        ),
    )
) );

/************************************************************************
 * Class WPBakeryShortCode_tz_pricing
 */

/* Contact Form */

include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); // Require plugin.php to use is_plugin_active() below

if ( is_plugin_active( 'contact-form-7/wp-contact-form-7.php' ) || defined( 'WPCF7_PLUGIN' ) ) {

    $tzcf7 = get_posts('post_type="wpcf7_contact_form"&numberposts=-1');

    $contact_forms = array();
    if ($tzcf7) {
        foreach ($tzcf7 as $tzcform) {
            $contact_forms[$tzcform->post_title] = $tzcform->ID;
        }
    } else {
        $contact_forms[esc_html__('No contact forms found', 'tz-plazart')] = 0;
    }

    class WPBakeryShortCode_Tz_Pricing extends WPBakeryShortCodesContainer{}

    vc_map(array(
        "name" => "Pricing",
        "base" => "tz_pricing",
        "as_parent" => array('only' => 'tz_pricing_item'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
        "category" => 'Maniva Meetup',
        "icon" => "icon-element",
        "show_settings_on_create" => true,
        "js_view" => 'VcColumnView',
        "params" => array(
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => "Select Column",
                "param_name" => "select_column",
                "value" => array(
                    "4 Column" => 4,
                    "3 Column" => 3,
                    "2 Column" => 2,
                    "1 Column" => 1,
                ),
                "description" => esc_html__('Choose previously created contact form from the drop down list.', 'tz-plazart'),
            ),
            array(
                "type" => "textfield",
                "heading" => "Book Event",
                "param_name" => "book_event",
                "value" => "Book Event",
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => "Select contact form",
                "param_name" => "contact_form_id",
                "value" => $contact_forms,
                "description" => esc_html__('Choose previously created contact form from the drop down list.', 'tz-plazart'),
            ),
        )
    ));

    /* Class WPBakeryShortCode_event_meetup_item */

    class WPBakeryShortCode_Tz_Pricing_Item extends WPBakeryShortCode{}

    vc_map(array(
        "name" => "Pricing Item",
        "base" => "tz_pricing_item",
        "icon" => "icon-element",
        "category" => 'Maniva Meetup',
        "allowed_container_element" => 'vc_row',
        "as_child" => array('only' => 'tz_pricing'),
        "params" => array(
            array(
                "type" => "textfield",
                "class" => "",
                "heading" => esc_html__("Title", "tz-plazart"),
                "param_name" => "title",
            ),
            array(
                "type" => "textfield",
                "heading" => "Currency",
                "param_name" => "currency",
                "value" => "$",
            ),
            array(
                "type" => "textfield",
                "class" => "",
                "heading" => esc_html__("Price", "tz-plazart"),
                "param_name" => "price",
            ),
            array(
                "type" => "textfield",
                "class" => "",
                "heading" => esc_html__("Price Period", "tz-plazart"),
                "param_name" => "price_period",
            ),
            array(
                "type" => "textarea_html",
                "heading" => "Content",
                "param_name" => "content",
                "value" => "",
            ),
            array(
                "type" => "textfield",
                "class" => "",
                "heading" => esc_html__("Button", "tz-plazart"),
                "param_name" => "btn_text",
                "value" => "Get Started"
            ),
            array(
                "type" => "colorpicker",
                "heading" => "Background Color Pricing",
                "param_name" => "bk_pricing",
                "value" => "",
            ),
        )
    ));

}


/************************************************************************
 * Class WPBakeryShortCode_tz_list_meetup
 */

class WPBakeryShortCode_Tz_List_Meetup  extends WPBakeryShortCodesContainer {}

vc_map( array(
    "name"                      => "List Meetup",
    "base"                      => "tz_list_meetup",
    "as_parent"                 => array('only' => 'tz_list_meetup_item'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
    "content_element"           => true,
    "category"                  => 'Maniva Meetup',
    "icon"                      => "icon-element",
    "show_settings_on_create"   => true,
    "params"                    =>  array(
        array(
            "type"          => "dropdown",
            "class"         => "",
            "heading"       => "Style Of List",
            "param_name"    => "style_list",
            "value"         => array(
                "Use icon"              => 1,
                "List style decimal"    => 2,
            ),
        )
    ),
    "js_view" => 'VcColumnView'
) );


/* Class WPBakeryShortCode_tz_list_meetup_item */

class WPBakeryShortCode_Tz_List_Meetup_Item  extends WPBakeryShortCode {}

vc_map( array(
    "name"                      => "List Meetup Item",
    "base"                      => "tz_list_meetup_item",
    "icon"                      => "icon-element",
    "category"                  => 'Maniva Meetup',
    "allowed_container_element" => 'vc_row',
    "as_child"                  =>  array('only' => 'tz_list_meetup'),
    "params"                    =>  array(
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
            "heading"       =>  esc_html__("Color Icon Font", "tz-plazart"),
            "param_name"    =>  "color_icon_font",
            "value"         =>  "",
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Title list", "tz-plazart"),
            "param_name"    => "title_list",
        ),
    )
) );

/* Testimonials */

/***********************************************************************************
 * Class WPBakeryShortCode_Tz_Testimonials
 */
class WPBakeryShortCode_Tz_Testimonials  extends WPBakeryShortCodesContainer {}
vc_map( array(
    "name"              =>  "Testimonials",
    "base"              =>  "tz_testimonials",
    "as_parent"         =>  array('only' => 'tz_testimonials_item'),
    "content_element"   =>  true,
    "category"          =>  'Maniva Meetup',
    "icon"              =>  "icon-testimonials",
    "js_view"           =>  'VcColumnView',
    "params"            =>  array(
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("Auto Testimonials", "tz-plazart"),
            "param_name"    => "auto_testimonials",
            "value"         => array(
                esc_html__("No", "tz-plazart")    => 0,
                esc_html__("Yes", "tz-plazart")   => 1,
            ),
            "group"         => esc_html__("Setting Testimonials","tz-plazart"),
        ),
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("Loop Testimonials", "tz-plazart"),
            "param_name"    => "loop_testimonials",
            "value"         => array(
                esc_html__("Yes", "tz-plazart")   => 1,
                esc_html__("No", "tz-plazart")    => 0,
            ),
            "group"         => esc_html__("Setting Testimonials","tz-plazart"),
        ),
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("Show Or Hide Dot", "tz-plazart"),
            "param_name"    => "dot_show_hide",
            "value"         => array(
                esc_html__("Show", "tz-plazart")   => 1,
                esc_html__("Hide", "tz-plazart")   => 0,
            ),
            "group"         => esc_html__("Setting Testimonials","tz-plazart"),
        ),
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("RTL Testimonials", "tz-plazart"),
            "param_name"    => "rtl_testimonials",
            "value"         => array(
                esc_html__("No", "tz-plazart")    => 0,
                esc_html__("Yes", "tz-plazart")   => 1,
            ),
            "group"         => esc_html__("Setting Testimonials","tz-plazart"),
        ),

        array(
            "type"          =>  "colorpicker",
            "class"         => "",
            "heading"       => "Color Name & Employment Testimonials",
            "param_name"    => "color_name",
            "value"         =>  "",
            "group"         =>  esc_html__("Setting Color","tz-plazart"),
        ),
    )
) );

/* Class WPBakeryShortCode_tz_testimonials_item */
class WPBakeryShortCode_Tz_Testimonials_Item  extends WPBakeryShortCode {}
vc_map( array(
    "name"                      => "Testimonials Item",
    "base"                      => "tz_testimonials_item",
    "icon"                      => "icon-testimonials",
    "category"                  => 'Maniva Meetup',
    "allowed_container_element" => 'vc_row',
    "as_child"                  =>  array('only' => 'tz_testimonials'),
    "params"                    =>  array(
        array(
            "type"          =>  "attach_image",
            "heading"       => esc_html__("Upload images", "tz-plazart"),
            "param_name"    =>  "new_image_partner",
            "value"         =>  ""
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => "Name",
            "admin_label"   =>  true,
            "param_name"    => "name_testimonials",
            "value"         => "",
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => "Employment",
            "param_name"    => "employment_testimonials",
            "value"         => "",
        ),
        array(
            "type"          => "textarea_html",
            "heading"       => "Content",
            "param_name"    => "content",
            "value"         => "",
        ),
    )
) );


/* End Testimonials */

?>