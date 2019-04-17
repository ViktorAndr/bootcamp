<?php

    $start_time = $time_event = $title_event = $link = $excerpt_event = $color_title_event = $color_icon_time = $color_text_time = $bk_content = $effects_light_box = $text_thank = $use_effects =  '';
    $title_event_click = $color_text_thank = $color_title_effects = $color_excerpt = $event_image_square =  '';
    $open_link =  $facebook_url = $twitter_url = $flickr_url = $googleplus_url = $instagram_url = $linkedln_url = $color_social_network = '';

extract( shortcode_atts( array(

    'start_time'            =>  '',
    'time_event'            =>  '',
    'title_event'           =>  '',
    'link'                  =>  '',
    'excerpt_event'         =>  '',
    'color_title_event'     =>  '',
    'color_icon_time'       =>  '',
    'color_text_time'       =>  '',
    'bk_content'            =>  '',
    'use_effects'           =>  0,
    'event_image_square'    =>  '',
    'effects_light_box'     =>  1,
    'text_thank'            =>  'Thanks for watching!',
    'color_text_thank'      =>  '',
    'color_title_effects'   =>  '',
    'color_excerpt'         =>  '',
    'title_event_click'     =>  1,
    'open_link'             =>  '',
    'facebook_url'          =>  '',
    'twitter_url'           =>  '',
    'flickr_url'            =>  '',
    'googleplus_url'        =>  '',
    'instagram_url'         =>  '',
    'linkedln_url'          =>  '',
    'color_social_network'  =>  '',

), $atts ) );

if ( $use_effects == 1 ) :

    wp_enqueue_script('classie.js');
    wp_enqueue_script('modalEffects.js');

endif;

$content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content

$vc_link = vc_build_link( $link );

$maniva_meetup_right_to_left  =   ot_get_option( 'maniva-meetup' . '_tzmaniva_rtl' );

$class_md_setperspective    =   '';
$tz_md_effect_16            =   '';

if (  $use_effects == 1 && $effects_light_box == 16 ) :
    $tz_md_effect_16 = ' tz_md_effect_16';
endif;

if ( $use_effects == 1 && ( $effects_light_box == 17 || $effects_light_box == 18 || $effects_light_box == 19 ) ) :

    $class_md_setperspective = ' md-setperspective';

endif;

