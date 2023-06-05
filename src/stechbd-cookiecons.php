<?php


/**
 * Plugin Name: CookieCons by STechBD.Net
 * Plugin URI: https://project.stechbd.net/cookiecons/
 * Description: CookieCons is a simple and lightweight cookie consent manager for WordPress.
 * Version: 1.0.0
 * Version Code: 1
 * Author: S Technologies Limited
 * Author URI: https://www.stechbd.net
 * Requires at least: 5.0.0
 * Tested up to: 6.2.2
 * Requires PHP: 8.0
 * Created: June 3, 2023
 * Updated: June 3, 2023
 * Text Domain: stechbd-cookiecons
 * Domain Path: /languages
 * License: GPL v2 or later
 */


// Exit if accessed directly.
if(!defined('ABSPATH'))
{
	exit;
}

// Define the plugin paths.

if(!defined('STECHBD_COOKIECONS_PLUGIN'))
{
	define('STECHBD_COOKIECONS_PLUGIN', plugin_dir_path(__FILE__));
}

if(!defined('STECHBD_COOKIECONS_INC'))
{
	define('STECHBD_COOKIECONS_INC', STECHBD_COOKIECONS_PLUGIN . 'inc/');
}

if(!defined('STECHBD_COOKIECONS_ASSETS'))
{
	define('STECHBD_COOKIECONS_ASSETS', STECHBD_COOKIECONS_PLUGIN . 'assets/');
}

if(!defined('STECHBD_COOKIECONS_ASSETS_CSS'))
{
	define('STECHBD_COOKIECONS_ASSETS_CSS', STECHBD_COOKIECONS_ASSETS . 'css/');
}

if(!defined('STECHBD_COOKIECONS_ASSETS_JS'))
{
	define('STECHBD_COOKIECONS_ASSETS_JS', STECHBD_COOKIECONS_ASSETS . 'js/');
}

if(!defined('STECHBD_COOKIECONS_ASSETS_IMG'))
{
	define('STECHBD_COOKIECONS_ASSETS_IMG', STECHBD_COOKIECONS_ASSETS . 'img/');
}

if(!defined('STECHBD_COOKIECONS_ASSETS_FONTS'))
{
	define('STECHBD_COOKIECONS_ASSETS_FONTS', STECHBD_COOKIECONS_ASSETS . 'fonts/');
}

if(!defined('STECHBD_COOKIECONS_ASSETS_VENDOR'))
{
	define('STECHBD_COOKIECONS_ASSETS_VENDOR', STECHBD_COOKIECONS_ASSETS . 'vendor/');
}

if(!defined('STECHBD_COOKIECONS_ASSETS_VENDOR_CSS'))
{
	define('STECHBD_COOKIECONS_ASSETS_VENDOR_CSS', STECHBD_COOKIECONS_ASSETS_VENDOR . 'css/');
}

if(!defined('STECHBD_COOKIECONS_ASSETS_VENDOR_JS'))
{
	define('STECHBD_COOKIECONS_ASSETS_VENDOR_JS', STECHBD_COOKIECONS_ASSETS_VENDOR . 'js/');
}

if(!defined('STECHBD_COOKIECONS_ASSETS_VENDOR_IMG'))
{
	define('STECHBD_COOKIECONS_ASSETS_VENDOR_IMG', STECHBD_COOKIECONS_ASSETS_VENDOR . 'img/');
}

if(!defined('STECHBD_COOKIECONS_ASSETS_VENDOR_FONTS'))
{
	define('STECHBD_COOKIECONS_ASSETS_VENDOR_FONTS', STECHBD_COOKIECONS_ASSETS_VENDOR . 'fonts/');
}

// Include the main plugin class.

require_once STECHBD_COOKIECONS_INC . 'Main.php';

// Initialize the plugin.

STechBD\CookieCons\Main::init();