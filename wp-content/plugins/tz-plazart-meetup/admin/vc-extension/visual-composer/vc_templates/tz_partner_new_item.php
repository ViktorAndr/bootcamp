<?php

$new_image_partner  =  $link = '';

extract( shortcode_atts( array(

    'new_image_partner' =>  '',
    'link'              =>  ''

), $atts ) );

$vc_link = vc_build_link( $link );

?>
<div class="tz_partner_item_new">

    <?php if ( $vc_link['url'] == true ) : ?>

        <a <?php echo ( $vc_link['target'] != '' ? 'target="' . esc_attr( $vc_link['target'] ) . '"' : '') .' '. ( $vc_link['url'] != '' ? 'href="' . esc_attr( $vc_link['url'] ) . '"' : '' ) . ' '. ( $vc_link['title'] != '' ? 'title="' . esc_attr( $vc_link['title'] ) . '"' : '' )  ; ?>>
            <?php echo wp_get_attachment_image( $new_image_partner,'full' ); ?>
        </a>

    <?php

    else:

        echo wp_get_attachment_image( $new_image_partner,'full' );

    endif;

    ?>

</div>

