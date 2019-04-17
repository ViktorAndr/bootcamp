<?php

/*-----------------------------------------------------------------------------------*/
/*	Twitter Carousel Shortcode
/*-----------------------------------------------------------------------------------*/

function tzmaniva_twitter_slider($atts, $content = null) {
    $tz_twitter_username = $tz_twitter_postcount = $tz_twitter_consumer_key = $tz_twitter_consumer_secret = $tz_twitter_access_token = $tz_twitter_access_token_secret = '';
    extract(shortcode_atts(array(
    "tz_twitter_username" => '',
    "tz_twitter_postcount" => '',
    "tz_twitter_consumer_key" => '',
    "tz_twitter_consumer_secret" => '',
    "tz_twitter_access_token" => '',
    "tz_twitter_access_token_secret" => ''
    ), $atts));
    ob_start();

    $transName = 'list_tweets';
    $cacheTime = 20;

    if(false === ($twitterData = get_transient($transName) ) ){
        require_once ('twitteroauth/twitteroauth.php');
        $twitterConnection = new TwitterOAuth(
                                $tz_twitter_consumer_key,			// Consumer Key
                                $tz_twitter_consumer_secret,   		// Consumer secret
                                $tz_twitter_access_token,       		// Access token
                                $tz_twitter_access_token_secret    	// Access token secret
        );

        $twitterData = $twitterConnection->get(
            'statuses/user_timeline',
            array(
                'screen_name'     => $tz_twitter_username,
                'count'           => $tz_twitter_postcount,
                'exclude_replies' => false
            )
        );

        if($twitterConnection->http_code != 200)
        {
            $twitterData = get_transient($transName);
        }

        // Save our new transient.
        set_transient($transName, $twitterData, 60 * $cacheTime);
    }

    if(isset($twitterData) || $twitterData != '' || !isset($twitterData['error'])) {
        $i=0;
        $hyperlinks = true;
        $encode_utf8 = false;
        $twitter_users = true;
        $update = true;

        echo '<div class="tzTwitter-slider-box">';

        echo '<div class="tzTwitter-slider owl-carousel owl-theme">';
                if(isset($twitterData) && !empty($twitterData)):
                foreach($twitterData as $item){

                $msg = $item->text;
                $permalink = 'http://twitter.com/#!/'. $tz_twitter_username .'/status/'. $item->id_str;
                if($encode_utf8) $msg = utf8_encode($msg);
                $msg = encode_tweet($msg);
                $link = $permalink;


                echo '<div class="tzTwitter-item">';

                    if ($hyperlinks) {    $msg = hyperlinks($msg); }
                    if ($twitter_users)  { $msg = twitter_users($msg); }

                    if($update) {
                    $time = strtotime($item->created_at);

                    if ( ( abs( time() - $time) ) < 86400 )
                    $h_time = sprintf( esc_html__('%s ago', 'maniva-meetup'), human_time_diff( $time ) );
                    else
                    $h_time = time_elapsed_string($time);

                    echo '<div class="tzTwitter-icon">';
                    echo '<i class="fa fa-twitter"></i>';
                    echo '</div>';
                    echo '<span class="tweet_text">'.$msg.'</span>';
                    echo '<span class="tz_tweet_meetup_name">&#64;'.$tz_twitter_username.'</span>';
                    echo '<span class="tweet_time">'.$h_time.'</span>';
                    }
                echo '</div>';
            $i++;
            if ( $i >= $tz_twitter_postcount ) break;
            }
                endif;
        echo '</div>';

        echo '</div>';
    }
    ?>

    <?php
    return ob_get_clean();
}

add_shortcode("tz-twitter-slider", "tzmaniva_twitter_slider");

/*-----------------------------------------------------------------------------------*/
/*	Functions for Twitter Shortcode
/*-----------------------------------------------------------------------------------*/

// Beautify time
function time_elapsed_string($ptime) {
    $etime = time() - $ptime;
    if ($etime < 1)
    {
        return '0 seconds';
    }
    $a = array( 12 * 30 * 24 * 60 * 60  =>  'year',
        30 * 24 * 60 * 60       =>  'month',
        24 * 60 * 60            =>  'day',
        60 * 60                 =>  'hour',
        60                      =>  'minute',
        1                       =>  'second'
    );
    foreach ($a as $secs => $str)
    {
        $d = $etime / $secs;
        if ($d >= 1)
        {
            $r = round($d);
            return $r . ' ' . $str . ($r > 1 ? 's' : '') . ' ago';
        }
    }
}


// Find links and create the hyperlinks
function hyperlinks($text) {
    $text = preg_replace('/\b([a-zA-Z]+:\/\/[\w_.\-]+\.[a-zA-Z]{2,6}[\/\w\-~.?=&#038;%#+$*!]*)\b/i',"<a href=\"$1\" class=\"twitter-link\">$1</a>", $text);
    $text = preg_replace('/\b(?<!:\/\/)(www\.[\w_.\-]+\.[a-zA-Z]{2,6}[\/\w\-~.?=&#038;%#+$*!]*)\b/i',"<a href=\"http://$1\" class=\"twitter-link\">$1</a>", $text);

    // match name@address
    $text = preg_replace("/\b([a-zA-Z][a-zA-Z0-9\_\.\-]*[a-zA-Z]*\@[a-zA-Z][a-zA-Z0-9\_\.\-]*[a-zA-Z]{2,6})\b/i","<a href=\"mailto://$1\" class=\"twitter-link\">$1</a>", $text);
    //mach #trendingtopics. Props to Michael Voigt
    $text = preg_replace('/([\.|\,|\:|\|\|\>|\{|\(]?)#{1}(\w*)([\.|\,|\:|\!|\?|\>|\}|\)]?)\s/i', "$1<a href=\"http://twitter.com/#search?q=$2\" class=\"twitter-link\">#$2</a>$3 ", $text);
    return $text;
}


// Find twitter usernames and link to them
function twitter_users($text) {
    $text = preg_replace('/([\.|\,|\:|\|\|\>|\{|\(]?)@{1}(\w*)([\.|\,|\:|\!|\?|\>|\}|\)]?)\s/i', "$1<a href=\"http://twitter.com/$2\" class=\"twitter-user\">@$2</a>$3 ", $text);
    return $text;
}

// Encode single quotes in your tweets
function encode_tweet($text) {
    $text =  $text;
    return $text;
}
?>