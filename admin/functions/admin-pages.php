<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

add_action( 'admin_menu', 'ibrw_add_admin_pages', 30 );
function ibrw_add_admin_pages() {
	add_menu_page( 'Inbound Review', 'Inbound Review', 'manage_options', 'ibrw-solutions', 'ibrw_solutions', '', 99 );
	add_submenu_page( 'ibrw-solutions', 'Solutions', 'Solutions', 'manage_options', 'ibrw-solutions', 'ibrw_solutions' );
	add_submenu_page( 'ibrw-solutions', 'Solutions Types', 'Solutions Types', 'manage_options', 'ibrw-types', 'ibrw_types' );
}


function ibrw_solutions() {
	echo 'ok';
}


function ibrw_types() {
	?>
<h1>Here should be the solution</h1>
<?php
}