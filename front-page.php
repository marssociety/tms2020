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

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper" id="single-wrapper">
<main class="site-main" id="main">
	<div class="front-page-container news-highlights-section container-fixed ml-5 mr-5">
		<div class="row">

			<h2 class="front-page-header mb-2">News &amp; Announcements</h2>

			<div class="container-fixed">
				<div class="row">

				<?php
						$queryObject = new  Wp_Query( array(
							'showposts' => 6,
							'post_type' => array('post'),
							'category_name' => 'news',
							'orderby' => 1,
							));
							
				if ( $queryObject->have_posts() ) :
					$i = 0;
					while ( $queryObject->have_posts() ) :
						$queryObject->the_post();
						if ( $i == 0 ) : ?>
					<div class="col-md-9 front-page-featured-post">
						<div class="card h-100">
							<div class="row no-gutters h-100">
								<div class="col-auto">
									<?php the_post_thumbnail('front-featured-post-thumbnail',array( 'class' => 'h-100 img-fluid border-0 m-0 p-0' ) ); ?>
								</div>
								<div class="col">
									<div class="card-block px-2 post-item post-info front-page-post-info">
										<div class="card-text front-page-post-date p-2"><?php the_time('F jS, Y'); ?></div>
										<h2 class="card-title post-title front-page-featured-post-title p-2">
										<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
											<?php the_title(); ?>
										</a>
										</h2>
										<div class="card-text post-content front-page-post-excerpt p-2">
											<?php the_excerpt(); ?>
										</div>
									</div>
								</div>
							</div>	
						</div>
					</div><!-- front-page-featured-post -->
				<?php else: ?>
					<div class="col-md-3 front-page-post">
						<div class="card h-100">
							<div class="card-body post-item p-0">
								<div class="front-page-post-image card-img-top p-0"><?php echo the_post_thumbnail('front-post-thumbnail',array( 'class' => 'w-100 img-fluid' )); ?></div>
								<div class="post-info front-page-post-info p-3">
									<div class="front-page-post-date"><?php the_time('F jS, Y'); ?></div>
									<h2 class="post-title front-page-post-title">
									<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
											<?php the_title(); ?>
										</a>
									</h2>
									<div class="post-content front-page-post-excerpt">
											<?php the_excerpt(); ?>
									</div>
								</div>
							</div>
						</div> <!-- card -->
					</div><!-- front-page-post -->
			<?php endif; ?>

			<?php if ($i == 1) : ?>
				</div>
				<div class="row front-page-posts-second-row">
			<?php endif; ?>

			<?php $i++; ?>
			<?php endwhile; 
			endif; ?>
				</div>
			</div><!-- card columns -->	
		</div><!-- row -->

		<div class="row d-flex">
			<div class="mt-3 ml-auto front-page-more-link"><a href="/category/news-announcements/">See All ></a></div>
		</div><!-- row -->
	</div> <!-- container -->

	<div class="front-page-container video-highlights-section container-fixed ml-0 mr-0 mt-3 mb-0 pt-4">
		<div class="row">
			<div class="col mb-2">
				<h2 class="front-page-header">Video Highlights</h2>
			</div>
		</div>
		<div class="row">
	<?php
			$video_args = array(
				'post_type' => 'videos',
				'post_status' => 'publish',
				'posts_per_page' => '2'
			);
			$videos_loop = new WP_Query( $video_args );
			$i=1;
			if ( $videos_loop->have_posts() ) :
				while ( $videos_loop->have_posts() ) : 
					$videos_loop->the_post(); 
					if ( $i == 1 ):
		?>
			<div class="col-md-9 video-card">
				<div class="card border-0 p-0 h-100" id="featured-video">
					<div class="row no-gutters">
						<div class="col-md-9">
							<?php the_content(); ?>
						</div>
						<div class="col-md-3 video-meta p-3">
							<div class="front-page-post-date"><?php the_time('F jS, Y'); ?></div>
							<h2 class="post-title video-headline"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_field('headline'); ?></a></h2>
							<div class="video-description"><?php the_field('description'); ?> <a class="tms2020-read-more-link" href="<?php the_permalink() ?>" title="<?php the_title_attribute();?>">READ MORE ></a></div>
						</div>
					</div>
				</div>
			</div>
		<?php
					else:
		?>
			<div class="col-md-3 video-card">
				<div class="card border-0 p-0 h-100">					
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php the_content(); ?>
					</a>
					<div class="video-meta p-3">
							<div class="front-page-post-date"><?php the_time('F jS, Y'); ?></div>
							<h2 class="post-title video-headline"><a id="second-video-headline" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_field('headline'); ?></a></h2>
							<div class="video-description"><?php the_field('description'); ?> <a class="tms2020-read-more-link" href="<?php the_permalink() ?>" title="<?php the_title_attribute();?>">READ MORE ></a></div>
					</div>
				</div>
			</div>
		<?php
					endif;
		?>
		<?php
				$i++;
				endwhile;
				wp_reset_postdata();
			endif; ?>
		</div><!-- row -->

		<div class="row d-flex">
			<div class="mt-2 mb-3 ml-auto front-page-more-link"><a href="/videos/">See All ></a></div>
		</div><!-- row -->

	</div> <!-- container -->

	<div class="front-page-container container-fixed newsletter-signup-section ml-0 mr-0 mt-0 mb-3 p-4">
		<div class="row">
			<div class="col m-3 newsletter-title">
				<h2 class="text-center"><span class="rwd-line">Be part of the worldwide effort</span> <span class="rwd-line">to send humans to Mars.</span></h2>
				<div>
					<a class="btn btn-newsletter" type="button" href="http://eepurl.com/bDvsxD">Subscribe to our Newsletter</a>
				</div>
			</div><!-- col -->
		</div><!-- row -->
	</div> <!-- container -->

	<div class="front-page-container container-fixed project-container">
		<div class="row">
			<div class="col">
				<h2 class="front-page-header">Projects</h2>
			</div><!-- col -->
		</div><!-- row -->
		<div class="row m-0">
	<?php
		$args = array(
			'post_type' => 'projects',
			'post_status' => 'publish',
			'order' => 'ASC',
			'posts_per_page' => '6'
		);
		$projects_loop = new WP_Query( $args );
		if ( $projects_loop->have_posts() ) :
			$i = 0;
			while ( $projects_loop->have_posts() ) : $projects_loop->the_post();
			$i++;	
			// Set variables
			$title = get_the_title();
			$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
			$project_image = $featured_image[0];
			// Output
			?>
			<div class="col-md-6 col-sm-12 p-0">
				<div class="card project">
					<div class="container-fixed w-100 m-0 p-0">
						<div class="row m-0">
							<div class="col-5 col-md-6 col-xs-2 p-0">
								<a href="<?php the_field('project_website_url'); ?>"><img src="<?php echo $project_image;  ?>" class="project-detail w-100 img-fluid border-0 m-0 p-0"></a>
							</div>
							<div class="col-5 col-md-5 col-xs-5 text-center mt-auto mb-auto project-title">
								<a href="<?php the_field('project_website_url'); ?>"><h2><?php echo $title; ?></h2></a>
							</div>
							<div class="col-2 col-md-1 col-xs-2 text-center mt-auto mb-auto">
								<a href="<?php the_field('project_website_url'); ?>"><i class="fa fa-chevron-right fa-2x tms-red"></i></a>
							</div>
						</div>
					</div>
				</div>		
			</div>
		<?php if ($i % 2 == 0) : ?>
		</div>
		<div class="row m-0 second-project-row">	
		<?php endif;
			endwhile;
			wp_reset_postdata();
		endif; ?>
		</div><!-- row -->
	</div><!-- front-page-container -->

</main><!-- #main -->
</div><!-- #single-wrapper -->

<?php get_footer(); ?>
