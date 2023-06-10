<?php


/**
 * Plugin Name: CookieCons by STechBD.Net
 * Plugin URI: https://project.stechbd.net/cookiecons/
 * Description: Socialite is a powerful WordPress plugin that allows users to integrate social media login.
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
	private function __construct()
	{
		add_action('admin_menu', [$this, 'add_admin_menu']);
		add_action('admin_init', [$this, 'register_settings']);
	}

	/**
	 * Plugin initiation hook.
	 * @return Admin
	 */
	public static function init(): Admin
	{
	    $instance = null;

	    if(!$instance)
		{
			$instance = new self();
		}

		return $instance;
	}

	/**
	 * Add admin menu.
	 * @return void
	 */
	public function add_admin_menu(): void
	{
		add_menu_page(
			'CookieCons',
			'CookieCons',
			'manage_options',
			'stechbd-cookiecons',
			[$this, 'admin_index'],
			'dashicons-admin-generic',
			110
		);
	}

	/**
	 * Admin index page.
	 * @return void
	 */
	public function admin_index(): void
	{
		require_once STCC_INC . 'admin/admin-index.php';
	}

	/**
	 * Register settings.
	 * @return void
	 */
	public function register_settings(): void
	{
		register_setting('stechbd_cookiecons_settings', 'stechbd_cookiecons_settings');
	}
}