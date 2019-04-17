<?php

/*-----------------------------------------------------------------------------------*/
/*	Twitter Carousel Shortcode
/*-----------------------------------------------------------------------------------*/

function tzmaniva_gallery_item_view($atts, $content = null) {
    $tz_gallery_item_upload = $tz_gallery_item_uploads = '';
    extract(shortcode_atts(array(
    "tz_gallery_item_upload" => '',
    "tz_gallery_item_uploads" => ''
    ), $atts));

    ob_start();
    $maniva_get_img_by_id = wp_get_attachment_image($tz_gallery_item_upload, array(270,220));
    $gallery_item_explode =     explode ( ',' , $tz_gallery_item_uploads);

    ?>
        <div class="maniva-gallery-item">
            <div class="maniva-gallery-item__wrapper">
                <?php echo $maniva_get_img_by_id; ?>
                <a href="#" data-toggle="modal" data-target="#myModal">
                    <i class="fa fa-search"></i>
                </a>
            </div>
            <div id="myModal" class="modal fade popup-slider" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header"></div>
                        <div class="modal-body">

                            <div class="owl-gallery-item owl-carousel owl-theme">

                            <?php
                            if(isset($gallery_item_explode) && $gallery_item_explode != ''){
                                foreach ($gallery_item_explode as $gallery_item_explode_array){
                                    ?>

                                <div class="item">
                                    <?php echo wp_get_attachment_image($gallery_item_explode_array, 'full'); ?>
                                </div>

                                        <?php
                                    }
                                }
                                ?>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    <?php
    return ob_get_clean();
}

add_shortcode("tz-gallery-item", "tzmaniva_gallery_item_view");

