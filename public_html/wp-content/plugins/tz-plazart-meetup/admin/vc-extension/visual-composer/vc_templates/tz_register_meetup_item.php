<?php

    $title = $currency = $price = '';

    extract( shortcode_atts( array(

        'title'         =>  '',
        'currency'      =>  '$',
        'price'         =>  380,

    ), $atts ) );

    $content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content


?>
<div class="tz_register_meetup_pricing_item" data-price-pricing="<?php echo esc_attr( $price ); ?>">
    <div class="tz_register_meetup_pricing_item_container">
        <h3>
            <?php echo esc_attr( $title ); ?>
        </h3>
        <?php echo balanceTags( $content ); ?>
    </div>
    <div class="tz_register_meetup_pricing_item_price <?php echo esc_attr( $tz_meetup_pricing_special ); ?>">
        <div class="ds-table">
            <div class="ds-table-cell">
                <h3>
                    <?php echo esc_attr( $currency ).esc_attr( $price ); ?>
                </h3>
            </div>
        </div>
    </div>
</div>
