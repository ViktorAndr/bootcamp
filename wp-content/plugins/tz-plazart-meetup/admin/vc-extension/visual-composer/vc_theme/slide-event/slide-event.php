<?php

function tz_slide_event($atts) {

    $cat_tribe_events = $limit = $order_by = $order = $btn_event_text ='';

    extract(shortcode_atts(array(

        'cat_tribe_events'  =>  '',
        'limit'             =>  3,
        'order_by'          =>  'date',
        'order'             =>  'DESC',
        'btn_event_text'    =>  'Details',

    ),$atts));
    ob_start();

    $tz_tribe_cat = array();

    if ( $cat_tribe_events !='' ) :

        $cat_tribe_id = explode(",",$cat_tribe_events);

        if(is_array( $cat_tribe_id )) {

            $count_cat  =   count( $cat_tribe_id );

            for($i=0; $i<$count_cat; $i++){
                $tz_tribe_cat[]  =   (int)$cat_tribe_id[$i];
            }

        }else{
            $tz_tribe_cat[]    = (int)$cat_tribe_id;
        }

    endif;

    if ( isset( $cat_tribe_events ) && !empty( $cat_tribe_events ) ):


        $args = array(
            'post_status'       =>  'publish',
            'post_type'         =>  'tribe_events',
            'posts_per_page'    =>  $limit,
            'orderby'           =>  $order_by,
            'order'             =>  $order,
            'eventDisplay'      =>  'custom',
            'tax_query'         =>  array(
                array(
                    'taxonomy'  =>  'tribe_events_cat',
                    'field'     =>  'id',
                    'terms'     =>   $tz_tribe_cat
                )
            )
        );

    else:

        $args = array(
            'post_type'         =>  'tribe_events',
            'posts_per_page'    =>  $limit,
            'orderby'           =>  $order_by,
            'order'             =>  $order,
            'eventDisplay'      =>  'custom',
        );

    endif;

    $tribe_event = new WP_Query( $args );

    ?>

    <div class="tz_slide_events">
        <div class="tz_slide_events_flex flexslider">
            <ul class="tz_slide_events_item slides">
                <div class="tz_slide_events_bk"></div>

                <?php
                if ( $tribe_event->have_posts() ) :
                    while ( $tribe_event->have_posts() ) :
                        $tribe_event->the_post();

                        $start_month        =   tribe_get_start_date( null, false, 'M' );
                        $start_day          =   tribe_get_start_date( null, false, 'd' );
                        $start_year         =   tribe_get_start_date( null, false, 'Y' );

                        $start_month_day    =   tribe_get_start_date( null, false, 'M d' );
                        $end_time           =   tribe_get_end_date( null, false, 'M d, Y' );

                        $tz_img_slide_event         =   get_post_meta( get_the_ID(), 'maniva-meetup' . '_tribe_events_slide_image', TRUE );
                ?>

                        <li id="tz_tribe_events_<?php the_ID(); ?>" class="tz_content_tribe_events">

                            <?php if ( $tz_img_slide_event !='' ) : ?>

                                <img src="<?php echo esc_url( $tz_img_slide_event ); ?>" alt="slide_event">

                            <?php

                            else:

                                the_post_thumbnail('full');

                            endif;
                            ?>

                            <div class="tz_slide_events_content">
                                <div class="container">
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
                                    <div class="tz_slide_events_title">
                                        <h3>
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </h3>
                                        <span class="tz_features_count_time_add">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <?php echo tribe_get_full_address(); ?>
                                        </span>
                                        <span class="tz_features_count_time_add">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            <?php echo esc_attr( $start_month_day ) .' - '. esc_attr( $end_time ); ?>
                                        </span>
                                        <a class="slide_event_link" href="<?php the_permalink(); ?>">
                                            <?php echo balanceTags( $btn_event_text ); ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>

                <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>

            </ul>
        </div>
        <div class="tz_thumb_navigation_bk"></div>
        <div class="tz_thumb_navigation">
            <div class="container">
                <div class="tz_slide_events_carousel flexslider">
                    <ul class="slides">

                        <?php
                        if ( $tribe_event->have_posts() ) :
                            while ( $tribe_event->have_posts() ) :
                                $tribe_event->the_post();

                                $start_month        =   tribe_get_start_date( null, false, 'M' );
                                $start_day          =   tribe_get_start_date( null, false, 'd' );
                                $start_year         =   tribe_get_start_date( null, false, 'Y' );

                                $start_month_day_start  =   tribe_get_start_date( null, false, 'M d' );
                                $start_month_day_end    =   tribe_get_end_date( null, false, 'M d' );

                                $title = get_the_title();
                                $pad = '...';

                                $limit_character_title = 25;

                                if ($limit_character_title != ''){
                                    if ( strlen($title) <= $limit_character_title ):
                                        $title = get_the_title();
                                    else:
                                        $title = substr($title, 0, $limit_character_title) . $pad;
                                    endif;
                                }

                                $tz_img_slide_event_thumb   =   get_post_meta( get_the_ID(), 'maniva-meetup' . '_tribe_events_thumbnail_image', TRUE );
                        ?>

                                <li>
                                    <div class="tz_thumb_navigation_box">
                                        <div class="tz_thumb_navigation_post_event">

                                            <?php if ( $tz_img_slide_event_thumb !='' ) : ?>

                                                <img src="<?php echo esc_url( $tz_img_slide_event_thumb ); ?>" alt="slide_thumb_event">

                                            <?php

                                            else:

                                                the_post_thumbnail();

                                            endif;

                                            ?>

                                            <?php

                                            if ( tribe_get_cost() ) :

                                            ?>

                                                <p class="tz_slide_event_cost">
                                                    <span><?php echo tribe_get_cost( null, true ); ?></span>
                                                    <i class="fa fa-ticket" aria-hidden="true"></i>
                                                </p>

                                            <?php endif; ?>



                                        </div>
                                        <div class="tz_thumb_navigation_item">
                                            <h3>
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php
                                                    echo esc_html($title);
                                                    ?>
                                                </a>
                                            </h3>
                                            <span class="tz_event_thumb_add">
                                            <?php echo tribe_get_full_address(); ?>
                                        </span>
                                            <div class="tz_event_thumb_time">
                                            <span>
                                                <?php echo esc_attr( $start_month_day_start ) . ' - ' . esc_attr( $start_month_day_end ); ?>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                        <?php
                            endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php

    return ob_get_clean();

}
add_shortcode('tz-slide-event','tz_slide_event');