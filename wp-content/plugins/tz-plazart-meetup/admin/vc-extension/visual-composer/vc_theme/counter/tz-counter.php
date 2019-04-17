<?php

function tzmaniva_counter($atts) {
   $image = $icon_option = $title = $count_stop = $count = $number_speed = $icon_font = $color_icon = $color_count = $color_title = '';
    extract(shortcode_atts(array(
        'image'         =>  '',
        'icon_font'     =>  '',
        'color_icon'    =>  '',
        'icon_option'   =>  'icon',
        'title'         =>  '',
        'color_title'   =>  '',
        'count_stop'    =>  0,
        'count'         =>  '',
        'number_speed'  =>  1,
        'color_count'   =>  '',
    ),$atts));
    ob_start();

    $images = '';
    if ( $image !='' && $icon_option == 'image' ):
        $images     = wp_get_attachment_url($image);
    endif;

    if ( $number_speed !='' ) :
        $tz_number_speed    =   $number_speed;
    else:
        $tz_number_speed = 1;
    endif;


    ?>
    <div class="tz-counter tzCounter_type">

        <?php
        if($icon_option == 'icon'):
        ?>

            <div class="tz-counter-font">
                <i class="fa <?php echo esc_attr( $icon_font ); ?>" <?php echo ( $color_icon != '' ? 'style="color:' . esc_attr( $color_icon ) . '"' : '' ); ?>></i>
            </div>

        <?php
        else:
            if ( $image !='' ) {
        ?>

            <div class="tz-counter-image">
                <img alt="<?php echo esc_attr($title);?>" src="<?php echo esc_url($images);?>">
            </div>

        <?php
            }
        endif;
        ?>

        <span class="tz-counter-number">
            <em class="stat-count" data-number-speed="<?php echo esc_attr( $tz_number_speed ); ?>" data-stop-count="<?php echo esc_attr( $count_stop ); ?>" <?php echo ( $color_count != '' ? 'style="color:' . esc_attr( $color_count ) . '"' : '' ); ?>>
                <?php echo esc_html($count);?>
            </em>
        </span>
        <p class="tz-counter-title" <?php echo ( $color_title != '' ? 'style="color:' . esc_attr( $color_title ) . '"' : '' ); ?>>
            <?php echo esc_html($title);?>
        </p>

    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('tz-counter','tzmaniva_counter');
?>