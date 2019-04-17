<?php
/**
 * @package Plazart
 */
/*
Plugin Name: Plazart MeetUp
Plugin URI: http://templaza.com/
Description: This is plugin for Templaza. This plugin allows you to create post types, taxonomies and Visual Composer's shortcodes.
Version: 1.4.5
Author: Templaza
Author URI: http://template.com/
License: GPLv2 or later
*/


/**
 * This is the TZPlazart loader class.
 *
 * @package   TZPlazart
 * @author    templaza (http:://templaza.com)
 * @copyright Copyright (c) 2014, Templaza
 */
if ( !class_exists('TZ_Plazart') ):

    class TZ_Plazart{

        /*
         * This method loads other methods of the class.
         */
        public function __construct(){
            /* load languages */
            $this -> load_languages();

            /*load all plazart*/
            $this -> load_plazart();

            /*load all script*/
            $this -> load_script();
        }

        /*
         * Load the languages before everything else.
         */
        private function load_languages(){
            add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );
        }

        /*
         * Load the text domain.
         */
        public function load_textdomain(){

            load_plugin_textdomain( 'tz-plazart', false, plugin_dir_url( __FILE__ ) . '/languages' );
        }

        /*
         * Load TZPlazart on the 'after_setup_theme' action. Then filters will
         */
        public function load_plazart(){

            $this -> constants();

            $this -> admin_includes();
      
        }

        /**
         * Constants
         */
        private function constants(){

            define('PLUGIN_PREFIX', 'plazart');

            define('PLUGIN_PATH', plugin_dir_url( __FILE__ ));

            define('PLUGIN_SERVER_PATH',dirname( __FILE__ ) );
        }

        /*
         * Require file
         */
        private function  admin_includes(){
            require_once PLUGIN_SERVER_PATH.'/admin/admin-init.php';
        }

        /*
        * Load script
        */
        public function load_script(){

            if( is_admin() ){
                add_action('admin_enqueue_scripts', array( $this,'admin_scripts') );
            }else{
                add_action('wp_enqueue_scripts',array($this,'frontend_scripts') );
            }
        }

        /**
         * Register admin
         */
        function admin_scripts() {

            wp_enqueue_style( 'admin-plazart-meetup', plugin_dir_url( __FILE__ ).'admin/plazart-meetup.css', false, '1.0.0' );
            wp_enqueue_style('fancybox', plugin_dir_url( __FILE__ ).'admin/assets/css/fancybox.css', false, '2.1.5' );

            //    global $pagenow;

            wp_enqueue_style('thickbox');
            wp_enqueue_script('media-upload');
            wp_enqueue_script('thickbox');

            wp_enqueue_script( 'jquery.fancybox', plugin_dir_url( __FILE__ ).'admin/assets/js/jquery.fancybox.js', array(), '2.1.5', true );

        }


        /**
         * Register style sheet.
         */
        function frontend_scripts () {

            global $post;
            $plugin_photo = $post->post_content;

            /* Get Css */
            if ( has_shortcode( $plugin_photo,'tz_slider_home_meetup' ) || has_shortcode( $plugin_photo, 'tz_slider_multi_countdown' ) || has_shortcode( $plugin_photo, 'tz-features-event' ) ) :

                wp_enqueue_style( 'superslides', PLUGIN_PATH . 'admin/assets/css/superslides.css', array(), '' );

            endif;


            if ( has_shortcode( $plugin_photo,'event_meetup' ) || has_shortcode( $plugin_photo, 'tz_our_speakers' ) || has_shortcode( $plugin_photo, 'tz_our_team' ) ) :

                wp_enqueue_style( 'component.min', PLUGIN_PATH . 'admin/assets/css/component.min.css', array(), '' );

            endif;

            if ( has_shortcode( $plugin_photo, 'tz_partner' ) || has_shortcode( $plugin_photo, 'tz_testimonials' ) || has_shortcode( $plugin_photo, 'tz_partner_new' ) || has_shortcode( $plugin_photo, 'tz_recent_blog_meetup' ) || has_shortcode( $plugin_photo, 'tz_meetup_slider' ) || has_shortcode( $plugin_photo, 'tz-twitter-slider' ) ) :

                wp_enqueue_style('owl.carousel.min', PLUGIN_PATH . 'admin/assets/css/owl.carousel.min.css', array(), '' );
                wp_enqueue_style('owl.theme.default.min', PLUGIN_PATH . 'admin/assets/css/owl.theme.default.min.css', array(), '' );

            endif;

            if ( has_shortcode( $plugin_photo, 'tz_recent_blog_meetup' ) ) {

                wp_enqueue_style('prettyPhoto.min', PLUGIN_PATH . 'admin/assets/css/prettyPhoto.min.css', array(), '' );

            }

            if ( has_shortcode( $plugin_photo, 'our_speakers_slider' ) ) {

                wp_enqueue_style('lightslider', PLUGIN_PATH . 'admin/assets/css/lightslider.css', array(), '1.1.3' );

            }

            if ( has_shortcode( $plugin_photo, 'tz-slide-event' ) ) {

                wp_enqueue_style('flexslider', PLUGIN_PATH . 'admin/assets/css/flexslider.css', array(), '2.6.3' );

            }


            /* Get JS */

            wp_enqueue_script( 'resize', PLUGIN_PATH . 'admin/assets/js/resize.js', array(), '', true );

            if ( has_shortcode( $plugin_photo, 'tz-skill-item' ) ) {

                wp_enqueue_script( 'wow', PLUGIN_PATH . 'admin/assets/js/wow.js', array(), '1.1.2', true );

            }

            if ( has_shortcode( $plugin_photo,'tz_slider_home_meetup' ) || has_shortcode( $plugin_photo, 'tz_slider_multi_countdown' ) || has_shortcode( $plugin_photo, 'tz-features-event' ) ) :

                wp_enqueue_script( 'jquery.superslides', PLUGIN_PATH . 'admin/assets/js/jquery.superslides.min.js', array(), '0.6.3', true );
                wp_enqueue_script( 'jquery.countdown', PLUGIN_PATH . 'admin/assets/js/jquery.countdown.min.js', array(), '2.2.0', true );

            endif;

            if ( has_shortcode( $plugin_photo,'tz_meetup_video' ) ) :

                wp_enqueue_script( 'jquery.easy.opener', PLUGIN_PATH . 'admin/assets/js/jquery.easy-opener.min.js', array(), '1.0', true );
                wp_enqueue_script( 'jquery.fitvids', PLUGIN_PATH . 'admin/assets/js/jquery.fitvids.min.js', array(), '2.2.0', true );

            endif;


            wp_register_script('classie.js', PLUGIN_PATH . 'admin/assets/js/classie.js', array(), '', true );
            wp_register_script('modalEffects.js', PLUGIN_PATH . 'admin/assets/js/modalEffects.js', array(), '1.0.0', true );


            if ( has_shortcode( $plugin_photo, 'tz_partner' ) || has_shortcode( $plugin_photo, 'tz_testimonials' ) || has_shortcode( $plugin_photo, 'tz_partner_new' ) || has_shortcode( $plugin_photo, 'tz_recent_blog_meetup' ) || has_shortcode( $plugin_photo, 'tz_meetup_slider' ) || has_shortcode( $plugin_photo, 'tz-twitter-slider' ) ) :

                wp_enqueue_script( 'owl.carousel.min', PLUGIN_PATH . 'admin/assets/js/owl.carousel.min.js', array(), '2.2.0', true );

            endif;

            if ( has_shortcode( $plugin_photo, 'tz_recent_blog_meetup' ) ) {

                wp_enqueue_script( 'jquery.prettyPhoto', PLUGIN_PATH . 'admin/assets/js/jquery.prettyPhoto.js', array(), '3.1.6', true );

            }

            if ( has_shortcode( $plugin_photo, 'our_speakers_slider' ) ) {

                wp_enqueue_script( 'lightslider', PLUGIN_PATH . 'admin/assets/js/lightslider.js', array(), '', true );

            }

            if ( has_shortcode( $plugin_photo, 'tz-slide-event' ) ) {

                wp_enqueue_script( 'jquery.flexslider.min', PLUGIN_PATH . 'admin/assets/js/jquery.flexslider-min.js', array(), '2.6.3', true );

            }

            if ( has_shortcode( $plugin_photo, 'vc_row' ) ) :

                wp_enqueue_script( 'element-short-code', PLUGIN_PATH . 'admin/assets/js/element-short-code.js', array(), '1.1.0', true );

            endif;

        }


    }
    $oj_plazart = new TZ_Plazart();

endif;

?>