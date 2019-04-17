<?php
function tz_maniva_contact_meetup_2( $atts, $content = null ) {
    $icon_font = $bk_icon = $color_icon = $title = $color_title = '';
    extract(shortcode_atts(array(

        'icon_font'     =>  'fa-clock-o',
        'bk_icon'       =>  '',
        'color_icon'    =>  '',
        'title'         =>  '',
        'color_title'   =>  ''

    ), $atts));

    $content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content

    ob_start();

?>

<div class="tz_contact_meet_2">
    <div class="tz_contact_detail_meet">
        <span class="tz_contact_meet_icon" <?php echo ( $bk_icon != '' ? 'style="background:' . esc_attr( $bk_icon ) . '"' : '' ); ?>>
            <i class="fa <?php echo balanceTags( $icon_font ); ?>" <?php echo ( $color_icon != '' ? 'style="color:' . esc_attr( $color_icon ) . '"' : '' ); ?>></i>
        </span>
        <h4 <?php echo ( $color_title != '' ? 'style="color:' . esc_attr( $color_title ) . '"' : '' ); ?>>
            <?php echo balanceTags( $title ); ?>
        </h4>
    </div>
    <div class="tz_meetup_contact_detail">
        <?php echo balanceTags($content); ?>
    </div>
</div>

<?php

    $tz_maniva  =   ob_get_contents();
    ob_end_clean();
    return $tz_maniva;

}

add_shortcode('tz_contact_meetup_2','tz_maniva_contact_meetup_2');

?>