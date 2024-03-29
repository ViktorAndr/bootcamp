<?php

vc_map( array(
    "name"          => esc_html__("Contact Meetup", "tz-plazart"),
    "icon"          => "icon-element",
    "base"          => "tz-contact-meetup",
    "weight"        => 1,
    "description"   => "",
    "class"         => "tzElement_extended",
    "category"      => esc_html__("Maniva Meetup", "tz-plazart"),
    "params"        => array(
        array(
            "type"          => "dropdown",
            "class"         => "",
            "heading"       => esc_html__("Chose Type Contact Meetup", "tz-plazart"),
            "param_name"    => "type_contact",
            "value"         => array(
                "Type 1"    => 1,
                "Type 2"    => 2,
            ),
            "group"         => esc_html__("General","tz-plazart"),
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         =>  "",
            "heading"       =>  esc_html__("Color Title", "tz-plazart"),
            "param_name"    =>  "color_text_title_type_1",
            "value"         =>  "",
            "dependency"    => Array('element' => "type_contact", 'value' => '1'),
            "group"         => esc_html__("General","tz-plazart"),
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         =>  "",
            "heading"       =>  esc_html__("Color Text Description", "tz-plazart"),
            "param_name"    =>  "color_text_description_type_1",
            "value"         =>  "",
            "dependency"    => Array('element' => "type_contact", 'value' => '1'),
            "group"         => esc_html__("General","tz-plazart"),
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         =>  "",
            "heading"       =>  esc_html__("Color Text Link", "tz-plazart"),
            "param_name"    =>  "color_text_link",
            "value"         =>  "",
            "dependency"    => Array('element' => "type_contact", 'value' => '1'),
            "group"         => esc_html__("General","tz-plazart"),
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         =>  "",
            "heading"       =>  esc_html__("Color Border Bottom", "tz-plazart"),
            "param_name"    =>  "color_border_bottom",
            "value"         =>  "",
            "dependency"    => Array('element' => "type_contact", 'value' => '1'),
            "group"         => esc_html__("General","tz-plazart"),
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         =>  "",
            "heading"       =>  esc_html__("Color Title Event And Touch", "tz-plazart"),
            "param_name"    =>  "color_text_title",
            "value"         =>  "",
            "dependency"    => Array('element' => "type_contact", 'value' => '2'),
            "group"         => esc_html__("General","tz-plazart"),
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         =>  "",
            "heading"       =>  esc_html__("Color Sub Title Event And Touch", "tz-plazart"),
            "param_name"    =>  "color_text_sub_title",
            "value"         =>  "",
            "dependency"    => Array('element' => "type_contact", 'value' => '2'),
            "group"         => esc_html__("General","tz-plazart"),
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         =>  "",
            "heading"       =>  esc_html__("Color Text description", "tz-plazart"),
            "param_name"    =>  "color_text_description",
            "value"         =>  "",
            "dependency"    => Array('element' => "type_contact", 'value' => '2'),
            "group"         => esc_html__("General","tz-plazart"),
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         =>  "",
            "heading"       =>  esc_html__("Color Sub Text description", "tz-plazart"),
            "param_name"    =>  "color_sub_text_description",
            "value"         =>  "",
            "dependency"    => Array('element' => "type_contact", 'value' => '2'),
            "group"         => esc_html__("General","tz-plazart"),
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         =>  "",
            "heading"       =>  esc_html__("Background icon", "tz-plazart"),
            "param_name"    =>  "background_icon",
            "value"         =>  "",
            "dependency"    => Array('element' => "type_contact", 'value' => '2'),
            "group"         => esc_html__("General","tz-plazart"),
        ),
        array(
            "type"          =>  "colorpicker",
            "class"         =>  "",
            "heading"       =>  esc_html__("Color icon", "tz-plazart"),
            "param_name"    =>  "color_icon",
            "value"         =>  "",
            "dependency"    => Array('element' => "type_contact", 'value' => '2'),
            "group"         => esc_html__("General","tz-plazart"),
        ),
        array(
            "type"          => "textarea",
            "class"         => "",
            "heading"       => esc_html__("About", "tz-plazart"),
            "param_name"    => "about",
            "group"         => esc_html__("Type 1","tz-plazart"),
            "dependency"    => Array('element' => "type_contact", 'value' => array('1')),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Text Conference Place Address", "tz-plazart"),
            "param_name"    => "text_conference_address",
            "description"   => "",
            "value"         => "Conference Place Address",
            "group"         => esc_html__("Type 1","tz-plazart"),
            "dependency"    => Array('element' => "type_contact", 'value' => array('1')),
        ),
        array(
            "type"          => "textarea",
            "class"         => "",
            "heading"       => esc_html__("Conference Place Address", "tz-plazart"),
            "param_name"    => "conference_address",
            "description"   => "",
            "group"         => esc_html__("Type 1","tz-plazart"),
            "dependency"    => Array('element' => "type_contact", 'value' => array('1')),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Text Email", "tz-plazart"),
            "param_name"    => "text_email",
            "value"         => "Send a Email",
            "group"         => esc_html__("Type 1","tz-plazart"),
            "dependency"    => Array('element' => "type_contact", 'value' => array('1')),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Email", "tz-plazart"),
            "param_name"    => "email",
            "group"         => esc_html__("Type 1","tz-plazart"),
            "dependency"    => Array('element' => "type_contact", 'value' => array('1')),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Text Address", "tz-plazart"),
            "param_name"    => "text_address",
            "value"         => "Visit Us At Our Office",
            "group"         => esc_html__("Type 1","tz-plazart"),
            "dependency"    => Array('element' => "type_contact", 'value' => array('1')),
        ),
        array(
            "type"          => "textarea",
            "class"         => "",
            "heading"       => esc_html__("Address", "tz-plazart"),
            "param_name"    => "address",
            "group"         => esc_html__("Type 1","tz-plazart"),
            "dependency"    => Array('element' => "type_contact", 'value' => array('1')),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Text Our Website", "tz-plazart"),
            "param_name"    => "text_our_website",
            "value"         => "Take a Look Our Website",
            "group"         => esc_html__("Type 1","tz-plazart"),
            "dependency"    => Array('element' => "type_contact", 'value' => array('1')),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Our Website", "tz-plazart"),
            "param_name"    => "our_website",
            "group"         => esc_html__("Type 1","tz-plazart"),
            "dependency"    => Array('element' => "type_contact", 'value' => array('1')),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Phone", "tz-plazart"),
            "param_name"    => "phone",
            "group"         => esc_html__("Type 1","tz-plazart"),
            "dependency"    => Array('element' => "type_contact", 'value' => array('1')),
        ),

        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Text Title Event", "tz-plazart"),
            "param_name"    => "text_event",
            "value"         => "EVENT",
            "group"         => esc_html__("Type 2 Event","tz-plazart"),
            "dependency"    => Array('element' => "type_contact", 'value' => array('2')),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Text Sub Title Event", "tz-plazart"),
            "param_name"    => "text_sub_event",
            "value"         => "INFORMATION",
            "group"         => esc_html__("Type 2 Event","tz-plazart"),
            "dependency"    => Array('element' => "type_contact", 'value' => array('2')),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Text Conference", "tz-plazart"),
            "param_name"    => "text_conference",
            "value"         => "Conference",
            "group"         => esc_html__("Type 2 Event","tz-plazart"),
            "dependency"    => Array('element' => "type_contact", 'value' => array('2')),
        ),
        array(
            "type"          => "textarea",
            "class"         => "",
            "heading"       => esc_html__("Conference Description", "tz-plazart"),
            "param_name"    => "conference_add",
            "group"         => esc_html__("Type 2 Event","tz-plazart"),
            "dependency"    => Array('element' => "type_contact", 'value' => array('2')),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Text Conference Address", "tz-plazart"),
            "param_name"    => "text_conference_add",
            "value"         => "Conference Place Address",
            "group"         => esc_html__("Type 2 Event","tz-plazart"),
            "dependency"    => Array('element' => "type_contact", 'value' => array('2')),
        ),
        array(
            "type"          => "textarea",
            "class"         => "",
            "heading"       => esc_html__("Conference Address Description", "tz-plazart"),
            "param_name"    => "conference_add_des",
            "group"         => esc_html__("Type 2 Event","tz-plazart"),
            "dependency"    => Array('element' => "type_contact", 'value' => array('2')),
        ),

        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Text Title Get In Touch", "tz-plazart"),
            "param_name"    => "text_get_in_touch",
            "value"         => "GET IN TOUCH",
            "group"         => esc_html__("Type 2 Get In Touch","tz-plazart"),
            "dependency"    => Array('element' => "type_contact", 'value' => array('2')),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Text Sub Title Get In Touch", "tz-plazart"),
            "param_name"    => "text_sub_get_in_touch",
            "value"         => "CONTACT US",
            "group"         => esc_html__("Type 2 Get In Touch","tz-plazart"),
            "dependency"    => Array('element' => "type_contact", 'value' => array('2')),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Text Our Office", "tz-plazart"),
            "param_name"    => "text_our_office",
            "value"         => "Our Office",
            "group"         => esc_html__("Type 2 Get In Touch","tz-plazart"),
            "dependency"    => Array('element' => "type_contact", 'value' => array('2')),
        ),
        array(
            "type"          => "textarea",
            "class"         => "",
            "heading"       => esc_html__("Our Office Description", "tz-plazart"),
            "param_name"    => "our_office_description",
            "group"         => esc_html__("Type 2 Get In Touch","tz-plazart"),
            "dependency"    => Array('element' => "type_contact", 'value' => array('2')),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Text Contact Information", "tz-plazart"),
            "param_name"    => "text_conference_info",
            "value"         => "Contact Information",
            "group"         => esc_html__("Type 2 Get In Touch","tz-plazart"),
            "dependency"    => Array('element' => "type_contact", 'value' => array('2')),
        ),
        array(
            "type"          => "textarea",
            "class"         => "",
            "heading"       => esc_html__("Email", "tz-plazart"),
            "param_name"    => "email_add_information",
            "group"         => esc_html__("Type 2 Get In Touch","tz-plazart"),
            "dependency"    => Array('element' => "type_contact", 'value' => array('2')),
        ),
        array(
            "type"          => "textarea",
            "class"         => "",
            "heading"       => esc_html__("Phone", "tz-plazart"),
            "param_name"    => "phone_information",
            "group"         => esc_html__("Type 2 Get In Touch","tz-plazart"),
            "dependency"    => Array('element' => "type_contact", 'value' => array('2')),
        ),

    )
));