<?php

 $prev_next_show_hide = $new_number_items = $new_auto_partner = $new_loop_partner = $new_rtl_partner = '';

extract( shortcode_atts( array(

    'prev_next_show_hide'   =>  0,
    'new_number_items'      =>  '5',
    'new_auto_partner'      =>  0,
    'new_loop_partner'      =>  0,
    'new_rtl_partner'       =>  0,

), $atts ) );

?>

<div class="tz_partner_new">

    <?php if ( $prev_next_show_hide == 1 ) : ?>

    <button class="tz_partner_prevs_new"><i class="fa fa-long-arrow-left"></i></button>
    <button class="tz_partner_nexts_new"><i class="fa fa-long-arrow-right"></i></button>

    <?php endif; ?>

    <div class="partner_slider_new owl-carousel owl-theme" data-option-column="<?php echo esc_attr($new_number_items); ?>" data-auto="<?php echo esc_attr( $new_auto_partner ) ?>" data-loop="<?php echo esc_attr( $new_loop_partner ); ?>" data-rtl="<?php echo esc_attr( $new_rtl_partner ); ?>">
        <?php echo do_shortcode( $content ); ?>
    </div>
</div>
