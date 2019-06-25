<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package understrap
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
if ( ! is_active_sidebar( 'left-sidebar' ) ) {
	return;
}
?>

<div class="col-md-2 widget-area" id="left-sidebar" role="complementary">
<?php dynamic_sidebar( 'left-sidebar' ); ?>

</div><!-- #left-sidebar -->