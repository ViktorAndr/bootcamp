<?php

/*
 * Demo Import
 * by Templaza
  */

defined( 'ABSPATH' ) or die( 'You cannot access this script directly' );
include_once( get_template_directory() . '/admin/tz-layout-loader.php' );


/*
|--------------------------------------------------------------------------
| Demo Importer Menu Item
|--------------------------------------------------------------------------
*/
add_action('admin_menu', 'maniva_meetup_importer_demo_menu');

if ( !function_exists( 'maniva_meetup_importer_demo_menu' ) ) {
	
	function maniva_meetup_importer_demo_menu() {
	
        add_theme_page('Meetup Demo Import', 'Meetup Demo Import','install_themes', 'tz_import' , 'maniva_meetup_import');

	}
	
}



/*
|--------------------------------------------------------------------------
| Demo Importer Styles
|--------------------------------------------------------------------------
*/
if ( !function_exists( 'maniva_meetup_import_admin_add_scripts' ) ) {

	function maniva_meetup_import_admin_add_scripts() {
			
		wp_enqueue_style('tz-import', get_template_directory_uri() . '/admin/assets/css/tz-import.css');
        wp_enqueue_script( 'tz-import', get_template_directory_uri() . '/admin/assets/js/admin.js' );

    }
	
}

if ( isset($_GET['page']) && $_GET['page'] == 'tz_import' ) {
	add_action( 'admin_enqueue_scripts', 'maniva_meetup_import_admin_add_scripts' );
}


/*
|--------------------------------------------------------------------------
| Check if wp-content is writeable for demo images
|--------------------------------------------------------------------------
*/
if ( !function_exists( 'maniva_meetup_is_writable' ) ) {
	
	function maniva_meetup_is_writable( $path ) {
        global $wp_filesystem;
        if (empty($wp_filesystem)) {
            require_once (ABSPATH . '/wp-admin/includes/file.php');
            WP_Filesystem();
        }
	
		if ( $path{strlen($path)-1}=='/' ) {
			return maniva_meetup_is_writable($path.uniqid(mt_rand()).'.tmp');
		}
		if (!($f = $wp_filesystem->put_contents($path, 0644)))

			return false;
		unlink($path);
		return true;
		
	}
	
}


/*
|--------------------------------------------------------------------------
| Demo Importer Interface
|--------------------------------------------------------------------------
*/

