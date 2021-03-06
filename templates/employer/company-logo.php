<?php
/**
 * Dispply single company logo
 *
 * This template can be overridden by copying it to yourtheme/job-listings/employer/company-logo.php.
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
global $company;
?>
<div class="jlt-col-30">
	<div class="company-logo">
		<?php echo $company->logo(); ?>
	</div>
</div>
