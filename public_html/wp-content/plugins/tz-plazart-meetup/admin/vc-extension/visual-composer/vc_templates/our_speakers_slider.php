<?php

$image_speakers = $auto_slide = $mode_slide = '';

extract( shortcode_atts( array(

    'image_speakers'        =>  '',
    'auto_slide'            =>  0,
    'mode_slide'            =>  'slide',

), $atts ) );

wp_enqueue_script('light_slider_js');

$partner_arr = array();

if ( isset($image_speakers) && !empty( $image_speakers ) ):
    $partner_arr    = explode(',', $image_speakers);
endif;

?>
<div class="our_speakers_content">
    <div class="row row-eq-height">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 tz_custom_padding_right">
            <div class="our_speakers_slider">
                <div class="speakers_slider_list cs-hidden" data-auto="<?php echo esc_attr( $auto_slide ); ?>" data-mode="<?php echo esc_attr( $mode_slide ) ;?>">

                    <?php for ( $i = 0; $i < count($partner_arr); $i++ ) : ?>

                        <div class="speakers_slider_item" data-thumb="<?php echo wp_get_attachment_url( $partner_arr[$i] ); ?>" data-number="<?php echo esc_attr( $i ); ?>">
                            <?php echo wp_get_attachment_image( $partner_arr[$i],'full' ); ?>
                        </div>

                    <?php endfor; ?>

                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 tz_custom_padding_left_bk">
            <div class="our_speakers_slider_detail">
                <?php echo do_shortcode( $content ); ?>
            </div>
        </div>
    </div>
</div>
