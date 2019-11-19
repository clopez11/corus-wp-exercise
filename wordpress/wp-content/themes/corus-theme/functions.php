<?php
/**
* Short Codes
*/

// Add CSS Stylesheets in head tag
add_action( 'wp_enqueue_scripts', 'style_sheets' );
function style_sheets() {    
    wp_register_style (
    	'Slick', 
    	get_template_directory_uri() . '/components/slick-slider/slick.css', 
    	'all'
    );
    wp_register_style (
    	'Slick Theme', 
    	get_template_directory_uri() . '/components/slick-slider/slick-theme.css', 
    	'all'
    );
    wp_register_style (
    	'Google Fonts', 
    	'https://fonts.googleapis.com/css?family=Lato|PT+Sans|Roboto', 
    	'all'
    );
    wp_register_style (
    	'Corus WordPress Exercise', 
    	get_template_directory_uri() . '/style.css?1', 
    	'all'
    );

    wp_enqueue_style( 'Slick');
    wp_enqueue_style( 'Slick Theme');
    wp_enqueue_style( 'Google Fonts');
    wp_enqueue_style( 'Corus WordPress Exercise');
}
// Add CSS Stylesheets in head tag end

// Add jQuery, Font Awesome & Slick scripts
add_action( 'wp_enqueue_scripts', 'add_my_script' );
function add_my_script() {
    wp_enqueue_script(
        'jquery-1.11.0.min.js',
        'https://code.jquery.com/jquery-1.11.0.min.js',
        array('jquery')
    );
    wp_enqueue_script(
        'jquery-migrate-1.2.1.min.js',
        'https://code.jquery.com/jquery-migrate-1.2.1.min.js',
        array('jquery')
    );
    wp_enqueue_script(
        'slick.min.js',
        get_template_directory_uri() . '/components/slick-slider/slick.min.js',
        array('jquery')
    );
    wp_enqueue_script(
        'gallery.js',
        get_template_directory_uri() . '/js/gallery.js',
        array('jquery')
    );
    wp_enqueue_script(
        '309623ba43.js',
        'https://kit.fontawesome.com/309623ba43.js',
        array('jquery')
    );
}
// Add jQuery, Font Awesome & Slick scripts end

// Custom Post Type - Gallery
add_action( 'init', 'create_posttype' );
function create_posttype() {
	register_post_type( 'gallery',
	array(
	  'labels' => array(
	   'name' => __( 'Gallery' ),
	   'singular_name' => __( 'Gallery' )
	  ),
	  'public' => true,
	  'has_archive' => false,
	  'rewrite' => array('slug' => 'gallery'),
	 )
	);
}

add_action('init', 'cw_post_type_gallery');
function cw_post_type_gallery() {
	$supports = array(
		'title', // post title
		'editor', // post content
		'author', // post author
		'thumbnail', // featured images
		'excerpt', // post excerpt
		'custom-fields', // custom fields
		'comments', // post comments
		'revisions', // post revisions
		'post-formats', // post formats
	);
	$labels = array(
		'name' => _x('gallery', 'plural'),
		'singular_name' => _x('gallery', 'singular'),
		'menu_name' => _x('gallery', 'admin menu'),
		'name_admin_bar' => _x('gallery', 'admin bar'),
		'add_new' => _x('Add New', 'add new'),
		'add_new_item' => __('Add New gallery'),
		'new_item' => __('New gallery'),
		'edit_item' => __('Edit gallery'),
		'view_item' => __('View gallery'),
		'all_items' => __('All gallery'),
		'search_items' => __('Search gallery'),
		'not_found' => __('No gallery found.'),
	);
    $taxonomies = array(
        'category', 
        'post_tag'
    );
	$args = array(
		'supports' => $supports,
		'labels' => $labels,
        'taxonomies' => $taxonomies,
		'public' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'gallery'),
		'has_archive' => true,
		'hierarchical' => false,
	);
	register_post_type('gallery', $args);
}

add_action('init', 'demo_add_default_boxes');
function demo_add_default_boxes() {
    register_taxonomy_for_object_type('category', 'gallery');
    register_taxonomy_for_object_type('post_tag', 'gallery');
}
// Custom Post Type end