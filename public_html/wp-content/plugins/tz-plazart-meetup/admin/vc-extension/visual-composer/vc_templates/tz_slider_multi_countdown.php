<?php

$type_overlay_slider = $color_overlay_slider = $auto_slider_multi = $speed = $speed_slider = $modem = $slider_navigation = $slides_pagination = '';
$color_address = $color_title_event = $color_event_time = $color_countdown = $color_btn_ticket = $color_text_btn = $color_hover_text_btn = '';
$text_day = $text_hour = $text_min = $text_sec = '';

extract( shortcode_atts( array(

    'type_overlay_slider'   =>  1,
    'color_overlay_slider'  =>  '',
    'auto_slider_multi'     =>  0,
    'speed'                 =>  6000,
    'speed_slider'          =>  1000,
    'modem'                 =>  'fade',
    'slider_navigation'     =>  1,
    'slides_pagination'     =>  1,
    'color_address'         =>  '',
    'color_title_event'     =>  '',
    'color_event_time'      =>  '',
    'color_countdown'       =>  '',
    'color_btn_ticket'      =>  '',
    'color_text_btn'        =>  '',
    'color_hover_text_btn'  =>  '',
    'text_day'              =>  'days',
    'text_hour'             =>  'hours',
    'text_min'              =>  'mins',
    'text_sec'              =>  'secs',


), $atts ) );

?>
<div class="tz_slider_multi_countdown" data-overlay_slider="<?php echo esc_attr( $type_overlay_slider ); ?>" <?php echo ( $type_overlay_slider == 1 && $color_overlay_slider !='' ? 'data-bk-slider="'. $color_overlay_slider .'"' : '' ) ?> data-auto-slider="<?php echo esc_attr( $auto_slider_multi ); ?>" data-slider-modem="<?php echo esc_attr( $modem ); ?>" data-slider-speed="<?php echo esc_attr( $speed ); ?>" data-speed-slider="<?php echo esc_attr( $speed_slider ); ?>" data-pager="<?php echo esc_attr( $slides_pagination ); ?>" <?php echo ( $color_address !='' ? 'data-color-address="'. $color_address .'"' : '' ) ?> <?php echo ( $color_title_event !='' ? 'data-color-title-event="'. $color_title_event .'"' : '' ) ?> <?php echo ( $color_event_time !='' ? 'data-color-event-time="'. $color_event_time .'"' : '' ) ?> <?php echo ( $color_countdown !='' ? 'data-color-countdown="'. $color_countdown .'"' : '' ) ?>>

    <div id="slides">
        <div class="slides-container" data-text-day="<?php echo balanceTags( $text_day ); ?>" data-text-hour="<?php echo balanceTags( $text_hour ); ?>" data-text-min="<?php echo balanceTags( $text_min ); ?>" data-text-sec="<?php echo balanceTags( $text_sec ); ?>" <?php echo ( $color_btn_ticket !='' ? 'data-color-border-btn="'. $color_btn_ticket .'"' : '' ); ?> <?php echo ( $color_text_btn !='' ? 'data-color-text-btn="'. $color_text_btn .'"' : '' ) ?> <?php echo ( $color_hover_text_btn !='' ? 'data-color-hover-text-btn="'. $color_hover_text_btn .'"' : '' ); ?>>
            <?php echo wpb_js_remove_wpautop( $content ); ?>
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
</div>

