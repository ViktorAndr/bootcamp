<?php
/**
 * Day View Loop
 * This file sets up the structure for the day loop
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/loop.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

<?php

global $more, $post, $wp_query;
$more = false;
$current_timeslot = null;

?>

<div id="tribe-events-day" class="tribe-events-loop">

	<div class="row">

		<div class="tribe-events-day-time-slot">
			<div class="row">
				<?php while ( have_posts() ) : the_post(); ?>
				<?php do_action( 'tribe_events_inside_before_loop' ); ?>

				<?php if ( $current_timeslot != $post->timeslot ) :
				$current_timeslot = $post->timeslot; ?>
			</div>
		</div>
		<!-- .tribe-events-day-time-slot -->

		<div class="tribe-events-day-time-slot">
			<div class="row">
			<div class="tz_tribe_events_day_title"><h5><?php echo $current_timeslot; ?></h5></div>
			<?php endif; ?>

			<!-- Event  -->
			<div id="post-<?php the_ID() ?>" class="<?php tribe_events_event_classes() ?> col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<?php tribe_get_template_part( 'day/single', 'event' ) ?>
			</div>

			<?php do_action( 'tribe_events_inside_after_loop' ); ?>
			<?php endwhile; ?>
		</div>
		</div>
		<!-- .tribe-events-day-time-slot -->

	</div>
</div><!-- .tribe-events-loop -->
