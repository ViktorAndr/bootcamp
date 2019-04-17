<?php
function tz_meetup_ask_question( $atts, $content = null ) {
    $icon_font = $color_icon = $question = $color_question = '';
    extract(shortcode_atts(array(
        'icon_font'         =>  'fa-question',
        'color_icon'        =>  '',
        'question'          =>  '',
        'color_question'    =>  '',
    ), $atts));

    $content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content

    ob_start();
?>

    <div class="tz_meetup_ask_question">
        <div class="tz_meetup_question">
            <span class="tz_icon_meetup_question">
                <i class="fa <?php echo esc_attr( $icon_font ); ?> " <?php echo ( $color_icon != '' ? 'style="color:' . esc_attr( $color_icon ) . '"' : '' ); ?>></i>
            </span>

            <h4 <?php echo ( $color_question != '' ? 'style="color:' . esc_attr( $color_question ) . '"' : '' ); ?>>
                <?php echo balanceTags( $question ); ?>
            </h4>
        </div>
        <div class="tz_meetup_ask">
            <?php echo balanceTags( $content ); ?>
        </div>
    </div>

<?php

    $tz_maniva  =   ob_get_contents();
    ob_end_clean();
    return $tz_maniva;
}
    add_shortcode('tz_ask_question','tz_meetup_ask_question');
?>