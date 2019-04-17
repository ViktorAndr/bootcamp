<?php

/*** tz-header ***/

$menus = get_terms( 'nav_menu', array( 'hide_empty' => true ) );
global $menuArray;
$menuArray = array( 'Select Menu' => '');
foreach ( $menus as $menu ) {
    $menuArray[ $menu->slug ] = $menu->name;
}
vc_map( array(
    "name"          => esc_html__("Header Option", "tz-plazart"),
    "icon"          => "icon-element-header",
    "base"          => "tz-header",
    "weight"        => 1,
    "description"   => "",
    "class"         => "tzElement_extended",
    "category"      => esc_html__("Maniva Meetup", "tz-plazart"),
    "params"        => array(
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("Logo Image Type", "tz-plazart"),
            "param_name"    => "logo_type",
            "value"         => array(
                esc_html__("Logo Image", "tz-plazart") => 'image',
                esc_html__("Logo Text", "tz-plazart") => 'text'),
            "group"         =>  "Logo",
        ),
        array(
            "type"          => "attach_image",
            "heading"       => esc_html__("Upload Logo Image", "tz-plazart"),
            "param_name"    => "logo_image",
            "description"   => esc_html__("If you do not image logo, it will be used Logo in Theme Options", "tz-plazart"),
            "dependency"    => Array('element' => "logo_type", 'value' => array('image')),
            "group"         =>  "Logo",
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "admin_label"   => true,
            "heading"       => esc_html__("Logo Text", "tz-plazart"),
            "param_name"    => "logo_text",
            "description"   => "",
            "dependency"    => Array('element' => "logo_type", 'value' => array('text')),
            "group"         =>  "Logo",
        ),
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("Link Page Home Logo", "tz-plazart"),
            "param_name"    => "home_link",
            "value"         => array(
                esc_html__("Default", "tz-plazart")                        => 1,
                esc_html__("Custom Link Home Page Of Logo", "tz-plazart")  => 2
            ),
            "group"         =>  "Logo",
        ),
        array(
            "type"          => "vc_link",
            "heading"       => esc_html__( "URL (Link Custom Logo)", "tz-plazart" ),
            "param_name"    => "link_home_page",
            "description"   => esc_html__( "Add custom link logo.", "tz-plazart" ),
            "dependency"    => Array('element' => "home_link", 'value' => array('2')),
            "group"         =>  "Logo",
        ),
        array(
            "type" => "colorpicker",
            "class" => "",
            "admin_label" => true,
            "heading" => esc_html__('Color Logo Text', 'tz-plazart'),
            "param_name" => "color_logo_text",
            "description" => esc_html__("You can set a color of logo Text.", "tz-plazart"),
            "dependency"    => Array('element' => "logo_type", 'value' => array('text')),
            "group"         =>  "Logo",
        ),
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("Type of Header", "tz-plazart"),
            "param_name"    => "type",
            "value"         => array(
                esc_html__("Type 1", "tz-plazart") => 1,
                esc_html__("Type 2", "tz-plazart") => 2,
                esc_html__("Type 3", "tz-plazart") => 3,
                esc_html__("Type 4", "tz-plazart") => 4,
                esc_html__("Type 5", "tz-plazart") => 5,
            ),
            "group"         =>  "Menu",
        ),
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("Type position of header", "tz-plazart"),
            "param_name"    => "type_position",
            "value"         => array(
                esc_html__("Fix", "tz-plazart")        => 'fixed',
                esc_html__("Relative", "tz-plazart")   => 'relative',
            ),
            "group"         =>  "Menu",
        ),
        array(
            "type"          => "checkbox",
            "class"         => "",
            "heading"       => "",
            "param_name"    => "check_not_slider",
            "value"         => array(
                'Check this box if Fix Menu style is used and Sliders are not added'    => 1,
            ),
            "dependency"    => Array('element' => "type_position", 'value' => array('fixed')),
            "group"         =>  "Menu",
        ),
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("Type position of header on mobile", "tz-plazart"),
            "param_name"    => "type_position_mobile",
            "value"         => array(
                esc_html__("Relative", "tz-plazart")   => 'relative',
                esc_html__("Fixed", "tz-plazart")      => 'fixed',
            ),
            "group"         =>  "Menu",
        ),
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("Show Or Hide Cart", "tz-plazart"),
            "param_name"    => "show_hide_cart",
            "value"         => array(
                esc_html__("Show", "tz-plazart") => 1,
                esc_html__("Hide", "tz-plazart") => 2,
            ),
            "group"         =>  "Menu",
        ),
        array(
            "type"          => "colorpicker",
            "class"         => "hide_in_vc_editor",
            "heading"       => "Background Color Menu",
            "param_name"    => "bk_color_menu",
            "description"   => "Choose Background Color Menu",
            "dependency"    => Array('element' => "check_not_slider", 'value' => array('1')),
            "group"         =>  "Menu",
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => esc_html__("Select Menu", "tz-plazart"),
            "param_name" => "select_menu",
            "value" => $menuArray,
            "description" => esc_html__("Select menu of home page.", "tz-plazart"),
            "group"         =>  "Menu",
        ),
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("Use One page menu style (without sub menu items)", "tz-plazart"),
            "param_name"    => "click_menu_one_page",
            "value"         => array(
                esc_html__("Yes", "tz-plazart")    => 1,
                esc_html__("No", "tz-plazart")     => 0,
            ),
            "group"         =>  "Menu",
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("One-Page Scrolling Speed", "tz-plazart"),
            "param_name"    => "one_page_scrolling_speed",
            "value"         => "2200",
            "dependency"    => Array('element' => "click_menu_one_page", 'value' => array('1')),
            "group"         =>  "Menu",
        ),
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("Type Contact or Upcoming", "tz-plazart"),
            "param_name"    => "type_contact_upcoming",
            "value"         => array(
                esc_html__("Contact Info", "tz-plazart")   => 'contact',
                esc_html__("Upcoming Event", "tz-plazart") => 'upcoming',
            ),
            "dependency"    => Array('element' => "type", 'value' => array('1','3','4')),
            "group"         =>  "Menu",
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Phone", "tz-plazart"),
            "param_name"    => "phone",
            "dependency"    => Array('element' => "type_contact_upcoming", 'value' => array('contact')),
            "group"         =>  "Contact Info",
        ),
        array(
            "type"          =>  "textfield",
            "class"         =>  "",
            "heading"       =>  esc_html__("Mail", "tz-plazart"),
            "param_name"    =>  "mail",
            "description"   => "Contact Info filled in Header Top Option will be shown automatically if these boxes are empty",
            "dependency"    =>  Array('element' => "type_contact_upcoming", 'value' => array('contact')),
            "group"         =>  "Contact Info"
        ),
        array(
            "type"          =>  "textfield",
            "heading"       =>  esc_html__("Upcoming Event", "tz-plazart"),
            "param_name"    =>  "upcoming_event",
            "value"         =>  "Upcoming Event",
            "dependency"    =>  Array('element' => "type_contact_upcoming", 'value' => array('upcoming')),
            "group"         =>  "Upcoming Event"
        ),
        array(
            "type"          => "checkbox",
            "class"         => "",
            "heading"       => "",
            "param_name"    => "check_upcoming_one_page",
            "value"         => array(
                'Check this box if used click one page'    => 1,
            ),
            "dependency"    =>  Array('element' => "type_contact_upcoming", 'value' => array('upcoming')),
            "group"         =>  "Upcoming Event"
        ),
        array(
            "type"          => "vc_link",
            "heading"       => esc_html__( "Upcoming Event (Link)", "tz-plazart" ),
            "param_name"    => "link",
            "description"   => esc_html__( "Add custom link.", "tz-plazart" ),
            "dependency"    =>  Array('element' => "type_contact_upcoming", 'value' => array('upcoming')),
            "group"         =>  "Upcoming Event"
        ),
        array(
            "type"          =>  "textarea",
            "heading"       =>  esc_html__("Description Upcoming Event", "tz-plazart"),
            "param_name"    =>  "description_event",
            "value"         =>  "",
            "dependency"    =>  Array('element' => "type_contact_upcoming", 'value' => array('upcoming')),
            "group"         =>  "Upcoming Event"
        ),
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("Show or hide top header", "tz-plazart"),
            "param_name"    => "show_hide_contact_info",
            "value"         => array(
                esc_html__("Show All", "tz-plazart")                                   => 1,
                esc_html__("Only Show Contact Info Or Upcoming Event", "tz-plazart")   => 2,
                esc_html__("Only Show Social Network", "tz-plazart")                   => 3,
                esc_html__("Hide All", "tz-plazart")                                   => 4,
            ),
            "dependency"    => Array('element' => "type", 'value' => array('1','3','4')),
            "group"         =>  "Header Top",
        ),
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("Position Top Header", "tz-plazart"),
            "param_name"    => "position_top_header",
            "value"         => array(
                esc_html__("Left", "tz-plazart")   => 1,
                esc_html__("Center", "tz-plazart") => 2,
                esc_html__("Right", "tz-plazart")  => 3,
            ),
            "dependency"    =>  Array('element' => "show_hide_contact_info", 'value' => array('2','3')),
            "group"         =>  "Header Top",
        ),
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("Show or Hide Button Search", "tz-plazart"),
            "param_name"    => "show_hide_search",
            "value"         => array(
                esc_html__("Show", "tz-plazart")   => 1,
                esc_html__("Hide", "tz-plazart")   => 2,
            ),
            "description"   =>  "User Type menu 1 Or 3",
            "dependency"    => Array('element' => "type", 'value' => array('1','3')),
            "group"         =>  "Header Top",
        ),
    )
));