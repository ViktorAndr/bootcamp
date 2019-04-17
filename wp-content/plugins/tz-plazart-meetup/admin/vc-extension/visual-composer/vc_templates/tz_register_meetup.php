<?php

    extract( shortcode_atts( array(


    ), $atts ) );

?>

<div class="tz_register_meetup">
    <div class="tz_register_meetup_pricing">
        <?php echo wpb_js_remove_wpautop( $content ); ?>
    </div>
</div>