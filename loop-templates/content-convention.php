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

		<?php the_title( '<h2 class="entry-title border-bottom">', '</h2>' ); ?>

	</header><!-- .entry-header -->

    <div class="container entry-meta mt-2 ml-0 mr-0 p-0">
        <div class="row m-0">
            <div class="col-12 pl-0 pr-0 pt-3 pb-3"><?php the_field('description'); ?></div>
        </div><!-- .row -->
    </div><!-- .container -->

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

        <div class="m-5">&nbsp;</div>

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->