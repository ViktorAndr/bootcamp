<?php
function tz_meetup_recent_blog( $atts ) {

    $type_blog = $category_blog_arr = $limit_post = $order_by = $tz_order = $item_desktop = $text_button =  $link = '';
    $tz_prev_next = $auto_blog =  $loop_blog = $rtl_blog = $tz_hide_author = $tz_hide_date = $type_date = $hide_comment = '';

    extract(shortcode_atts(array(

        'type_blog'         =>  1,
        'category_blog_arr' =>  '',
        'limit_post'        =>  '',
        'item_desktop'      =>  3,
        'order_by'          =>  'id',
        'tz_order'          =>  'ASC',
        'text_button'       =>  '',
        'link'              =>  '',
        'tz_prev_next'      =>  '',
        'auto_blog'         =>  0,
        'loop_blog'         =>  0,
        'rtl_blog'          =>  0,
        'tz_hide_author'    =>  'show',
        'tz_hide_date'      =>  'show',
        'type_date'         =>  'j M, Y',
        'hide_comment'      =>  'show'

    ), $atts));
    ob_start();

    $vc_link = vc_build_link( $link );

    if ( isset( $category_blog_arr ) && !empty( $category_blog_arr ) ):

        $args = array(
            'post_type'         =>  'post',
            'cat'               =>  $category_blog_arr,
            'posts_per_page'    =>  $limit_post,
            'orderby'           =>  $order_by,
            'order'             =>  $tz_order,
        );

    else:

        $args = array(
            'post_type'         =>  'post',
            'posts_per_page'    =>  $limit_post,
            'orderby'           =>  $order_by,
            'order'             =>  $tz_order,
        );

    endif;

    $recent_news    =   new WP_Query( $args ) ;

    if ( $type_blog == 1 ) :
        $tz_class_type_blog = ' tz_meetup_slider_blog owl-carousel owl-theme';
    else:
        $tz_class_type_blog = 'tz_list_full_blog row';
    endif;

?>

    <div class="tz_recent_blog_meetup">

        <?php if ( $tz_prev_next !='hide' && $type_blog == 1 ) : ?>

            <button class="tz_recent_blog_pev_meetup">
                <i class="fa fa-angle-left"></i>
            </button>
            <button class="tz_recent_blog_next_meetup">
                <i class="fa fa-angle-right"></i>
            </button>

        <?php endif; ?>


        <div class="<?php echo esc_attr( $tz_class_type_blog ); ?>" <?php if ( $type_blog == 1 ) : ?>data-item-dk="<?php echo esc_attr( $item_desktop ); ?>" data-auto-blog="<?php echo esc_attr( $auto_blog ); ?>" data-loop-blog="<?php echo esc_attr( $loop_blog ); ?>" data-rtl-blog="<?php echo esc_attr( $rtl_blog ); ?>"<?php endif; ?>>

            <?php

                if ( $recent_news->have_posts() ) :
                    $i = 0;
                    while ( $recent_news->have_posts() ) :
                        $recent_news->the_post();
                        global $post;

                        $tzmaniva_comment_count =   wp_count_comments( $post->ID );
                        $tz_meetup_post_type    =   get_post_meta( get_the_ID(),'maniva-meetup' . '_portfolio_type',true );
                        $tz_meetup_slideshows   =   get_post_meta( get_the_ID(),'maniva-meetup' . '_portfolio_slideshows',true );

                        if ( $tz_meetup_post_type == 'slideshows' && $tz_meetup_slideshows !='' ) :
                            $tz_class_item_blog =   'tz_meetup_slider_img';
                        else:
                            $tz_class_item_blog =   'tz_meetup_post_img';
                        endif;

                        if ( $type_blog == 2 && $recent_news->current_post == 0 ) :

            ?>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">


                        <?php

                        endif;

                            if ( $type_blog == 1 || ($type_blog == 2 && $recent_news->current_post == 0) ) :

                        ?>

                            <div id="tz_recent_blog_meetup_<?php the_ID(); ?>" class="tz_recent_blog_meetup_content">

                                <div class="tz_image_recent_blog_meetup">
                                    <div class="tz_meetup_post_img">

                                        <?php the_post_thumbnail('large'); ?>

                                        <div class="tz_viev_link_blog">
                                            <span class="view_img_slider_blog btn_slider_view_link">
                                                <a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() )); ?>" data-rel="latestPhoto[worksGallery]">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                            </span>
                                            <span class="link_post_blog btn_slider_view_link">
                                                <a href="<?php the_permalink() ?>">
                                                    <i class="fa fa-external-link"></i>
                                                </a>
                                            </span>
                                        </div>

                                    </div>
                                    <div class="tz_recent_blog_meetup_date">
                                        <span class="tz_month_latest">
                                            <?php echo date_i18n( 'M', strtotime( get_the_time( "Y-m-d" ) ) ); ?>
                                        </span>
                                        <span class="tz_date_latest">
                                            <?php echo date_i18n( 'jS', strtotime( get_the_time( "Y-m-d" ) ) ); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="tz_recent_blog_meetup_detail">
                                    <h4>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h4>

                                    <div class="tz_meetup_description_latest">

                                        <?php
                                        if ( !empty( $post->post_excerpt ) ) :
                                            echo '<p>'. get_the_excerpt() . '</p>';
                                        else:
                                            echo '<p>'. wp_trim_words( get_the_content(), 22, '' ) . '</p>';
                                        endif;
                                        ?>

                                    </div>
                                    <span class="tz_meetup_infomation">

                                        <?php if ( $tz_hide_author == 'show' ) : ?>

                                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>">
                                                by <?php the_author();?>
                                            </a>

                                        <?php endif; ?>

                                        <?php if ( $tz_hide_date == 'show' ) : ?>

                                            <small>
                                                <i class="fa fa-calendar"></i><?php echo get_the_time($type_date,$post->ID);?>
                                            </small>

                                        <?php endif; ?>

                                        <?php if ( $hide_comment == 'show' ) : ?>

                                            <small>
                                                <i class="fa fa-comment"></i><?php echo esc_html($tzmaniva_comment_count ->total_comments);?>
                                            </small>

                                        <?php endif; ?>

                                    </span>
                                </div>

                            </div>

                            <?php

                            else:
                                $i++;
                                $count = $recent_news->post_count - 1;

                                if ( $count > 0 ) :

                            ?>

                                    <?php if ( $i == 1 ) : ?> <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> <?php endif; ?>

                                        <div id="tz_recent_blog_meetup_<?php the_ID(); ?>" class="tz_recent_blog_meetup_content tz_recent_blog_list row">

                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="tz_image_recent_blog_meetup tz_post_right_img">
                                                    <div class="<?php echo esc_attr( $tz_class_item_blog ); ?>">

                                                        <?php if ( $tz_meetup_post_type == 'slideshows' && $tz_meetup_slideshows !='' ) : ?>

                                                            <div class="slides_blog_item owl-carousel owl-theme">
                                                                <?php
                                                                foreach ( $tz_meetup_slideshows as $tz_meetup_slide ):
                                                                    ?>
                                                                    <div class="blog_item_img">
                                                                        <img src="<?php echo esc_url($tz_meetup_slide['maniva-meetup' . '_portfolio_slideshow_item']) ; ?>" alt="<?php the_title();?>">

                                                                    </div>
                                                                    <?php
                                                                endforeach;
                                                                ?>
                                                            </div>

                                                        <?php else: ?>

                                                            <?php the_post_thumbnail('large'); ?>

                                                        <?php endif; ?>

                                                        <div class="tz_viev_link_blog">
                                                            <span class="view_img_slider_blog btn_slider_view_link">
                                                                <a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() )); ?>" data-rel="latestPhoto[worksGallery]">
                                                                    <i class="fa fa-search"></i>
                                                                </a>
                                                            </span>
                                                            <span class="link_post_blog btn_slider_view_link">
                                                                <a href="<?php the_permalink() ?>">
                                                                    <i class="fa fa-external-link"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="tz_recent_blog_meetup_date">
                                                        <span class="tz_month_latest">
                                                            <?php echo date_i18n( 'M', strtotime( get_the_time( "Y-m-d" ) ) ); ?>
                                                        </span>
                                                        <span class="tz_date_latest">
                                                            <?php echo date_i18n( 'jS', strtotime( get_the_time( "Y-m-d" ) ) ); ?>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="tz_recent_blog_meetup_detail tz_post_right_detail">
                                                    <h4>
                                                        <a href="<?php the_permalink(); ?>">
                                                            <?php the_title(); ?>
                                                        </a>
                                                    </h4>

                                                    <div class="tz_meetup_description_latest">

                                                        <?php
                                                        if ( !empty( $post->post_excerpt ) ) :
                                                            echo '<p>'. get_the_excerpt() . '</p>';
                                                        else:
                                                            echo '<p>'. wp_trim_words( get_the_content(), 22, '' ) . '</p>';
                                                        endif;
                                                        ?>

                                                    </div>
                                                    <span class="tz_meetup_infomation">

                                                        <?php if ( $tz_hide_author == 'show' ) : ?>

                                                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>">
                                                                by <?php the_author();?>
                                                            </a>

                                                        <?php endif; ?>

                                                        <?php if ( $tz_hide_date == 'show' ) : ?>

                                                            <small>
                                                                <i class="fa fa-calendar"></i><?php echo get_the_time($type_date,$post->ID);?>
                                                            </small>

                                                        <?php endif; ?>

                                                        <?php if ( $hide_comment == 'show' ) : ?>

                                                            <small>
                                                                <i class="fa fa-comment"></i><?php echo esc_html($tzmaniva_comment_count ->total_comments);?>
                                                            </small>

                                                        <?php endif; ?>

                                                    </span>
                                                </div>
                                            </div>

                                        </div>

                                    <?php if ( $i == $count ) : ?> </div> <?php endif; ?>

                        <?php
                                endif;

                            endif;

                        if ( $type_blog == 2 && $recent_news->current_post == 0 ) :

                        ?>

                        </div>

                        <?php endif; ?>

            <?php
                    endwhile;
                endif;
            wp_reset_postdata();
            ?>

        </div>

        <?php if ( $text_button !='' ) : ?>

        <div class="tz_meetup_btn_post">
            <a <?php echo ( $vc_link['target'] != '' ? 'target="' . esc_attr( $vc_link['target'] ) . '"' : '') .' '. ( $vc_link['url'] != '' ? 'href="' . esc_attr( $vc_link['url'] ) . '"' : '' ) . ' '. ( $vc_link['title'] != '' ? 'title="' . esc_attr( $vc_link['title'] ) . '"' : '' )  ; ?>>
                <?php echo balanceTags( $text_button ); ?>
            </a>
        </div>

        <?php endif; ?>

    </div>

<?php

    $tz_maniva  =   ob_get_contents();
    ob_end_clean();
    return $tz_maniva;
}

add_shortcode('tz_recent_blog_meetup','tz_meetup_recent_blog');

?>