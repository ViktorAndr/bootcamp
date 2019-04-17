<?php
 /* *
  * widgets contact info
  **/
  class tz_contact_info extends WP_Widget{

      /*function construct*/
      public function __construct() {
          parent::__construct(
            'contact_info',esc_html__('Meetup: Contact info','maniva-meetup'),
             array('description'=>esc_html__('Display Contact info', 'maniva-meetup'))
          );
      }

      /**
       * font-end widgets
      */
      public function widget($args, $instance) {
          extract($args);
          $title = apply_filters('widget_title', $instance['title']);

          echo balanceTags($before_widget);

          if($title) {
              echo balanceTags($before_title).esc_html($title).balanceTags($after_title);
          }

      ?>
          <ul class="tzcontact-info">
            <?php  if($instance['address']): ?>
            <li>
                <i class="fa fa-map-marker"></i>
                <span><?php  echo esc_html($instance['address']);  ?></span>
                <div class="clearfix"></div>
            </li>
            <?php  endif; ?>
            <?php  if($instance['phone'] != '' || $instance['mobile'] != ''): ?>
            <li>
                <i class="fa fa-phone"></i>
                <?php if($instance['phone']):?>
                    <span><?php echo esc_html($instance['phone']);?></span>
                <?php endif;?>

                <?php if($instance['mobile']):?>
                    <span><?php echo esc_html($instance['mobile']);?></span>
                <?php endif;?>
                <div class="clearfix"></div>
            </li>
            <?php  endif; ?>
            <?php if($instance['email']): ?>
                <li>
                    <i class="fa fa-envelope-o"></i>
                    <a href="mailto:<?php echo balanceTags($instance['email']); ?>">
                        <span><?php echo esc_html($instance['email']); ?></span>
                    </a>
                    <div class="clearfix"></div>
                </li>
            <?php endif; ?>
              <?php if($instance['website']): ?>
                <li>
                    <i class="fa fa-at"></i>
                    <a href="<?php echo esc_url($instance['website']); ?>">
                        <span><?php echo esc_html($instance['website']); ?></span>
                    </a>
                    <div class="clearfix"></div>
                </li>
            <?php endif; ?>
          </ul>
      <?php
          echo balanceTags($after_widget);
      }

      /**
       * Back-end widgets form
      */
      public function form($instance){
          $instance =   wp_parse_args($instance,array(
              'title'   =>  'Contact info',
              'address' =>  '',
              'phone'   =>  '',
              'mobile'  =>  '',
              'email'   =>  '',
              'website' =>  ''
          ));
          ?>
          <p>
              <label for=<?php echo esc_attr($this->get_field_id('title')); ?>><?php esc_html_e('Title:','maniva-meetup') ; ?></label>
              <input type="text" id="<?php echo esc_attr($this->get_field_id('title')); ?>" class="widefat" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
          </p>
          <p>
              <label for="<?php echo esc_attr($this->get_field_id('address')); ?>"><?php esc_html_e('Address:','maniva-meetup'); ?></label>
              <input type="text" id="<?php echo esc_attr($this->get_field_id('address')); ?>" class="widefat" name="<?php echo esc_attr($this->get_field_name('address')); ?>" value="<?php echo esc_attr($instance['address']); ?>" />
          </p>
          <p>
              <label for="<?php echo esc_attr($this->get_field_id('phone')); ?>"><?php esc_html_e( 'Phone:', 'maniva-meetup' ); ?></label>
              <input type="text" id="<?php echo esc_attr($this->get_field_id('phone')); ?>" class="widefat" name="<?php echo esc_attr($this->get_field_name('phone')); ?>" value="<?php echo esc_attr($instance['phone']); ?>" />
          </p>
          <p>
              <label for="<?php echo esc_attr($this->get_field_id('mobile')); ?>"><?php esc_html_e( 'Mobile:', 'maniva-meetup' ); ?></label>
              <input type="text" id="<?php echo esc_attr($this->get_field_id('mobile')); ?>" class="widefat" name="<?php echo esc_attr($this->get_field_name('mobile')); ?>" value="<?php echo esc_attr($instance['mobile']); ?>" />
          </p>
          <p>
              <label for="<?php echo esc_attr($this->get_field_id('email')) ?>"><?php esc_html_e('Email:', 'maniva-meetup'); ?></label>
              <input type="text" id="<?php echo esc_attr($this->get_field_id('email')); ?>" name="<?php echo esc_attr($this->get_field_name('email')); ?>" class="widefat" value="<?php echo esc_attr($instance['email']); ?>" />
          </p>
          <p>
              <label for="<?php echo esc_attr($this->get_field_id('website')); ?>"><?php esc_html_e('Website:', 'maniva-meetup'); ?></label>
              <input type="text" id="<?php echo esc_attr($this->get_field_id('website')); ?>" name="<?php echo esc_attr($this->get_field_name('website')); ?>" class="widefat" value="<?php echo esc_attr($instance['website']); ?>" />
          </p>
      <?php
      }

      /**
      * function update widget
      */
      public function update( $new_instance, $old_instance ) {
          $instance = $old_instance;
          $instance['title']    = $new_instance['title'];
          $instance['address']  = $new_instance['address'];
          $instance['phone']    =   $new_instance['phone'];
          $instance['mobile']   = $new_instance['mobile'];
          $instance['email']    =   $new_instance['email'];
          $instance['website']  =   $new_instance['website'];
          return $instance;
      }
  }
  function register_tzcontact_info(){
      register_widget('tz_contact_info');
  }
  add_action('widgets_init','register_tzcontact_info');
?>