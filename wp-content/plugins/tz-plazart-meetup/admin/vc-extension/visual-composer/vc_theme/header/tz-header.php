<?php
/*===============================
Shortocde tz-header
===============================*/

function tzmaniva_header($atts) {

    $type = $type_position = $select_menu_slider = $type_position_mobile = $select_menu = $logo_type = $logo_image = $logo_text = $color_logo_text = $scroll_image = $scroll_text = $image_logo_slider = $home_link = $link_home_page = '';
    $type_contact_upcoming = $mail = $phone = $upcoming_event = $check_upcoming_one_page = $link = $description_event = '';
    $show_hide_contact_info = $position_top_header = $show_hide_search = $vc_link_home_page = '';
    $click_menu_one_page = $one_page_scrolling_speed = $check_not_slider = $bk_color_menu = $show_hide_cart = '';

    extract(shortcode_atts(array(

        'type'                      =>  1,
        'type_position'             =>  'fixed',
        'type_position_mobile'      =>  'relative',
        'logo_type'                 =>  '',
        'logo_image'                =>  '',
        'logo_text'                 =>  '',
        'home_link'                 =>  1,
        'link_home_page'            =>  '',
        'color_logo_text'           =>  '',
        'select_menu_slider'        =>  '',
        'check_not_slider'          =>  '',
        'show_hide_cart'            =>  2,
        'bk_color_menu'             =>  '',
        'select_menu'               =>  '',
        'click_menu_one_page'       =>  1,
        'one_page_scrolling_speed'  =>  '2200',
        'image_logo_slider'         =>  '',
        'scroll_text'               =>  '',
        'scroll_image'              =>  '',
        'type_contact_upcoming'     =>  'contact',
        'show_hide_contact_info'    =>  1,
        'mail'                      =>  '',
        'phone'                     =>  '',
        'upcoming_event'            =>  'Upcoming Event',
        'check_upcoming_one_page'   =>  '',
        'link'                      =>  '',
        'description_event'         =>  '',
        'position_top_header'       =>  1,
        'show_hide_search'          =>  1

    ),$atts));
    ob_start();

    if ( $home_link == 2 ) :
        $vc_link_home_page  = vc_build_link( $link_home_page );
    endif;

    $vc_link            = vc_build_link( $link );

    $maniva_meetup_right_to_left  =   ot_get_option( 'maniva-meetup' . '_tzmaniva_rtl' );

    global $home_layout;

    if( $type == 1 ){
        $header_class       =   'tz-homeType1';
        $tz_header_space    =   'tz_header_space_1';
    }elseif ( $type == 2 ) {
        $header_class = 'tz-homeType2';
        $tz_header_space    =   'tz_header_space_2';
    }elseif ( $type == 3 ) {
        $header_class = 'tz-homeType1 tz-homeType3';
        $tz_header_space    =   'tz_header_space_3';
    }elseif($type == 4){
        $header_class = 'tz-homeType4';
        $tz_header_space    =   'tz_header_space_4';
    }else{
        $header_class = 'tz-homeType5';
        $tz_header_space    =   'tz_header_space_5';
    }


    if ( $type_position == 'fixed' ) :
        $header_class_position = 'tz-homeTypeFixed';
    else:
        $header_class_position = 'tz-homeTypeRelative';
    endif;

    $header_class_position_mobile = '';
    if ( $type_position_mobile == 'fixed' ) :
        $header_class_position_mobile = ' tz-menu-mobile-fix';
    endif;

    $class_admin = $tz_speed_one_page = $tz_nav_one_page = $tz_upcoming_event_one_page = $tz_custom_not_slider_color = '';
    if ( is_admin_bar_showing() && $type_position != 'relative' ) {
        $class_admin = 'tzAdmin_bar';
    }

    $tzoptionpage = '';
    if ( isset($_GET["home_layout"]) && $_GET["home_layout"] == 'rtl' ){
        $tzoptionpage = 1;
    }

    if ( $tzoptionpage == 1 || $maniva_meetup_right_to_left == 1 || $home_layout == 'rtl' ):
        $maniva_pull_left_right_logo = 'pull-right';
        $maniva_pull_left_right_menu = 'pull-left';
    else:
        $maniva_pull_left_right_logo = 'pull-left';
        $maniva_pull_left_right_menu = 'pull-right';
    endif;

    if ( $click_menu_one_page == 1 ) :
        $tz_speed_one_page  =   ' tz_speed_one_page';
        $tz_nav_one_page    =   ' tz_nav_one_page';
    endif;

    if ( $check_upcoming_one_page == 1 ) :
        $tz_upcoming_event_one_page =   ' tz_upcoming_event_one_page';
    endif;

    if ( $check_not_slider == 1 ) :
        $tz_custom_not_slider_color =   ' tz_custom_not_slider_color';
    endif;

    ?>

    <header class="tz-headerHome <?php echo esc_attr( $header_class ).' '.esc_attr( $class_admin ).' '.esc_attr( $header_class_position ) . esc_attr( $header_class_position_mobile ) ;?>" data-option="<?php echo esc_attr($type);?>">

        <div id="Tz-provokeMe">

            <?php

            if ( $type == 1 || $type == 3 || $type == 4 ) :

                if ( $show_hide_contact_info != 4 ) :

                    $header_top_phone           =   ot_get_option( 'maniva-meetup' . '_TzHeaderTopPhone','' ) ;
                    $header_top_mail            =   ot_get_option( 'maniva-meetup' . '_TzHeaderTopMail','' );
                    $tz_class_column_contact    =   'col-lg-6 col-md-6';
                    $tz_class_column_social     =   'col-lg-6 col-md-6';
                    $tz_position_top_header     =   '';

                    if ( $type_contact_upcoming == 'upcoming' ) :
                        $tz_class_column_contact = $tz_class_column_social = 'col-lg-6 col-md-6';
                    endif;

                    if ( $show_hide_contact_info == 2 || $show_hide_contact_info == 3 ) :
                        $tz_class_column_contact = $tz_class_column_social = 'col-lg-12 col-md-12';

                        if ( $position_top_header == 1 ) :
                            $tz_position_top_header = ' text-left';
                        elseif ( $position_top_header == 2 ) :
                            $tz_position_top_header = ' text-center';
                        else:
                            $tz_position_top_header = ' text-right';
                        endif;

                    endif;


                    ?>
                    <div class="tz_meetup_header_option">
                        <div class="container">
                            <div class="row">

                                <?php if ( $show_hide_contact_info == 1 || $show_hide_contact_info == 2 ) : ?>

                                    <div class="<?php echo esc_attr( $tz_class_column_contact ); ?> col-sm-12 col-xs-12">
                                        <div class="tz_meetup_header_option_phone<?php echo esc_attr( $tz_position_top_header ) . esc_attr( $tz_upcoming_event_one_page ); ?>">

                                            <?php if ( $type_contact_upcoming == 'contact' ) : ?>

                                                <?php if ( $phone !='' || $header_top_phone !='' ) : ?>

                                                    <span>
                                                        <?php if($type ==4): ?>

                                                            <i class="fa fa-phone"></i>

                                                        <?php else: ?>

                                                            <img src="<?php echo get_template_directory_uri().'/images/phone.png' ?>" alt="phone">

                                                        <?php endif; ?>


                                                            <?php
                                                            if ( $phone !='' ) :
                                                                echo balanceTags( $phone );
                                                            else:
                                                                echo balanceTags( $header_top_phone );
                                                            endif;
                                                            ?>

                                                    </span>

                                                <?php endif; ?>

                                                <?php if ( $mail !='' || $header_top_mail !='' ) : ?>

                                                    <span>

                                                         <?php if($type ==4): ?>

                                                             <i class="fa fa-envelope-o" aria-hidden="true"></i>

                                                         <?php else: ?>

                                                             <img src="<?php echo get_template_directory_uri().'/images/email_meetup.png' ?>" alt="email">

                                                         <?php endif; ?>


                                                        <a href="mailto:<?php if ( $mail !='' ) : echo balanceTags( $mail ); else: echo balanceTags( $header_top_mail ); endif; ?>">

                                                            <?php

                                                            if ( $mail !='' ) :
                                                                echo balanceTags( $mail );
                                                            else:
                                                                echo balanceTags( $header_top_mail );
                                                            endif;

                                                            ?>
                                                        </a>
                                                    </span>

                                                <?php endif; ?>

                                            <?php else: ?>

                                                <?php if ( $upcoming_event != '' ) : ?>

                                                    <a class="tz_upcoming_event" <?php echo ( $vc_link['target'] != '' ? 'target="' . esc_attr( $vc_link['target'] ) . '"' : '') .' '. ( $vc_link['url'] != '' ? 'href="' . esc_attr( $vc_link['url'] ) . '"' : '' ) . ' '. ( $vc_link['title'] != '' ? 'title="' . esc_attr( $vc_link['title'] ) . '"' : '' )  ; ?>>
                                                        <?php echo balanceTags( $upcoming_event ); ?>
                                                    </a>

                                                <?php endif; ?>

                                                <?php if ( $description_event !='' ) : ?>

                                                    <p class="tz_description_event"> <?php echo balanceTags( $description_event ); ?> </p>

                                                <?php endif; ?>

                                            <?php endif; ?>

                                        </div>
                                    </div>

                                <?php endif; ?>

                                <?php if ( $show_hide_contact_info == 1 || $show_hide_contact_info == 3 ) : ?>

                                    <div class="<?php echo esc_attr( $tz_class_column_social ); ?> col-sm-12 col-xs-12">
                                        <div class="tz-headerRight<?php echo esc_attr( $tz_position_top_header ); ?>">

                                            <?php

                                            if ( $type == 1 || $type == 4 ) :
                                                if($type == 4):
                                                    ?>

                                                    <div class="tz-headerRight__social">
                                                        <i class="fa fa-search menutype4__click"></i>
                                                        <div class="search-display__area">
                                                            <?php get_search_form(); ?>
                                                        </div>
                                                        <script>
                                                            $search_icon = jQuery(".menutype4__click");
                                                            $search_area = jQuery(".search-display__area");
                                                            $search_icon.click(function () {
                                                                $search_area.toggleClass('search_area_show show');
                                                            })
                                                        </script>
                                                    </div>

                                                    <?php
                                                endif;
                                                maniva_meetup_get_social_url();
                                            endif;

                                            if ( $type == 3 ) :

                                            ?>

                                                <ul class="tz_list_social_header_3">
                                                    <?php maniva_meetup_get_social_header_3_url(); ?>

                                                    <?php if ( $show_hide_search == 1 ) : ?>

                                                        <li class="tz_btn_search_header">
                                                            <span class="tz-search-header3">
                                                                <i class="fa fa-search"></i>
                                                            </span>
                                                        </li>

                                                    <?php endif;; ?>

                                                </ul>

                                            <?php endif; ?>

                                        </div>
                                    </div>

                                <?php endif; ?>

                            </div>
                        </div>
                    </div>

            <?php

                endif;
            endif;

            ?>

            <div class="tz-header-content" <?php echo ( $bk_color_menu != '' && $check_not_slider == 1 ? 'style="background-color:' . esc_attr( $bk_color_menu ) . '"' : '' ); ?>>

                <?php if($type == 5): ?>

                    <div class="container">
                        <div class="row">

                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <?php if ( $home_link == 1 ) : ?>

                                    <a class="<?php echo esc_attr( $maniva_pull_left_right_logo ); ?> tz_logo" href="<?php echo get_home_url(); ?>" title="<?php bloginfo('name'); ?>">

                                        <?php

                                        $logo_url                   =   wp_get_attachment_url($logo_image);
                                        $maniva_meetup_logo_image   =   ot_get_option('maniva-meetup' . '_logo');

                                        if($logo_type=='text'):

                                            ?>
                                            <p <?php echo( $logo_type == 'text' && $color_logo_text != '' ? 'style="color:' . esc_attr( $color_logo_text ) . '"' : '' ); ?>>
                                                <?php echo esc_html($logo_text); ?>
                                            </p>

                                            <?php

                                        else:

                                            if ( $logo_url != '' ) :
                                                ?>

                                                <img class="logo_lager" src="<?php echo esc_url($logo_url); ?> " alt="<?php echo get_bloginfo('title') ?>" />

                                            <?php else: ?>

                                                <img class="logo_lager" src="<?php echo esc_url($maniva_meetup_logo_image); ?> " alt="<?php echo get_bloginfo('title') ?>" />
                                                <?php

                                            endif;
                                        endif;

                                        ?>

                                    </a>

                                <?php else: ?>

                                    <a class="<?php echo esc_attr( $maniva_pull_left_right_logo ); ?> tz_logo" <?php echo ( $vc_link_home_page['target'] != '' ? 'target="' . esc_attr( $vc_link_home_page['target'] ) . '"' : '') .' '. ( $vc_link_home_page['url'] != '' ? 'href="' . esc_attr( $vc_link_home_page['url'] ) . '"' : '' ) . ' '. ( $vc_link_home_page['title'] != '' ? 'title="' . esc_attr( $vc_link_home_page['title'] ) . '"' : '' )  ; ?>>

                                        <?php

                                        $logo_url                   =   wp_get_attachment_url($logo_image);
                                        $maniva_meetup_logo_image   =   ot_get_option('maniva-meetup' . '_logo');

                                        if($logo_type=='text'):

                                            ?>
                                            <p <?php echo( $logo_type == 'text' && $color_logo_text != '' ? 'style="color:' . esc_attr( $color_logo_text ) . '"' : '' ); ?>>
                                                <?php echo esc_html($logo_text); ?>
                                            </p>

                                            <?php

                                        else:

                                            if ( $logo_url != '' ) :
                                                ?>

                                                <img class="logo_lager" src="<?php echo esc_url($logo_url); ?> " alt="<?php echo get_bloginfo('title') ?>" />

                                            <?php else: ?>

                                                <img class="logo_lager" src="<?php echo esc_url($maniva_meetup_logo_image); ?> " alt="<?php echo get_bloginfo('title') ?>" />
                                                <?php

                                            endif;
                                        endif;

                                        ?>

                                    </a>

                                <?php endif; ?>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="tzHeaderMenu_nav">

                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tz-navbar-collapse">
                                        <i class="fa fa-bars"></i>
                                    </button>

                                    <?php

                                    if ( $type == '1' ) :
                                        if ( $show_hide_search == 1 ) :
                                            ?>

                                            <button class="<?php echo esc_attr( $maniva_pull_left_right_menu ); ?> tz-search">
                                                <i class="fa fa-search"></i>
                                            </button>

                                            <?php

                                        endif;
                                    endif;

                                    ?>

                                    <nav id="nav-check" class="<?php echo esc_attr( $tz_speed_one_page ); ?>" data-speed-one-page="<?php echo esc_attr( $one_page_scrolling_speed ); ?>">

                                        <?php

                                        if ($select_menu != '') :

                                            wp_nav_menu(array(
                                                'menu' => $select_menu,
                                                'theme_location' => 'primary',
                                                'menu_class' => 'nav navbar-nav collapse navbar-collapse pull-left tz-nav'.$tz_nav_one_page,
                                                'menu_id' => 'tz-navbar-collapse',
                                                'container' => false
                                            ));

                                        else:

                                            ?>

                                            <ul class="main-menu">
                                                <li>
                                                    <a href="<?php echo get_admin_url().'/nav-menus.php'; ?>">
                                                        <?php esc_html_e('ADD TO MENU','maniva-meetup'); ?>
                                                    </a>
                                                </li>
                                            </ul>

                                        <?php endif; ?>

                                    </nav>

                                    <?php if ( class_exists('Woocommerce') && $show_hide_cart == 1 ) : ?>

                                        <div class="tz_shop_cart_icon">
                                            <div class="tz_shop_quick_cart_view">

                                                <?php
                                                /**
                                                 * maniva_meetup_get_cart_item hook.
                                                 *
                                                 * @hooked maniva_meetup_get_cart - 10
                                                 */
                                                do_action( 'maniva_meetup_get_cart_item' );

                                                the_widget( 'WC_Widget_Cart', '' );

                                                ?>

                                            </div>
                                        </div>

                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="mbn col-lg-3 col-md-3 col-sm-12" style="text-align: right">
                                <?php
                                if ( $show_hide_search == 1 ) :
                                ?>

                                <!-- Form search start -->
                                <div class="tz-form-search">
                                    <div class="container">
                                        <?php get_search_form(); ?>
                                    </div>
                                </div>
                                <!-- Form search end -->

                                <?php
                                endif;
                                ?>
                            </div>

                        </div>
                    </div>

                <?php else: ?>

                <div class="container">
                    <div class="tzHeaderContainer<?php echo esc_attr( $tz_custom_not_slider_color ); ?>">

                        <?php if ( $home_link == 1 ) : ?>

                            <a class="<?php echo esc_attr( $maniva_pull_left_right_logo ); ?> tz_logo" href="<?php echo get_home_url(); ?>" title="<?php bloginfo('name'); ?>">

                                <?php

                                $logo_url                   =   wp_get_attachment_url($logo_image);
                                $maniva_meetup_logo_image   =   ot_get_option('maniva-meetup' . '_logo');

                                if($logo_type=='text'):

                                ?>
                                    <p <?php echo( $logo_type == 'text' && $color_logo_text != '' ? 'style="color:' . esc_attr( $color_logo_text ) . '"' : '' ); ?>>
                                        <?php echo esc_html($logo_text); ?>
                                    </p>

                                <?php

                                else:

                                    if ( $logo_url != '' ) :
                                ?>

                                        <img class="logo_lager" src="<?php echo esc_url($logo_url); ?> " alt="<?php echo get_bloginfo('title') ?>" />

                                    <?php else: ?>

                                        <img class="logo_lager" src="<?php echo esc_url($maniva_meetup_logo_image); ?> " alt="<?php echo get_bloginfo('title') ?>" />
                                <?php

                                    endif;
                                endif;

                                ?>

                            </a>

                        <?php else: ?>

                            <a class="<?php echo esc_attr( $maniva_pull_left_right_logo ); ?> tz_logo" <?php echo ( $vc_link_home_page['target'] != '' ? 'target="' . esc_attr( $vc_link_home_page['target'] ) . '"' : '') .' '. ( $vc_link_home_page['url'] != '' ? 'href="' . esc_attr( $vc_link_home_page['url'] ) . '"' : '' ) . ' '. ( $vc_link_home_page['title'] != '' ? 'title="' . esc_attr( $vc_link_home_page['title'] ) . '"' : '' )  ; ?>>

                                <?php

                                $logo_url                   =   wp_get_attachment_url($logo_image);
                                $maniva_meetup_logo_image   =   ot_get_option('maniva-meetup' . '_logo');

                                if($logo_type=='text'):

                                ?>
                                    <p <?php echo( $logo_type == 'text' && $color_logo_text != '' ? 'style="color:' . esc_attr( $color_logo_text ) . '"' : '' ); ?>>
                                        <?php echo esc_html($logo_text); ?>
                                    </p>

                                    <?php

                                else:

                                    if ( $logo_url != '' ) :
                                ?>

                                        <img class="logo_lager" src="<?php echo esc_url($logo_url); ?> " alt="<?php echo get_bloginfo('title') ?>" />

                                    <?php else: ?>

                                        <img class="logo_lager" src="<?php echo esc_url($maniva_meetup_logo_image); ?> " alt="<?php echo get_bloginfo('title') ?>" />
                                <?php

                                    endif;
                                endif;

                                ?>

                            </a>

                        <?php endif; ?>

                        <div class="tzHeaderMenu_nav">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tz-navbar-collapse">
                                <i class="fa fa-bars"></i>
                            </button>

                            <?php if ( class_exists('Woocommerce') && $show_hide_cart == 1 ) : ?>

                                <div class="tz_shop_cart_icon <?php echo esc_attr( $maniva_pull_left_right_menu ); ?>">
                                    <div class="tz_shop_quick_cart_view">

                                        <?php
                                        /**
                                         * maniva_meetup_get_cart_item hook.
                                         *
                                         * @hooked maniva_meetup_get_cart - 10
                                         */
                                        do_action( 'maniva_meetup_get_cart_item' );

                                        the_widget( 'WC_Widget_Cart', '' );

                                        ?>

                                    </div>
                                </div>

                            <?php endif; ?>

                            <?php

                            if ( $type == '1' ) :
                                if ( $show_hide_search == 1 ) :
                            ?>

                                    <button class="<?php echo esc_attr( $maniva_pull_left_right_menu ); ?> tz-search">
                                        <i class="fa fa-search"></i>
                                    </button>

                            <?php

                                endif;
                            endif;

                            ?>

                            <nav id="nav-check" class="<?php echo esc_attr( $maniva_pull_left_right_menu ) . esc_attr( $tz_speed_one_page ); ?>" data-speed-one-page="<?php echo esc_attr( $one_page_scrolling_speed ); ?>">

                                <?php

                                if ($select_menu != '') :

                                    wp_nav_menu(array(
                                        'menu' => $select_menu,
                                        'theme_location' => 'primary',
                                        'menu_class' => 'nav navbar-nav collapse navbar-collapse pull-left tz-nav'.$tz_nav_one_page,
                                        'menu_id' => 'tz-navbar-collapse',
                                        'container' => false
                                    ));

                                else:

                                ?>

                                    <ul class="main-menu">
                                        <li>
                                            <a href="<?php echo get_admin_url().'/nav-menus.php'; ?>">
                                                <?php esc_html_e('ADD TO MENU','maniva-meetup'); ?>
                                            </a>
                                        </li>
                                    </ul>

                                <?php endif; ?>

                            </nav>
                        </div>

                        <?php

                        if ( $type == 1 || $type == 3 ) :
                            if ( $show_hide_search == 1 ) :
                                ?>

                                <!-- Form search start -->
                                <div class="tz-form-search">
                                    <div class="container">
                                        <?php get_search_form(); ?>
                                    </div>
                                </div>
                                <!-- Form search end -->

                                <?php
                            endif;
                        endif;
                        ?>

                    </div>
                </div>

                <?php endif; ?>
            </div>

        </div><!--end class container-->

    </header>

    <?php if ( $type_position == 'fixed' && $check_not_slider == 1 ) : ?>

        <div class="<?php echo esc_attr( $tz_header_space ); ?>"></div>

    <?php endif; ?>

    <?php if ( $type_position_mobile == 'absolute' && $check_not_slider != 1 ): ?>

        <div class="tz_mobile_fix_space"></div>

    <?php endif; ?>

<?php
    return ob_get_clean();
}
add_shortcode('tz-header','tzmaniva_header');
?>