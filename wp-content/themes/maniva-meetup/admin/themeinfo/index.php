<?php

global $wpdb;

/*
|--------------------------------------------------------------------------
| Add to Appearance Menu
|--------------------------------------------------------------------------
*/ 
add_action('admin_menu', 'maniva_meetup_theme_info_page');

function maniva_meetup_theme_info_page() {
    
	global $theme_path;
    add_theme_page('maniva-meetup'.' Meetup Info', 'Meetup Info','install_themes', 'view_info' , 'maniva_meetup_view_info');
}

/*
|--------------------------------------------------------------------------
| Output
|--------------------------------------------------------------------------
*/ 
function maniva_meetup_view_info() { ?>

<div class="wrap">
	
    <div class="icon32" id="icon-options-general"><br></div>
    <h2><?php  esc_html_e( 'Meetup Info' , 'maniva-meetup' ); ?></h2>
	<h3 class="title"><?php  esc_html_e( 'Please paste down these information when starting a support inquiry in our supportforum' , 'maniva-meetup' ); ?></h3>
	
    <table class="form-table">
    <tbody>
    
    <tr valign="top">
        <th scope="row">WordPress Version:</th>
        <td> <?php bloginfo( 'version' ) ?> </td>
    </tr>
    
    <tr valign="top">
        <th scope="row">URL:</th>
        <td> <?php echo esc_url(site_url()); ?> </td>
    </tr>
    
    <tr valign="top">
        <th scope="row">Installed Theme:</th>
        <td> <?php echo esc_attr('maniva-meetup'); ?> </td>
    </tr>
    
    <tr valign="top">
        <th scope="row">Theme Version:</th>
        <td>
            <?php
                $my_theme = wp_get_theme();
                echo $my_theme->get( 'Name' ) . " is version " . $my_theme->get( 'Version' );
            ?>
        </td>
    </tr>
   
   	<tr valign="top">
        <th scope="row">PHP Version:</th>
        <td> <?php echo esc_attr(phpversion()); ?> </td>
    </tr>
    
    <?php if( is_array(get_option( 'active_plugins' ))) : ?>
    <tr valign="top">
        <th scope="row">Installed Plugins:</th>
        <td>
        
        <ul>
        <?php foreach(get_option( 'active_plugins' ) as $plugin) {
                echo '<li>'.esc_attr($plugin).'</li>';
        } ?>
        </ul>
        
        </td>
    </tr>
    <?php endif; ?>
        
    </tbody></table>
        
</div>

<?php } ?>