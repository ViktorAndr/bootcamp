<?php

/*===============================
Shortocde about-meetup
===============================*/

function tz_maniva_about_meetup( $atts, $content = null ) {
    $image_about_meetup = $link = $title = $color_title = '';
    extract(shortcode_atts(array(
        'image_about_meetup'    =>  '',
        'link'                   =>  '',
        'title'                 =>  '',
        'color_title'           =>  '',
    ), $atts));

    $content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content

    ob_start();


    $vc_link = vc_build_link( $link );

?>

    <div class="tz_maniva_about_meetup">
        <div class="tz_meetup_thumbnail">

            <?php if ( $vc_link['url'] != '' ) : ?>

                <a <?php echo ( $vc_link['target'] != '' ? 'target="' . esc_attr( $vc_link['target'] ) . '"' : '') .' '. ( $vc_link['url'] != '' ? 'href="' . esc_attr( $vc_link['url'] ) . '"' : '' ) . ' '. ( $vc_link['title'] != '' ? 'title="' . esc_attr( $vc_link['title'] ) . '"' : '' )  ; ?>>
                    <?php echo wp_get_attachment_image( $image_about_meetup, 'full' ); ?>
                </a>

            <?php else: ?>

                <?php echo wp_get_attachment_image( $image_about_meetup, 'full' ); ?>

            <?php endif; ?>

        </div>
        <h4 <?php if ( $vc_link['url'] == '' ) : echo ( $color_title != '' ? 'style="color:' . esc_attr( $color_title ) . '"' : '' ); endif; ?>>
            <?php if ( $vc_link['url'] != '' ) : ?>

                <a <?php echo ( $color_title != '' ? 'style="color:' . esc_attr( $color_title ) . '"' : '' ); ?> <?php echo ( $vc_link['target'] != '' ? 'target="' . esc_attr( $vc_link['target'] ) . '"' : '') .' '. ( $vc_link['url'] != '' ? 'href="' . esc_attr( $vc_link['url'] ) . '"' : '' ) . ' '. ( $vc_link['title'] != '' ? 'title="' . esc_attr( $vc_link['title'] ) . '"' : '' )  ; ?>>
                    <?php echo balanceTags( $title ); ?>
                </a>

            <?php else: ?>

                <?php echo balanceTags( $title ); ?>

            <?php endif; ?>
        </h4>
        <div class="tz_meetup_about_content">
            <?php echo balanceTags($content); ?>
        </div>
    </div>

<?php

    $tz_maniva  =   ob_get_contents();
    ob_end_clean();
    return $tz_maniva;

}
add_shortcode('tz_about_meetup','tz_maniva_about_meetup');
?>