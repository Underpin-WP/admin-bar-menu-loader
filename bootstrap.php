<?php

use Underpin\Abstracts\Underpin;
use Underpin\Factories\Observers\Loader;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add this loader.
Underpin::attach( 'setup', new Loader('admin_bar_menus', [
	'abstraction_class' => 'Underpin\Admin_Bar_Menu\Abstracts\Admin_Bar_Menu',
	'default_factory'   => 'Underpin\Admin_Bar_Menu\Factories\Admin_Bar_Menu_Instance',
] ) );