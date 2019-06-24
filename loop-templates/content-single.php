<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="container row entry-meta m-0 p-0">
			<div class="col-3 col-md-3 pl-0">
				<?php tms2020_posted_on(); ?>
			</div>
			<div class="col-6 col-md-6 post-tags p-0 text-center"><?php the_tags('<i class="fa fa-tag"></i> ', ', '); ?></div>
			<div class="col-3 col-md-3 post-category pr-0 mr-0 text-right">
				<?php $category = get_the_category(); echo '<a class="category" href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>'; ?>
			</div>
		</div><!-- .row -->
	</header><!-- .entry-header -->

	<div class="entry-content mt-3">
		<?php the_post_thumbnail('single-post-thumbnail', ['class' => 'pl-3 rounded float-right', 'title' => 'Featured image']); ?>

		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php tms2020_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
