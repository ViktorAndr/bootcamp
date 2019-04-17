<?php
function tz_maniva_breadcrumb( $atts ) {

    $background_color = $color_text = '';

    extract(shortcode_atts(array(

        'background_color'  =>  '',
        'color_text'        =>  '',

    ), $atts));
    ob_start();

?>

<div class="tz_meetup_breadcrumb" <?php echo ( $background_color != '' ? 'style="background-color:' . esc_attr( $background_color ) . '"' : '' ); ?>>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="tz_meetup_breadcrumb_title">
                    <h4><?php the_title(); ?></h4>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="tz_meetup_breadcrumb_content">
                    <h4>
                        <?php if(function_exists('bcn_display')):  bcn_display(); endif; ?>
                    </h4>
                </div>

            </div>
        </div>
    </div>
</div>

<?php

    $tz_maniva  =   ob_get_contents();
    ob_end_clean();
    return $tz_maniva;

}
add_shortcode('tz_breadcrumb','tz_maniva_breadcrumb');
?>