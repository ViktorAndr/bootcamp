<?php

/*
 *constants
 */

update_option( 'ot_hide_cleanup', 1 );
/**
 * Optional: set 'ot_show_pages' filter to false.
 * This will hide the settings & documentation pages.
 */
add_filter( 'ot_show_pages', '__return_false' );

if ( class_exists( 'OT_Loader' ) ):
    /**
     * Required: include Theme Options
     */

    require get_parent_theme_file_path( '/extension/theme-options.php' );


    /**
     * Required: include meta box for portfolio and post
     */

    require get_parent_theme_file_path( '/extension/portfolio-meta-boxes.php' );


    /*
     * Required: include plugin theme scripts
     */
    require get_parent_theme_file_path( '/extension/tz-process-option.php' );

endif;

/**
 * Required: include theme-functions
 */
require get_parent_theme_file_path( '/extension/theme-functions.php' );

/**
 * Required: include plugin theme sidebars
 */
require get_parent_theme_file_path('/extension/theme-sidebars.php' );

/*
 * Required: include Shorcode
 */
require get_parent_theme_file_path( '/extension/theme_support.php' );


/*
 * Required: widget contact info
 */
require get_parent_theme_file_path( '/extension/widgets/contact-info.php' );

/*
 * Required: widgets socials
 */
require get_parent_theme_file_path( '/extension/widgets/social.php' );

/*
 * Required: widget view post
 */
require get_parent_theme_file_path( '/extension/widgets/view-post.php' );

/*
 * Required: megamenu
 */
require get_parent_theme_file_path( '/extension/system/megamenu/themeple_init.php' );


/* ---------------------------------------------------------------------------
 * Styles | Custom Font
 * --------------------------------------------------------------------------- */
if( ! function_exists( 'maniva_meetup_styles_custom_font' ) ) {

    function maniva_meetup_styles_custom_font() {

        $maniva_meetup_font_custom  =   ot_get_option( 'maniva-meetup' . '-font-custom','' );
        $maniva_meetup_font_custom2 =   ot_get_option( 'maniva-meetup' . '-font-custom2' );

        if ( $maniva_meetup_font_custom ) {
            echo '<!-- style | custom font -->'."\n";
            echo '<style>'."\n";
                echo '@font-face {';
                    echo 'font-family: "'. $maniva_meetup_font_custom .'";';
                    echo 'src: url("'. ot_get_option('maniva-meetup' . 'font-custom-eot','') .'");';
                    echo 'src: url("'. ot_get_option('maniva-meetup' . 'font-custom-eot','') .'#iefix") format("embedded-opentype"),';
                        echo 'url("'. ot_get_option('maniva-meetup' . '-font-custom-woff') .'") format("woff"),';
                        echo 'url("'. ot_get_option('maniva-meetup' . '-font-custom-ttf','') .'") format("truetype"),';
                        echo 'url("'. ot_get_option('maniva-meetup' . 'font-custom-svg','') .'#'. $maniva_meetup_font_custom .'") format("svg");';
                    echo 'font-weight: normal;';
                    echo 'font-style: normal;';
                echo '}'."\n";
            echo '</style>'."\n";
        }

        if ( $maniva_meetup_font_custom2 ) {
            echo '<!-- style | custom font -->'."\n";
            echo '<style>'."\n";
                echo '@font-face {';
                    echo 'font-family: "'. $maniva_meetup_font_custom2 .'";';
                    echo 'src: url("'. ot_get_option('maniva-meetup' . 'font-custom2-eot','') .'");';
                    echo 'src: url("'. ot_get_option('maniva-meetup' . 'font-custom2-eot','') .'#iefix") format("embedded-opentype"),';
                        echo 'url("'. ot_get_option('maniva-meetup' . '-font-custom2-woff') .'") format("woff"),';
                        echo 'url("'. ot_get_option('maniva-meetup' . '-font-custom2-ttf','') .'") format("truetype"),';
                        echo 'url("'. ot_get_option('maniva-meetup' . 'font-custom2-svg','') .'#'. $maniva_meetup_font_custom2 .'") format("svg");';
                    echo 'font-weight: normal;';
                    echo 'font-style: normal;';
                echo '}'."\n";
            echo '</style>'."\n";
        }

    }

}
add_action('wp_head', 'maniva_meetup_styles_custom_font');


