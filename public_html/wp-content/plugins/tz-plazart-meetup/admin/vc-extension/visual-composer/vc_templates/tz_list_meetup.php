<?php

$style_list = '';

extract( shortcode_atts( array(

    'style_list'    =>  1

), $atts ) );

$class_list_style_decimal = '';
if ( $style_list == 2 ) :
    $class_list_style_decimal = 'tz_list_style_decimal';
endif;

?>

<ul class="tz_list_meetup <?php echo esc_attr( $class_list_style_decimal ); ?>">
    <?php echo do_shortcode( $content ); ?>
</ul>
