<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="archive-wrapper">

	<div class="container-full ml-4 mr-4" id="content" tabindex="-1">

		<div class="row m-0">

			<div class="col-12 col-lg-9 col-sm-12 content-area" id="primary">
			
			<main class="site-main" id="main">

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title border-bottom">Annual Conventions</h1>
                        
                        <div class="taxonomy-description mb-4">
                            Below is information on each of the conventions we've held annually since our Founding Convention in 1998.  Our <a href="https://www.youtube.com/user/TheMarsSociety/playlists?view=50&sort=dd&shelf_id=2">Youtube Channel</a> contains videos of many of the plenary and session talks for the past several years.
                        </div>

                        <img src="/wp-content/uploads/2018/04/2015-MO-MIT-debate.jpg" class="float-right" />

					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post();
                    ?>

                    <header class="entry-header">

                        <a href="<?php the_permalink( ); ?>"><?php the_title( '<h4 class="entry-title mb-4">', '</h4>' ); ?></a>

                    </header><!-- .entry-header -->

					<?php endwhile; ?>

                <?php endif; ?>

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div> <!-- .row -->

	</div><!-- #content -->

	</div><!-- #archive-wrapper -->

<?php get_footer(); ?>