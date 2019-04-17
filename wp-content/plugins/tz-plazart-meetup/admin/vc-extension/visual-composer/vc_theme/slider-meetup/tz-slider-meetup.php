<?php
function tz_slider_meetup( $atts ) {
    $image_slider = $slider_auto = $pagination = $type_pagination = $full_width = '';
    extract(shortcode_atts(array(

        'image_slider'      =>  '',
        'slider_auto'       =>  0,
        'pagination'        =>  1,
        'type_pagination'   =>  0,
        'full_width'        =>  '',

    ), $atts));

    ob_start();

    $partner_arr = array();

    if ( isset($image_slider) && !empty( $image_slider ) ):
        $partner_arr    = explode(',', $image_slider);
    endif;

    $tz_class_full_skill = '';

    if ( $full_width == 1 ) {
        $tz_class_full_skill = ' tz_slider_meetup_full';
    }

?>

    <div class="tz_slider_meetup<?php echo esc_attr( $tz_class_full_skill ); ?>" data-auto="<?php echo esc_attr( $slider_auto ); ?>" data-pagina="<?php echo esc_attr( $pagination ); ?>" data-number="<?php echo esc_attr( $type_pagination ); ?>">

        <div class="tz_meetup_slider owl-carousel owl-theme">
            <?php for ( $i = 0; $i < count($partner_arr); $i++ ) : ?>

            <div class="tz_custom_images_slider">
                <?php echo wp_get_attachment_image( $partner_arr[$i],'full' ); ?>
                <div class="tz-bk-slider-meetup"></div>
            </div>

            <?php endfor; ?>

        </div>

    </div>

<?php

    $tz_maniva  =   ob_get_contents();
    ob_end_clean();
    return $tz_maniva;
}
    add_shortcode('tz_meetup_slider','tz_slider_meetup');
?>
