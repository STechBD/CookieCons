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
 * Created: June 3, 2023
 * Updated: June 3, 2023
 */

/**
 * The main plugin class file.
 */


namespace STechBD\CookieCons;

class Main
{
    /**
     * Plugin version.
     * @var string
     */

    public string $version = '1.0.0';

    private function __construct()
    {
        // Code to run on plugin activation.
    }

    /**
     * Plugin initiation hook.
     * @return Main
     */

    public static function init(): Main
    {
	    $instance = null;

	    if(!$instance)
		{
			$instance = new self();
		}

		return $instance;
    }

    /**
     * Plugin activation hook.
     * @return bool
     */

    public static function activate(): bool
    {
        // Code to run on plugin activation.
    }
}