<?php
/**
 * Left sidebar check.
 *
 * @package understrap
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<?php if ( is_singular('page') ) : ?>
	<?php get_template_part( 'sidebar-templates/sidebar', 'left' ); ?>
<?php endif; ?>

<div class="col-md content-area" id="primary">