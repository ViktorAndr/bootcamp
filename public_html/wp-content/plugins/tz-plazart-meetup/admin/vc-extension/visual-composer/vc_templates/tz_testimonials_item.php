<?php

$name_testimonials = $employment_testimonials = $new_image_partner = '';

extract( shortcode_atts( array(

    'name_testimonials'         =>  '',
    'employment_testimonials'   =>  '',
    'new_image_partner'         =>  '',


), $atts ) );

$content = wpb_js_remove_wpautop($content, true);


?>
<div class="tz_testimonials_item">
    <div class="tz_testimonials_item_box">
        <h4>
            <?php echo balanceTags( $name_testimonials ); ?>
            <span>, <?php echo balanceTags( $employment_testimonials ); ?></span>
        </h4>
        <div class="tz_testimonials_content">
            <?php echo balanceTags( $content ); ?>
        </div>
    </div>
    <div class="tz_testimonials_item_img">
        <?php echo wp_get_attachment_image( $new_image_partner,'full' ); ?>
    </div>
</div>
