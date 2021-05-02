<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add this loader.
add_action( 'underpin/before_setup', function ( $class ) {
	if ( 'Underpin\Underpin' === $class ) {
		require_once( plugin_dir_path( __FILE__ ) . 'Admin_Bar_Menu.php' );
		require_once( plugin_dir_path( __FILE__ ) . 'Admin_Bar_Menu_Instance.php' );
		Underpin\underpin()->loaders()->add( 'admin_bar_menus', [ 'instance' => 'Underpin_Admin_Bar_Menu\Abstracts\Admin_Bar_Menu' ] );
	}
} );