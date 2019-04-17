<?php
/*===============================
Shortocde tz-contact-info
===============================*/

function tz_meetup_gmap($atts, $content = null) {

    $link = $overlay_gmap = $text_btn_contact = $equal_height = '';

    extract(shortcode_atts(array(

        'overlay_gmap'      =>  '',
        'text_btn_contact'  =>  'Contact us',
        'link'              =>  '',
        'equal_height'      =>  ''

    ),$atts));
    ob_start();

    $vc_link = vc_build_link( $link );

    $content = rawurldecode( base64_decode( strip_tags( $content ) ) );

    $tz_equal_height = '';
    if ( $equal_height == 1 ) {
        $tz_equal_height = ' tz_equal_height_gmap';
    }

    ?>

    <div class="tz_map_meetup<?php echo esc_attr( $tz_equal_height ); ?>">
        <div class="tz_map_meetup_bk" <?php echo ( $overlay_gmap != '' ? 'style="background:' . esc_attr( $overlay_gmap ) . '"' : '' ); ?>></div>

        <?php echo balanceTags( $content ); ?>

        <?php if ( $text_btn_contact !='' ) : ?>

            <div class="tz_meet_gmap_contact">
                <div class="ds-table">
                    <div class="ds-table-cell">
                        <a <?php echo ( $vc_link['target'] != '' ? 'target="' . esc_attr( $vc_link['target'] ) . '"' : '') .' '. ( $vc_link['url'] != '' ? 'href="' . esc_attr( $vc_link['url'] ) . '"' : '' ) . ' '. ( $vc_link['title'] != '' ? 'title="' . esc_attr( $vc_link['title'] ) . '"' : '' )  ; ?>>
                            <?php echo balanceTags( $text_btn_contact ); ?>
                        </a>
                    </div>
                </div>
            </div>

        <?php endif; ?>

    </div>

    <?php
    return ob_get_clean();
}
add_shortcode('tz-contact-meetup-gmap','tz_meetup_gmap');
?>
