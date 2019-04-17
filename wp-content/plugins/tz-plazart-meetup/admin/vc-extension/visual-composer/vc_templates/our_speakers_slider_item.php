<?php

$name_speakers = $employment_speakers = '';
$facebook_url = $twitter_url = $flickr_url = $googleplus_url = $instagram_url = $linkedln_url = $_maniva_open_link = '';

extract(shortcode_atts(array(

    'name_speakers'         => '',
    '_maniva_open_link'     => '',
    'employment_speakers'   => '',
    'facebook_url'          => '',
    'twitter_url'           => '',
    'flickr_url'            => '',
    'googleplus_url'        => '',
    'instagram_url'         => '',
    'linkedln_url'          => '',

), $atts));

$content = wpb_js_remove_wpautop($content, true);

?>

<div class="speakers_slider_detail_list">
    <h3>
        <?php echo balanceTags($name_speakers); ?>
    </h3>
    <p class="sub_title_slider_speakers">
        <?php echo balanceTags($employment_speakers) ?>
    </p>
    <div class="detail_speakers_slider">
        <?php echo balanceTags( $content ); ?>
    </div>


    <?php if ( ( $facebook_url !='' || $twitter_url != '' || $flickr_url != '' || $googleplus_url != '' || $instagram_url != '' || $linkedln_url != '' ) ) : ?>

        <div class="detail_speakers_slider_socials">

            <?php if ( $facebook_url != '' ) : ?>
                <a <?php echo ( $_maniva_open_link == 'link_target' ? 'target="_blank"' : '' ) ?> href="<?php echo esc_url( $facebook_url ); ?>">
                    <i class="fa fa-facebook"></i>
                </a>
            <?php endif; ?>

            <?php if ( $twitter_url != '' ) : ?>
                <a <?php echo ( $_maniva_open_link == 'link_target' ? 'target="_blank"' : '' ) ?> href="<?php echo esc_url( $twitter_url ); ?>">
                    <i class="fa fa-twitter"></i>
                </a>
            <?php endif; ?>

            <?php if ( $flickr_url != '' ) : ?>
                <a <?php echo ( $_maniva_open_link == 'link_target' ? 'target="_blank"' : '' ) ?> href="<?php echo esc_url( $flickr_url ); ?>">
                    <i class="fa fa-camera-retro"></i>
                </a>
            <?php endif; ?>

            <?php if ( $googleplus_url != '' ) : ?>
                <a <?php echo ( $_maniva_open_link == 'link_target' ? 'target="_blank"' : '' ) ?> href="<?php echo esc_url( $googleplus_url ); ?>">
                    <i class="fa fa-google-plus"></i>
                </a>
            <?php endif; ?>

            <?php if ( $instagram_url != '' ) : ?>
                <a <?php echo ( $_maniva_open_link == 'link_target' ? 'target="_blank"' : '' ) ?> href="<?php echo esc_url( $instagram_url ); ?>">
                    <i class="fa fa-instagram"></i>
                </a>
            <?php endif; ?>

            <?php if ( $linkedln_url != '' ) : ?>
                <a <?php echo ( $_maniva_open_link == 'link_target' ? 'target="_blank"' : '' ) ?> href="<?php echo esc_url( $linkedln_url ); ?>">
                    <i class="fa fa-linkedin"></i>
                </a>
            <?php endif; ?>

        </div>

    <?php endif; ?>


</div>


