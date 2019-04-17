<?php
/*===============================
Shortocde tz-contact-info
===============================*/

function tz_meetup_contact($atts) {
    $type_contact = $about = $phone = $text_conference_address = $conference_address = $email = $address = $our_website = '';
    $text_email = $text_address = $text_our_website = $social_text_title = $social_text_sub_title = '';

    $text_event = $text_sub_event = $text_conference = $conference_add = $text_conference_add = $conference_add_des = '';
    $text_get_in_touch = $text_sub_get_in_touch = $text_our_office = $our_office_description = $text_conference_info = $email_add_information = $phone_information = '';

    $color_text_title_type_1 = $color_text_description_type_1 = $color_text_link = $color_border_bottom = '';

    $color_text_title = $color_text_sub_title = $color_text_description = $color_sub_text_description = $background_icon = $color_icon = '';

    extract(shortcode_atts(array(

        'type_contact'              =>  1,
        'color_text_title_type_1'   =>  '',
        'color_text_description_type_1' =>  '',
        'color_text_link'           =>  '',
        'color_border_bottom'       =>  '',
        'color_text_title'          =>  '',
        'color_text_sub_title'      =>  '',
        'color_text_description'    =>  '',
        'color_sub_text_description'=>  '',
        'background_icon'           =>  '',
        'color_icon'                =>  '',
        'about'                     =>  '',
        'phone'                     =>  '',
        'text_conference_address'   =>  'Conference Place Address',
        'conference_address'        =>  '',
        'text_email'                =>  'Send a Email',
        'email'                     =>  '',
        'text_address'              =>  'Visit Us At Our Office',
        'address'                   =>  '',
        'text_our_website'          =>  'Take a Look Our Website',
        'our_website'               =>  '',
        'text_event'                =>  'EVENT',
        'text_sub_event'            =>  'INFORMATION',
        'text_conference'           =>  'Conference',
        'conference_add'            =>  '',
        'text_conference_add'       =>  'Conference Place Address',
        'conference_add_des'        =>  '',
        'text_get_in_touch'         =>  'GET IN TOUCH',
        'text_sub_get_in_touch'     =>  'CONTACT US',
        'text_our_office'           =>  'Our Office',
        'our_office_description'    =>  '',
        'text_conference_info'      =>  'Contact Information',
        'email_add_information'     =>  '',
        'phone_information'         =>  '',

    ),$atts));
    ob_start();

    ?>
    <div class="tzContact">

        <?php if ( $type_contact == 1 ) : ?>

            <div class="text-center">
                <ul class="TzContactInfo">
                    <li class="tzContactAbout" <?php echo ( $color_text_description_type_1 != '' || $color_border_bottom != '' ? 'style="color:' . esc_attr( $color_text_description_type_1 ) . ';border-bottom-color:' . esc_attr( $color_border_bottom ) . '"' : '' ); ?>>
                        <?php echo balanceTags( $about );?>
                    </li>
                    <li class="tz_meetup_contact_conference" <?php echo ( $color_border_bottom != '' ? 'style="border-bottom-color:' . esc_attr( $color_border_bottom ) . '"' : '' ); ?>>
                        <h4 class="tzContactTime" <?php echo ( $color_text_title_type_1 != '' ? 'style="color:' . esc_attr( $color_text_title_type_1 ) . '"' : '' ); ?>>
                            <?php echo balanceTags( $text_conference_address ); ?>
                        </h4>
                        <p <?php echo ( $color_text_description_type_1 != '' ? 'style="color:' . esc_attr( $color_text_description_type_1 ) . '"' : '' ); ?>>
                            <?php echo balanceTags( $conference_address ); ?>
                        </p>
                    </li>
                    <li class="tzContactEmail" <?php echo ( $color_border_bottom != '' ? 'style="border-bottom-color:' . esc_attr( $color_border_bottom ) . '"' : '' ); ?>>
                        <h4 <?php echo ( $color_text_title_type_1 != '' ? 'style="color:' . esc_attr( $color_text_title_type_1 ) . '"' : '' ); ?>>
                            <?php echo balanceTags( $text_email ); ?>
                        </h4>
                        <p>
                            <a href="mailto:<?php echo esc_attr($email); ?>" <?php echo ( $color_text_link != '' ? 'style="color:' . esc_attr( $color_text_link ) . '"' : '' ); ?>>
                                <?php echo is_email( $email );?>
                            </a>
                        </p>
                    </li>
                    <li class="tzContactAddress" <?php echo ( $color_border_bottom != '' ? 'style="border-bottom-color:' . esc_attr( $color_border_bottom ) . '"' : '' ); ?>>
                        <h4 <?php echo ( $color_text_title_type_1 != '' ? 'style="color:' . esc_attr( $color_text_title_type_1 ) . '"' : '' ); ?>>
                            <?php echo balanceTags( $text_address ); ?>
                        </h4>
                        <p <?php echo ( $color_text_description_type_1 != '' ? 'style="color:' . esc_attr( $color_text_description_type_1 ) . '"' : '' ); ?>>
                            <?php echo balanceTags( $address );?>
                        </p>
                    </li>
                    <li class="tzContactOurWeb" <?php echo ( $color_border_bottom != '' ? 'style="border-bottom-color:' . esc_attr( $color_border_bottom ) . '"' : '' ); ?>>
                        <h4 <?php echo ( $color_text_title_type_1 != '' ? 'style="color:' . esc_attr( $color_text_title_type_1 ) . '"' : '' ); ?>>
                            <?php echo balanceTags( $text_our_website ); ?>
                        </h4>
                        <p <?php echo ( $color_text_description_type_1 != '' ? 'style="color:' . esc_attr( $color_text_description_type_1 ) . '"' : '' ); ?>>
                            <a target="_blank" href="<?php echo esc_url($our_website); ?>" <?php echo ( $color_text_link != '' ? 'style="color:' . esc_attr( $color_text_link ) . '"' : '' ); ?>>
                                <?php echo balanceTags($our_website);?>
                            </a>
                        </p>
                    </li>
                    <li class="tzContactPhone" <?php echo ( $color_text_description_type_1 != '' ? 'style="color:' . esc_attr( $color_text_description_type_1 ) . '"' : '' ); ?> <?php echo ( $color_border_bottom != '' ? 'style="border-bottom-color:' . esc_attr( $color_border_bottom ) . '"' : '' ); ?>>
                        <?php echo balanceTags($phone)?>
                    </li>
                </ul>
            </div>

        <?php else: ?>

            <div class="tzContact_2">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">

                        <div class="tzContact_2_content">
                            <h3 <?php echo ( $color_text_title != '' ? 'style="color:' . esc_attr( $color_text_title ) . '"' : '' ); ?>>
                                <?php echo balanceTags( $text_event ); ?>
                            </h3>
                            <h4 <?php echo ( $color_text_sub_title != '' ? 'style="color:' . esc_attr( $color_text_sub_title ) . '"' : '' ); ?>>
                                <?php echo balanceTags( $text_sub_event ); ?>
                            </h4>
                        </div>

                        <div class="tzContact_2_content tzContact_2_content_center">
                            <h5 <?php echo ( $color_text_description != '' ? 'style="color:' . esc_attr( $color_text_description ) . '"' : '' ); ?>>
                                <?php echo balanceTags( $text_conference ); ?>
                            </h5>
                            <p <?php echo ( $color_sub_text_description != '' ? 'style="color:' . esc_attr( $color_sub_text_description ) . '"' : '' ); ?>>
                                <?php echo balanceTags( $conference_add ); ?>
                            </p>
                        </div>

                        <div class="tzContact_2_content">
                            <h5 <?php echo ( $color_text_description != '' ? 'style="color:' . esc_attr( $color_text_description ) . '"' : '' ); ?>>
                                <?php echo balanceTags( $text_conference_add ); ?>
                            </h5>
                            <p <?php echo ( $color_sub_text_description != '' ? 'style="color:' . esc_attr( $color_sub_text_description ) . '"' : '' ); ?>>
                                <?php echo balanceTags( $conference_add_des ); ?>
                            </p>
                        </div>

                    </div>

                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">

                        <div class="tzContact_2_content">
                            <h3 <?php echo ( $color_text_title != '' ? 'style="color:' . esc_attr( $color_text_title ) . '"' : '' ); ?>>
                                <?php echo balanceTags( $text_get_in_touch ); ?>
                            </h3>
                            <h4 <?php echo ( $color_text_sub_title != '' ? 'style="color:' . esc_attr( $color_text_sub_title ) . '"' : '' ); ?>>
                                <?php echo balanceTags( $text_sub_get_in_touch ); ?>
                            </h4>
                        </div>

                        <div class="tzContact_2_content tzContact_2_content_center">
                            <h5 <?php echo ( $color_text_description != '' ? 'style="color:' . esc_attr( $color_text_description ) . '"' : '' ); ?>>
                                <?php echo balanceTags( $text_our_office ); ?>
                            </h5>
                            <p <?php echo ( $color_sub_text_description != '' ? 'style="color:' . esc_attr( $color_sub_text_description ) . '"' : '' ); ?>>
                                <?php echo balanceTags( $our_office_description ); ?>
                            </p>
                        </div>

                        <div class="tzContact_2_content">
                            <h5 <?php echo ( $color_text_description != '' ? 'style="color:' . esc_attr( $color_text_description ) . '"' : '' ); ?>>
                                <?php echo balanceTags( $text_conference_info ); ?>
                            </h5>
                            <p>
                                <span class="tz_fa_icon" <?php echo ( $background_icon != '' ? 'style="background:' . esc_attr( $background_icon ) . '"' : '' ); ?>>
                                    <i class="fa fa-envelope-o" <?php echo ( $color_icon != '' ? 'style="color:' . esc_attr( $color_icon ) . '"' : '' ); ?>></i>
                                </span>
                                <a href="mailto:<?php echo esc_attr( $email_add_information ); ?>" <?php echo ( $color_sub_text_description != '' ? 'style="color:' . esc_attr( $color_sub_text_description ) . '"' : '' ); ?>>
                                    <?php echo balanceTags( $email_add_information ); ?>
                                </a>
                            </p>
                            <p <?php echo ( $color_sub_text_description != '' ? 'style="color:' . esc_attr( $color_sub_text_description ) . '"' : '' ); ?>>
                                <span class="tz_fa_icon" <?php echo ( $background_icon != '' ? 'style="background:' . esc_attr( $background_icon ) . '"' : '' ); ?>>
                                    <i class="fa fa-phone" <?php echo ( $color_icon != '' ? 'style="color:' . esc_attr( $color_icon ) . '"' : '' ); ?>></i>
                                </span>
                                <?php echo balanceTags( $phone_information ); ?>
                            </p>
                        </div>

                    </div>
                </div>
            </div>

        <?php endif; ?>

    </div>

    <?php
    return ob_get_clean();
}
add_shortcode('tz-contact-meetup','tz_meetup_contact');
?>
