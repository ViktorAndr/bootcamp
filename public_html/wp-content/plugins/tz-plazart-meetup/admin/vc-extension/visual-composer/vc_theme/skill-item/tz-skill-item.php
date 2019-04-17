<?php

function tzmaniva_skill_item($atts) {

    $style_skill = $title = $color_title = $value_graphics = $color_value = $units_graphics = $color_chart = $color_background ='';
    $bk_bar = $bk_graphics = '';

    extract(shortcode_atts(array(

        'style_skill'       => 1,
        'title'             => 'Marketing',
        'value_graphics'    => '70',
        'units_graphics'    =>  '',
        'color_title'       =>  '',
        'color_value'       =>  '',
        'bk_graphics'       =>  '',
        'bk_bar'            =>  '',

    ),$atts));

    $tz_skill_graphics_type =   '';

    if ( $style_skill == 3 ) {
        $tz_skill_graphics_type =   ' tz_skill_graphics_3';
    }elseif ( $style_skill == 4 ) {
        $tz_skill_graphics_type =   ' tz_skill_graphics_4';
    }

    ob_start();

?>

    <div class="tz_skill_graphics<?php echo esc_attr( $tz_skill_graphics_type ); ?>">
        <div class="tz_title_value_skill_graphics">

            <p class="pull-left" <?php echo ( $color_title != '' ? 'style="color:' . esc_attr( $color_title ) . '"' : '' ); ?>>
                <?php echo balanceTags( $title ); ?>
            </p>

            <?php if ( $units_graphics != '' && $style_skill != 4 ) : ?>

                <p class="pull-right" <?php echo ( $color_value != '' ? 'style="color:' . esc_attr( $color_value ) . '"' : '' ); ?>>
                    <?php echo esc_attr( $value_graphics ) . esc_attr( $units_graphics ) ;  ?>
                </p>

            <?php endif; ?>

        </div>
        <div class="tz_skill_graphics_item" <?php echo ( $bk_graphics != '' ? 'style="background-color:' . esc_attr( $bk_graphics ) . '"' : '' ); ?>>
            <div class="tz_skill_graphics_value" <?php echo ( $value_graphics != '' ? 'style="width:' . esc_attr( $value_graphics ) . '%"' : 'style="width:70%"' ); ?>>
                <div class="tz_skill_graphics_value_bk wow slideInLeft animated" <?php echo ( $bk_bar != '' ? 'style="background-color:' . esc_attr( $bk_bar ) . '"' : '' ); ?>>

                    <?php if ( $style_skill == 1 ) : ?>

                    <span class="tz_skill_graphics_line"></span>
                    <span class="tz_skill_graphics_line_center" <?php echo ( $bk_bar != '' ? 'style="background-color:' . esc_attr( $bk_bar ) . '"' : '' ); ?>></span>

                    <?php endif; ?>

                    <?php if ( $style_skill == 4 ) : ?>

                        <p class="tz_value_skill_graphics" <?php echo ( $color_value != '' ? 'style="color:' . esc_attr( $color_value ) . '"' : '' ); ?>>
                            <?php echo esc_attr( $value_graphics ) . esc_attr( $units_graphics ) ;  ?>
                        </p>

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>

<?php

    return ob_get_clean();
}
add_shortcode('tz-skill-item','tzmaniva_skill_item');
?>
