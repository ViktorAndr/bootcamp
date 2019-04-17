<?php
/*===============================
Shortocde tz-button-simple
===============================*/

function tzmaniva_shortcode_button($atts) {
    $title_text_btn = $color_text_title_btn = $button_text = $tz_btn_one_page = $link = $color_button = $color_background = $text_align = $padding_btn = $icon_font = $extra_class = '';
    extract(shortcode_atts(array(
        'title_text_btn'        =>  '',
        'color_text_title_btn'  =>  '',
        'button_text'           =>  '',
        'color_button'          =>  'tz_meetup_default',
        'link'                  =>  '',
        'tz_btn_one_page'       =>  0,
        'button_class'          =>  '',
        'text_align'            =>  'center',
        'padding_btn'           =>  '',
        'extra_class'           =>  '',
        'icon_font'             =>  '',
    ),$atts));
    ob_start();

    $vc_link = vc_build_link( $link );

    $tz_meetup_btn_one_page = '';

    if ( $text_align == 'center' ) :
        $meetup_text_align = 'text-center';
    elseif ( $text_align == 'left' ) :
        $meetup_text_align = 'text-left';
    else:
        $meetup_text_align = 'text-right';
    endif;

    if ( $tz_btn_one_page == 1 ) :
        $tz_meetup_btn_one_page =   'tz_meetup_btn_one_page';
    endif;

?>

    <div class="tz_meetup_btn <?php echo esc_attr( $meetup_text_align ) .' '. esc_attr( $extra_class ) .' '. esc_attr( $tz_meetup_btn_one_page ); ?>" <?php echo ( $padding_btn != '' ? 'style="padding:' . esc_attr( $padding_btn ) . '"' : '' ); ?>>

        <?php if ( $title_text_btn !='' ) : ?>

        <h4 class="tz_meetup_title_btn" <?php echo ( $color_text_title_btn != '' ? 'style="color:' . esc_attr( $color_text_title_btn ) . '"' : '' ); ?>>
            <?php echo balanceTags( $title_text_btn ); ?>
        </h4>

        <?php endif; ?>

        <?php if ( $tz_btn_one_page == 1 ): ?>

            <a class="<?php echo esc_attr( $color_button ); ?>" <?php echo ( $vc_link['url'] != '' ? 'href="' . esc_attr( $vc_link['url'] ) . '"' : '' ) . ' '. ( $vc_link['title'] != '' ? 'title="' . esc_attr( $vc_link['title'] ) . '"' : '' )  ; ?>>
                <?php echo balanceTags( $button_text ); ?>

                <?php if ( $icon_font !='' ) : ?>
                    <i class="fa <?php echo esc_attr( $icon_font ); ?>"></i>
                <?php endif; ?>

            </a>

        <?php else: ?>

            <a class="<?php echo esc_attr( $color_button ); ?>" <?php echo ( $vc_link['target'] != '' ? 'target="' . esc_attr( $vc_link['target'] ) . '"' : '') .' '. ( $vc_link['url'] != '' ? 'href="' . esc_attr( $vc_link['url'] ) . '"' : '' ) . ' '. ( $vc_link['title'] != '' ? 'title="' . esc_attr( $vc_link['title'] ) . '"' : '' )  ; ?>>
                <?php echo balanceTags( $button_text ); ?>

                <?php if ( $icon_font !='' ) : ?>
                    <i class="fa <?php echo esc_attr( $icon_font ); ?>"></i>
                <?php endif; ?>

            </a>

        <?php endif; ?>

    </div>

<?php
    return ob_get_clean();
}
add_shortcode('tz-button','tzmaniva_shortcode_button');
?>