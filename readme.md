# Underpin Admin Bar Menu Loader

Loader That assists with adding admin bars menus to a WordPress website.

## Installation

### Using Composer

`composer require underpin/loaders--admin-bar-menus`

### Manually

This plugin uses a built-in autoloader, so as long as it is required _before_
Underpin, it should work as-expected.

`require_once(__DIR__ . '/underpin-admin-bar-menus/underpin-admin-bar-menus.php');`

## Setup

1. Install Underpin. See [Underpin Docs](https://www.github.com/underpin-wp/underpin)
1. Register new admin menus as-needed.

## Admin Menu Example

A very basic example could look something like this.

```php
\Underpin\underpin()->admin_bar_menus()->add( 'menu_bar_key', [
	'children'    => [],
	'capability'  => 'administrator',
	'id'          => 'menu_bar_id', // Required
	'args'        => [ /* See WP_Admin_Bar::add_menu */ ],
	'position'    => 200,
	'name'        => 'Menu Bar',
	'description' => 'A menu bar example',
] );
```

Alternatively, you can extend `Admin_Bar_Menu` and reference the extended class directly, like so:

```php
underpin()->admin_bar_menus()->add('menu_bar-key','Namespace\To\Class');
```
