<?php


/**
 * Project: CookieCons
 * Description: CookieCons is a simple and lightweight cookie consent manager for WordPress.
 * Version: 1.0.0
 * Version Code: 1
 * Author: Md. Ashraful Alam Shemul
 * Email: ceo@stechbd.net
 * Website: https://project.stechbd.net/cookiecons/
 * Developer: S Technologies Limited
 * Homepage: https://www.stechbd.net
 * Contact: product@stechbd.net
 * Created: June 17, 2023
 * Updated: June 30, 2023
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
	    new STechBD\CookieCons\Asset();
	    
		wp_enqueue_style('stechbd-cookiecons-style');
		wp_enqueue_script('stechbd-cookiecons-script');
	}
}
