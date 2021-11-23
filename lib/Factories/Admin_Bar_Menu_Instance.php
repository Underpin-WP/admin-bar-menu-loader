<?php
/**
 * Admin Bar Menu Abstraction
 *
 * @since   1.0.0
 * @package Underpin\Abstracts
 */


namespace Underpin\Admin_Bar_Menu\Factories;


use Underpin\Traits\Instance_Setter;
use Underpin\Admin_Bar_Menu\Abstracts\Admin_Bar_Menu;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class Admin_Bar_Menu
 * Handles creating custom admin bar menus
 *
 * @since   1.0.0
 * @package Underpin\Abstracts
 */
class Admin_Bar_Menu_Instance extends Admin_Bar_Menu {
	use Instance_Setter;

	/**
	 * Admin_Bar_Menu constructor.
	 *
	 * @since 1.0.0
	 *
	 * @param array $args Array of args to create this menu.
	 */
	public function __construct( $args = [] ) {
		$this->set_values( $args );

		if ( isset( $args['id'] ) ) {
			$item_id = $args['id'];
		} else {
			$item_id = '';
		}

		parent::__construct( $item_id, $args );
	}

}