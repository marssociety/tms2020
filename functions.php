<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_tms2019() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_tms2019' );

// Register Custom Post Types
add_action('init', 'register_custom_posts_init');
function register_custom_posts_init() {
    // Register Projects
    $projects_labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'tms2019' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'tms2019' ),
		'menu_name'             => __( 'Projects', 'tms2019' ),
		'name_admin_bar'        => __( 'Projects', 'tms2019' ),
		'archives'              => __( 'Project Archives', 'tms2019' ),
		'attributes'            => __( 'Project Attributes', 'tms2019' ),
		'parent_item_colon'     => __( 'Parent Project:', 'tms2019' ),
		'all_items'             => __( 'All Projects', 'tms2019' ),
		'add_new_item'          => __( 'Add New Project', 'tms2019' ),
		'add_new'               => __( 'Add Project', 'tms2019' ),
		'new_item'              => __( 'New Project', 'tms2019' ),
		'edit_item'             => __( 'Edit Project', 'tms2019' ),
		'update_item'           => __( 'Update Project', 'tms2019' ),
		'view_item'             => __( 'View Project', 'tms2019' ),
		'view_items'            => __( 'View Projects', 'tms2019' ),
		'search_items'          => __( 'Search Project', 'tms2019' ),
		'not_found'             => __( 'Not found', 'tms2019' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'tms2019' ),
		'featured_image'        => __( 'Featured Image', 'tms2019' ),
		'set_featured_image'    => __( 'Set featured image', 'tms2019' ),
		'remove_featured_image' => __( 'Remove featured image', 'tms2019' ),
		'use_featured_image'    => __( 'Use as featured image', 'tms2019' ),
		'insert_into_item'      => __( 'Insert into Project', 'tms2019' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'tms2019' ),
		'items_list'            => __( 'Project list', 'tms2019' ),
		'items_list_navigation' => __( 'Project list navigation', 'tms2019' ),
        'filter_items_list'     => __( 'Filter Project list', 'tms2019' ),
        );
    $projects_args = array(
        'labels'             => $projects_labels,
        'public'             => true,
        'capability_type'    => 'post',
		'menu_position'       => 10,
        'has_archive'        => true,
        'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'project_website_url' )
    );
    register_post_type('projects', $projects_args);

    $videos_labels = array(
		'name'                  => _x( 'Videos', 'Post Type General Name', 'tms2019' ),
		'singular_name'         => _x( 'Video', 'Post Type Singular Name', 'tms2019' ),
		'menu_name'             => __( 'Videos', 'tms2019' ),
		'name_admin_bar'        => __( 'Videos', 'tms2019' ),
		'archives'              => __( 'Video Archives', 'tms2019' ),
		'attributes'            => __( 'Video Attributes', 'tms2019' ),
		'parent_item_colon'     => __( 'Parent Video:', 'tms2019' ),
		'all_items'             => __( 'All Videos', 'tms2019' ),
		'add_new_item'          => __( 'Add New Video', 'tms2019' ),
		'add_new'               => __( 'Add Video', 'tms2019' ),
		'new_item'              => __( 'New Video', 'tms2019' ),
		'edit_item'             => __( 'Edit Video', 'tms2019' ),
		'update_item'           => __( 'Update Video', 'tms2019' ),
		'view_item'             => __( 'View Video', 'tms2019' ),
		'view_items'            => __( 'View Videos', 'tms2019' ),
		'search_items'          => __( 'Search Video', 'tms2019' ),
		'not_found'             => __( 'No Videos found', 'tms2019' ),
		'not_found_in_trash'    => __( 'No Videos found in Trash', 'tms2019' ),
		'featured_image'        => __( 'Featured Image', 'tms2019' ),
		'set_featured_image'    => __( 'Set featured image', 'tms2019' ),
		'remove_featured_image' => __( 'Remove featured image', 'tms2019' ),
		'use_featured_image'    => __( 'Use as featured image', 'tms2019' ),
		'insert_into_item'      => __( 'Insert into Video', 'tms2019' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'tms2019' ),
		'items_list'            => __( 'Video list', 'tms2019' ),
		'items_list_navigation' => __( 'Video list navigation', 'tms2019' ),
        'filter_items_list'     => __( 'Filter Video list', 'tms2019' ),
		);

	$videos_rewrite = array(
		'slug'                => 'videos',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);

    $videos_args = array(
		'labels'             => $videos_labels,
        'public'             => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'taxonomies'          => array( 'year', 'type' ),
		'hierarchical'        => false,
		'capability_type'    => 'page',
        'has_archive'        => true,
		'exclude_from_search' => false,
		'query_var'           => 'videos',
		'publicly_queryable'  => true,
		'rewrite'             => $videos_rewrite,
        'supports'           => array( 'title', 'editor', 'thumbnail' )
    );
    register_post_type('videos', $videos_args);
}
add_action( 'pre_get_posts', 'add_my_post_types_to_query' );

/**
 * YouTube oEmbeds w/ query string parameters
 */
add_filter( 'embed_oembed_html', 'embed_youtube_parameters');
add_filter( 'video_embed_html', 'embed_youtube_parameters' ); // Jetpack
function embed_youtube_parameters( $code ) {
    if( strpos( $code, 'youtu.be' ) !== false || strpos( $code, 'youtube.com' ) !== false ) {
        $return = preg_replace( '@embed/([^"&]*)@', 'embed/$1&modestbranding=1&autohide=1&rel=0&showinfo=0', $code );
    }
	return '<div class="video">' . $return . '</div>';
}

function add_my_post_types_to_query( $query ) {
    if ( is_home() && $query->is_main_query() )
        $query->set( 'post_type', array( 'post', 'videos' ) );
    return $query;
}


function register_custom_menus() {
    register_nav_menus(
        array(
            'footer0' => __( 'Footer Main Menu', 'tms2019' ),
            'footer1' => __( 'Footer 1 Menu', 'tms2019' ),
            'footer2' => __( 'Footer 2 Menu', 'tms2019' ),
            'footer3' => __( 'Footer 3 Menu', 'tms2019' ),
            'social' => __( 'Social Links Menu', 'tms2019' ),
        )
    );
}

add_action( 'init', 'register_custom_menus' );
function custom_excerpt_length( $length ) {
	return 20;
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
require get_stylesheet_directory() . '/classes/class-tms2019-svg-icons.php';
require get_stylesheet_directory() . '/inc/icon-functions.php';

add_theme_support( 'post-thumbnails' );
add_image_size( 'front-post-thumbnail', 375, 280, true );
add_image_size( 'front-featured-post-thumbnail', 815, 455, true );
