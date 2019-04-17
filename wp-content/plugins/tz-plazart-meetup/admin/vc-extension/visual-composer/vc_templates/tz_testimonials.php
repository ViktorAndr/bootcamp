<?php

$auto_testimonials = $loop_testimonials = $dot_show_hide = $rtl_testimonials = '';
$color_name = '';

extract( shortcode_atts( array(

    'auto_testimonials' =>  0,
    'loop_testimonials' =>  1,
    'dot_show_hide'     =>  1,
    'rtl_testimonials'  =>  0,
    'color_name'        =>  '',

), $atts ) );

wp_enqueue_script('slick-min-js');

?>

<div class="tz_testimonials">
    <div class="container">
        <div class="tz_testimonials_icon">
            <i class="fa fa-quote-right" aria-hidden="true"></i>
        </div>
        <div class="tz_testimonials_owl loop owl-carousel owl-theme" data-auto="<?php echo esc_attr( $auto_testimonials ); ?>" data-loop="<?php echo esc_attr( $loop_testimonials ); ?>" data-dot="<?php echo esc_attr( $dot_show_hide ); ?>" data-rtl="<?php echo esc_attr( $rtl_testimonials ); ?>" <?php echo ( $color_name != '' ? 'data-color-name="' . esc_attr( $color_name ) . '"' : '' ); ?>>
            <?php echo do_shortcode( $content ); ?>
        </div>
    </div>
</div>
