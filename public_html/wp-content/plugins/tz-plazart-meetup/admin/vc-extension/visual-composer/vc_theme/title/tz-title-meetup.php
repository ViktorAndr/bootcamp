<?php

/*===============================
Shortocde tz-title-meetup
===============================*/

function tz_maniva_title_meetup( $atts, $content = null ) {
    $section_type = $title = $image_under_title = $color_title = $text_align = $font_style = $type_font_title = '';
    $text_button = $link_text_button = $text_button_2 = $link_text_button_2 = $open_link = $color_button = $color_line = $image_under = $the_right = '';
    $sub_title = $icon_font = $color_sub_title = $border_bottom_sub_title_color = $color_icon_font = $margin_btn = $titlebottom = '';
    extract(shortcode_atts(array(
        'section_type'                  =>  'type1',
        'title'                         =>  '',
        'type_font_title'               =>  'default',
        'font_style'                    =>  'thin',
        'image_under'                   =>  'image_under_title',
        'image_under_title'             =>  '',
        'color_title'                   =>  '',
        'sub_title'                     =>  '',
        'color_sub_title'               =>  '',
        'border_bottom_sub_title_color' =>  '',
        'icon_font'                     =>  'fa-clock-o',
        'color_icon_font'               =>  '',
        'the_right'                     =>  '',
        'color_line'                    =>  '',
        'text_button'                   =>  '',
        'link_text_button'              =>  '',
        'text_button_2'                 =>  '',
        'link_text_button_2'            =>  '',
        'open_link'                     =>  '',
        'color_button'                  =>  'tz_meetup_default',
        'margin_btn'                    =>  '',
        'text_align'                    =>  'center',
        'titlebottom'                   =>  '',
    ), $atts));

    $content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content

    ob_start();

    if ( $text_align == 'center' ) :
        $class_text_align = ' tz_text_align_center';
    elseif ( $text_align == 'left' ) :
        $class_text_align = ' tz_text_align_left';
    else:
        $class_text_align = ' tz_text_align_right';
    endif;

    $class_font_style = '';
    if ( $type_font_title == 'raleway' ) {

        if ( $font_style == 'thin' ) :
            $class_font_style = 'tz_title_meetup_thin';
        elseif ( $font_style == 'extra_light' ) :
            $class_font_style = 'tz_title_meetup_extra_light';
        elseif ( $font_style == 'normal' ) :
            $class_font_style = 'tz_title_meetup_normal';
        elseif ( $font_style == 'medium' ) :
            $class_font_style = 'tz_title_meetup_medium';
        elseif ( $font_style == 'bold' ) :
            $class_font_style = 'tz_title_meetup_bold';
        else:
            $class_font_style = 'tz_title_meetup_semi_bold';
        endif;

    }

    if ( $section_type == 'type1' ) :
?>

    <div class="tz_maniva_meetup_title tz_maniva_meetup_title_type1 <?php echo esc_attr($class_text_align); ?>">

        <?php if ( $type_font_title == 'default' ): ?>

            <h3 <?php echo ( $color_title != '' ? 'style="color:' . esc_attr( $color_title ) . '"' : '' ); ?>>
                <?php echo balanceTags($title); ?>
            </h3>

        <?php else: ?>

            <h3 class="tz_meetup_title_raleway <?php echo esc_attr( $class_font_style ); ?>" <?php echo ( $color_title != '' ? 'style="color:' . esc_attr( $color_title ) . '"' : '' ); ?>>
                <?php echo balanceTags($title); ?>
            </h3>

        <?php endif; ?>
        
        <?php if ( $image_under_title !='' && $image_under == 'image_under_title' ) : ?>

            <div class="tz_image_title_meetup">
                <?php echo wp_get_attachment_image( $image_under_title, 'full' ); ?>
            </div>
            
        <?php endif; ?>
        
        <?php if ( !empty( $content ) ) : ?>

            <div class="tz_meetup_title_content">
                <?php echo balanceTags($content); ?>
            </div>

        <?php endif; ?>

        <?php if ( $image_under_title !='' && $image_under == 'image_under_content' ) : ?>

            <div class="tz_image_title_meetup tz_image_title_meetup2">
                <?php echo wp_get_attachment_image( $image_under_title, 'full' ); ?>
            </div>

        <?php endif; ?>

    </div>

    <?php elseif ( $section_type == 'type2' ) : ?>

        <div class="tz_maniva_meetup_title tz_maniva_meetup_title_type2 tz_meetup_video_text<?php echo esc_attr($class_text_align); ?>">

            <?php if ( $type_font_title == 'default' ): ?>

                <h3 class="tz_meetup_general_title" <?php echo ( $color_title != '' ? 'style="color:' . esc_attr( $color_title ) . '"' : '' ); ?>>
                    <?php echo balanceTags($title); ?>
                </h3>

            <?php else: ?>

                <h3 class="tz_meetup_title_raleway <?php echo esc_attr( $class_font_style ); ?>" <?php echo ( $color_title != '' ? 'style="color:' . esc_attr( $color_title ) . '"' : '' ); ?>>
                    <?php echo balanceTags($title); ?>
                </h3>

            <?php endif; ?>

            <?php if ( $image_under_title !='' ) : ?>

                <div class="tz_image_title_meetup">
                    <?php echo wp_get_attachment_image( $image_under_title, 'full' ); ?>
                </div>

            <?php endif; ?>

            <?php if ( !empty( $sub_title ) ) : ?>

            <span class="tz_meetup_video_sub_title" <?php echo ( $color_sub_title != '' ? 'style="color:' . esc_attr( $color_sub_title ) . '"' : '' ); ?>>
                <?php if ( $the_right == 1 ) : ?>
                    <i class="fa <?php echo esc_attr( $icon_font ); ?> tz_icon_position_left" <?php echo ( $color_icon_font != '' ? 'style="color:' . esc_attr( $color_icon_font ) . '"' : '' ); ?>></i>
                <?php endif; ?>

                <?php echo balanceTags( $sub_title ); ?>

                <?php if ( $the_right != 1 ) : ?>
                <i class="fa <?php echo esc_attr( $icon_font ); ?>" <?php echo ( $color_icon_font != '' ? 'style="color:' . esc_attr( $color_icon_font ) . '"' : '' ); ?>></i>
                <?php endif; ?>

                <span class="tz_meetup_video_sub_title_line" <?php echo ( $border_bottom_sub_title_color != '' ? 'style="border-bottom-color:' . esc_attr( $border_bottom_sub_title_color ) . '"' : '' ); ?>></span>

            </span>

            <?php endif; ?>

            <?php if ( !empty( $content ) ) : ?>

                <div class="tz_meetup_content">
                    <?php echo balanceTags($content); ?>
                </div>

            <?php endif; ?>

            <?php if ( !empty( $text_button ) ) : ?>

                <a class="tz_btn_video_meetup <?php echo esc_attr( $color_button ); ?>" href="<?php echo esc_url( $link_text_button ); ?>" <?php echo ( $open_link == 'link_target' ? 'target="_blank"' : '' ) ?> <?php echo ( $margin_btn != '' ? 'style="margin:' . esc_attr( $margin_btn ) . '"' : '' ); ?>>
                    <?php echo balanceTags( $text_button ); ?>
                </a>

            <?php endif; ?>

            <?php if ( !empty( $text_button_2 ) ) : ?>

                <a class="tz_btn_video_meetup tz_btn_shop_meetup <?php echo esc_attr( $color_button ); ?>" href="<?php echo esc_url( $link_text_button_2 ); ?>" <?php echo ( $open_link == 'link_target' ? 'target="_blank"' : '' ) ?> <?php echo ( $margin_btn != '' ? 'style="margin:' . esc_attr( $margin_btn ) . '"' : '' ); ?>>
                    <?php echo balanceTags( $text_button_2 ); ?>
                </a>

            <?php endif; ?>

        </div>

    <?php elseif( $section_type == 'type3' ): ?>

        <div class="tz_maniva_meetup_title tz_maniva_meetup_title_type3">
            <h3 <?php echo ( $color_title != '' ? 'style="color:' . esc_attr( $color_title ) . '"' : '' ); ?>>

                <span <?php echo ( $color_line != '' ? 'style="background:' . esc_attr( $color_line ) . '"' : '' ); ?> class="tz_title_line_left"></span>

                <?php echo balanceTags($title); ?>

                <span <?php echo ( $color_line != '' ? 'style="background:' . esc_attr( $color_line ) . '"' : '' ); ?> class="tz_title_line_right"></span>

            </h3>
        </div>

        <?php
        else:
        ?>
            <div class="tz_maniva_meetup_title tz_maniva_meetup_title_type4 <?php echo esc_attr($class_text_align); ?>" <?php echo ( $margin_btn != '' ? 'style="margin-bottom:' . esc_attr( $margin_btn ) . '"' : '' ); ?>>
                <h3 <?php  echo ('style="color:' . esc_attr( $color_title ). '; margin-bottom:'. esc_attr( $titlebottom ).' "' ); ?>>

                    <?php echo balanceTags($title); ?>

                </h3>

                <?php if ( !empty( $content ) ) : ?>

                    <div class="tz_meetup_content">
                        <?php echo balanceTags($content); ?>
                    </div>

                <?php endif; ?>

                <?php if ( !empty( $text_button ) ) : ?>

                    <a class="tz_btn_video_meetup <?php echo esc_attr( $color_button ); ?>" href="<?php echo esc_url( $link_text_button ); ?>" <?php echo ( $open_link == 'link_target' ? 'target="_blank"' : '' ) ?> <?php echo ( $margin_btn != '' ? 'style="margin:' . esc_attr( $margin_btn ) . '"' : '' ); ?>>
                        <?php echo balanceTags( $text_button ); ?>
                    </a>

                <?php endif; ?>

            </div>



<?php

    endif;

    $tz_maniva  =   ob_get_contents();
    ob_end_clean();
    return $tz_maniva;

}
add_shortcode('tz_title_meetup','tz_maniva_title_meetup');
?>