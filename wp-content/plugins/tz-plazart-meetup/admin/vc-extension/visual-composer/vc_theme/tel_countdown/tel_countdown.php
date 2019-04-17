<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
function tel_countdown_view( $atts) {

    $tel_countdown_year                =
    $tel_countdown_month               =
    $tel_countdown_day                 =
    $tel_countdown_hour                =
    $tel_countdown_minute              =
    $tel_countdown_second              =
    $css_animation                     =
    $tel_countdown_id                  =
    $tel_countdown_style               =
    $tel_show_class                    = "";


    extract( shortcode_atts(array(

        'tel_countdown_year'               =>     '',
        'tel_countdown_month'              =>     'Jan',
        'tel_countdown_day'                =>     '  ',
        'tel_countdown_hour'               =>     '',
        'tel_countdown_minute'             =>     '',
        'tel_countdown_second'             =>     '',
        'tel_countdown_id'                 =>     '',
        'tel_countdown_style '             =>     '',
        'tel_countdown_class'              =>     '',
        'css_animation'                    =>     '',

    ), $atts) );

    if(isset($tel_countdown_class) && $tel_countdown_class != ''):

        $tel_show_class = ' '.$tel_countdown_class.'';

    endif;

    $tel_animation_class = '';

    if(isset($css_animation) && $css_animation != ''):

        $tel_animation_class = tel_animation( $css_animation );

    endif;

    $tel_classes = 'tel_countdown' .''.$tel_show_class.''.' '.$tel_animation_class.'';


    ob_start();
        ?>

        <div <?php if(isset($tel_countdown_id) && $tel_countdown_id != ''): ?> id="<?php echo esc_attr($tel_countdown_id); ?>" <?php endif; ?> class="<?php echo esc_attr($tel_classes); ?>">

            <div id="tel-countdown__timer"></div>

            <script>
                // Set the date we're counting down to
                var countDownDate = new Date("<?php echo esc_attr($tel_countdown_month); ?> <?php echo esc_attr($tel_countdown_day); ?>, <?php echo esc_attr($tel_countdown_year); ?> <?php echo esc_attr($tel_countdown_hour); ?>:<?php echo esc_attr($tel_countdown_minute); ?>:<?php echo esc_attr($tel_countdown_second); ?>").getTime();

                // Update the count down every 1 second
                var x = setInterval(function() {

                    // Get todays date and time
                    var now = new Date().getTime();

                    // Find the distance between now an the count down date
                    var distance = countDownDate - now;

                    // Time calculations for days, hours, minutes and seconds
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    // Display the result in the element with id="demo"
                    document.getElementById("tel-countdown__timer").innerHTML =
                        '<div class="tel-countdown__item">' + days + '<span class="tel-countdown__day">days</span>' + '</div>' +
                        '<div class="tel-countdown__item">' + hours + '<span class="tel-countdown__hour">hours</span>' + '</div>' +
                        '<div class="tel-countdown__item">' + minutes + '<span class="tel-countdown__minute">minutes</span>' + '</div>' +
                        '<div class="tel-countdown__item">' + seconds + '<span class="tel-countdown__second">Seconds</span>' + '<div/>'
                    ;

                    // If the count down is finished, write some text
                    if (distance < 0) {
                        clearInterval(x);
                        document.getElementById("tel-countdown__timer").innerHTML = "EXPIRED";
                    }
                }, 1000);
            </script>

        </div>

        <?php

    return ob_get_clean();

}

add_shortcode('tel_countdown','tel_countdown_view' );

?>