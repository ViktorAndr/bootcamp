<?php
/*** tz-title-meetup ***/

vc_map( array(
    "name"          =>  esc_html__("Section Title", "tz-plazart"),
    "icon"          =>  "icon-title",
    "base"          =>  "tz_title_meetup",
    "class"         =>  "tzElement_extended",
    "description"   =>  "Set a title and subtitle with style",
    "category"      =>  esc_html__("Maniva Meetup", "tz-plazart"),
    "params"        =>  array(

        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("Section Type", "tz-plazart"),
            "param_name"    => "section_type",
            "value"         => array(
                esc_html__("Type 1", "tz-plazart") => 'type1',
                esc_html__("Type 2", "tz-plazart") => 'type2',
                esc_html__("Type 3", "tz-plazart") => 'type3',
                esc_html__("Type 4", "tz-plazart") => 'type4',
            )
        ),

        array(
            "type"          => "textfield",
            "holder"        => "div",
            "class"         => "",
            "admin_label"   => true,
            "heading"       => esc_html__("Section Title", "tz-plazart"),
            "param_name"    => "title",
            "description"   => esc_html__( "To have texts light, use em tag or strong tag(for type 4).", "tz-plazart" ),
        ),
        array(
            "type"          => "textfield",
            "holder"        => "",
            "class"         => "",
            "admin_label"   => true,
            "heading"       => esc_html__("Margin title bottom", "tz-plazart"),
            "param_name"    => "titlebottom",
            "description"   => esc_html__( "eg(30px)", "tz-plazart" ),
            "dependency"    => Array('element' => "section_type", 'value' => array('type4'))
        ),

        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("Type font title", "tz-plazart"),
            "param_name"    => "type_font_title",
            "value"         => array(
                esc_html__("Default", "tz-plazart")        => 'default',
                esc_html__("Font Raleway", "tz-plazart")   => 'raleway',
            ),
            "group"         =>  esc_html__("Design Options","tz-plazart"),
        ),

        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("Type font weight title", "tz-plazart"),
            "param_name"    => "font_style",
            "value"         => array(
                esc_html__("Thin", "tz-plazart")          => 'thin',
                esc_html__("Extra-Light", "tz-plazart")   => 'extra_light',
                esc_html__("Normal", "tz-plazart")        => 'normal',
                esc_html__("Medium", "tz-plazart")        => 'medium',
                esc_html__("Bold", "tz-plazart")          => 'bold',
                esc_html__("Semi-Bold", "tz-plazart")     => 'semi_bold',
            )
        ,
            "dependency"    => Array('element' => "type_font_title", 'value' => array('raleway')),
            "group"         =>  esc_html__("Design Options","tz-plazart"),
        ),

        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("Type image under", "tz-plazart"),
            "param_name"    => "image_under",
            "value"         => array(
                esc_html__("Image under title", "tz-plazart")      => 'image_under_title',
                esc_html__("image under content", "tz-plazart")    => 'image_under_content',
            ),
            "dependency"    => Array('element' => "section_type", 'value' => array('type1'))
        ),

        array(
            "type"          => "attach_image",
            "class"         => "",
            "heading"       => esc_html__("Image under title", "tz-plazart"),
            "param_name"    => "image_under_title",
            "value"         =>  "",
            "dependency"    => Array('element' => "section_type", 'value' => array('type1',' '))
        ),

        array(
            "type"          => "textfield",
            "class"         => "",
            "admin_label"   => true,
            "heading"       => esc_html__("Sub Section Title", "tz-plazart"),
            "param_name"    => "sub_title",
            "dependency"    => Array('element' => "section_type", 'value' => array('type2'))
        ),

        array(
            "type"          =>  "textfield",
            "class"         =>  "",
            "heading"       =>  esc_html__("Icon font", "tz-plazart"),
            "param_name"    =>  "icon_font",
            "description"   =>  "EX: fa-question, Element collection support font awesome, you can click <a href='http://fortawesome.github.io/Font-Awesome/icons/' target='_blank'>Click</a>",
            "value"         =>  "fa-clock-o",
            "dependency"    => Array('element' => "section_type", 'value' => array('type2'))
        ),

        array(
            "type"          => "checkbox",
            "class"         => "",
            "heading"       => "",
            "param_name"    => "the_right",
            "value"         => array(
                'Icon position left'      => 1,
            ),
            "dependency"    => Array('element' => "section_type", 'value' => array('type2'))
        ),

        array(
            "type"          => "textarea_html",
            "heading"       => "Content",
            "param_name"    => "content",
            "value"         => "",
            "dependency"    => Array('element' => "section_type", 'value' => array('type1','type2','type4'))
        ),

        array(
            "type"          => "textfield",
            "admin_label"   => true,
            "heading"       => esc_html__("Text about", "tz-plazart"),
            "param_name"    => "text_button",
            "dependency"    => Array('element' => "section_type", 'value' => array('type2','type4')),
            "group"         =>  esc_html__("Setting Button","tz-plazart"),
        ),

        array(
            "type"          => "textfield",
            "admin_label"   => true,
            "heading"       => esc_html__("Link text about", "tz-plazart"),
            "param_name"    => "link_text_button",
            "dependency"    => Array('element' => "section_type", 'value' => array('type2','type4')),
            "group"         =>  esc_html__("Setting Button","tz-plazart"),
        ),

        array(
            "type"          => "textfield",
            "admin_label"   => true,
            "heading"       => esc_html__("Text about 2", "tz-plazart"),
            "param_name"    => "text_button_2",
            "dependency"    => Array('element' => "section_type", 'value' => array('type2')),
            "group"         =>  esc_html__("Setting Button","tz-plazart"),
        ),

        array(
            "type"          => "textfield",
            "admin_label"   => true,
            "heading"       => esc_html__("Link text about 2", "tz-plazart"),
            "param_name"    => "link_text_button_2",
            "dependency"    => Array('element' => "section_type", 'value' => array('type2')),
            "group"         =>  esc_html__("Setting Button","tz-plazart"),
        ),

        array(
            "type"          => "checkbox",
            "class"         => "",
            "heading"       => "",
            "param_name"    => "open_link",
            "value"         => array(
                'Open link in a new window/tab'      => 'link_target',
            ),
            "dependency"    => Array('element' => "section_type", 'value' => array('type2')),
            "group"         =>  esc_html__("Setting Button","tz-plazart"),
        ),

        array(
            "type"          =>  "textfield",
            "heading"       =>  esc_html__("Margin button", "tz-plazart"),
            "param_name"    =>  "margin_btn",
            "dependency"    =>  Array('element' => "section_type", 'value' => array('type2','type4')),
            "description"   =>  "Ex: 30px 0 0 0",
            "group"         =>  esc_html__("Design Options","tz-plazart"),
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
            "dependency"    => Array('element' => "section_type", 'value' => array('type1','type2','type4')),
            "group"         =>  esc_html__("Design Options","tz-plazart"),
        ),

        array(
            "type"          => "colorpicker",
            "class"         => "hide_in_vc_editor",
            "heading"       => "Color title",
            "param_name"    => "color_title",
            "description"   => "Choose color of title",
            "group"         =>  esc_html__("Setting Color","tz-plazart"),
        ),

        array(
            "type"          => "colorpicker",
            "class"         => "hide_in_vc_editor",
            "heading"       => "Color sub title",
            "param_name"    => "color_sub_title",
            "description"   => "Choose color of sub title",
            "dependency"    => Array('element' => "section_type", 'value' => array('type2','type4')),
            "group"         =>  esc_html__("Setting Color","tz-plazart"),
        ),

        array(
            "type"          => "colorpicker",
            "class"         => "hide_in_vc_editor",
            "heading"       => "Color border bottom sub title",
            "param_name"    => "border_bottom_sub_title_color",
            "description"   => "Choose color border bottom sub title of sub title",
            "dependency"    => Array('element' => "section_type", 'value' => array('type2','type4')),
            "group"         =>  esc_html__("Setting Color","tz-plazart"),
        ),

        array(
            "type"          => "colorpicker",
            "class"         => "hide_in_vc_editor",
            "heading"       => "Color Icon font",
            "param_name"    => "color_icon_font",
            "description"   => "Choose color of icon font",
            "dependency"    => Array('element' => "section_type", 'value' => array('type2','type4')),
            "group"         =>  esc_html__("Setting Color","tz-plazart"),
        ),

        array(
            "type"          => "dropdown",
            "class"         => "",
            "heading"       => esc_html__('Color button', 'tz-plazart'),
            "param_name"    => "color_button",
            "value"         => array(
                esc_html__("Default", "tz-plazart")   => 'tz_meetup_default',
                esc_html__("Dark", "tz-plazart")      => 'tz_meetup_btn_dark',
                esc_html__("Orange", "tz-plazart")    => 'tz_meetup_bnt_orange',
            ),
            "dependency"    => Array('element' => "section_type", 'value' => array('type2','type4')),
            "group"         =>  esc_html__("Setting Color","tz-plazart"),
        ),

        array(
            "type"          => "colorpicker",
            "class"         => "hide_in_vc_editor",
            "heading"       => "Color line",
            "param_name"    => "color_line",
            "description"   => "Choose color of line",
            "dependency"    => Array('element' => "section_type", 'value' => array('type3','type4')),
            "group"         =>  esc_html__("Setting Color","tz-plazart"),
        ),

    )
));

/*** tz-about-meetup ***/