if ( !function_exists( 'maniva_meetup_import' ) ) {
	
	function maniva_meetup_import(){
        global $wp_filesystem;
        if (empty($wp_filesystem)) {
            require_once (ABSPATH . '/wp-admin/includes/file.php');
            WP_Filesystem();
        }
        ?>
		
		<div id="tz-import" class="wrap">
		
			<div class="icon32" id="icon-options-general"><br></div>
            <h2><?php  esc_html_e( 'Meetup Demo Import' , 'maniva-meetup' ); ?></h2>
            
			<?php
			/*
			|--------------------------------------------------------------------------
			| Notifications
			|--------------------------------------------------------------------------
			*/
			if( file_exists( ABSPATH . 'wp-content/uploads/' ) ) {
				
				/* wp-content upload folder not writeable  */ 
				if( !maniva_meetup_is_writable( ABSPATH . 'wp-content/uploads/' ) ) :
				
					echo '<div class="error"><p>';
						
						echo '<strong>' .esc_html__('Your upload folder is not writeable! The importer won\'t be able to import the placeholder images. Please check the folder permissions for', 'maniva-meetup').'</strong><br />';
						echo ABSPATH . 'wp-content/uploads/';
						
					echo '</p></div>';
					
				endif;
				
			
			} else {
			
				/* wp-content folder not writeable  */ 
				if( !maniva_meetup_is_writable( ABSPATH . 'wp-content/' ) ) :
					
					echo '<div class="error"><p>';
					
						echo '<strong>' .esc_html__('Your wp-content folder is not writeable! The importer won\'t be able to import the placeholder images. Please check the folder permissions for', 'maniva-meetup').'</strong><br />';
						echo ABSPATH . 'wp-content/';
					
					echo '</p></div>';
					
				endif;
			
			}
			
			/* importer has been used before */
			if( get_option('tz_import_loaded') == 'active' ) :
				
				echo '<div class="error"><p>'.esc_html__('You have already imported the demo content before. Running this operation twice will result in double content!', 'maniva-meetup').'</p></div>';
			
			endif;
			
			/* import was successful */
			if( isset($_GET['import']) && $_GET['import'] == 'success' ) : ?>
                <script type="text/javascript">
                    jQuery(document).ready(function(){
                    jQuery('#tz-import-form').hide();
                    })
                </script>
            <?php
				echo '<div class="updated"><h3>'.esc_html__('Import was successful, have fun!', 'maniva-meetup').'</h3></div>';
			
			endif; 
			
			?>
            
            <form id="tz-import-form" method="POST" action="" class="form-horizontal">

                <div class="tz_theme_options">

                    <table class="form-table">
                        <tbody>

                        <tr valign="top">

                            <th scope="row">
                                <?php  esc_html_e( 'Import Theme Options?' , 'maniva-meetup' ); ?>
                            </th>

                            <td>
                                <input type="checkbox" value="yes" id="tz_theme_options" checked name="tz_theme_options">
                            </td>

                        </tr>

                        <tr valign="top">

                            <th scope="row">
                                <?php  esc_html_e( 'Import Widgets?' , 'maniva-meetup' ); ?>
                            </th>

                            <td>
                                <input type="checkbox" value="yes" id="tz_theme_widget" checked name="tz_theme_widget">
                            </td>

                        </tr>

                        <tr valign="top">

                            <th scope="row">
                                <?php  esc_html_e('Important Notes:' , 'maniva-meetup'); ?>
                            </th>

                            <td>
                                <ol>
                                    <li><?php  esc_html_e('We recommend to run this importer on a clean WordPress installation.' , 'maniva-meetup'); ?></li>
                                    <li><?php  esc_html_e('To reset your installation we can recommend this plugin here:' , 'maniva-meetup'); ?> <a href="http://wordpress.org/plugins/wordpress-database-reset/">Wordpress Database Reset</a></li>
                                    <li><?php  esc_html_e('The Demo Importer will not import the images we have used in our live demos, due to copyright / license reasons' , 'maniva-meetup'); ?></li>
                                    <li><?php  esc_html_e('Do not run the importer multiple times one after another, it will result in double content.' , 'maniva-meetup'); ?></li>
                                </ol>
                            </td>

                        </tr>

                        </tbody>
                    </table>

                </div>

            <div class="xml">
                <input type="radio" id="fashion_yellow" name="tz_demo_file" value="maniva_demo" checked class="tz-choose-demo-radio">
                <label class="tz-demo-img" for="fashion_yellow">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/admin/assets/images/theme_preview.jpg" />
                </label>
                <h3 class="xml-name">Maniva Meetup WordPress Theme</h3>
                <div class="xml-actions">
                	<a target="_blank" href="http://wordpress.templaza.net/wp-maniva/meetup" class="button button-primary"><?php  esc_html_e('Preview' , 'maniva-meetup'); ?></a>
                </div>
            </div>
            <div class="tz_action">
                <input type="hidden" name="tz_import_demo_content" value="true" />
                <?php if( isset($_GET['import']) && $_GET['import'] == 'success' ) { ?>
                    <input type="submit" style="opacity:0.5" value="<?php  esc_html_e( 'Import Demo' , 'maniva-meetup' ); ?>" class="button button-install" id="submit" name="submit">
                <?php } else{ ?>
                    <input type="submit" value="<?php  esc_html_e( 'Import Demo' , 'maniva-meetup' ); ?>" class="button button-install" id="submit" name="submit">
                <?php }?>
            </div>
            <div class="clear"></div>

            
            </form>
            <script type="text/javascript">

                var plugin_notice = jQuery('#setting-error-tgmpa').hasClass('is-dismissible');
                if(plugin_notice ==true){
                    alert('Please install and active all plugins recommended in Maniva Theme before click "Import Demo"');
                    location.href = "themes.php?page=tgmpa-install-plugins&plugin_status=install";

                }
            </script>

		</div>
	<?php }
	
}

/*
|--------------------------------------------------------------------------
| Demo Importer
|--------------------------------------------------------------------------
*/
add_action( 'admin_init', 'maniva_meetup_demo_import' );

