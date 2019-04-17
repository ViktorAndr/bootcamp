<?php

/* tz-recent-blog-meetup */
$categories_array = array();
$categories = get_categories();
if ( isset( $categories ) && !empty( $categories ) ):
    foreach($categories as $category){
        $categories_array[$category->name] = $category->term_id;
    }
endif;

$cat = array('');
if ( isset( $categories ) && !empty( $categories ) ):
    foreach( $categories as $cate ):
        $cat[ $cate->name ] = $cate -> term_id;
    endforeach;
endif;

vc_map( array(
    "name"          =>  esc_html__("Recent Blog Meetup", "tz-plazart"),
    "icon"          =>  "icon-element",
    "base"          =>  "tz_recent_blog_meetup",
    "description"   =>  "",
    "class"         =>  "tzElement_extended",
    "category"      =>  esc_html__("Maniva Meetup", "tz-plazart"),
    "params"        =>  array(
        array(
            "type"          =>  "dropdown",
            "class"         =>  "hide_in_vc_editor",
            "heading"       =>  "Type Blog",
            "param_name"    =>  "type_blog",
            "value"         =>  array (
                "Carousel"          =>  1,
                "1 Full post list"  =>  2,
            ),
            "group"         => esc_html__("Blog Post","tz-plazart"),
        ),
        array(
            "type"          =>  "checkbox",
            "heading"       =>  esc_html__("Category Blog", "tz-plazart"),
            "param_name"    =>  "category_blog_arr",
            "value"         =>  $categories_array,
            "description"   =>  esc_html__("Choose category Blog.", "tz-plazart"),
            "group"         => esc_html__("Blog Post","tz-plazart"),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => "Limit Post",
            "param_name"    => "limit_post",
            "value"         => "",
            "group"         => esc_html__("Blog Post","tz-plazart"),
        ),
        array(
            "type"          =>  "dropdown",
            "class"         =>  "hide_in_vc_editor",
            "heading"       =>  "Number item desktop",
            "param_name"    =>  "item_desktop",
            "value"         =>  array (
                "4 item"    =>  4,
                "3 item"    =>  3,
                "2 item"    =>  2,
                "1 item"    =>  1
            ),
            "group"         => esc_html__("Blog Post","tz-plazart"),
        ),
        array(
            "type"          =>  "dropdown",
            "class"         =>  "hide_in_vc_editor",
            "heading"       =>  "order by",
            "param_name"    =>  "order_by",
            "value"         =>  array (
                esc_html__("ID", "tz-plazart")     => 'id',
                esc_html__("Title", "tz-plazart")  => 'title',
                esc_html__("Name", "tz-plazart")   => 'name',
                esc_html__("Date", "tz-plazart")   => 'date'
            ),
            "group"         => esc_html__("Blog Post","tz-plazart"),
        ),
        array(
            "type"          =>  "dropdown",
            "class"         =>  "hide_in_vc_editor",
            "heading"       =>  "order",
            "param_name"    =>  "tz_order",
            "value"         =>  array (
                esc_html__("ASC", "tz-plazart")    => 'ASC',
                esc_html__("DESC", "tz-plazart")   => 'DESC',
            ),
            "group"         => esc_html__("Blog Post","tz-plazart"),
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => "Text button",
            "param_name"    => "text_button",
            "value"         => "",
            "group"         => esc_html__("Blog Post","tz-plazart"),
        ),
        array(
            "type"          => "vc_link",
            "heading"       => esc_html__( "URL (Link)", "tz-plazart" ),
            "param_name"    => "link",
            "description"   => esc_html__( "Add custom link.", "tz-plazart" ),
            "group"         => esc_html__("Blog Post","tz-plazart"),
        ),
        array(
            "type"          =>  "checkbox",
            "class"         =>  "hide_in_vc_editor",
            "heading"       =>  "Hide prev/next",
            "param_name"    =>  "tz_prev_next",
            "value"         =>  array (
                'Hide'      =>  'hide'
            ),
            "group"         => esc_html__("Option Blog","tz-plazart"),
        ),
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("Auto Slider", "tz-plazart"),
            "param_name"    => "auto_blog",
            "value"         => array(
                esc_html__("No", "tz-plazart")    => 0,
                esc_html__("Yes", "tz-plazart")   => 1,
            ),
            "group"         => esc_html__("Option Blog","tz-plazart"),
        ),
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("Loop Slider Blog", "tz-plazart"),
            "param_name"    => "loop_blog",
            "value"         => array(
                esc_html__("No", "tz-plazart")    => 0,
                esc_html__("Yes", "tz-plazart")   => 1,
            ),
            "group"         => esc_html__("Option Blog","tz-plazart"),
        ),
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__("RTL Slider", "tz-plazart"),
            "param_name"    => "rtl_blog",
            "value"         => array(
                esc_html__("No", "tz-plazart")    => 0,
                esc_html__("Yes", "tz-plazart")   => 1,
            ),
            "group"         => esc_html__("Option Blog","tz-plazart"),
        ),

        array(
            "type"          =>  "dropdown",
            "class"         =>  "hide_in_vc_editor",
            "heading"       =>  "Show hide author",
            "param_name"    =>  "tz_hide_author",
            "value"         =>  array (
                'Show'      =>  'show',
                'Hide'      =>  'hide'
            ),
            "group"         => esc_html__("Option Blog","tz-plazart"),
        ),
        array(
            "type"          =>  "dropdown",
            "class"         =>  "hide_in_vc_editor",
            "heading"       =>  "Show hide date",
            "param_name"    =>  "tz_hide_date",
            "value"         =>  array (
                'Show'      =>  'show',
                'Hide'      =>  'hide'
            ),
            "group"         => esc_html__("Option Blog","tz-plazart"),
        ),
        array(
            "type"          =>  "dropdown",
            "class"         =>  "hide_in_vc_editor",
            "heading"       =>  "Type date",
            "param_name"    =>  "type_date",
            "value"         =>  array (
                'j M, Y'        =>  'j M, Y',
                'F j, Y'        =>  'F j, Y',
                'l, F jS, Y'    =>  'l, F jS, Y',
                'F, Y'          =>  'F, Y'
            ),
            "group"         => esc_html__("Option Blog","tz-plazart"),
            "dependency"    => array('element' => 'tz_hide_date', 'value' => array('show'))
        ),
        array(
            "type"          =>  "dropdown",
            "class"         =>  "hide_in_vc_editor",
            "heading"       =>  "Show hide comment",
            "param_name"    =>  "hide_comment",
            "value"         =>  array (
                'show'      =>  'show',
                'hide'      =>  'hide',
            ),
            "group"         => esc_html__("Option Blog","tz-plazart"),
        ),
    )
) );