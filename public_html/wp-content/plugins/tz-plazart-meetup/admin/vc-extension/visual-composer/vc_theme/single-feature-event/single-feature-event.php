<?php

function tz_single_feature_event($atts) {

    $tz_features_event = $txt_title_detail = $txt_start_time = $txt_end_time = $txt_end_cost = $txt_categories = $txt_tag = $txt_website = $txt_title_schedule = $txt_buy_ticket = '';

    extract(shortcode_atts(array(

        'tz_features_event'     =>  '',
        'txt_title_detail'      =>  'Details',
        'txt_start_time'        =>  'Start:',
        'txt_end_time'          =>  'End:',
        'txt_end_cost'          =>  'Cost:',
        'txt_categories'        =>  'Event Categories',
        'txt_tag'               =>  'Event Tags:',
        'txt_website'           =>  'Website:',
        'txt_title_schedule'    =>  'Schedule',
        'txt_buy_ticket'        =>  'Buy Ticket',

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
        );

    }else {

        $query_args = array(
            'post_status'           =>  'publish',
            'post_type'             =>  'tribe_events',
            'ignore_sticky_posts' 	=>  1,
            'posts_per_page'        =>  -1,
            'eventDisplay'          =>  'custom',
        );

    }

    $tz_single_feature_event_post = new WP_Query( $query_args );

    ?>

    <div class="tz_single_feature_event">

        <?php

        if ( $tz_single_feature_event_post->have_posts() ) :
            while ( $tz_single_feature_event_post->have_posts() ) :
                $tz_single_feature_event_post->the_post();

                global $post;

                $start_time_full    =   tribe_get_start_time( null, $format = 'H:i a' );
                $end_time_full      =   tribe_get_end_time( null, $format = 'H:i a' );

                $start_month        =   tribe_get_start_date( null, false, 'M' );
                $start_day          =   tribe_get_start_date( null, false, 'd' );
                $start_year         =   tribe_get_start_date( null, false, 'Y' );

                $start_month_day    =   tribe_get_start_date( null, false, 'M d' );
                $start_date_full    =   tribe_get_start_date( null, false, 'M d, Y' );
                $end_date_full      =   tribe_get_end_date( null, false, 'M d, Y' );

                $website = tribe_get_event_website_link();

                $tz_maniva_meetup_schedule = get_post_meta( $post->ID, 'maniva-meetup-schedule-event', true );

                if( $tz_maniva_meetup_schedule != ''  ) :

                    $tz_maniva_meetup_schedule = explode( "\n", $tz_maniva_meetup_schedule );

                endif;



        ?>
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <?php the_post_thumbnail('full'); ?>
                        <div class="tz_single_feature_box">
                            <div class="tz_slide_events_time">
                                <span class="tz_slide_events_time_month">
                                    <?php echo esc_attr( $start_month ); ?>
                                </span>
                                <span class="tz_slide_events_time_day">
                                    <?php echo esc_attr( $start_day ); ?>
                                </span>
                                <span class="tz_slide_events_time_year">
                                    <?php echo esc_attr( $start_year ); ?>
                                </span>
                            </div>
                            <div class="tz_single_feature_content">
                                <h3>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                <span class="tz_single_feature_time_add">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <?php echo tribe_get_full_address(); ?>
                                </span>
                                <span class="tz_single_feature_time_add">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <?php echo esc_attr( $start_month_day ) .' - '. esc_attr( $end_date_full ); ?>
                                </span>
                                <div class="tz_single_feature_detail">
                                    <?php
                                        if ( has_excerpt() ) :
                                            the_excerpt();
                                        else:
                                            the_content();
                                        endif;
                                     ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="tz_single_feature_event_meta_box">

                            <div class="tz_single_feature_event_meta">
                                <h3><?php echo balanceTags( $txt_title_detail ); ?></h3>

                                <?php if ( $start_date_full != '' || $start_time_full != '' ) : ?>

                                    <div class="tz_single_feature_event_meta_group">
                                        <span class="pull-left"><?php echo balanceTags( $txt_start_time ); ?></span>
                                        <span class="pull-right"><?php echo esc_attr( $start_date_full ) .' &#64; '. $start_time_full ; ?></span>
                                    </div>

                                <?php endif; ?>

                                <?php if ( $end_date_full != '' || $end_time_full != '' ) : ?>

                                    <div class="tz_single_feature_event_meta_group">
                                        <span class="pull-left"><?php echo balanceTags( $txt_end_time ); ?></span>
                                        <span class="pull-right"><?php echo esc_attr( $end_date_full ) .' &#64; '. $end_time_full ; ?></span>
                                    </div>

                                <?php endif; ?>

                                <?php if ( tribe_get_cost() ) : ?>

                                    <div class="tz_single_feature_event_meta_group">
                                        <span class="pull-left"><?php echo balanceTags( $txt_end_cost ); ?></span>
                                        <span class="pull-right"><?php echo tribe_get_cost( null, true ); ?></span>
                                    </div>

                                <?php endif; ?>

                                <div class="tz_single_feature_event_meta_group">
                                    <?php echo tribe_get_event_categories(
                                        $post->ID,  array(
                                            'before'       => '',
                                            'sep'          => ', ',
                                            'after'        => '',
                                            'label'        => $txt_categories, // An appropriate plural/singular label will be provided
                                            'label_before' => '<span class="pull-left">',
                                            'label_after'  => '</span>',
                                            'wrap_before'  => '<span class="pull-right">',
                                            'wrap_after'   => '</span>',
                                        ));
                                    ?>
                                </div>


                                <?php echo get_the_term_list( $post->ID, 'post_tag', '<div class="tz_single_feature_event_meta_group"><span class="pull-left"> ' . $txt_tag . '</span><span class="pull-right">', ', ', '</span></div>' ); ?>


                                <?php if ( $website != '' ) : ?>

                                    <div class="tz_single_feature_event_meta_group">
                                        <span class="pull-left"><?php echo balanceTags( $txt_website ); ?></span>
                                        <span class="pull-right"><?php echo balanceTags( $website ); ?></span>
                                    </div>

                                <?php endif; ?>

                            </div>

                            <?php if ( $tz_maniva_meetup_schedule != '' ) :  ?>

                                <div class="tz_single_feature_event_meta tz_single_feature_event_meta_list">
                                    <h3><?php echo balanceTags( $txt_title_schedule ); ?></h3>

                                    <ul>

                                        <?php

                                        foreach ( $tz_maniva_meetup_schedule as $item ) :

                                            if ( $item ) :

                                        ?>

                                            <li class="item">
                                                <i class="fa fa-circle" aria-hidden="true"></i>
                                                <span>
                                                    <?php echo esc_attr( $item ); ?>
                                                </span>
                                            </li>

                                        <?php

                                            endif;

                                        endforeach;

                                        ?>

                                    </ul>
                                </div>

                            <?php endif; ?>

                            <a href="<?php the_permalink() ?>" class="tz_event_buy_ticket">
                                <?php echo balanceTags( $txt_buy_ticket ); ?>
                            </a>

                        </div>
                    </div>
                </div>
        <?php
                endwhile;
            endif;
        wp_reset_postdata();
        ?>


    </div>

    <?php

    return ob_get_clean();

}
add_shortcode('tz-single-feature-event','tz_single_feature_event');