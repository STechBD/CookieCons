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
 * Created: June 17, 2023
 * Updated: June 17, 2023
 */


namespace STechBD\CookieCons\Admin;

/**
 * The admin panel class file.
 */
class Init
{
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
		new Menu();
	}
}