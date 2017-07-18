<?php
/**
 * Display Single Job Map
 *
 * This template can be overridden by copying it to yourtheme/job-listings/job/job-location-map.php.
 *
 * HOWEVER, on occasion NooTheme will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @author      NooTheme
 * @version     0.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $job;

if ( ! $show_map ) {
	return;
}

wp_enqueue_script( 'google-map' );
wp_enqueue_script( 'google-map-custom' );

?>
<div class="job-map">

	<h3><?php _e( 'Job Map', 'job-listings' ); ?></h3>

	<div id="googleMap"
	     style="height: <?php echo jlt_google_map_height(); ?>px;"

	     data-map_style="<?php echo jlt_google_map_style(); ?>"

	     data-address="<?php echo esc_html( $full_address ); ?>"

	     data-icon="<?php echo jlt_google_map_icon_maker(); ?>"

	     data-lat="<?php echo esc_attr( $location[ 'lat' ] ); ?>"
	     data-lon="<?php echo esc_attr( $location[ 'long' ] ); ?>">

	</div>
</div>
