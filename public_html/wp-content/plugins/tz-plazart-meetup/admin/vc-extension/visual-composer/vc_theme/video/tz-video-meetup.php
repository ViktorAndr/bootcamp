<?php
function tz_maniva_meetup_video( $atts ) {

    $image_background =  $style_id_video = $id_video_vimeo = $id_video_tube = $equal_height = '';
    $show_hide_overlay_bk_video = $color_overlay_video =  '';

    extract(shortcode_atts(array(
        'image_background'              =>  '',
        'style_id_video'                =>  'vimeo',
        'id_video_vimeo'                =>  '',
        'id_video_tube'                 =>  '',
        'equal_height'                  =>  '',
        'show_hide_overlay_bk_video'    =>  1,
        'color_overlay_video'          =>  '',
    ), $atts));

    ob_start();

    $tz_video_equal_height_meetup = '';
    if ( $equal_height == 1 ) {
        $tz_video_equal_height_meetup = ' tz_video_equal_height_meetup';
    }

?>

    <div class="tz_video_meetup<?php echo esc_attr( $tz_video_equal_height_meetup ); ?>">
        <?php

        echo wp_get_attachment_image( $image_background, 'full' );

        if ( $show_hide_overlay_bk_video == 1 ) :

        ?>

            <div class="tz_bk_video" <?php echo ( $color_overlay_video != '' ? 'style="background:' . esc_attr( $color_overlay_video ) . '"' : '' ); ?>></div>

        <?php endif; ?>

        <div class="tz_btn_play_video">

            <?php if ( $style_id_video == 'vimeo' ) : ?>
                <a class="easy-opener tz_btn_easy" data-type="video" data-width="500" data-height="281" href="//player.vimeo.com/video/<?php echo esc_attr($id_video_vimeo); ?>">
                    <i class="fa fa-play"></i>
                </a>
            <?php else: ?>
                <a class="easy-opener tz_btn_easy" data-type="video" data-width="500" data-height="281" href="//www.youtube.com/embed/<?php echo esc_attr($id_video_tube);?>">
                    <i class="fa fa-play"></i>
                </a>
            <?php endif; ?>

        </div>
    </div>

<?php

    $tz_maniva  =   ob_get_contents();
    ob_end_clean();
    return $tz_maniva;
}
add_shortcode('tz_meetup_video','tz_maniva_meetup_video');
?>
