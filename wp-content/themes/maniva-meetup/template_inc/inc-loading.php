<?php
$loading = ot_get_option('maniva-meetup_loading','off');
if ( $loading == 'on'):
    $loading_effect = ot_get_option('maniva-meetup_typeloading','2');
    ?>
    <div id="tzloadding">
        <?php if($loading_effect == 0): ?>
        <div class="progress">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <?php elseif($loading_effect == 1): ?>
            <div class="loader">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        <?php elseif($loading_effect == 2): ?>
            <div class="loader">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        <?php elseif($loading_effect == 3): ?>
            <div class="loader">
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
            </div>
        <?php elseif($loading_effect == 4): ?>
            <div class="loading">
                <div class="square square-c state1c"></div>
                <div class="square square-c state2c"></div>
            </div>
        <?php endif; ?>

    </div>
<?php endif; ?>