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
 * Updated: June 24, 2023
 */


namespace STechBD\CookieCons\Frontend;

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
		add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);

		new Notice();
	}

	/**
	 * Enqueue scripts.
	 */
	public function enqueue_scripts(): void
	{
		wp_enqueue_style('stechbd-cookiecons-style', ST_COOKIECONS_SITE_CSS . 'stechbd-cookiecons.css');
		wp_enqueue_script('stechbd-cookiecons-script', ST_COOKIECONS_SITE_JS . 'stechbd-cookiecons.js', array('jquery'), '1.0', true);
	}
}
