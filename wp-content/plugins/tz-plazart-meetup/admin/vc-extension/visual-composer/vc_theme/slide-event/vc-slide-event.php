<?php

$cat_events_arr        =   array();
$category_events_arr   =   get_categories( array('taxonomy'=>'tribe_events_cat') );
if ( isset( $category_events_arr ) && !empty($category_events_arr) ) :
    foreach( $category_events_arr as $cate_events_arr ) {
        $cat_events_arr[$cate_events_arr->name]   =   $cate_events_arr->term_id;
    }
endif;

vc_map( array(
    "name"          =>  esc_html__("Slide Events", "tz-plazart"),
    "icon"          =>  "icon-slide-event",
    "base"          =>  "tz-slide-event",
    "description"   =>  "",
    "category"      =>  esc_html__("Maniva Meetup", "tz-plazart"),
    "params"        =>  array(

        array(
            "type"          =>  "checkbox",
            "heading"       =>  esc_html__("Chose category event calendar", "tz-plazart"),
            "param_name"    =>  "cat_tribe_events",
            "value"         =>  $cat_events_arr,
        ),
        array(
            "type"          =>  "textfield",
            "class"         =>  "",
            "heading"       =>  esc_html__("Limit", "tz-plazart"),
            "param_name"    =>  "limit",
            "value"         =>  3,
        ),
        array(
            "type"          =>  "dropdown",
            "heading"       =>  esc_html__("Order by", "tz-plazart"),
            "param_name"    =>  "order_by",
            "value"         =>  array(
                esc_html__("Date", "tz-plazart")   => 'date',
                esc_html__("ID", "tz-plazart")     => "ID",
                esc_html__("Title", "tz-plazart")  => "title"
            ),
        ),
        array(
            "type"          =>  "dropdown",
            "heading"       =>  esc_html__("Order", "tz-plazart"),
            "param_name"    =>  "order",
            "value"         =>  array(
                esc_html__("Z --> A", "tz-plazart") => 'DESC',
                esc_html__("A --> Z", "tz-plazart") => "ASC"
            ),
        ),
        array(
            "type"          =>  "textfield",
            "class"         =>  "",
            "heading"       =>  esc_html__("Limit", "tz-plazart"),
            "param_name"    =>  "btn_event_text",
            "value"         =>  'Details',
        ),

    )
) );