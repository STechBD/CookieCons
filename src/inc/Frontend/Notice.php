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
 * Updated: June 21, 2023
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
		add_action('wp_footer', [$this, 'notice']);
	}

	/**
	 * Add notice.
	 * @return void
	 */
	public function notice(): void
	{
		require_once ST_COOKIECONS_FE . 'View/Notice.php';
	}
}