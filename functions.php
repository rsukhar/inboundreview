<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

global $ibrw_version;

$ibrw_version = preg_match( '~Version\: ([^\n]+)~', file_get_contents( __DIR__ . '/style.css', NULL, NULL, 82, 150 ), $ibrw_matches ) ? $ibrw_matches[1] : FALSE;
unset( $ibrw_matches );


add_action( 'wp_enqueue_scripts', 'ibrw_enqueue_scripts' );
function ibrw_enqueue_scripts() {
	global $ibrw_version;
	wp_enqueue_style( 'integer-style', get_template_directory_uri() . '/style.css', array(), $ibrw_version );
}

require __DIR__ . '/functions/post-types.php';


add_action( 'admin_enqueue_scripts', 'ibrw_admin_enqueue_scripts' );
function ibrw_admin_enqueue_scripts() {
	global $ibrw_version;
	wp_enqueue_style( 'irwb-admin', get_stylesheet_directory_uri() . '/admin/style.css', array(), $ibrw_version );
}

if ( is_admin() ) {
	require __DIR__ . '/admin/functions/admin-pages.php';
}