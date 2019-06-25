<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">

	<div class="container-full ml-4 mr-4" id="content" tabindex="-1">

		<div class="row m-0">

			<div class="col-md-9 content-area" id="primary">
			
			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'single' ); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

					<?php
					$tags = wp_get_post_terms( get_queried_object_id(), 'post_tag', ['fields' => 'ids'] );
					$args = [
						'post__not_in'        => array( get_queried_object_id() ),
						'posts_per_page'      => 3,
						'ignore_sticky_posts' => 1,
						'tax_query' => [
							[
								'taxonomy' => 'post_tag',
								'terms'    => $tags
							]
						]
					];
					$my_query = new wp_query( $args );
					if( $my_query->have_posts() ) { ?>
						<div class="related-posts"><h2>Related News & Announcements</h2>
							<div class="container-fixed mt-3">
								<div class="row">
						<?php
							$i=0;
							while( $my_query->have_posts() ):
								$my_query->the_post(); ?>

								<div class="col-4 col-md-4">
									<div class="relatedthumb"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail('related-post-thumbnail'); ?></a></div>
										<div class="relatedcontent">
										<h3 class="related-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
										<?php the_excerpt(); ?>
									</div>
								</div>
						<?php
							endwhile;
							wp_reset_postdata();
					}
					?> 
							</div><!--row-->
						</div><!--container-->
					</div><!--related-->

				<?php
						$i++;
						endwhile; // end of the loop. ?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php get_footer(); ?>
