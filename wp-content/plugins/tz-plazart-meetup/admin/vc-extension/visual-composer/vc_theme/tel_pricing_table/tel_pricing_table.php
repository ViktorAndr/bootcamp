<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
function tel_pricing_table_view( $atts,  $content = null ) {


    $tel_pricing_table_title = $tel_pricing_table_subtitle = $tel_pricing_table_price = $tel_pricing_table_id = $link = $tel_pricing_table_label = "";

    extract( shortcode_atts(array(

        'tel_pricing_table_title'        =>  '',
        'tel_pricing_table_price'        =>  '',
        'tel_pricing_table_label'        =>  '',
        'link'                           =>  '',
        'tel_pricing_table_subtitle'                           =>  '',

    ), $atts) );

    $content = wpb_js_remove_wpautop($content, true);

    $vc_link = vc_build_link( $link );

    ob_start();

        ?>

        <div class="tel-pricing_table">

            <div class="tel-pricing_table__header">

                <h3><?php echo esc_html($tel_pricing_table_title); ?></h3>

                <h4><?php echo esc_html($tel_pricing_table_subtitle); ?></h4>

                <p><?php echo esc_html($tel_pricing_table_price); ?></p>

            </div>

            <div class="tel-pricing_table__content">

                <?php echo balanceTags($content, true); ?>

            </div>

            <div class="tel-pricing_table__footer">

                <?php if(isset($vc_link['url']) && $vc_link['url'] != ''): ?>

                <a <?php echo ( $vc_link['target'] != '' ? 'target="' . esc_attr( $vc_link['target'] ) . '"' : '') .' '. ( $vc_link['url'] != '' ? 'href="' . esc_attr( $vc_link['url'] ) . '"' : '' ) . ' '. ( $vc_link['title'] != '' ? 'title="' . esc_attr( $vc_link['title'] ) . '"' : '' )  ; ?>>

                    <?php

                    if(isset($tel_pricing_table_label) && $tel_pricing_table_label != ''):
                    echo esc_html($tel_pricing_table_label);
                    else:
                        echo esc_html('No Label','plazart-plugin');
                    endif;
                    ?>

                </a>

                <?php endif; ?>

            </div>

        </div>

        <?php

    return ob_get_clean();

}

add_shortcode('tel_pricing_table','tel_pricing_table_view' );

?>