<?php
function tz_meetup_slider_home( $atts, $content = null ) {

    $type_slider = $type_overlay_slider = $color_overlay_slider = $image_slider = $modem = $speed = $speed_slider = $auto_slider = '';
    $btn_one_page = $text_btn_1 = $link_btn_1 = $text_btn_2 = $link_btn_2 = $shape_btn = '';
    $open_link =  $facebook_url = $twitter_url = $flickr_url = $googleplus_url = $instagram_url =  '';
    $hide_count_down = $date = $month = $year = $time = $hide_event_ended = $event_ended = '';
    $slider_navigation = $slides_pagination = $video_mp4 = $video_ogg = $video_web = '';
    $text_day = $text_hour = $text_min = $text_sec = '';

    extract(shortcode_atts(array(

        'type_slider'           =>  'slider_img',
        'type_overlay_slider'   =>  1,
        'color_overlay_slider'  =>  '',
        'image_slider'          =>  '',
        'modem'                 =>  'fade',
        'speed'                 =>  6000,
        'speed_slider'          =>  1000,
        'auto_slider'           =>  1,
        'slider_navigation'     =>  1,
        'slides_pagination'     =>  1,
        'video_mp4'             =>  '',
        'video_ogg'             =>  '',
        'video_web'             =>  '',
        'open_link'             =>  '',
        'facebook_url'          =>  '',
        'twitter_url'           =>  '',
        'flickr_url'            =>  '',
        'googleplus_url'        =>  '',
        'instagram_url'         =>  '',
        'btn_one_page'          =>  1,
        'text_btn_1'            =>  '',
        'link_btn_1'            =>  '',
        'text_btn_2'            =>  '',
        'link_btn_2'            =>  '',
        'shape_btn'             =>  1,
        'hide_count_down'       =>  'show',
        'date'                  =>  1,
        'month'                 =>  1,
        'year'                  =>  '',
        'time'                  =>  '23:59:59',
        'text_day'              =>  'days',
        'text_hour'             =>  'hours',
        'text_min'              =>  'mins',
        'text_sec'              =>  'secs',
        'hide_event_ended'      =>  'show',
        'event_ended'           =>  'The event is ended',

    ), $atts));
    ob_start();

    $partner_arr = array();
    $maniva_meetup_class_video_bk = $tz_class_btn_one_page = '';
    if (  $type_slider == 'slider_img' && isset($image_slider) && !empty( $image_slider ) ):
        $partner_arr    = explode(',', $image_slider);
    endif;

    if ( $type_slider == 'video_bk' ) :

        $maniva_meetup_class_video_bk = 'tz_content_slider_meetup_video_bk';

    endif;

    $content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content

    if ( $btn_one_page == 1 ) {
        $tz_class_btn_one_page = ' tz_slider_home_btn_click_one_page';
    }
    if ( $shape_btn == 1 ) :
        $tz_shape_btn   =   ' shape_btn_round';
    elseif ( $shape_btn == 2 ) :
        $tz_shape_btn   =   ' shape_btn_square';
    else:
        $tz_shape_btn   =   ' shape_btn_rounded';
    endif;

?>

    <div class="tz_home_slider_meetup" <?php if ( $type_slider == 'slider_img' ) : ?> data-type-slider="<?php echo esc_attr( $type_slider );  ?>"  data-auto-slider="<?php echo esc_attr( $auto_slider ); ?>" data-slider-modem="<?php echo esc_attr( $modem ); ?>" data-slider-speed="<?php echo esc_attr( $speed ); ?>" data-speed-slider="<?php echo esc_attr( $speed_slider ); ?>" data-pager="<?php echo esc_attr( $slides_pagination ); ?>"<?php endif; ?>>

        <?php if ( $type_overlay_slider == 1 ) : ?>

            <div class="meetup_bl_slider_home" <?php echo ( $color_overlay_slider != '' ? 'style="background:' . esc_attr( $color_overlay_slider ) . '"' : '' ); ?>></div>

        <?php endif; ?>

        <div id="slides">

            <div class="slides-container">

                <?php

                if (  $type_slider == 'slider_img' ) :
                    for( $i = 0; $i < count($partner_arr); $i++ ):

                ?>

                    <div class="tz_slides_imgaes">


                        <?php echo wp_get_attachment_image( $partner_arr[$i],'full' ); ?>

                    </div>

                <?php

                    endfor;
                else:

                ?>
                    <div class="tz_video_slider">
                        <video class="videoID" autoplay loop muted>
                            <source type="video/mp4" src="<?php echo esc_url( $video_mp4 ); ?>" />
                            <source type="video/ogg" src="<?php echo esc_url( $video_ogg ); ?>" />
                            <source type="video/webm" src="<?php echo esc_url( $video_web ); ?>" />
                        </video>
                    </div>

                <?php endif; ?>

            </div>

            <?php if ( $slider_navigation == 1 ) : ?>

                <nav class="slides-navigation">
                    <a href="#" class="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </a>
                </nav>

            <?php endif; ?>

        </div>

        <div class="tz_content_slider_meetup <?php echo esc_attr( $maniva_meetup_class_video_bk ); ?>">

            <?php if ( $type_slider == 'video_bk' ) : ?>

                <p class="tz_btn_play_video_mobile">
                    <i class="fa fa-play" aria-hidden="true"></i>
                    <i class="fa fa-pause" aria-hidden="true"></i>
                </p>

            <?php endif; ?>

            <?php if ($facebook_url !='' || $twitter_url != '' || $flickr_url != '' || $googleplus_url != '' || $instagram_url != '' ) : ?>

                <div class="tz_meetup_social">

                    <span class="meetup_line_left"></span>

                    <?php if ( $facebook_url != '' ) : ?>
                        <a <?php echo ( $open_link == 'link_target' ? 'target="_blank"' : '' ) ?> href="<?php echo esc_url( $facebook_url ); ?>">
                            <i class="fa fa-facebook"></i>
                        </a>
                    <?php endif; ?>

                    <?php if ( $twitter_url != '' ) : ?>
                        <a <?php echo ( $open_link == 'link_target' ? 'target="_blank"' : '' ) ?> href="<?php echo esc_url( $twitter_url ); ?>">
                            <i class="fa fa-twitter"></i>
                        </a>
                    <?php endif; ?>

                    <?php if ( $flickr_url != '' ) : ?>
                        <a <?php echo ( $open_link == 'link_target' ? 'target="_blank"' : '' ) ?> href="<?php echo esc_url( $flickr_url ); ?>">
                            <i class="fa fa-camera-retro"></i>
                        </a>
                    <?php endif; ?>

                    <?php if ( $googleplus_url != '' ) : ?>
                        <a <?php echo ( $open_link == 'link_target' ? 'target="_blank"' : '' ) ?> href="<?php echo esc_url( $googleplus_url ); ?>">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    <?php endif; ?>

                    <?php if ( $instagram_url != '' ) : ?>
                        <a <?php echo ( $open_link == 'link_target' ? 'target="_blank"' : '' ) ?> href="<?php echo esc_url( $instagram_url ); ?>">
                            <i class="fa fa-instagram"></i>
                        </a>
                    <?php endif; ?>

                    <span class="meetup_line_right"></span>

                </div>

            <?php endif; ?>

            <?php if ( $content != '' ) : ?>

                <div class="tz_meetup_slider_home_text">

                    <?php echo balanceTags($content); ?>

                </div>

            <?php endif; ?>

            <?php if( $hide_count_down == 'show' ) : ?>

                <div class="tz_meetup_countdown" data-hide-ended="<?php echo esc_attr( $hide_event_ended ); ?>" data-text-ended="<?php echo balanceTags( $event_ended ); ?>" data-countdown="<?php echo esc_attr( $year ).'/'.esc_attr( $month ).'/'.esc_attr( $date ).' '.esc_attr( $time ); ?>" data-text-day="<?php echo balanceTags( $text_day ); ?>" data-text-hour="<?php echo balanceTags( $text_hour ); ?>" data-text-min="<?php echo balanceTags( $text_min ); ?>" data-text-sec="<?php echo balanceTags( $text_sec ); ?>">
                    <div id="clock"></div>
                </div>

            <?php endif; ?>

            <?php if ( $text_btn_1 != '' || $text_btn_2 != '' ) : ?>

                <div class="tz_slider_meetup_btn">
                    <ul class="tz_slider_home_btn_click<?php echo esc_attr( $tz_class_btn_one_page ); ?>">

                        <?php if ( $text_btn_1 != '' ) : ?>

                            <li>
                                <a class="tz_slider_meetup_btn_1<?php echo esc_attr( $tz_shape_btn ); ?>" href="<?php echo esc_url( $link_btn_1 ); ?>">
                                    <?php echo balanceTags( $text_btn_1 ); ?>
                                </a>
                            </li>

                        <?php endif; ?>

                        <?php if ( $text_btn_2 != '' ) : ?>
                            <li>
                                <a class="tz_slider_meetup_btn_1 tz_slider_meetup_btn_2<?php echo esc_attr( $tz_shape_btn ); ?>" href="<?php echo esc_url( $link_btn_2 ); ?>">
                                    <?php echo balanceTags( $text_btn_2 ); ?>
                                </a>
                            </li>


                        <?php endif; ?>

                    </ul>
                </div>

            <?php endif; ?>

        </div>
    </div>

<?php

    $tz_maniva  =   ob_get_contents();
    ob_end_clean();
    return $tz_maniva;
}

add_shortcode('tz_slider_home_meetup','tz_meetup_slider_home');

?>