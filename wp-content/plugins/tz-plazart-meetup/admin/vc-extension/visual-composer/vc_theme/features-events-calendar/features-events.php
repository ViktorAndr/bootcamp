<?php

function tz_features_event($atts) {

    $tz_features_event = $order_by = $tz_order = $text_btn = $bk_btn_link = $color_text_btn = $text_title_cf = '';
    $text_day = $text_hour = $text_min = $text_sec = $contact_form_id = $tz_show_hide_cf7 = $tz_show_hide_add_to_any = $tz_show_hide_add_event = $tz_show_hide_excerpt_event ='';
    $auto_slider = $speed = $speed_slider = '';

    extract(shortcode_atts(array(

        'tz_features_event'          =>  '',
        'order_by'                   =>  'id',
        'tz_order'                   =>  'ASC',
        'text_btn'                   =>  'learn more',
        'bk_btn_link'                =>  '',
        'color_text_btn'             =>  '',
        'text_day'                   =>  'days',
        'text_hour'                  =>  'hours',
        'text_min'                   =>  'mins',
        'text_sec'                   =>  'secs',
        'tz_show_hide_add_to_any'    =>  1,
        'tz_show_hide_cf7'           =>  1,
        'text_title_cf'              =>  'EVENT <em>REGISTER</em>',
        'contact_form_id'            =>  '',
        'tz_show_hide_add_event'     =>  1,
        'tz_show_hide_excerpt_event' =>  1,
        'auto_slider'                =>  1,
        'speed'                      =>  6000,
        'speed_slider'               =>  1200


    ),$atts));
    ob_start();

    $ids = array_filter( str_replace(" ",'',explode(',', $tz_features_event) ));

    if ( $ids != '' ) {

        $query_args = array(
            'post_status'           =>  'publish',
            'post_type'             =>  'tribe_events',
            'ignore_sticky_posts' 	=>  1,
            'posts_per_page'        =>  -1,
            'eventDisplay'          =>  'custom',
            'post__in'            	=>  $ids,
            'orderby' 				=>  $order_by,
            'order'                 =>  $tz_order
        );

    }else {

        $query_args = array(
            'post_status'           =>  'publish',
            'post_type'             =>  'tribe_events',
            'ignore_sticky_posts' 	=>  1,
            'posts_per_page'        =>  -1,
            'eventDisplay'          =>  'custom',
            'orderby' 				=>  $order_by,
            'order'                 =>  $tz_order
        );

    }

    $color_btn_link = $color_text_btn_link = '';

    if ( $bk_btn_link != '' ) :
        $color_btn_link = "background-color:$bk_btn_link;border-color:$bk_btn_link;";
    endif;

    if ( $color_text_btn != '' ) :
        $color_text_btn_link = "color:$color_text_btn;";
    endif;

    $tz_features_event_post = new WP_Query( $query_args );

    ?>

    <div id="slides" class="tz_features_event" data-auto="<?php echo esc_attr( $auto_slider ); ?>" data-speed="<?php echo esc_attr( $speed ); ?>" data-speed-slider="<?php echo esc_attr( $speed_slider ); ?>">
        <?php if ( $tz_show_hide_cf7 == 1 ) : ?>
            <div class="ctf-fixed">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="tz_features_event_contact_form">
                                <h3>
                                    <?php echo balanceTags( $text_title_cf, true ); ?>
                                </h3>
                                <?php echo do_shortcode( '[contact-form-7 id="'.esc_attr( $contact_form_id ).'"]' ); ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        <?php endif; ?>
        <div class="slides-container">
            <?php

            if ( $tz_features_event_post->have_posts() ) :
                while ( $tz_features_event_post->have_posts() ) :
                    $tz_features_event_post->the_post();

                    $date_full_now      =   date( 'Y-m-d H:i:s' );
                    $start_time_full    =   tribe_get_start_date( null, false, $format = 'Y-m-d H:i:s' );
                    $end_time_full      =   tribe_get_end_date( null, false, $format = 'Y-m-d H:i:s' );

                    $start_month        =   tribe_get_start_date( null, false, 'M d' );
                    $end_time           =   tribe_get_end_date( null, false, 'M d, Y' );

                    if ( strtotime( $date_full_now ) < strtotime( $start_time_full ) ) :

                        $start_time         =   tribe_get_start_date( null, false, $format = 'H:i:s' );
                        $start_only_day     =   tribe_get_start_date( null, false, 'd' );
                        $start_only_month   =   tribe_get_start_date( null, false, 'm' );
                        $start_year         =   tribe_get_start_date( null, false, 'Y' );

                    elseif( strtotime( $date_full_now ) < strtotime( $end_time_full ) ) :

                        $start_time         =   tribe_get_end_date( null, false, $format = 'H:i:s' );
                        $start_only_day     =   tribe_get_end_date( null, false, 'd' );
                        $start_only_month   =   tribe_get_end_date( null, false, 'm' );
                        $start_year         =   tribe_get_end_date( null, false, 'Y' );

                    else:

                        $start_time = $start_only_day = $start_only_month = $start_year = '';

                    endif;


            ?>

                    <div class="tz_features_event_item">
                        <?php the_post_thumbnail('full'); ?>
                        <div class="tz_features_event_bk"></div>
                        <div class="tz_features_event_detail">
                            <div class="container">
                                <div class="row">

                                    <div class="<?php echo ( $tz_show_hide_cf7 == 1 ? 'col-lg-8 col-md-8 col-sm-6 col-xs-12' : 'col-lg-12 col-md-12 col-sm-12 col-xs-12' ); ?>">
                                        <div class="tz_features_event_box" data-title-event="<?php the_title(); ?>">

                                            <?php

                                            if ( is_plugin_active( 'add-to-any/add-to-any.php' ) && $tz_show_hide_add_to_any == 1 ) {
                                                ?>
                                                <div class="animated fadeInDown">
                                                    <?php echo do_shortcode( '[addtoany]' ); ?>
                                                </div>
                                                <?php
                                            }

                                            if ( tribe_get_full_address() !='' && $tz_show_hide_add_event == 1 ) :

                                            ?>

                                                <p class="events_address animated fadeInDown">
                                                    <?php the_title(); echo ' ' . esc_html__( 'at','maniva-meetup' ) . tribe_get_full_address() . ' ' . esc_html__( 'on','maniva-meetup' ) . ' '. esc_attr( $start_only_day ) .' - '. esc_attr( $end_time ); ?>
                                                </p>

                                            <?php endif; ?>

                                            <h2 class="animated fadeInDown">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_title(); ?>
                                                </a>
                                            </h2>

                                            <?php

                                            if ( has_excerpt() && $tz_show_hide_excerpt_event == 1 ) :
                                                echo '<p class="excerpt animated fadeInDown">'. get_the_excerpt() .'</p>';
                                            endif;

                                            ?>

                                            <div class="tz_features_event_content">
                                                <p class="animated fadeInDown">
                                                    <?php echo wp_trim_words( get_the_content(), 35, '...' ); ?>
                                                </p>

                                                <?php if ( $text_btn != '' ) : ?>

                                                    <a href="<?php the_permalink(); ?>" class="btn_link_features_event  animated fadeInDown" <?php echo ( $bk_btn_link != '' || $color_text_btn !='' ? 'style="'. esc_attr( $color_btn_link ) . esc_attr( $color_text_btn_link ) .'"' : '' ); ?>>
                                                        <?php echo balanceTags( $text_btn ); ?>
                                                    </a>

                                                <?php endif; ?>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"></div>

                                </div>
                            </div>
                        </div>
                        <div class="tz_features_count_event">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                        <h3>
                                            <a href="<?php the_permalink() ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </h3>
                                        <span class="tz_features_count_time_add">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <?php echo tribe_get_full_address(); ?>
                                        </span>
                                        <span class="tz_features_count_time_add">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            <?php echo esc_attr( $start_month ) .' - '. esc_attr( $end_time ); ?>
                                        </span>
                                    </div>

                                    <?php if ( $start_time != '' || $start_only_day != '' || $start_only_month != '' || $start_year != '' ) : ?>

                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                            <div class="tz_features_box_countdown">
                                                <div class="tz_features_event_countdown" data-countdown="<?php echo esc_attr( $start_year ).'/'.esc_attr( $start_only_month ).'/'.esc_attr( $start_only_day ).' '.esc_attr( $start_time ); ?>" data-text-day="<?php echo balanceTags( $text_day ); ?>" data-text-hour="<?php echo balanceTags( $text_hour ); ?>" data-text-min="<?php echo balanceTags( $text_min ); ?>" data-text-sec="<?php echo balanceTags( $text_sec ); ?>"></div>
                                            </div>
                                        </div>

                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>

            <?php

                endwhile;
            endif;
            wp_reset_postdata();

            ?>

        </div>

        <nav class="slides-navigation">
            <a href="#" class="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            <a href="#" class="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </nav>

    </div>

    <?php

    return ob_get_clean();

}
add_shortcode('tz-features-event','tz_features_event');