"use strict";
// jquery sidebar option
var sidebar = jQuery('#maniva_meetup_portfolio_fullwidth').attr('value');
if(sidebar == '1'){
    jQuery('#setting_maniva_meetup_portfolio_sidebar').slideDown();
}else{
    jQuery('#setting_maniva_meetup_portfolio_sidebar').slideUp();
}

jQuery('#maniva_meetup_portfolio_fullwidth').change(function(){
    if(jQuery(this).attr('value')=='1'){
        jQuery('#setting_maniva_meetup_portfolio_sidebar').slideDown();
    }else{
        jQuery('#setting_maniva_meetup_portfolio_sidebar').slideUp();
    }
});

// jquery height option
var portfolio_version = jQuery('#maniva_meetup_portfolio_version').attr('value');
if(portfolio_version == '4'){
    jQuery('#setting_maniva_meetup_portfolio_height').slideUp();
}else{
    jQuery('#setting_maniva_meetup_portfolio_height').slideDown();
}

jQuery('#maniva_meetup_portfolio_version').change(function(){
    if(jQuery(this).attr('value')=='4'){
        jQuery('#setting_maniva_meetup_portfolio_height').slideUp();
    }else{
        jQuery('#setting_maniva_meetup_portfolio_height').slideDown();
    }
});



// Option color of theme
var type_color = jQuery('#maniva_meetup_TZTypecolor').attr('value');
if(type_color == '0'){
    jQuery('#setting_maniva_meetup_TZThemecolor').slideDown();
    jQuery('#setting_maniva_meetup_TZThemecustom').slideUp();
}else{
    jQuery('#setting_maniva_meetup_TZThemecolor').slideUp();
    jQuery('#setting_maniva_meetup_TZThemecustom').slideDown();
}

jQuery('#maniva_meetup_TZTypecolor').change(function(){
    if(jQuery(this).attr('value')=='0'){
        jQuery('#setting_maniva_meetup_TZThemecolor').slideDown();
        jQuery('#setting_maniva_meetup_TZThemecustom').slideUp();
    }else{
        jQuery('#setting_maniva_meetup_TZThemecolor').slideUp();
        jQuery('#setting_maniva_meetup_TZThemecustom').slideDown();
    }
});

// Option width of page default
var pageDefault_width = jQuery('#maniva_meetup_PageDefault_Padding').attr('value');
if(pageDefault_width == '1'){
    jQuery('#setting_maniva_meetup_PageDefault_paddingTop').slideUp();
    jQuery('#setting_maniva_meetup_PageDefault_paddingBottom').slideUp();
}else{
    jQuery('#setting_maniva_meetup_PageDefault_paddingTop').slideDown();
    jQuery('#setting_maniva_meetup_PageDefault_paddingBottom').slideDown();
}

jQuery('#maniva_meetup_PageDefault_Padding').change(function(){
    if(jQuery(this).attr('value')=='1'){
        jQuery('#setting_maniva_meetup_PageDefault_paddingTop').slideUp();
        jQuery('#setting_maniva_meetup_PageDefault_paddingBottom').slideUp();
    }else{
        jQuery('#setting_maniva_meetup_PageDefault_paddingTop').slideDown();
        jQuery('#setting_maniva_meetup_PageDefault_paddingBottom').slideDown();
    }
});

/* Add socials */

jQuery(document).ready(function(){
    var $click = true;
    jQuery('.socials-header').live('click',function(){
        if ( $click == true ) {
            jQuery(this).next().slideDown(250);
            jQuery(this).css('background-position','100% 15px');
            $click = false;
        }else{
            jQuery(this).next().slideUp(300);
            jQuery(this).css('background-position','100% -20px');
            $click = true;
        }
    });


    jQuery('.tzsocials_button').live('click',function(){

        var $parent = jQuery(this).prev();
        var $count = $parent.find('li:last').attr('rel');
        var $count2 = parseInt($count) + 1;
        jQuery.ajax({
            url: svl_array.admin_ajax,
            type: "POST",
            data: ({ action:'add_socials', count:$count2 }),
            beforeSend: function() {

            },
            success: function( data, textStatus, jqXHR ){
                var $ajax_response = jQuery( data );
                $parent.append($ajax_response);
            },
            error: function( jqXHR, textStatus, errorThrown ){

            },
            complete: function( jqXHR, textStatus ){
            }
        });
    });

    jQuery('.tzsocial_remove').on('click',function(){
        jQuery(this).parent().parent().remove();
    });
    jQuery('.tzsocialsp_remove').on('click',function(){
        jQuery(this).parent().parent().remove();
    })
});

/* Add socials */

jQuery(document).ready(function(){
    var $click = true;
    jQuery('.client-header').live('click',function(){
        if ( $click == true ) {
            jQuery(this).next().slideDown(250);
            jQuery(this).css('background-position','100% 15px');
            $click = false;
        }else{
            jQuery(this).next().slideUp(300);
            jQuery(this).css('background-position','100% -20px');
            $click = true;
        }
    });


    jQuery('.tzclients_button').live('click',function(){

        var $parent = jQuery(this).prev();
        var $count = $parent.find('li:last').attr('rel');
        var $count2 = parseInt($count) + 1;
        jQuery.ajax({
            url: svl_array.admin_ajax,
            type: "POST",
            data: ({ action:'add_clients', count:$count2 }),
            beforeSend: function() {

            },
            success: function( data, textStatus, jqXHR ){
                var $ajax_response = jQuery( data );
                $parent.append($ajax_response);
            },
            error: function( jqXHR, textStatus, errorThrown ){

            },
            complete: function( jqXHR, textStatus ){
            }
        });
    });

    jQuery('.tzclients_remove').on('click',function(){
        jQuery(this).parent().parent().remove();
    });

});

