<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

add_action( 'init', 'ibrw_register_post_types', 8 );
function ibrw_register_post_types() {

	add_rewrite_tag( '%irwb-type%', '([a-z\-]+)' );

	register_post_type( 'solution', array(
		'label' => 'Solutions',
		'public' => TRUE,
		'publicly_queryable' => TRUE,
		'exclude_from_search' => FALSE,
		'show_ui' => TRUE,
		'show_in_menu' => 'ibrw-solutions',
		'show_in_admin_bar' => TRUE,
		'show_in_nav_menus' => TRUE,
		'show_in_rest' => FALSE,
		// добавить в REST API. C WP 4.7
		'rest_base' => NULL,
		// $post_type. C WP 4.7
		'menu_position' => 99,
		'menu_icon' => NULL,
		'capability_type' => 'post',
		// TODO Maybe TRUE for URL ?
		'hierarchical' => FALSE,
		'supports' => array( 'title', 'thumbnail', 'excerpt', 'trackbacks', 'revisions', 'page-attributes' ),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies' => array(),
		'has_archive' => FALSE,
		'rewrite' => array(
			'slug' => '%irwb-type%',
		),
		'query_var' => TRUE,
	) );

}