if ( !function_exists( 'maniva_meetup_demo_import' ) ) {

	function maniva_meetup_demo_import() {
		
		global $wpdb;
		
		/* add option flag to wordpress */
		add_option('tz_import_loaded');


		
		/* security array for valid filenames */
		$tz_recognized_file_names = apply_filters( 'tz_recognized_file_names', array(
		  'maniva_demo'
		));
			
		if ( current_user_can( 'manage_options' ) && isset( $_POST['tz_import_demo_content'] ) && !empty( $_POST['tz_demo_file'] ) ) {

			if ( !defined('WP_LOAD_IMPORTERS') ) define('WP_LOAD_IMPORTERS', true);
			
			if ( ! class_exists( 'WP_Import' ) ) {
				$class_wp_importer = ABSPATH . 'wp-admin/includes/class-wp-importer.php';
				if ( file_exists( $class_wp_importer ) ) {
					include_once $class_wp_importer;
				}
			}

			if ( ! class_exists('Maniva_meetup_WP_Import') ) {
				$class_wp_import = get_template_directory() . '/admin/includes/plugins/importer/wordpress-importer.php';
				if ( file_exists( $class_wp_import ) ) {
					include_once $class_wp_import;
				}
			}	
			
			if ( class_exists( 'WP_Importer' ) && class_exists( 'Maniva_meetup_WP_Import' ) ) {
				
				/*
				|--------------------------------------------------------------------------
				| Import choosen XML
				|--------------------------------------------------------------------------
				*/
				
				$importer = new Maniva_meetup_WP_Import();

				
				$demo_file = sanitize_file_name($_POST['tz_demo_file']);

				$theme_xml = get_template_directory() . '/admin/assets/xml/' . $demo_file . '.xml';

//                var_dump($theme_xml); die();
				if ( file_exists( $class_wp_importer ) && in_array( $demo_file , $tz_recognized_file_names) ) {
										
					$importer->fetch_attachments = true;
					ob_start();
					$importer->maniva_meetup_import($theme_xml);
					ob_end_clean();					
					
				} else {
					
					wp_redirect( admin_url( 'themes.php?page=tz_import&import=failed' ) );
					
				}
				
				/*
				|--------------------------------------------------------------------------
				| Set Primary Navigation
				|--------------------------------------------------------------------------
				*/
												
				$locations = get_theme_mod( 'nav_menu_locations' );

				$menus = wp_get_nav_menus();




				
				if( is_array($menus) ) {
					foreach($menus as $menu) { // assign menus to theme locations
						
                        $main = ( $demo_file == 'maniva_demo') ? 'menu primary' : 'Main';
                                                
                        if( $menu->name == $main ) {
							$locations['primary'] = $menu->term_id;
						}
                        if($menu->name =='menu primary'){
                            $locations['primary'] = $menu->term_id;
                        }
                        
					}
				}
//                var_dump($locations['primary']); die();
				
				set_theme_mod( 'nav_menu_locations', $locations );
				
				/*
				|--------------------------------------------------------------------------
				| Set Reading Options
				|--------------------------------------------------------------------------
				*/
				
				$homepage 	= get_page_by_title( 'home' );
                
				if( isset($homepage->ID)) {
					update_option('show_on_front', 'page');
					update_option('page_on_front',  $homepage->ID); // Front Page
				}
				
				/*
				|--------------------------------------------------------------------------
				| Update Theme Options
				|--------------------------------------------------------------------------
				*/
				if( isset( $_POST['tz_theme_options'] ) && $_POST['tz_theme_options'] == 'yes' ) :
                    $ot_layout_file = get_template_directory().'/admin/assets/optionsdata/default.txt';
					/* run layout loader */
					maniva_meetup_load_layout_into_ot($ot_layout_file);
					
				endif;

				/*
				|--------------------------------------------------------------------------
				| Update Theme Widget
				|--------------------------------------------------------------------------
				*/
				if( isset( $_POST['tz_theme_widget'] ) && $_POST['tz_theme_widget'] == 'yes' ) :

                    $widget_file = get_template_directory().'/admin/assets/widget/widgets.wie';
                    maniva_meetup_wie_process_import_file( $widget_file );

				endif;

				/*
				|--------------------------------------------------------------------------
				| Set Default Logo for Navigation
				|--------------------------------------------------------------------------
				*/
				
//				/* fetch all used taxonomies first */
//				$taxonomies = get_terms( 'portfolio-category' , array( 'hide_empty' => true ) );
//				$portfolio_taxonomies = array();
//
//				/* built array */
//				foreach($taxonomies as $taxonomy ) {
//
//					$portfolio_taxonomies[$taxonomy->term_id] = 'on';
//
//				}

								
				/*
				|--------------------------------------------------------------------------
				| Update Import Flag
				|--------------------------------------------------------------------------
				*/
				update_option('tz_import_loaded', 'active');

				/*
				|--------------------------------------------------------------------------
				| Redirect User
				|--------------------------------------------------------------------------
				*/
				wp_redirect( admin_url( 'themes.php?page=tz_import&import=success' ) );
								
				
			}
		
		}
		
	}

} ?>