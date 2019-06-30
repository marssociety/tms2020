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

			<div class="col-md-9 content-area" id="primary">
			
			<main class="site-main" id="main">

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title border-bottom">Featured Videos</h1>
                        
                        <div class="taxonomy-description mb-4">
                            Below are the videos we have featured on our main website over the last couple of years.  Our <a href="https://www.youtube.com/TheMarsSociety">Youtube Channel</a> contains many more, including our <a href="https://www.youtube.com/user/TheMarsSociety/playlists?view=50&sort=dd&shelf_id=2">Annual Conventions</a> and other interesting videos from our President, our officers, and our other members.
                        </div>

					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

    					<?php get_template_part( 'loop-templates/content', 'video' ); ?>

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