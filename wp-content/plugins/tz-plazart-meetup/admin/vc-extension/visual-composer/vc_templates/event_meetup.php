<?php

    $title = $sub_title = $color_title = $color_sub_title = '';

extract( shortcode_atts( array(

    'title'             =>  '',
    'sub_title'         =>  '',
    'color_title'       =>  '',
    'color_sub_title'   =>  '',

), $atts ) );

?>

<div class="tz_event_meetup">
    <div class="tz_box_event_meetup">
        <h3 <?php echo( $color_title != '' ? 'style="color:' . esc_attr( $color_title ) . '"' : '' ); ?>>
            <?php echo balanceTags( $title ); ?>
        </h3>
        <h3 class="tz_event_meetup_subtitle" <?php echo( $color_sub_title != '' ? 'style="color:' . esc_attr( $color_sub_title ) . '"' : '' ); ?>>
            <?php echo balanceTags( $sub_title ); ?>
        </h3>
        <div class="tz_event_meettup_box_content">
            <div class="tz_event_meetup_content">
                <?php echo do_shortcode( $content ); ?>
            </div>
        </div>
    </div>
</div>
