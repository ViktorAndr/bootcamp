<?php

$tz_event_cf7 = get_posts('post_type="wpcf7_contact_form"&numberposts=-1');

$contact_forms_event = array();
if ($tz_event_cf7) {
    foreach ($tz_event_cf7 as $tzcform) {
        $contact_forms_event[$tzcform->post_title] = $tzcform->ID;
    }
} else {
    $contact_forms_event[esc_html__('No contact forms found', 'tz-plazart')] = 0;
}

function tz_get_event_data( $post_type = 'tribe_events' ) {
    $posts = get_posts( array(
        'posts_per_page' 	=> -1,
        'post_type'			=> $post_type,
    ));
    $result = array();
    foreach ( $posts as $post )	{
        $result[] = array(
            'value' => $post->ID,
            'label' => $post->post_title,
        );
    }
    return $result;

}

vc_map( array(
    "name"          =>  esc_html__("Slide Features Events", "tz-plazart"),
    "icon"          =>  "icon-features-event",
    "base"          =>  "tz-features-event",
    "description"   =>  "",
    "category"      =>  esc_html__("Maniva Meetup", "tz-plazart"),
    "params"        =>  array(

        array(
            "type"          => "autocomplete",
            "heading"       => esc_html__("Include Events Calendar", "tz-plazart"),
            "param_name"    => "tz_features_event",
            "admin_label"   =>  true,
            "description"   => "Add Events Calendar by title.",
            "settings"      =>  array(
                'multiple'  => true,
                'sortable'  => true,
                'groups'    => true,
                'values'    => tz_get_event_data()
            ),
            "group"         => esc_html__("Event","tz-plazart"),
        ),

        array(
            "type"          =>  "dropdown",
            "heading"       =>  "Order By",
            "param_name"    =>  "order_by",
            "value"         =>  array (
                esc_html__("ID", "tz-plazart")     => 'id',
                esc_html__("Name", "tz-plazart")   => 'name',
                esc_html__("Date", "tz-plazart")   => 'date'
            ),
            "group"         => esc_html__("Event","tz-plazart"),
        ),

        array(
            "type"          =>  "dropdown",
            "heading"       =>  "order",
            "param_name"    =>  "tz_order",
            "value"         =>  array (
                esc_html__("ASC", "tz-plazart")    => 'ASC',
                esc_html__("DESC", "tz-plazart")   => 'DESC',
            ),
            "group"         => esc_html__("Event","tz-plazart"),
        ),

        array(
            "type"          => "textfield",
            "heading"       => esc_html__("Text button", "tz-plazart"),
            "param_name"    => "text_btn",
            "value"         => "learn more",
            "group"         =>  esc_html__("Event","tz-plazart"),
        ),

        array(
            "type"          =>  "dropdown",
            "heading"       =>  "Show Or Hide AddToAny Plugin",
            "param_name"    =>  "tz_show_hide_add_to_any",
            "value"         =>  array (
                esc_html__("Show", "tz-plazart")   => 1,
                esc_html__("Hide", "tz-plazart")   => 0,
            ),
            "group"         => esc_html__("Event","tz-plazart"),
        ),

        array(
            "type"          =>  "dropdown",
            "heading"       =>  "Show Or Hide Contact Form 7",
            "param_name"    =>  "tz_show_hide_cf7",
            "value"         =>  array (
                esc_html__("Show", "tz-plazart")   => 1,
                esc_html__("Hide", "tz-plazart")   => 0,
            ),
            "group"         => esc_html__("Event","tz-plazart"),
        ),

        array(
            "type"          => "dropdown",
            "class"         => "",
            "heading"       => "Select contact form",
            "param_name"    => "contact_form_id",
            "value"         => $contact_forms_event,
            "description"   => esc_html__('Choose previously created contact form from the drop down list.', 'tz-plazart'),
            "dependency"    => Array('element' => "tz_show_hide_cf7", 'value' => array('1')),
            "group"         =>  esc_html__("Event","tz-plazart"),
        ),

        array(
            "type"          => "textfield",
            "heading"       => esc_html__("Text Title Contact Form", "tz-plazart"),
            "param_name"    => "text_title_cf",
            "value"         => "EVENT <em>REGISTER</em>",
            "group"         =>  esc_html__("Event","tz-plazart"),
            "dependency"    => Array('element' => "tz_show_hide_cf7", 'value' => array('1')),
        ),

        array(
            "type"          =>  "dropdown",
            "heading"       =>  "Show Or Hide Address Event",
            "param_name"    =>  "tz_show_hide_add_event",
            "value"         =>  array (
                esc_html__("Show", "tz-plazart")   => 1,
                esc_html__("Hide", "tz-plazart")   => 0,
            ),
            "group"         => esc_html__("Event","tz-plazart"),
        ),

        array(
            "type"          =>  "dropdown",
            "heading"       =>  "Show Or Hide Excerpt Event",
            "param_name"    =>  "tz_show_hide_excerpt_event",
            "value"         =>  array (
                esc_html__("Show", "tz-plazart")   => 1,
                esc_html__("Hide", "tz-plazart")   => 0,
            ),
            "group"         => esc_html__("Event","tz-plazart"),
        ),

        array(
            "type"          => "dropdown",
            "class"         => "",
            "heading"       => esc_html__("Auto Slider", "tz-plazart"),
            "param_name"    => "auto_slider",
            "description"   => esc_html__("Slides will automatically transition", "tz-plazart"),
            "value"         => array(
                esc_html__("Yes", "tz-plazart")    =>    1,
                esc_html__("No", "tz-plazart")     =>    0,
            ),
            "group"         => esc_html__("Setting Slider","tz-plazart"),
        ),

        array(
            "type"          =>  "textfield",
            "class"         =>  "",
            "heading"       =>  esc_html__("Speed Next Slide Automatically", "tz-plazart"),
            "param_name"    =>  "speed",
            "value"         =>  6000,
            "description"   => esc_html__("Slide transition duration (in ms)", "tz-plazart"),
            "dependency"    =>  Array('element' => "auto_slider", 'value' => array('1')),
            "group"         => esc_html__("Setting Slider","tz-plazart"),
        ),

        array(
            "type"          =>  "textfield",
            "class"         =>  "",
            "heading"       =>  esc_html__("Speed Slider", "tz-plazart"),
            "param_name"    =>  "speed_slider",
            "value"         =>  1200,
            "description"   => esc_html__("Slide transition duration (in ms)", "tz-plazart"),
            "group"         => esc_html__("Setting Slider","tz-plazart"),
        ),

        array(
            "type"          =>  "colorpicker",
            "heading"       =>  esc_html__("Background Button Link", "tz-plazart"),
            "param_name"    =>  "bk_btn_link",
            "value"         =>  "",
            "group"         => esc_html__("Setting Color","tz-plazart"),
        ),
        array(
            "type"          =>  "colorpicker",
            "heading"       =>  esc_html__("Color Text button", "tz-plazart"),
            "param_name"    =>  "color_text_btn",
            "value"         =>  "",
            "group"         => esc_html__("Setting Color","tz-plazart"),
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

    )
) );