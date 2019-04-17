<?php

$address_event = $title_event = $type_slider = $image_slider = $video_multi_countdown_mp4 = $video_multi_countdown_ogv = $video_multi_countdown_web = '';
$event_time = $show_hide_count_down = $date = $month = $year = $time = $text_link = $link = $multi_slider_item_type = $t1_facebook_url = $t1_twitter_url = $t1_flickr_url = $t1_googleplus_url = $t1_instagram_url = $t1_linkedln_url = $t1_title = $t1_img = $t1_slogan = '';

extract( shortcode_atts( array(

    'address_event'                 =>  '',
    'title_event'                   =>  '',
    'type_slider'                   =>  'slider_img',
    'image_slider'                  =>  '',
    'video_multi_countdown_mp4'     =>  '',
    'video_multi_countdown_ogv'     =>  '',
    'video_multi_countdown_web'     =>  '',
    'event_time'                    =>  'August 25-27',
    'show_hide_count_down'          =>  1,
    'date'                          =>  1,
    'month'                         =>  1,
    'year'                          =>  '2016',
    'time'                          =>  '23:59:59',
    'text_link'                     =>  'Buy tickets',
    'link'                          =>  '',
    'multi_slider_item_type'        =>  '',
    't1_facebook_url'               =>  '',
    't1_twitter_url'                =>  '',
    't1_flickr_url'                 =>  '',
    't1_googleplus_url'             =>  '',
    't1_instagram_url'              =>  '',
    't1_linkedln_url'               =>  '',
    't1_title'                      =>  '',
    't1_img'                        =>  '',
    't1_slogan'                     =>  '',

), $atts ) );


$content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content

$vc_link = vc_build_link( $link );

?>
<div class="tz_slider_item_multi_countdown">
    <div class="bk_multi_countdown"></div>

    <?php

    if ( $type_slider == 'slider_img' ) :

        echo wp_get_attachment_image( $image_slider,'full' );

    else:

    ?>

        <video class="video_multi_countdown" autoplay loop muted>
            <source type="video/mp4" src="<?php echo esc_url( $video_multi_countdown_mp4 ); ?>" />
            <source type="video/ogg" src="<?php echo esc_url( $video_multi_countdown_ogv ); ?>" />
            <source type="video/webm" src="<?php echo esc_url( $video_multi_countdown_web ); ?>" />
        </video>

    <?php endif; ?>

    <div class="tz_box_event_slider">

        <?php if ( $type_slider == 'video_bk' ) : ?>

            <p class="tz_btn_play_video_mobile">
                <i class="fa fa-play" aria-hidden="true"></i>
                <i class="fa fa-pause" aria-hidden="true"></i>
            </p>

        <?php endif; ?>

        <?php if(isset($multi_slider_item_type) && $multi_slider_item_type == 0 ): ?>

            <?php if ( $address_event != '' ||  $title_event != '' || $event_time !='' ) : ?>

                <div class="tz_box_event_content">

                    <?php if ( $address_event != '' ) : ?>

                        <span class="tz_address_event">
                            <?php echo balanceTags( $address_event ); ?>
                        </span>

                    <?php endif; ?>

                    <?php if ( $title_event != '' ) : ?>

                        <h2>
                            <?php echo balanceTags( $title_event ); ?>
                        </h2>

                    <?php endif; ?>

                    <?php if ( $event_time != '' ) : ?>

                        <span class="tz_event_time">
                            <?php echo balanceTags( $event_time ); ?>
                        </span>

                    <?php endif; ?>

                </div>

            <?php endif; ?>

        <?php else: ?>

            <?php if($t1_facebook_url != '' || $t1_twitter_url != '' || $t1_flickr_url != '' || $t1_googleplus_url != '' || $t1_instagram_url != '' || $t1_linkedln_url != ''): ?>
            <div class="tz_box_event_slider__social">
                <ul>
                    <?php if($t1_facebook_url != ''): ?><li><a href="<?php echo esc_attr($t1_facebook_url); ?>" title="maniva-social-facebook"><i class="fa fa-facebook"></i></a></li><?php endif; ?>
                    <?php if($t1_twitter_url != ''): ?><li><a href="<?php echo esc_attr($t1_twitter_url); ?>" title="maniva-social-twitter"><i class="fa fa-twitter"></i></a></li><?php endif; ?>
                    <?php if($t1_flickr_url != ''): ?><li><a href="<?php echo esc_attr($t1_flickr_url); ?>" title="maniva-social-flickr"><i class="fa fa-flickr"></i></a></li><?php endif; ?>
                    <?php if($t1_googleplus_url != ''): ?><li><a href="<?php echo esc_attr($t1_googleplus_url); ?>" title="maniva-social-google-plus"><i class="fa fa-google-plus"></i></a></li><?php endif; ?>
                    <?php if($t1_instagram_url != ''): ?><li><a href="<?php echo esc_attr($t1_instagram_url); ?>" title="maniva-social-instagram"><i class="fa fa-instagram"></i></a></li><?php endif; ?>
                    <?php if($t1_linkedln_url != ''): ?><li><a href="<?php echo esc_attr($t1_linkedln_url); ?>" title="maniva-social-linkedln"><i class="fa fa-linkedin"></i></a></li><?php endif; ?>
                </ul>
            </div>
            <?php endif; ?>

            <?php if(isset($t1_title) && $t1_title != '' ): ?>
                <h3><?php echo esc_html($t1_title); ?></h3>
            <?php  endif; ?>

            <?php if(isset($t1_img) && $t1_img != '' ): ?>
                <?php echo wp_get_attachment_image( $t1_img,'full' ); ?>
            <?php  endif; ?>

            <?php if(isset($t1_slogan) && $t1_slogan != '' ): ?>
                <p><?php echo esc_html($t1_slogan) ?></p>
            <?php endif; ?>

        <?php endif; ?>

        <?php if ( $show_hide_count_down == 1 ) : ?>
            <div class="tz_box_countdown">
                <div class="tz_event_countdown" data-countdown="<?php echo esc_attr( $year ).'/'.esc_attr( $month ).'/'.esc_attr( $date ).' '.esc_attr( $time ); ?>"></div>
            </div>

        <?php endif; ?>

        <?php if ( $text_link !='' ) : ?>

            <div class="tz_btn_ticket">
                <a <?php echo ( $vc_link['target'] != '' ? 'target="' . esc_attr( $vc_link['target'] ) . '"' : '') .' '. ( $vc_link['url'] != '' ? 'href="' . esc_attr( $vc_link['url'] ) . '"' : '' ) . ' '. ( $vc_link['title'] != '' ? 'title="' . esc_attr( $vc_link['title'] ) . '"' : '' )  ; ?>>
                    <?php echo esc_attr( $text_link ); ?>
                </a>
            </div>

        <?php endif; ?>

    </div>

</div>