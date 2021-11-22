<?php

use Underpin\Abstracts\Underpin;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add this loader.
Underpin::attach( 'setup', new \Underpin\Factories\Observer( 'admin_bar_menus', [
	'update' => function ( Underpin $plugin ) {
		require_once( plugin_dir_path( __FILE__ ) . 'Admin_Bar_Menu.php' );
		require_once( plugin_dir_path( __FILE__ ) . 'Admin_Bar_Menu_Instance.php' );
		$plugin->loaders()->add( 'admin_bar_menus', [
			'instance' => 'Underpin_Admin_Bar_Menu\Abstracts\Admin_Bar_Menu',
			'default'  => 'Underpin_Admin_Bar_Menu\Factories\Admin_Bar_Menu_Instance',
		] );
	},
] ) );