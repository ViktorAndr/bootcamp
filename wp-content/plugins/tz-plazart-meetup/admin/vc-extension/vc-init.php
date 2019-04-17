<?php

/*=====================================
 * Visual Composer
 =====================================*/


if ( class_exists('WPBakeryVisualComposerAbstract') ):

    function tzplazart_includevisual(){
        $dir_vc = dirname( __FILE__ );

        // VC Templates
        $vc_templates_dir       = $dir_vc . '/visual-composer/vc_templates/';
        $vc_templates_dir_theme = $dir_vc . '/visual-composer/vc_theme/';
        vc_set_shortcodes_templates_dir($vc_templates_dir);

        require_once $dir_vc . '/visual-composer/extend-composer.php';

        require_once $vc_templates_dir_theme . '/header/tz-header.php';
        require_once $vc_templates_dir_theme . '/header/vc-header.php';

        require_once $vc_templates_dir_theme . '/slider-home/tz_slider_home_meetup.php';
        require_once $vc_templates_dir_theme . '/slider-home/vc-slider-home.php';

        require_once $vc_templates_dir_theme . '/title/tz-title-meetup.php';
        require_once $vc_templates_dir_theme . '/title/vc-title.php';

        require_once $vc_templates_dir_theme . '/about/tz-about-meetup.php';
        require_once $vc_templates_dir_theme . '/about/vc-about.php';

        require_once $vc_templates_dir_theme . '/video/tz-video-meetup.php';
        require_once $vc_templates_dir_theme . '/video/vc-video.php';

        require_once $vc_templates_dir_theme . '/counter/tz-counter.php';
        require_once $vc_templates_dir_theme . '/counter/vc-counter.php';

        require_once $vc_templates_dir_theme . '/slider-meetup/tz-slider-meetup.php';
        require_once $vc_templates_dir_theme . '/slider-meetup/vc-slider-meetup.php';

        require_once $vc_templates_dir_theme . '/our-team/our_team_meetup_item.php';
        require_once $vc_templates_dir_theme . '/our-team/vc-our-team.php';

        require_once $vc_templates_dir_theme . '/button-meetup/tz-button-meetup.php';
        require_once $vc_templates_dir_theme . '/button-meetup/vc-button-meetup.php';

        require_once $vc_templates_dir_theme . '/recent-blog/tz-recent-blog-meetup.php';
        require_once $vc_templates_dir_theme . '/recent-blog/vc-recent-blog.php';

        if ( function_exists('bcn_display') ) :
            require_once $vc_templates_dir_theme . '/breadcrumb/tz_breadcrumb.php';
            require_once $vc_templates_dir_theme . '/breadcrumb/vc-breadcrumb.php';
        endif;

        require_once $vc_templates_dir_theme . '/our-speakers/tz_our_speakers.php';
        require_once $vc_templates_dir_theme . '/our-speakers/vc-our-speakers.php';

        require_once $vc_templates_dir_theme . '/twitter-slider/tz-twitter-slider.php';
        require_once $vc_templates_dir_theme . '/twitter-slider/vc-twitter-slider.php';

        require_once $vc_templates_dir_theme . '/ask-questions/tz_ask_questions_meetup.php';
        require_once $vc_templates_dir_theme . '/ask-questions/vc-ask-questions.php';

        require_once $vc_templates_dir_theme . '/contact-meetup/tz-contact-meetup.php';
        require_once $vc_templates_dir_theme . '/contact-meetup/vc-contact-meetup.php';

        require_once $vc_templates_dir_theme . '/gmap-meetup/tz_gmap_meetup.php';
        require_once $vc_templates_dir_theme . '/gmap-meetup/vc-gmap-meetup.php';

        require_once $vc_templates_dir_theme . '/contact-meetup-2/tz-contact-meetup-2.php';
        require_once $vc_templates_dir_theme . '/contact-meetup-2/vc-contact-meetup-2.php';

        require_once $vc_templates_dir_theme . '/skill-item/tz-skill-item.php';
        require_once $vc_templates_dir_theme . '/skill-item/vc-skill-item.php';

        require_once $vc_templates_dir_theme . '/partner/tz_partner.php';
        require_once $vc_templates_dir_theme . '/partner/vc-partner.php';

        require_once $vc_templates_dir_theme . '/gallery-item/gallery-item.php';
        require_once $vc_templates_dir_theme . '/gallery-item/vc-gallery-item.php';

        require_once $vc_templates_dir_theme . '/tel_pricing_table/tel_pricing_table.php';
        require_once $vc_templates_dir_theme . '/tel_pricing_table/tel_pricing_table_extend.php';

        require_once $vc_templates_dir_theme . '/tel_countdown/tel_countdown.php';
        require_once $vc_templates_dir_theme . '/tel_countdown/tel_countdown_extend.php';

        include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

        if ( is_plugin_active( 'the-events-calendar/the-events-calendar.php' ) ) {

            require_once $vc_templates_dir_theme . '/features-events-calendar/features-events.php';
            require_once $vc_templates_dir_theme . '/features-events-calendar/vc-features-events.php';

            require_once $vc_templates_dir_theme . '/slide-event/slide-event.php';
            require_once $vc_templates_dir_theme . '/slide-event/vc-slide-event.php';

            require_once $vc_templates_dir_theme . '/single-feature-event/single-feature-event.php';
            require_once $vc_templates_dir_theme . '/single-feature-event/vc-single-feature-event.php';

        }

    }

    add_action('init', 'tzplazart_includevisual', 20);
endif;
function tel_animation( $css_animation ) {
    $output = '';
    if ( '' !== $css_animation && 'none' !== $css_animation ) {
        wp_enqueue_script( 'waypoints' );
        wp_enqueue_style( 'animate-css' );
        $output = ' wpb_animate_when_almost_visible wpb_' . $css_animation . ' ' . $css_animation;
    }
    return $output;
}
?>