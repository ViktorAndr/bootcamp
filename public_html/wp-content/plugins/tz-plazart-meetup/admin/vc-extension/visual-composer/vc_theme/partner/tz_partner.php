<?php
function tzmaniva_partner( $atts ) {
    $image_partner = $number_items = $auto_partner = $loop_partner = $rtl_partner = $hide_prev_next = $on_click = $open_link = $custom_links = $type_prev_next = '';
    extract(shortcode_atts(array(
        'image_partner'     =>  '',
        'number_items'      =>  '',
        'auto_partner'      =>  0,
        'loop_partner'      =>  0,
        'rtl_partner'       =>  0,
        'on_click'          =>  'link_no',
        'open_link'         =>  '',
        'custom_links'      =>  '',
        'type_prev_next'    =>  1,
        'hide_prev_next'    =>  '',
    ), $atts));
    ob_start();

    $partner_arr = array();
    if ( isset($image_partner) && !empty( $image_partner ) ):
        $partner_arr    = explode(',', $image_partner);
    endif;

    $custom_links_arr = array();
    if( isset($custom_links) && !empty( $custom_links ) ):
        $custom_links_arr = explode( '<br />', $custom_links );
    endif;

    ?>

    <div class="tz-partner">

        <?php
            if ( $hide_prev_next !='hide' ) :
                if ( $type_prev_next == 1 ) :
        ?>

                    <button class="tz_partner_prevs"><i class="fa fa-long-arrow-left"></i></button>
                    <button class="tz_partner_nexts"><i class="fa fa-long-arrow-right"></i></button>

                <?php else: ?>

                    <div class="tz_partner_prevs_type2 icon icon-arrows-left"></div>
                    <div class="tz_partner_nexts_type2 icon icon-arrows-right"></div>

        <?php
                endif;
            endif;
        ?>

        <div class="partner-slider owl-carousel owl-theme" data-option-column="<?php echo esc_attr($number_items); ?>" data-auto="<?php echo esc_attr( $auto_partner ) ?>" data-loop="<?php echo esc_attr( $loop_partner ); ?>" data-rtl="<?php echo esc_attr( $rtl_partner ); ?>">

            <?php

            for( $i = 0; $i < count($partner_arr); $i++ ):
                if( $on_click == 'custom_link' && isset( $custom_links_arr[$i] ) && $custom_links_arr[$i] != '' ):

            ?>

                    <div class="tz-partner-item">
                        <a href="<?php echo esc_attr($custom_links_arr[$i]); ?>" <?php echo ( $open_link == 'link_target' ? 'target="_blank"' : '' ) ?>>
                            <?php echo wp_get_attachment_image( $partner_arr[$i],'full' ); ?>
                        </a>
                    </div>


                <?php else: ?>

                    <div class="tz-partner-item">
                        <?php echo wp_get_attachment_image( $partner_arr[$i],'full' ); ?>
                    </div>

            <?php
                endif;
            endfor;
            ?>

        </div>
    </div>

    <?php
    $tzmaniva  =   ob_get_contents();
    ob_end_clean();
    return $tzmaniva;
}
add_shortcode('tz_partner','tzmaniva_partner');
?>