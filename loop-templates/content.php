<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <div class="search-result mt-3 pb-3 border-bottom">

        <header class="entry-header">

            <?php
            the_title(
                sprintf( '<div class="border-0 entry-title search-result-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
                '</a></div>'
            );
            ?>

            <?php if ( 'post' == get_post_type() ) : ?>

                <?php the_post_thumbnail('thumbnail', ['class' => 'pr-3 float-left', 'title' => 'Featured image']); ?>

                <div class="entry-meta">
                    <?php understrap_posted_on(); ?>
                </div><!-- .entry-meta -->

            <?php endif; ?>

        </header><!-- .entry-header -->

        <div class="entry-content">

            <?php the_excerpt(); ?>

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

    </div>

</article><!-- #post-## -->