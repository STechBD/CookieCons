<?php


/**
 * Project: CookieCons
 * Description: CookieCons is a simple and lightweight cookie consent manager for WordPress.
 * Version: 1.0.0
 * Version Code: 1
 * Since: 1.0.0
 * Author: Md. Ashraful Alam Shemul
 * Email: ceo@stechbd.net
 * Website: https://project.stechbd.net/cookiecons/
 * Developer: S Technologies Limited
 * Homepage: https://www.stechbd.net
 * Contact: product@stechbd.net
 * Created: June 8, 2023
 * Updated: July 5, 2023
 */


namespace STechBD\CookieCons\Admin;

/**
 * The admin panel class file.
 * @since 1.0.0
 */
class Menu
{
	/**
	 * Class constructor.
	 * @return void
	 * @since 1.0.0
	 */
	public function __construct()
	{
		$this -> dispatch_actions();
		add_action('admin_menu', [$this, 'add_admin_menu']);
	}

	/**
	 * Add admin menu.
	 * @return void
	 * @since 1.0.0
	 */
	public function add_admin_menu(): void
	{
		add_menu_page(__('CookieCons Settings', 'stechbd-cookiecons'), __('CookieCons', 'stechbd-cookiecons'), 'manage_options', 'stechbd-cookiecons', [$this, 'admin_index'], 'dashicons-admin-generic');
	}

	/**
	 * Admin index page.
	 * @return void
	 * @since 1.0.0
	 */
	public function admin_index(): void
	{
		$settings = new Settings();
		$settings -> settings_page();
	}

	/**
	 * Dispatch actions.
	 * @return void
	 * @since 1.0.0
	 */
	public function dispatch_actions(): void
	{
		$settings = new Settings();
		add_action('admin_init', [$settings, 'form_handler']);
	}
}