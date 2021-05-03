<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add this loader.
add_action( 'underpin/before_setup', function ( $instance ) {
	require_once( plugin_dir_path( __FILE__ ) . 'Admin_Bar_Menu.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'Admin_Bar_Menu_Instance.php' );
	$instance->loaders()->add( 'admin_bar_menus', [
		'instance' => 'Underpin_Admin_Bar_Menu\Abstracts\Admin_Bar_Menu',
		'default'  => 'Underpin_Admin_Bar_Menu\Factories\Admin_Bar_Menu_Instance',
	] );
} );