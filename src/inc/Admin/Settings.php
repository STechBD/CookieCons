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
 * Created: June 15, 2023
 * Updated: June 16, 2023
 */


namespace STechBD\CookieCons\Admin;

/**
 * The admin page class file.
 */
class Settings
{
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
		require_once ST_COOKIECONS_ADMIN . 'View/Settings.php';
	}

	/**
	 * Form handler.
	 * @return void
	 */
	public function form_handler(): void
	{
		if(!isset($_POST['submit']))
		{
			return;
		}

		if(!wp_verify_nonce($_POST['_wpnonce'], 'st_cookiecons_settings'))
		{
			wp_die( '<h1>CookieCons by STechBD.Net</h1><p>Access denied for security reasons.</p>', 'Error' );
		}

		if(!current_user_can('manage_options'))
		{
			wp_die( '<h1>CookieCons by STechBD.Net</h1><p>Access denied for security reasons.</p>', 'Error' );
		}

		$settings = get_option('st_cookiecons_settings', []);

		var_dump($_POST);
	}
}