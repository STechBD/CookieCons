<?php


/**
 * Plugin Name: CookieCons by STechBD.Net
 * Plugin URI: https://project.stechbd.net/cookiecons/
 * Description: CookieCons is a simple and lightweight cookie consent manager for WordPress.
 * Version: 1.0.0
 * Version Code: 1
 * Author: S Technologies Limited
 * Author URI: https://www.stechbd.net
 * Author Email: product@stechbd.net
 * Created: June 8, 2023
 * Updated: June 8, 2023
 */

namespace STechBD\CookieCons\Admin;

/**
 * The admin panel class file.
 */
class Menu
{
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
		$this -> dispatch_actions();
		add_action('admin_menu', [$this, 'add_admin_menu']);
	}

	/**
	 * Add admin menu.
	 * @return void
	 */
	public function add_admin_menu(): void
	{
		add_menu_page(__('CookieCons Settings', 'stechbd-cookiecons'), __('CookieCons', 'stechbd-cookiecons'), 'manage_options', 'stechbd-cookiecons', [$this, 'admin_index'], 'dashicons-admin-generic');
	}

	/**
	 * Admin index page.
	 * @return void
	 */
	public function admin_index(): void
	{
		$settings = new Settings();
		$settings -> settings_page();
	}

	/**
	 * Dispatch actions.
	 * @return void
	 */
	public function dispatch_actions(): void
	{
		$settings = new Settings();
		add_action('admin_init', [$settings, 'form_handler']);
	}
}