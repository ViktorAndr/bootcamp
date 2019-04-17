<?php
/*===============================
* Shortocde dropcap
===============================*/

function tztitania_dropcap($atts) {
    $type = $letter = '';
    extract(shortcode_atts(array(
        'type'      => '',
        'letter'    => '',
    ),$atts));
    ob_start();
    $class = '';
    if($type == 'type1'){
        $class = 'plazart-dropcap-type1';
    }elseif($type == 'type2'){
        $class = 'plazart-dropcap-type2';
    }else {
        $class = 'plazart-dropcap-type3';
    }
    ?>
    <span class="<?php echo esc_attr($class);?>"><?php echo esc_html($letter);?></span>
    <?php
    $content_dropcap = ob_get_contents();
    ob_end_clean();
    return $content_dropcap;
}
add_shortcode('dropcap','tztitania_dropcap');
?>