<?php

$title = $currency = $price = $price_period = $btn_text = $bk_pricing = '';

extract( shortcode_atts( array(

    'title'         =>  '',
    'currency'      =>  '$',
    'price'         =>  '',
    'price_period'  =>  '',
    'btn_text'      =>  'Get Started',
    'bk_pricing'    =>  '',

), $atts ) );

$content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content


?>

<div class="col-sm-6 col-xs-12 tz_pricing_item_column">
    <div class="tz_pricing_item" data-price-item="<?php echo esc_attr( $price );?>" <?php echo ( $bk_pricing != '' ? 'style="background-color:' . esc_attr( $bk_pricing ) . '"' : '' ); ?>>
        <div class="tz_pricing_item_header">
            <strong>
                <?php echo esc_attr( $title ); ?>
            </strong>
            <h3>
                <?php echo '<p>' . esc_attr( $currency ) . '</p>' . esc_attr( $price ); ?>
            </h3>
            <strong>
                <?php echo esc_attr( $price_period ); ?>
            </strong>
        </div>
        <div class="tz_pricing_item_content">
            <?php echo balanceTags( $content ); ?>
        </div>
        <div class="tz_pricing_item_footer">
            <span class="tz_pricing_btn">
                <?php echo balanceTags( $btn_text ); ?>
            </span>
        </div>
    </div>
</div>
