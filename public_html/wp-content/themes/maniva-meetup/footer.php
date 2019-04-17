
<?php

if ( !is_page_template( 'template-homepage.php' ) ) :

$maniva_meetup_type_footer  =   ot_get_option( 'maniva-meetup' . '_ChooseFooterType', 2 );

if ( class_exists('WooCommerce') || class_exists( 'YITH_WCWL_UI' ) ) :

    if (  is_woocommerce() || is_cart() || is_checkout() || is_account_page() || is_product_category() ) {

        get_template_part('template_inc/inc','footer-shop');

    }else {

        if ( $maniva_meetup_type_footer == 1 ):
            get_template_part('template_inc/inc','footer-one-column');
        elseif ( $maniva_meetup_type_footer == 2 ) :
            get_template_part('template_inc/inc','footer');
        else:
            get_template_part('template_inc/inc','footer-one-column-multi');
        endif;
    }

else:

    if ( $maniva_meetup_type_footer == 1 ):
        get_template_part('template_inc/inc','footer-one-column');
    elseif ( $maniva_meetup_type_footer == 2 ) :
        get_template_part('template_inc/inc','footer');
    else:
        get_template_part('template_inc/inc','footer-one-column-multi');
    endif;

endif; /* check page WooCommerce */

endif;

?>

</div>

<?php
wp_footer();

?>
</body>
</html>