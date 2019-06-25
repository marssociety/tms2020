<?php
/**
 * Search results partial template.
 *
 * @package understrap
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <div class="search-result mt-3 pb-3 border-bottom">

    <?php the_post_thumbnail('thumbnail', ['class' => 'pr-3 float-left', 'title' => 'Featured image']); ?>

        <header class="entry-header">

            <?php
            the_title(
                sprintf( '<div class="search-result-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
                '</a></div>'
            );
            ?>

            <?php if ( 'post' == get_post_type() ) : ?>

                <div class="entry-meta">

                    <?php understrap_posted_on(); ?>

                </div><!-- .entry-meta -->

            <?php endif; ?>
            

        </header><!-- .entry-header -->

        <div class="entry-summary">

            <?php the_excerpt(); ?>

        </div><!-- .entry-summary -->

        <footer class="entry-footer">

            <?php understrap_entry_footer(); ?>

        </footer><!-- .entry-footer -->

    </div>

</article><!-- #post-## -->