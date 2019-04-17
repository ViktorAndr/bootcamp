<?php

/*
 * Display posts
 * Widgets display posts by category
 */

class TzViewPost extends WP_Widget{

    /* function construct*/
    function __construct() {
       parent::__construct(
           'tz_view_post',esc_html__('Meetup: View post', 'maniva-meetup'),
           array('description' => esc_html__(' Display post by category ', 'maniva-meetup'))
       );
    }

    /* function widget */
    function  widget($args,$instance){
        extract($args);
        if(isset($instance['tzcat']) && $instance['tzcat'] !=""):
            $cat = $instance['tzcat'];

            if(isset($instance['tzlimitpost']) && $instance['tzlimitpost']!=""){
                $maniva_meetup_limit = $instance['tzlimitpost'];
            }else{
                $maniva_meetup_limit = 5;
            }

            if(isset($instance['tzshowimage']) && $instance['tzshowimage']!=""){
                $maniva_meetup_showimg = $instance['tzshowimage']    ;
            }else{
                $maniva_meetup_showimg = "show";
            }
            if(isset($instance['tzshowtitle']) && $instance['tzshowtitle']!=""){
                $maniva_meetup_showtitle     = $instance['tzshowtitle'];
            }else{
                $maniva_meetup_showtitle    = "show";
            }

            if(isset($instance['tzshowexcerpt']) && $instance['tzshowexcerpt']!=""){
                $maniva_meetup_showexcerpt  = $instance['tzshowexcerpt'];
            }else{
                $maniva_meetup_showexcerpt  = "show";
            }
            if(isset($instance['tzshowinfo']) && $instance['tzshowinfo']!=""){
                $maniva_meetup_showinfo  = $instance['tzshowinfo'];
            }else{
                $maniva_meetup_showinfo  = "show";
            }

            $maniva_meetup_args = array(
                'post_type'         => 'post',
                'posts_per_page'    => $maniva_meetup_limit,
                'cat'               =>  $cat
            );

    ?>
            <aside class="tz_maniva_view_post widget">
                <h3 class="module-title"><span><?php echo esc_html($instance['title']); ?></span></h3>
                <ul>
                    <?php
                        $maniva_meetup_query = "";
                        $maniva_meetup_query = new WP_Query($maniva_meetup_args);
                        if($maniva_meetup_query->have_posts()):
                            while($maniva_meetup_query->have_posts()):
                                $maniva_meetup_query->the_post();

                                $typeitem   =  get_post_meta( get_the_ID(), 'maniva-meetup' . '_portfolio_type',true ) ;

                                $excerpt = get_the_excerpt();
                                $excerpt_ex = explode(' ', $excerpt);
                                $excerpt_slice = array_slice($excerpt_ex,0,$instance['limitexcerpt']);
                                $excerpt_content = implode(' ',$excerpt_slice);
                          if($typeitem !='link' && $typeitem !='quote'):
                    ?>
                    <li>
                        <div class="fearture-item">

                            <div class="tz-fearture-img">

                                <?php if($maniva_meetup_showimg=='show'): ?>

                                    <a href="<?php the_permalink(); ?>" class="tz-fearture-img-meetup">
                                        <?php the_post_thumbnail('large'); ?>
                                    </a>

                                <?php endif; ?>

                                <?php if ( $maniva_meetup_showtitle=='show' || $maniva_meetup_showexcerpt=='show' || $maniva_meetup_showinfo=='show' ) : ?>

                                    <div class="tz-view-post-detail">

                                        <?php if( $maniva_meetup_showtitle=='show' ): ?>

                                            <h6>
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h6>

                                        <?php endif; ?>

                                        <?php if( $maniva_meetup_showexcerpt=='show' ): echo '<p>'.esc_html($excerpt_content).'</p>' ; endif; ?>

                                        <?php if( $maniva_meetup_showinfo=='show' ): ?>

                                            <div class="tz-view-post-date">
                                                <span>
                                                   <?php the_time(get_option('date_format')); ?>
                                                </span>
                                            </div>


                                        <?php endif; ?>

                                    </div>

                                <?php endif; ?>

                            </div><!--end class tz-fearture-img-->

                        </div><!--end class fearture-item-->
                    </li>
                  <?php
                           endif;
                            endwhile; // end while(have_posts)

                        endif;  // end if(have_posts)
                    ?>
                </ul>
            </aside>
        <?php

        endif; // endif isset(category)

    }

