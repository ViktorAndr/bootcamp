<?php

function tz_get_single_event_data( $post_type = 'tribe_events' ) {

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
    "name"          =>  esc_html__("Single Feature Event", "tz-plazart"),
    "icon"          =>  "icon-single-feature-event",
    "base"          =>  "tz-single-feature-event",
    "description"   =>  "",
    "category"      =>  esc_html__("Maniva Meetup", "tz-plazart"),
    "params"        =>  array(

        array(
            "type"          => "autocomplete",
            "heading"       => esc_html__("Include Events Calendar", "tz-plazart"),
            "param_name"    => "tz_features_event",
            "admin_label"   =>  true,
            "settings"      =>  array(
                'multiple'  => true,
                'sortable'  => true,
                'groups'    => true,
                'values'    => tz_get_single_event_data()
            ),
            "description"   => "Add Single Event Calendar by title.",
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Text Title Details", "tz-plazart"),
            "param_name"    => "txt_title_detail",
            "value"         => "Details",
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Text Start Time", "tz-plazart"),
            "param_name"    => "txt_start_time",
            "value"         => "Start:",
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Text End Time", "tz-plazart"),
            "param_name"    => "txt_end_time",
            "value"         => "End:",
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Text Cost", "tz-plazart"),
            "param_name"    => "txt_end_cost",
            "value"         => "Cost:",
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Text Event Categories", "tz-plazart"),
            "param_name"    => "txt_categories",
            "value"         => "Event Categories",
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Text Event Tags", "tz-plazart"),
            "param_name"    => "txt_tag",
            "value"         => "Event Tags:",
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Text Website", "tz-plazart"),
            "param_name"    => "txt_website",
            "value"         => "Website:",
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Text Title Schedule", "tz-plazart"),
            "param_name"    => "txt_title_schedule",
            "value"         => "Schedule",
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Text Buy Ticket", "tz-plazart"),
            "param_name"    => "txt_buy_ticket",
            "value"         => "Buy Ticket",
        ),

    )
) );