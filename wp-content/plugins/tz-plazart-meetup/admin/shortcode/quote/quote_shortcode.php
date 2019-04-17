<?php
/* =========================================================
* shortcode for quote embed.
* ========================================================= */
// Quote.
function shortcode_quote($atts, $content = null) {
    ob_start();
?>

    <div class="single-quote">
        <p>
          <?php echo balanceTags($content); ?>
        </p>

    </div>

<?php
    $tzquote = ob_get_contents();
    ob_end_clean();
    return $tzquote;
}
add_shortcode('quote', 'shortcode_quote');

?>