/*
* This function is used to get people to check out the article
*/
function maniva_meetup_getPostViews($postID){
    $maniva_meetup_count_key = 'post_views_count';
    $maniva_meetup_count = get_post_meta($postID, $maniva_meetup_count_key, true);
    if($maniva_meetup_count==''){ // If such views are not
        delete_post_meta($postID, $maniva_meetup_count_key);
        add_post_meta($postID, $maniva_meetup_count_key,'0');
        return "0"; // return value of 0
    }
    return $maniva_meetup_count; // Returns views
}


/*
* This function is used to set and update the article views.
*/
function maniva_meetup_setPostViews($postID) {
    $maniva_meetup_count_key = 'post_views_count';
    $maniva_meetup_count = get_post_meta($postID, $maniva_meetup_count_key, true);
    if($maniva_meetup_count==''){
        $maniva_meetup_count = 0;
        delete_post_meta($postID, $maniva_meetup_count_key);
        add_post_meta($postID, $maniva_meetup_count_key, '0');
    }else{
        $maniva_meetup_count++; // Incremental view
        update_post_meta( $postID, $maniva_meetup_count_key, $maniva_meetup_count ); // update count
    }
}

function maniva_meetup_modify_contact_methods($maniva_meetup_profile_fields) {
    // Add new fields
    $maniva_meetup_profile_fields['twitter'] = 'Twitter URL';
    $maniva_meetup_profile_fields['facebook'] = 'Facebook URL';
    $maniva_meetup_profile_fields['gplus'] = 'Google+ URL';
    $maniva_meetup_profile_fields['instagram'] = 'Instagram URL';
    $maniva_meetup_profile_fields['linkedin'] = 'Linkedin  URL';
    return $maniva_meetup_profile_fields;
}
add_filter('user_contactmethods', 'maniva_meetup_modify_contact_methods');


/*
 *  method add global javascript variable 'maniva-meetup' to admin_head
 */
function maniva_meetup__addto_header() {
    ?>
<script type="text/javascript">
    var themeprefix = '<?php echo esc_js('maniva-meetup'); ?>';
</script>
<?php
}
add_action('admin_head', 'maniva_meetup__addto_header');
add_action('wp_head', 'maniva_meetup__addto_header');


function maniva_meetup_ilc_mce_buttons($buttons){
    array_push($buttons,
        "backcolor",
        "anchor",
        "hr",
        "sub",
        "sup",
        "fontselect",
        "fontsizeselect",
        "styleselect",
        "cleanup"
    );
    return $buttons;
}
add_filter("mce_buttons_2", "maniva_meetup_ilc_mce_buttons");


// Check if page is direct child
function maniva_meetup_is_child( $maniva_meetup_page_id ) {
    global $post;
    if( is_page() && ($post->post_parent != '') ) {
        return true;
    } else {
        return false;
    }
}