?>
<div class="tz_meetup_box_detail tz_md_modal_show">

    <div class="tz_meetup_box_detail_custom" <?php echo( $bk_content != '' ? 'style="background:' . esc_attr( $bk_content ) . '"' : '' ); ?>>

        <span class="tz_meetup_start_time">
            <?php echo balanceTags( $start_time ); ?>
        </span>

        <?php if ( $title_event_click == 1 ) : ?>

            <h4 <?php echo( $color_title_event != '' && $vc_link['url'] == false ? 'style="color:' . esc_attr( $color_title_event ) . '"' : '' ); ?>>

                <?php if ( $vc_link['url'] == true ) : ?>

                    <a <?php echo( $color_title_event != '' ? 'style="color:' . esc_attr( $color_title_event ) . '"' : '' ); ?> <?php echo ( $vc_link['target'] != '' ? 'target="' . esc_attr( $vc_link['target'] ) . '"' : '') .' '. ( $vc_link['url'] != '' ? 'href="' . esc_attr( $vc_link['url'] ) . '"' : '' ) . ' '. ( $vc_link['title'] != '' ? 'title="' . esc_attr( $vc_link['title'] ) . '"' : '' )  ; ?>>
                        <?php echo balanceTags( $title_event ); ?>
                    </a>

                <?php else: ?>

                    <?php echo balanceTags( $title_event ); ?>

                <?php endif; ?>

            </h4>

        <?php else: ?>

            <h4 class="tz_title_event<?php if ( $use_effects == 1 ) : ?> md-trigger<?php echo esc_attr( $class_md_setperspective ) . esc_attr( $tz_md_effect_16 ); ?><?php endif; ?>" <?php echo( $color_title_event != '' ? 'style="color:' . esc_attr( $color_title_event ) . '"' : '' ); ?> <?php if ( $use_effects == 1 ) : ?>data-modal="modal-<?php echo esc_attr( $effects_light_box ); ?>"<?php endif; ?>>

                <?php echo balanceTags( $title_event ); ?>

            </h4>

        <?php endif; ?>

        <p class="tz_event_time">

            <?php if ( $maniva_meetup_right_to_left == 0 ): ?>
                <i class="fa fa-clock-o" <?php echo( $color_icon_time != '' ? 'style="color:' . esc_attr( $color_icon_time ) . '"' : '' ); ?>></i>
            <?php endif; ?>

            <span <?php echo( $color_text_time != '' ? 'style="color:' . esc_attr( $color_text_time ) . '"' : '' ); ?>>
                <?php echo balanceTags( $start_time ); ?> -
                <?php echo balanceTags( $time_event ); ?>
            </span>

            <?php if ( $maniva_meetup_right_to_left == 1 ): ?>
                <i class="fa fa-clock-o" <?php echo( $color_icon_time != '' ? 'style="color:' . esc_attr( $color_icon_time ) . '"' : '' ); ?>></i>
            <?php endif; ?>

        </p>

        <div class="tz_event_meetup_item_content<?php if ( $use_effects == 1 ) : ?> md-trigger<?php echo esc_attr( $class_md_setperspective ) . esc_attr( $tz_md_effect_16 ); ?><?php endif; ?>" <?php if ( $use_effects == 1 ) : ?>data-modal="modal-<?php echo esc_attr( $effects_light_box ); ?>"<?php endif; ?>>

            <?php if ( $excerpt_event !='' ) : ?>

                <p <?php echo ( $color_excerpt != '' ? 'style="color:' . esc_attr( $color_excerpt ) . '"' : '' ); ?>>
                    <?php echo balanceTags( $excerpt_event ); ?>
                </p>

            <?php

            else:
                echo balanceTags( $content );
            endif;

            ?>

        </div>

    </div>

    <?php if ( $use_effects == 1 ) : ?>

        <div class="tz-md-modal-speakers md-modal md-effect-<?php echo esc_attr( $effects_light_box ); ?> modal-<?php echo esc_attr( $effects_light_box ); ?>">
            <div class="md-content container">
                <span class="md-close">
                    <i class="fa fa-close"></i>
                </span>
                <div class="tz_modal_title">

                    <?php if ( $event_image_square !='' ) : ?>

                        <div class="tz_modal_image">
                            <span class="tz_modal_image_content">

                                <?php echo wp_get_attachment_image( $event_image_square , 'full'); ?>

                            </span>
                        </div>

                    <?php endif; ?>

                    <h4 class="tz_modal_name" <?php echo ( $color_title_effects != '' ? 'style="color:' . esc_attr( $color_title_effects ) . '"' : '' ); ?>>
                        <?php echo balanceTags( $title_event ); ?>
                    </h4>
                    <span class="tz_modal_employment">
                        <?php echo balanceTags( $start_time ) . ' -' . balanceTags( $time_event ); ?>
                    </span>

                    <?php if ($facebook_url !='' || $twitter_url != '' || $flickr_url != '' || $googleplus_url != '' || $instagram_url != '' ) : ?>

                        <div class="tz_modal_speakers_social">
                            <div class="tz_modal_social_speakers">

                                <?php if ( $facebook_url != '' ) : ?>
                                    <a <?php echo ( $open_link == 'link_target' ? 'target="_blank"' : '' ) ?> href="<?php echo esc_url( $facebook_url ); ?>" <?php echo ( $color_social_network != '' ? 'style="color:' . esc_attr( $color_social_network ) . '"' : '' ); ?>>
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                <?php endif; ?>

                                <?php if ( $twitter_url != '' ) : ?>
                                    <a <?php echo ( $open_link == 'link_target' ? 'target="_blank"' : '' ) ?> href="<?php echo esc_url( $twitter_url ); ?>" <?php echo ( $color_social_network != '' ? 'style="color:' . esc_attr( $color_social_network ) . '"' : '' ); ?>>
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                <?php endif; ?>

                                <?php if ( $flickr_url != '' ) : ?>
                                    <a <?php echo ( $open_link == 'link_target' ? 'target="_blank"' : '' ) ?> href="<?php echo esc_url( $flickr_url ); ?>" <?php echo ( $color_social_network != '' ? 'style="color:' . esc_attr( $color_social_network ) . '"' : '' ); ?>>
                                        <i class="fa fa-camera-retro"></i>
                                    </a>
                                <?php endif; ?>

                                <?php if ( $googleplus_url != '' ) : ?>
                                    <a <?php echo ( $open_link == 'link_target' ? 'target="_blank"' : '' ) ?> href="<?php echo esc_url( $googleplus_url ); ?>" <?php echo ( $color_social_network != '' ? 'style="color:' . esc_attr( $color_social_network ) . '"' : '' ); ?>>
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                <?php endif; ?>

                                <?php if ( $instagram_url != '' ) : ?>
                                    <a <?php echo ( $open_link == 'link_target' ? 'target="_blank"' : '' ) ?> href="<?php echo esc_url( $instagram_url ); ?>" <?php echo ( $color_social_network != '' ? 'style="color:' . esc_attr( $color_social_network ) . '"' : '' ); ?>>
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                <?php endif; ?>

                                <?php if ( $instagram_url != '' ) : ?>
                                    <a <?php echo ( $open_link == 'link_target' ? 'target="_blank"' : '' ) ?> href="<?php echo esc_url( $instagram_url ); ?>" <?php echo ( $color_social_network != '' ? 'style="color:' . esc_attr( $color_social_network ) . '"' : '' ); ?>>
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