    /* function form */
    function form($instance) {
        $instance = wp_parse_args( $instance, array(
            'title'             => 'Title',
            'tzlimitpost'       =>  5,
            'tzshowimage'       => 'show',
            'tzshowtitle'       =>  'show',
            'tzshowexcerpt'     =>  'show',
            'tzshowinfo'        =>  'show',
            'tzcat'             =>  '',
            'limitexcerpt'      =>  30
        ) );

    ?>
         <p>
             <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">
                 <?php esc_html_e('Title','maniva-meetup'); ?>
             </label>
             <br>
             <input type="text" name="<?php echo esc_attr($this->get_field_name('title')); ?>" id="<?php echo esc_attr($this->get_field_id('title')); ?>" class="widefat" value="<?php echo esc_attr($instance['title']); ?>" >
         </p>
         <p>
             <label for="<?php echo esc_attr($this->get_field_id('tzcat')); ?>">
                 <?php esc_html_e('Category','maniva-meetup'); ?>
             </label>

             <?php  wp_dropdown_categories( array( 'name' => $this->get_field_name("tzcat"),'show_count' => 1, 'selected' => $instance["tzcat"] ) ); ?>
         </p>
         <p>
             <label for="<?php echo esc_attr($this->get_field_id('tzlimitpost')); ?>">
                <?php esc_html_e('Limit post','maniva-meetup'); ?>
             </label>
             <input type="text" class="widefat"  id="<?php echo esc_attr($this->get_field_id('tzlimitpost')); ?>" name="<?php echo esc_attr($this->get_field_name('tzlimitpost')); ?>" value="<?php echo esc_attr($instance['tzlimitpost']); ?>" >
         </p>
          <p>
             <label for="<?php echo esc_attr($this->get_field_id('limitexcerpt')); ?>">
                <?php esc_html_e('Limit text excerpt','maniva-meetup'); ?>
             </label>
             <input type="text" class="widefat"  id="<?php echo esc_attr($this->get_field_id('limitexcerpt')); ?>" name="<?php echo esc_attr($this->get_field_name('limitexcerpt')); ?>" value="<?php echo esc_attr($instance['limitexcerpt']); ?>" >
         </p>
         <p>
             <label for="<?php echo esc_attr($this->get_field_id('tzshowimage')); ?>">
                 <?php esc_html_e('Show Image','maniva-meetup'); ?>
             </label>
             <select class="widefat"  name="<?php echo esc_attr($this->get_field_name('tzshowimage')); ?>">
                 <option value="show" <?php if($instance['tzshowimage']=='show'){ echo 'selected="true"'; } ?>>Show</option>
                 <option value="hide" <?php if($instance['tzshowimage']=='hide'){ echo 'selected="true"'; } ?>>Hide</option>
             </select>
         </p>
         <p>
             <label for="<?php echo esc_attr($this->get_field_id('tzshowtitle')); ?>">
                <?php esc_html_e('Show Title','maniva-meetup'); ?>
             </label>
             <select class="widefat"  name="<?php echo esc_attr($this->get_field_name('tzshowtitle')); ?>">
                <option value="show" <?php if($instance['tzshowtitle']=='show'){ echo 'selected="true"'; } ?>>Show</option>
                 <option value="hide" <?php if($instance['tzshowtitle']=='hide'){ echo 'selected="true"'; } ?>>Hide</option>
             </select>
         </p>
         <p>
             <label for="<?php echo esc_attr($this->get_field_id('tzshowexcerpt')); ?>">
                <?php esc_html_e('Show excerpt','maniva-meetup'); ?>
             </label>
             <select class="widefat"  name="<?php echo esc_attr($this->get_field_name('tzshowexcerpt')); ?>">
                <option value="show" <?php if($instance['tzshowexcerpt']=='show'){ echo 'selected="true"'; } ?>>Show</option>
                 <option value="hide" <?php if($instance['tzshowexcerpt']=='hide'){ echo 'selected="true"'; } ?>>Hide</option>
             </select>
         </p>
         <p>
             <label for="<?php echo esc_attr($this->get_field_id('tzshowinfo')); ?>">
                <?php esc_html_e('Show Info','maniva-meetup'); ?>
             </label>
             <select class="widefat"  name="<?php echo esc_attr($this->get_field_name('tzshowinfo')); ?>">
                <option value="show" <?php if($instance['tzshowinfo']=='show'){ echo 'selected="true"'; } ?>>Show</option>
                 <option value="hide" <?php if($instance['tzshowinfo']=='hide'){ echo 'selected="true"'; } ?>>Hide</option>
             </select>
         </p>
       <?php
    }

    /* function update */
    function update($new_instance,$old_instance){
        $instance = $old_instance ;
        $instance['title']          =   $new_instance['title'];
        $instance['tzlimitpost']    =   $new_instance['tzlimitpost'];
        $instance['tzcat']          =   $new_instance['tzcat'];
        $instance['tzshowtitle']    =   $new_instance['tzshowtitle'];
        $instance['tzshowexcerpt']  =   $new_instance['tzshowexcerpt'];
        $instance['tzshowimage']    =   $new_instance['tzshowimage'];
        $instance['tzshowinfo']    =   $new_instance['tzshowinfo'];
        $instance['limitexcerpt']    =   $new_instance['limitexcerpt'];
        return $instance;
    }
}
add_action('widgets_init',create_function('','return register_widget("TzViewPost");'));

?>