function maniva_meetup_tribe_breadcrumbs() {

    global $post;

    $maniva_meetup_seperator = " &frasl; ";

    if( tribe_is_month() && !is_tax() ) { // The Main Calendar Page

        echo '<div class="tz_tribe_event_breadcrumbs">';
        echo '<a href="'.get_option('home').'">'.get_bloginfo('name').'</a>';
        echo $maniva_meetup_seperator;
        echo esc_html__('The Events Calendar', 'maniva-meetup');
        echo '</div>';

    } elseif( tribe_is_month() && is_tax() ) { // Calendar Category Pages

        global $wp_query;
        $maniva_meetup_term_slug = $wp_query->query_vars['tribe_events_cat'];
        $term = get_term_by('slug', $maniva_meetup_term_slug, 'tribe_events_cat');
        get_term( 'term_id', 'tribe_events_cat' );
        $maniva_meetup_name = $term->name;

        echo '<div class="tz_tribe_event_breadcrumbs">';
        echo '<a href="'.get_option('home').'">'.get_bloginfo('name').'</a>';
        echo $maniva_meetup_seperator;
        echo '<a href="'.tribe_get_events_link().'">'. esc_html__( 'Events', 'maniva-meetup' ) .'</a>';
        echo $maniva_meetup_seperator;
        echo $maniva_meetup_name;
        echo '</div>';

    } elseif( tribe_is_event() && !tribe_is_day() && !is_single() ) { // The Main Events List

        echo '<div class="tz_tribe_event_breadcrumbs">';
        echo '<a href="'.get_option('home').'">'.get_bloginfo('name').'</a>';
        echo $maniva_meetup_seperator;
        echo esc_html__('Events List' , 'maniva-meetup');
        echo '</div>';

    } elseif( tribe_is_event() && is_single() ) { // Single Events

        echo '<h3 class="tz_text_tribe">'.esc_html__('Event Details','maniva-meetup').'</h3>';
        echo '<div class="tz_tribe_event_breadcrumbs">';
        echo '<a href="'.get_option('home').'">'.get_bloginfo('name').'</a>';
        echo $maniva_meetup_seperator;
        echo '<a href="'.tribe_get_events_link().'">'. esc_html__( 'Events', 'maniva-meetup' ) .'</a>';
        echo $maniva_meetup_seperator;
        echo '<span>' .get_the_title(). '</span>';
        echo '</div>';

    } elseif( tribe_is_day() ) { // Single Event Days

        global $wp_query;
        echo '<div class="tz_tribe_event_breadcrumbs">';
        echo '<a href="'.get_option('home').'">'.get_bloginfo('name').'</a>';
        echo $maniva_meetup_seperator;
        echo '<a href="'.tribe_get_events_link().'">'. esc_html__( 'Events', 'maniva-meetup' ) .'</a>';
        echo $maniva_meetup_seperator;
        echo esc_html__( 'Events on: ' , 'maniva-meetup' ) . date('F j, Y', strtotime($wp_query->query_vars['eventDate']));
        echo '</div>';

    } elseif( tribe_is_venue() ) { // Single Venues

        echo '<div class="tz_tribe_event_breadcrumbs">';
        echo '<a href="'.get_option('home').'">'.get_bloginfo('name').'</a>';
        echo $maniva_meetup_seperator;
        echo '<a href="'.tribe_get_events_link().'">'. esc_html__( 'Events', 'maniva-meetup' ) .'</a>';
        echo $maniva_meetup_seperator;
        echo '<span>' .get_the_title(). '</span>';
        echo '</div>';

    } elseif (is_category() || is_single()) {

        echo '<div class="tz_tribe_event_breadcrumbs">';
        echo '<a href="'.get_option('home').'">'.get_bloginfo('name').'</a>';
        echo $maniva_meetup_seperator;
        the_category(' &bull; ');
        if (is_single()) {
            echo ' '.$maniva_meetup_seperator.' ';
            the_title();
        }
        echo '</div>';

    } elseif (is_page()) {

        echo '<a href="'.get_option('home').'">'.get_bloginfo('name').'</a>';
        if(maniva_meetup_is_child(get_the_ID())) {
            echo $maniva_meetup_seperator;
            echo '<a href="' . get_permalink($post->post_parent) . '">' . get_the_title($post->post_parent) . '</a>';
            echo $maniva_meetup_seperator;
            echo the_title();
        } else {
            echo $maniva_meetup_seperator;
            echo the_title();
        }

    } elseif (is_search()) {

        echo '<a href="'.get_option('home').'">'.get_bloginfo('name').'</a>';
        echo $maniva_meetup_seperator.esc_html__( 'Search Results for... ' , 'maniva-meetup' );
        echo '"<em>';
        echo get_search_query();
        echo '</em>"';

    }

}

/*method activie plugin*/

require get_parent_theme_file_path( '/plugins/class-tgm-plugin-activation.php' );

