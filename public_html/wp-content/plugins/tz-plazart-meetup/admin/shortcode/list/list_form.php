<?php
$current_path = __FILE__; //absolute path
$path_arr = explode('wp-content', $current_path);
require_once($path_arr[0] . '/wp-load.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php esc_html_e('List Shortcode', 'maniva-meetup'); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory(); ?>/css/default/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo PLUGIN_PATH; ?>/admin/shortcode/shortocde_admin.css" type="text/css"/>
    <script type="text/javascript" src="<?php echo includes_url(); ?>/js/jquery/jquery.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo get_option('siteurl') ?>/wp-includes/js/tinymce/tiny_mce_popup.js"></script>
</head>
<body>
<div class="container">
    <form role="form">
        <div class="create_content">
            <select id="shortcode_list_type" name="type" class="item-list-attrs">
                <option value="type1">Type 1</option>
                <option value="type2">Type 2</option>
            </select>
            <div class="create_item">
                <div class="form-group">
                    <label>List Icon</label>
                    <input type="text" class="form-control tzlist_icon" placeholder=""> Example: fa-caret-right <br />
                    <label>Input Color</label>
                    <input type="text" class="form-control tzlist_icon_check" placeholder=""> Example: #53c5a9
                </div>
                <div class="form-group">
                    <label class="TzListTitle">List Content</label>
                    <textarea rows="5" class="tzContent tzlist_content tzvalue"></textarea>
                </div>
                <button class="tz-remove"></button>
            </div>
        </div>
        <button id="tz-new-list" class="tz-new" >Add New</button>
        <button class="button button-primary button-large" id="tz-insert-list">Add shortcode</button>
    </form>
</div>

<script type="text/javascript">

    jQuery('#tz-new-list').on('click', function (event){
        event.preventDefault();
        var list_item = jQuery('.create_item').first().clone();
        list_item.find('input').val('');
        list_item.find('.tz-remove').addClass('tz-remove-block tz-remove-img');
        jQuery('.create_content').append(list_item);
        jQuery('.tz-remove-img').on('click',function(){
            jQuery(this).parent().remove();
        });
    });
    // insert list
    jQuery('#tz-insert-list').on('click', function(){

        var $list_item  =   '';
        var $item_list_type  =   jQuery('#shortcode_list_type').val();

        jQuery('.create_item').each(function(){
            var $item_icon          = jQuery(this).find('.tzlist_icon').val();
            var $item_icon_check    = jQuery(this).find('.tzlist_icon_check').val();
            var $item_content       = jQuery(this).find('.tzlist_content').val();
            $list_item              += '[list_item item_icon_check="'+$item_icon_check+'" item_icon="'+$item_icon+'" item_content="'+$item_content+'"]';
        });


        var $viewlist = '[list list_type="'+$item_list_type+'"]'+$list_item+'[/list]';
        tinyMCEPopup.execCommand('mceReplaceContent', false, $viewlist);
        tinyMCEPopup.close();
    });
</script>
</body>
</html>