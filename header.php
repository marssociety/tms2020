<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

        <nav class="navbar navbar-light navbar-expand-lg border-bottom">
                 <a class="navbar-brand my-2" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><img class="tms-logo img-fluid" src="/wp-content/themes/tms2020/img/MarsSociety_Main_Logo.jpg" alt="The Mars Society" /></a>
                                    
                <?php if ( has_nav_menu( 'social' ) ) : ?>
                    <ul class="social-navigation navbar-nav my-4 ml-auto mr-2" aria-label="<?php esc_attr_e( 'Social Links Menu', 'tms2020' ); ?>">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'social',
                                'menu_class'     => 'social-links-menu',
                                'link_before'    => '<span class="screen-reader-text">',
                                'link_after'     => '</span>' . tms2020_get_icon_svg( 'link' ),
                                'depth'          => 1,
                            )
                        );
                        ?>
                    </ul><!-- .social-navigation -->
               <?php endif; ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>
            </nav>
            <nav class="navbar navbar-light navbar-expand-lg border-bottom">
                <!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav navbar-main nav-fill w-100',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
                ); ?>
		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
