<?php

/*** tz_twitter_slider ***/

vc_map( array(
    "name" => esc_html__("Twitter Slider", "tz-plazart"),
    "weight"        => 1,
    "base" => "tz-twitter-slider",
    "icon" => "icon-element",
    "description" => "",
    "class" => "tzElement_extended",
    "category" => esc_html__("Maniva Meetup", "tz-plazart"),
    "params" => array(
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Twitter Username", "tz-plazart"),
            "param_name"    => "tz_twitter_username",
            "value"         => "",
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Number of Tweets", "tz-plazart"),
            "param_name"    => "tz_twitter_postcount",
            "description"   => esc_html__("How many tweets you want to display into the carousel. 3 should be enough.", "tz-plazart"),
            "value"         => "",
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Twitter API Key", "tz-plazart"),
            "param_name"    => "tz_twitter_consumer_key",
            "description"   => esc_html__("Insert your Twitter API key.", "tz-plazart"),
            "value"         => "",
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Twitter API Secret", "tz-plazart"),
            "param_name"    => "tz_twitter_consumer_secret",
            "description"   => esc_html__("Insert your Twitter API Secret.", "tz-plazart"),
            "value"         => "",
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Twitter Access Token", "tz-plazart"),
            "param_name"    => "tz_twitter_access_token",
            "description"   => esc_html__("Insert your Twitter Access Token.", "tz-plazart"),
            "value"         => "",
        ),
        array(
            "type"          => "textfield",
            "class"         => "",
            "heading"       => esc_html__("Twitter Access Token Secret", "tz-plazart"),
            "param_name"    => "tz_twitter_access_token_secret",
            "description"   => esc_html__("Insert your Twitter Access Token Secret.", "tz-plazart"),
            "value"         => "",
        )
    )
) );