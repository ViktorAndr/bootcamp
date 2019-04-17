<?php

$icon_font = $color_icon_font = $title_list = '';

extract( shortcode_atts( array(

    'icon_font'         =>  '',
    'color_icon_font'   =>  '',
    'title_list'        =>  '',

), $atts ) );

?>
<li>

    <?php if ( $icon_font !='' ) : ?>

    <i class="fa <?php echo esc_attr( $icon_font ); ?>" <?php echo esc_attr( $color_icon_font ); ?>" <?php echo ( $color_icon_font != '' ? 'style="color:' . esc_attr( $color_icon_font ) . '"' : '' ); ?>></i>

    <?php endif; ?>

    <?php echo balanceTags( $title_list ); ?>
</li>

