<?php
/**
 * Widgets for Social
 * Display Social
 * @link http://codex.wordpress.org/Widgets_API#Developing_Widgets
 * @package WordPress
 * @subpackage Maniva
 * @since Maniva 1.0
 */

class TzManiva_Socials_Widget extends WP_Widget {

    /**
     * Sets up the widgets name etc
     */
    public function __construct() {
        parent::__construct(
            'socials_widget', esc_html__( 'Meetup: Socials Widget', 'maniva-meetup'),
            array(
                'classname'     =>  'socials_widget',
                'description'   =>  esc_html__( 'Display Socials', 'maniva-meetup')
            )
        );
        add_action('wp_ajax_add_socials', array($this, 'add_socials'));

        add_action( 'load-widgets.php', array(&$this, 'widget_admin') );
        add_action('admin_enqueue_scripts', array($this, 'upload_scripts'));

    }

    public function upload_scripts()
    {
        wp_enqueue_script('wp-color-picker');

    }

    /**
     * Push additional script and style files to the widget admin area
     * @since 1.2.1
     **/
    function widget_admin() {
        wp_enqueue_style('wp-color-picker');

    }

    /**
     * Output the HTML for this widget.
     *
     * @access public
     * @since Titania 1.0
     *
     * @param array $args     An array of standard parameters for widgets in this theme.
     * @param array $instance An array of settings for this widget instance.
     */
    public function widget( $args, $instance ) {
        extract( $instance ) ;
        $title = apply_filters('widget_title', $instance['title']);

        ?>
        <aside class="widget tzsocial">

            <?php if( $title ) : ?>

            <h3 class="module-title">
                <span>
                    <?php echo balanceTags( $title ); ?>
                </span>
            </h3>

            <?php endif; ?>

            <div class="tzSocial_bg">
                <div class="tzSocial_bg_meetup">
                    <span class="meetup_line_left"></span>
                    <?php foreach ( $socials as $item ): ?>
                        <a href="<?php echo esc_url($item['link']);?>" class="tzSocial-<?php echo esc_attr($item['color']);?>" <?php echo ( $item['multi_color'] != '' ? 'style="background:' . esc_attr( $item['multi_color'] ) . '"' : '' ); ?>>
                            <i class="fa <?php echo esc_attr($item['icon']);?>"></i>
                        </a>
                    <?php endforeach;?>
                    <span class="meetup_line_right"></span>
                </div>
            </div>
        </aside>
    <?php


    }

    /**
     * Display the form for this widget on the Widgets page of the Admin area.
     *
     * @since Titania 1.0
     *
     * @param array $instance
     */
    function form( $instance ) {
        $defaults = array(
            'title'         =>  '',
            'socials'    =>  array(
                1 =>array(
                    'icon'          =>  '',
                    'link'          =>  '',
                    'color'         =>  '',
                    'multi_color'   =>  '',
                )
            )
        );
        $instance = wp_parse_args( $instance, $defaults );
        extract( $instance );
        ?>

        <ul class="socials-box">

            <p>
                <label for=<?php echo esc_attr($this->get_field_id('title')); ?>><?php esc_html_e('Title:','maniva-meetup') ; ?></label>
                <input type="text" id="<?php echo esc_attr($this->get_field_id('title')); ?>" class="widefat" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
            </p>

            <?php
            $socials = is_array($socials) ? $socials : 0;
            $count = 1;

            foreach($socials as $ser) {
                $this->socials($ser, $count);
                $count++;
            }

            ?>

        </ul>
        <span class="button tzsocials_button button-primary">Add New</span>
    <?php
    }

    /**
     * Display the form for this widget on the Widgets page of the Admin area.
     *
     * @since Titanis 1.0
     *
     * @param array $social
     * @param array $count
     */
    function socials(  $social = array(), $count = 0  ) {
        ?>

        <script type="text/javascript">
            //<![CDATA[
            jQuery(document).ready(function()
            {
                jQuery('#widgets-right .multi-color-pick').wpColorPicker();
            });
            //]]>
        </script>

        <li id="<?php echo esc_attr($this->get_field_id('socials')) ; ?>-item-<?php echo esc_attr($count) ?>" rel="<?php echo esc_attr($count) ?>">
            <div class="socials-header">
                Social <?php echo esc_html($count) ?>
            </div>
            <div class="socials-content">

                <p><label for="<?php echo esc_attr($this->get_field_id('socials')) ?>-<?php echo esc_attr($count) ?>-icon"><?php esc_html_e( 'Icon', 'maniva-meetup') ; ?></label>
                    <input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('socials')) ?>-<?php echo esc_attr($count) ?>-icon" name="<?php echo esc_attr($this->get_field_name('socials')) ?>[<?php echo esc_attr($count) ?>][icon]" value="<?php echo esc_attr($social['icon']) ?>"></p>

                <p><label for="<?php echo esc_attr($this->get_field_id('socials')) ?>-<?php echo esc_attr($count) ?>-link"><?php esc_html_e( 'Link', 'maniva-meetup') ; ?></label>
                    <input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('socials')) ?>-<?php echo esc_attr($count) ?>-link" name="<?php echo esc_attr($this->get_field_name('socials')) ?>[<?php echo esc_attr($count) ?>][link]" value="<?php echo esc_attr($social['link']) ?>"></p>

                <p>
                    <label for="<?php echo esc_attr($this->get_field_id('socials')) ?>-<?php echo esc_attr($count) ?>-multi-color"><?php esc_html_e( 'Multi color', 'maniva-meetup') ; ?></label><br>
                    <input type="text" class="widefat multi-color-pick" id="<?php echo esc_attr($this->get_field_id('socials')) ?>-<?php echo esc_attr($count) ?>-multi-color" name="<?php echo esc_attr($this->get_field_name('socials')) ?>[<?php echo esc_attr($count) ?>][multi_color]" value="<?php echo esc_attr($social['multi_color']) ?>">
                </p>

                <p>
                    <label for="<?php echo esc_attr($this->get_field_id('socials')) ?>-<?php echo esc_attr($count) ?>-color">
                        <?php esc_html_e( 'highlight Option', 'maniva-meetup') ; ?>
                    </label>
                    <select class="widefat"  name="<?php echo esc_attr($this->get_field_name('socials')) ?>[<?php echo esc_attr($count) ?>][color]">
                        <option value="no" <?php if($social['color'] =='no'){ echo 'selected="true"'; } ?>><?php esc_html_e('No','maniva-meetup');?></option>
                        <option value="yes" <?php if($social['color'] =='yes'){ echo 'selected="true"'; } ?>><?php esc_html_e('Yes','maniva-meetup');?></option>

                    </select>
                </p>

                <span class="button tzsocial_remove"><?php esc_html_e('Delete','maniva-meetup');?></span>
            </div>
        </li>
    <?php
    }
    function add_socials(){

        $count = isset($_POST['count']) ? absint($_POST['count']) : false;
        $tab = array(
            'icon'          =>  '',
            'link'          =>  '',
            'color'         =>  '',
            'multi_color'   =>  ''
        );
        $this->socials($tab, $count);
        die();
    }
    /**
     * Deal with the settings when they are saved by the admin.
     *
     * Here is where any validation should happen.
     *
     * @since Titania 1.0
     *
     * @param array $new_instance New widget instance.
     * @param array $instance     Original widget instance.
     * @return array Updated widget instance.
     */
    function update($new_instance, $old_instance) {
        $new_instance = $new_instance;
        $new_instance['title']  =   $new_instance['title'];
        return $new_instance;
    }

}
add_action('widgets_init',create_function('','return register_widget("TzManiva_Socials_Widget");'));
?>