add_action( 'tgmpa_register', 'maniva_meetup_register_required_plugins' );
function maniva_meetup_register_required_plugins() {

    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(

        // This is an example of how to include a plugin pre-packaged with a theme
        array(
            'name'     				=> 'Plazart MeetUp', // The plugin name
            'slug'     				=> 'tz-plazart-meetup',// The plugin slug (typically the folder name)
            'source'   				=> get_stylesheet_directory_uri() . '/plugins/tz-plazart-meetup.zip', // The plugin source
            'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
            'version' 				=> '1.4.5', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
        ),

        // This is an example of how to include a plugin pre-packaged with a theme
        array(
            'name'     				=> 'WPBakery Visual Composer', // The plugin name
            'slug'     				=> 'js_composer',// The plugin slug (typically the folder name)
            'source'   				=> get_stylesheet_directory_uri() . '/plugins/js_composer.zip', // The plugin source
            'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
            'version' 				=> '5.5.5', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
        ),

        // This is an example of how to include a plugin pre-packaged with a theme
        array(
            'name'     				=> 'TzPlus gallery', // The plugin name
            'slug'     				=> 'tz-plus-gallery-pro',// The plugin slug (typically the folder name)
            'source'   				=> get_stylesheet_directory_uri() . '/plugins/tz-plus-gallery-pro.zip', // The plugin source
            'required' 				=> false, // If false, the plugin is only 'recommended' instead of required
            'version' 				=> '2.0.1', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
        ),

        // This is an example of how to include a plugin pre-packaged with a theme
        array(
            'name'                  => 'Revslider', // The plugin name
            'slug'                  => 'revslider',// The plugin slug (typically the folder name)
            'source'                => get_stylesheet_directory_uri() . '/plugins/revslider.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '5.4.8', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),

        // This is an example of how to include a plugin pre-packaged with a theme

        array(
            'name'     				=> 'OptionTree', // The plugin name
            'slug'     				=> 'option-tree',// The plugin slug (typically the folder name)
            'source'   				=> get_stylesheet_directory_uri() . '/plugins/option-tree-master.zip', // The plugin source
            'required' 				=> false, // If false, the plugin is only 'recommended' instead of required
            'version' 				=> '2.6.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
        ),

        // This is an example of how to include a plugin from the WordPress Plugin Repository

        array(
            'name'    => 'Breadcrumb NavXT',
            'slug'    => 'breadcrumb-navxt',
            'required'  => false,
        ),
        array(
            'name'    => 'Woocommerce',
            'slug'    => 'woocommerce',
            'required'  => false,
        ),
        array(
            'name'    => 'DW Twitter',
            'slug'    => 'dw-twitter',
            'required'  => false,
        ),
        array(
            'name'    => 'Contact Form 7',
            'slug'    => 'contact-form-7',
            'required'  => false,
        ),
        array(
            'name'    => 'Contact Form 7 Paypal Extension',
            'slug'    => 'contact-form-7-paypal-extension',
            'required'  => false,
        ),
        array(
            'name'    => 'WP Pagenavi Plugin',
            'slug'    => 'wp-pagenavi',
            'required'  => false,
        ),
        array(
            'name'    => 'TZ Flickr Widget',
            'slug'    => 'tz-flickr-widget',
            'required'  => false,
        ),
        array(
            'name'    => 'Multicolor subscribe widget',
            'slug'    => 'wp-multicolor-subscribe-widget',
            'required'  => false,
        ),
        array(
            'name'    => 'Easy Columns',
            'slug'    => 'easy-columns',
            'required'  => false,
        ),
        array(
            'name'    => 'Tickera Event Ticketing System',
            'slug'    => 'tickera-event-ticketing-system',
            'required'  => false,
        ),
        array(
            'name'    => 'The Events Calendar',
            'slug'    => 'the-events-calendar',
            'required'  => false,
        ),
        array(
            'name'    => 'Add To Any',
            'slug'    => 'add-to-any',
            'required'  => false,
        ),
    );

    // Change this to your theme text domain, used for internationalising strings
    $theme_text_domain = 'maniva-meetup';

    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug'  => 'themes.php',            // Parent menu slug.
        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
    );

    tgmpa( $plugins, $config );
}

?>