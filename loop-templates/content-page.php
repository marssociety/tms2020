<?php
/**
 * Partial template for content in page.php
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

	</header><!-- .entry-header -->
    <?php $imageurl = wp_get_attachment_image_src( $post->ID, 'post-thumbnail' ); ?>
    <a href="<?php echo $imageurl[0]; ?>"><?php the_post_thumbnail('single-post-thumbnail', ['class' => 'pl-3 float-right', 'title' => 'Featured image']); ?></a>
    
	<div class="entry-content">

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

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->