<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<footer class="site-footer" id="colophon">

		<div class="container-fixed footer-container">

				<div class="site-info row m-0">

					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 footer-primary-div">
						<?php wp_nav_menu(
							array(
								'theme_location'  => 'footer0',
								'container_class' => 'div',
								'container_id'    => 'footer-primary',
								'menu_class'      => 'footer-menu footer-main border-right border-secondary',
								'fallback_cb'     => '',
								'menu_id'         => '7',
								'depth'           => 1,
								'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
							)
						); ?>
					</div>

					<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="footer-heading" data-toggle="collapse" data-target="#footer1-menu" aria-controls="footer1-menu" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
								<span>The Society
									<i class="footer-toggler fa fa-plus tms-red pl-2"></i>
								</span>
							</div>
								<?php wp_nav_menu(
									array(
										'theme_location'  => 'footer1',
										'container_class' => 'div collapse dont-collapse-sm',
										'container_id'    => 'footer1-menu',
										'menu_class'      => 'footer-menu',
										'fallback_cb'     => '',
										'menu_id'         => '8',
										'depth'           => 1,
										'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
									)
								); ?>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="footer-heading" data-toggle="collapse" data-target="#footer2-menu" aria-controls="footer2-menu" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
								<span>Projects
									<i class="footer-toggler fa fa-plus tms-red pl-2"></i>
								</span>
							</div>
								<?php wp_nav_menu(
									array(
										'theme_location'  => 'footer2',
										'container_class' => 'div collapse dont-collapse-sm',
										'container_id'    => 'footer2-menu',
										'menu_class'      => 'footer-menu',
										'fallback_cb'     => '',
										'menu_id'         => '9',
										'depth'           => 1,
										'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
									)
								); ?>
							</div>

							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="footer-heading" data-toggle="collapse" data-target="#footer3-menu" aria-controls="footer3-menu" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
								<span>Education &amp; Outreach
									<i class="footer-toggler fa fa-plus tms-red pl-2"></i>
								</span>
							</div>
								<?php wp_nav_menu(
									array(
										'theme_location'  => 'footer3',
										'container_class' => 'div collapse dont-collapse-sm',
										'container_id'    => 'footer3-menu',
										'menu_class'      => 'footer-menu',
										'fallback_cb'     => '',
										'menu_id'         => '10',
										'depth'           => 1,
										'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
									)
								); ?>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pr-4 text-right">
						<?php if ( has_nav_menu( 'social' ) ) : ?>
							<nav class="social-navigation social-navigation-footer" aria-label="<?php esc_attr_e( 'Social Links Menu', 'tms2020' ); ?>">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'social',
										'menu_class'     => 'social-links-menu footer-menu',
										'link_before'    => '<span class="screen-reader-text">',
										'link_after'     => '</span>' . tms2020_get_icon_svg( 'link' ),
										'depth'          => 1,
									)
								);
								?>
							</nav><!-- .social-navigation -->
						<?php endif; ?>

						<a href="https://www.marssociety.org"><img class="footer-branding" src="/wp-content/themes/tms2020/img/tmslogo_full_dark_397x96.png"></a>
					</div>

				</div><!-- .site-info -->

				<div class="row">
					<div class="col-md-12 col-sm-12 text-center footer-bottom-links">
						<a href="#">Privacy Policy</a> &nbsp;&nbsp;|&nbsp;&nbsp; 
						<a href="#">Anti-Discrimination Policy</a> &nbsp;&nbsp;|&nbsp;&nbsp;
						Copyright &copy; 1998-2019 The Mars Society. All Rights Reserved.
					</div>
				</div>
		</div><!-- container end -->

	</footer><!-- #colophon -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

