<?php
/**
 * The right sidebar containing the main widget area.
 *
 * @package understrap
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}
?>

<div class="col-12 col-lg-3 col-sm-12 widget-area" id="right-sidebar" role="complementary">
<?php dynamic_sidebar( 'right-sidebar' ); ?>