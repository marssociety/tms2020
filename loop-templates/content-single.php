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

		<?php if (is_singular('post')) : ?>
			<?php the_title( '<h1 class="entry-title large-title">', '</h1>' ); ?>
		<?php else : ?>
			<?php the_title( '<h1 class="entry-title search-result-title">', '</h1>' ); ?>
		<?php endif; ?>

		<div class="container row entry-meta mt-2 ml-0 mr-0 p-0">
			<div class="col-3 col-md-3 pl-0">
				<?php understrap_posted_on(); ?>
			</div>
			<div class="col-6 col-md-6 post-tags p-0 text-center"><?php the_tags('<i class="fa fa-tag"></i> ', ', '); ?></div>
			<div class="col-3 col-md-3 post-category pr-0 mr-0 text-right">
				<?php $category = get_the_category(); echo '<a class="category" href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>'; ?>
			</div>
		</div><!-- .row -->
	</header><!-- .entry-header -->

	<div class="entry-content mt-3">
		<?php 	if ( has_post_thumbnail() ) {
					$imageurl = wp_get_attachment_image_src( get_post_thumbnail_id(), 'post-thumbnail' ); ?>
				<a href="<?php echo $imageurl[0]; ?>"><?php the_post_thumbnail('single-post-thumbnail', ['class' => 'pl-3 float-right', 'title' => 'Featured image']); ?></a>
		<?php	} else { 
					$imageurl = '/wp-content/themes/tms2020/img/TMS_Placeholder_Image.jpg'; ?>
				<a href="<?php echo $imageurl; ?>"><img src="<?php echo $imageurl; ?>" width="543" class="pl-3 float-right" title="Featured image" /></a>
		<?php	} 	?>
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

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
