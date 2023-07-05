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


namespace STechBD\CookieCons\Frontend;

/**
 * The frontend notice class file.
 */
class Notice
{
	/**
	 * Class constructor.
	 * @since 1.0.0
	 */
	public function __construct()
	{
		add_action('wp_head', [$this, 'notice']);
	}

	/**
	 * Add notice.
	 * @return void
	 * @since 1.0.0
	 */
	public function notice(): void
	{
		require_once ST_COOKIECONS_FE . 'View/Notice.php';
	}
}