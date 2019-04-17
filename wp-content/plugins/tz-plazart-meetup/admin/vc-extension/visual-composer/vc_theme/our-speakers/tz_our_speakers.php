<?php

function tz_meetup_our_speakers( $atts, $content = null ) {

    $speakers_image = $speakers_image_square = $employment = $name = $open_link =  $facebook_url = $twitter_url = $flickr_url = '';
    $googleplus_url = $instagram_url = $linkedln_url = $effects_light_box = $text_thank = $color_text_thank = $color_text_name= $color_text_employment =  '';
    $text_hover = $type_hover = $color_text_hover = $bk_text_hover = $use_effects = $use_excerpt = $excerpt_speakers = $color_excerpt = '';

    extract(shortcode_atts(array(

        'speakers_image'        =>  '',
        'speakers_image_square' =>  '',
        'employment'            =>  '',
        'name'                  =>  '',
        'use_excerpt'           =>  '',
        'excerpt_speakers'      =>  '',
        'color_excerpt'         =>  '',
        'open_link'             =>  '',
        'facebook_url'          =>  '',
        'twitter_url'           =>  '',
        'flickr_url'            =>  '',
        'googleplus_url'        =>  '',
        'instagram_url'         =>  '',
        'linkedln_url'          =>  '',
        'use_effects'           =>  1,
        'effects_light_box'     =>  1,
        'text_thank'            =>  'Thanks for watching!',
        'color_text_thank'      =>  '',
        'color_text_name'       =>  '',
        'color_text_employment' =>  '',
        'type_hover'            =>  1,
        'text_hover'            =>  'view profile',
        'color_text_hover'      =>  '',
        'bk_text_hover'         =>  '',

    ), $atts));

    if ( $use_effects == 1 ) :

        wp_enqueue_script('classie.js');
        wp_enqueue_script('modalEffects.js');

    endif;

    $content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content

    $class_md_setperspective    =   '';
    $tz_md_effect_16            =   '';

    if (  $use_effects == 1 && $effects_light_box == 16 ) :
        $tz_md_effect_16 = ' tz_md_effect_16';
    endif;

    if ( $use_effects == 1 && ( $effects_light_box == 17 || $effects_light_box == 18 || $effects_light_box == 19 ) ) :

        $class_md_setperspective = ' md-setperspective';

    endif;

    ob_start();
?>

<div class="speaker_box tz_md_modal_show">
    <div class="tz_our_speakers<?php if ( $use_effects == 1 ) : ?> md-trigger<?php echo esc_attr( $class_md_setperspective ) . esc_attr( $tz_md_effect_16 ); ?><?php endif; ?>" <?php if ( $use_effects == 1 ) : ?>data-modal="modal-<?php echo esc_attr( $effects_light_box ); ?>"<?php endif; ?>>
        <div class="tz_our_speakers_img">

            <?php echo wp_get_attachment_image( $speakers_image , 'full'); ?>

            <div class="tz_our_speakers_social">
                <div class="ds-table">
                    <div class="ds-table-cell">

                        <?php if ( $type_hover == 1 && ( $facebook_url !='' || $twitter_url != '' || $flickr_url != '' || $googleplus_url != '' || $instagram_url != '' || $linkedln_url != '' ) ) : ?>

                            <div class="tz_meetup_social_speakers">

                                <?php if ( $facebook_url != '' ) : ?>
                                    <a <?php echo ( $open_link == 'link_target' ? 'target="_blank"' : '' ) ?> href="<?php echo esc_url( $facebook_url ); ?>">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                <?php endif; ?>

                                <?php if ( $twitter_url != '' ) : ?>
                                    <a <?php echo ( $open_link == 'link_target' ? 'target="_blank"' : '' ) ?> href="<?php echo esc_url( $twitter_url ); ?>">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                <?php endif; ?>

                                <?php if ( $flickr_url != '' ) : ?>
                                    <a <?php echo ( $open_link == 'link_target' ? 'target="_blank"' : '' ) ?> href="<?php echo esc_url( $flickr_url ); ?>">
                                        <i class="fa fa-camera-retro"></i>
                                    </a>
                                <?php endif; ?>

                                <?php if ( $googleplus_url != '' ) : ?>
                                    <a <?php echo ( $open_link == 'link_target' ? 'target="_blank"' : '' ) ?> href="<?php echo esc_url( $googleplus_url ); ?>">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                <?php endif; ?>

                                <?php if ( $instagram_url != '' ) : ?>
                                    <a <?php echo ( $open_link == 'link_target' ? 'target="_blank"' : '' ) ?> href="<?php echo esc_url( $instagram_url ); ?>">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                <?php endif; ?>

                                <?php if ( $linkedln_url != '' ) : ?>
                                    <a <?php echo ( $open_link == 'link_target' ? 'target="_blank"' : '' ) ?> href="<?php echo esc_url( $linkedln_url ); ?>">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                <?php endif; ?>

                            </div>

                        <?php endif; ?>

                        <?php if ( $type_hover == 2 ) : ?>

                            <span class="tz_text_hover_speaker" data-modal="modal-<?php echo esc_attr( $effects_light_box ); ?>" <?php echo ( $color_text_hover != '' || $bk_text_hover !='' ? 'style="color:' . esc_attr( $color_text_hover ) . ';background:' . esc_attr( $bk_text_hover ) . '"' : '' ); ?>>
                                <?php echo balanceTags( $text_hover ); ?>
                            </span>

                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="tz_our_speakers_container">
            <h4>
                <?php echo balanceTags( $name ); ?>
            </h4>
            <span>
                <?php echo balanceTags( $employment ); ?>
            </span>

            <?php if ( $use_excerpt == 1 && $excerpt_speakers !='' ) : ?>

                <p class="tz_excerpt_speakers" <?php echo ( $color_excerpt != '' ? 'style="color:' . esc_attr( $color_excerpt ) . '"' : '' ); ?>>
                    <?php echo balanceTags( $excerpt_speakers ); ?>
                </p>

            <?php endif; ?>

        </div>
    </div>

    <?php if ( $use_effects == 1 ) : ?>

    <div class="tz-md-modal-speakers md-modal md-effect-<?php echo esc_attr( $effects_light_box ); ?> modal-<?php echo esc_attr( $effects_light_box ); ?>">
        <div class="md-content container">
            <span class="md-close">
                <i class="fa fa-close"></i>
            </span>
            <div class="tz_modal_title">
                <div class="tz_modal_image">
                    <span class="tz_modal_image_content">
                        <?php

                        if ( $speakers_image_square !='' ) :
                            echo wp_get_attachment_image( $speakers_image_square , 'full');
                        else:
                            echo wp_get_attachment_image( $speakers_image , 'full');
                        endif;

                        ?>
                    </span>
                </div>
                <h4 class="tz_modal_name" <?php echo ( $color_text_name != '' ? 'style="color:' . esc_attr( $color_text_name ) . '"' : '' ); ?>>
                    <?php echo balanceTags( $name ); ?>
                </h4>
                <span class="tz_modal_employment" <?php echo ( $color_text_employment != '' ? 'style="color:' . esc_attr( $color_text_employment ) . '"' : '' ); ?>>
                    <?php echo balanceTags( $employment ); ?>
                </span>

                <?php if ($facebook_url !='' || $twitter_url != '' || $flickr_url != '' || $googleplus_url != '' || $instagram_url != '' ) : ?>

                    <div class="tz_modal_speakers_social">
                        <div class="tz_modal_social_speakers">

                                <?php if ( $facebook_url != '' ) : ?>
                                    <a <?php echo ( $open_link == 'link_target' ? 'target="_blank"' : '' ) ?> href="<?php echo esc_url( $facebook_url ); ?>">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                <?php endif; ?>

                                <?php if ( $twitter_url != '' ) : ?>
                                    <a <?php echo ( $open_link == 'link_target' ? 'target="_blank"' : '' ) ?> href="<?php echo esc_url( $twitter_url ); ?>">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                <?php endif; ?>

                                <?php if ( $flickr_url != '' ) : ?>
                                    <a <?php echo ( $open_link == 'link_target' ? 'target="_blank"' : '' ) ?> href="<?php echo esc_url( $flickr_url ); ?>">
                                        <i class="fa fa-camera-retro"></i>
                                    </a>
                                <?php endif; ?>

                                <?php if ( $googleplus_url != '' ) : ?>
                                    <a <?php echo ( $open_link == 'link_target' ? 'target="_blank"' : '' ) ?> href="<?php echo esc_url( $googleplus_url ); ?>">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                <?php endif; ?>

                                <?php if ( $instagram_url != '' ) : ?>
                                    <a <?php echo ( $open_link == 'link_target' ? 'target="_blank"' : '' ) ?> href="<?php echo esc_url( $instagram_url ); ?>">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                <?php endif; ?>

                            </div>
                    </div>

                <?php endif; ?>

            </div>
            <div class="tz_modal_speakers_content">
                <?php echo balanceTags($content); ?>
            </div>
            <span class="md-close tz-md-close">
                <i class="fa fa-close"></i>

                <?php if ( $text_thank !='' ) : ?>
                <em <?php echo ( $color_text_thank != '' ? 'style="color:' . esc_attr( $color_text_thank ) . '"' : '' ); ?>>
                    <?php echo balanceTags( $text_thank ); ?>
                </em>
                <?php endif; ?>

            </span>
        </div>
    </div>
    <div class="md-overlay"></div><!-- the overlay element -->

    <?php endif; ?>

</div>

<?php

    $tz_maniva  =   ob_get_contents();
    ob_end_clean();
    return $tz_maniva;
}
add_shortcode('tz_our_speakers','tz_meetup_our_speakers');
?>