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


namespace STechBD\CookieCons\Frontend;

/**
 * The frontend notice class file.
 */
class Notice
{
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
		add_action('wp_footer', [$this, 'add_notice']);
	}

	/**
	 * Add notice.
	 * @return void
	 */
	public function add_notice(): void
	{
		echo '<h1>Notice - CookieCons</h1>';
	}
}