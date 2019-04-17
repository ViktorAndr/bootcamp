<?php

$select_column = $contact_form_id = $book_event = '';

extract( shortcode_atts( array(

    'select_column'     =>  4,
    'book_event'        =>  'Book Event',
    'contact_form_id'   =>  '',

), $atts ) );

if ( $select_column ==  4 ) :
    $tz_class_column    =   ' tz_pricing_column_4';
elseif ( $select_column ==  3 ) :
    $tz_class_column    =   ' tz_pricing_column_3';
elseif ( $select_column ==  2 ) :
    $tz_class_column    =   ' tz_pricing_column_2';
else:
    $tz_class_column    =   '';
endif;

?>

<div class="tz_pricing<?php echo esc_attr( $tz_class_column ); ?>" data-columns="<?php echo esc_attr( $select_column ); ?>">
    <div class="row">
        <?php echo do_shortcode( $content ); ?>
    </div>
    <div class="tz_pricing_contact">
        <div class="tz_pricing_contact_overlay"></div>
        <div class="tz_pricing_contact_box">
            <span class="tz_close_pricing">
                <i class="fa fa-times" aria-hidden="true"></i>
            </span>
            <div class="container">
                <div class="tz_pricing_event_box">
                    <div class="book_event_heading">
                        <h3>
                            <?php echo balanceTags( $book_event ); ?>
                        </h3>
                    </div>
                    <?php echo do_shortcode( '[contact-form-7 id="'.esc_attr( $contact_form_id ).'"]' ); ?>
                </div>
            </div>
        </div>
    </div>
</div>

