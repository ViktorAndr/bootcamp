<?php
/* ================
 * Method List
 =================*/
function tzmaniva_list($attr, $content = null ){
    global $tz_list_item;
    $list_type = '';
    $tz_list_item = array();
    do_shortcode($content);

    extract(shortcode_atts(array(
        'list_type'      => '',
    ),$attr));

    $class_list_type = '';

    if ( $list_type =='type2' ):
        $class_list_type = 'tz_list_type';
    else:
        $class_list_type = 'tz-plazart-list';
    endif;

    ob_start();

    ?>

    <ul class="<?php echo esc_attr( $class_list_type ); ?>">
        <?php
        foreach($tz_list_item as $tz_item){
        ?>
        <li>
            <?php if($tz_item['icon'] != '') : ?>
                <span class="tz_icon_maniva_list">
                    <i <?php echo ( $tz_item['item_icon_check'] != '' ? 'style="color:' . esc_attr( $tz_item['item_icon_check'] ) . '"' : '' ) ?> class="fa <?php echo esc_attr($tz_item['icon']) ;?>"></i>
                </span>

            <?php endif; ?>

            <p class="tz_list_item_content">
                <?php echo balanceTags($tz_item['item_content']);?>
            </p>

        </li>
        <?php
        }
        ?>
    </ul>

    <?php
    $content_list = ob_get_contents();
    ob_end_clean();
    return $content_list;
}
add_shortcode('list','tzmaniva_list');

function tzmaniva_list_item($attr, $content = null){
    global $tz_list_item ;
    $item_icon = $item_content = $item_icon_check = '';
    extract( shortcode_atts( array(
        'item_icon'         =>  '',
        'item_content'      =>  '',
        'item_icon_check'   =>  ''
    ), $attr ) ) ;
    $tz_list_item[] = array(
        'icon'              => $item_icon,
        'item_content'      => $item_content,
        'item_icon_check'   => $item_icon_check
    ) ;
}
add_shortcode('list_item','tzmaniva_list_item');
/*end shortcode list*/

?>