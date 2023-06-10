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

require_once __DIR__ . '/vendor/autoload.php';

// Define the plugin paths.

if(!defined('STCC_PLUGIN'))
{
	define('STCC_PLUGIN', plugin_dir_path(__FILE__));
}

if(!defined('STCC_INC'))
{
	define('STCC_INC', STCC_PLUGIN . 'inc/');
}

if(!defined('STCC_ASSETS'))
{
	define('STCC_ASSETS', STCC_PLUGIN . 'assets/');
}

if(!defined('STCC_ASSETS_CSS'))
{
	define('STCC_ASSETS_CSS', STCC_ASSETS . 'css/');
}

if(!defined('STCC_ASSETS_JS'))
{
	define('STCC_ASSETS_JS', STCC_ASSETS . 'js/');
}

if(!defined('STCC_ASSETS_IMG'))
{
	define('STCC_ASSETS_IMG', STCC_ASSETS . 'img/');
}

if(!defined('STCC_ASSETS_FONTS'))
{
	define('STCC_ASSETS_FONTS', STCC_ASSETS . 'fonts/');
}

if(!defined('STCC_ASSETS_VENDOR'))
{
	define('STCC_ASSETS_VENDOR', STCC_ASSETS . 'vendor/');
}

if(!defined('STCC_ASSETS_VENDOR_CSS'))
{
	define('STCC_ASSETS_VENDOR_CSS', STCC_ASSETS_VENDOR . 'css/');
}

if(!defined('STCC_ASSETS_VENDOR_JS'))
{
	define('STCC_ASSETS_VENDOR_JS', STCC_ASSETS_VENDOR . 'js/');
}

if(!defined('STCC_ASSETS_VENDOR_IMG'))
{
	define('STCC_ASSETS_VENDOR_IMG', STCC_ASSETS_VENDOR . 'img/');
}

if(!defined('STCC_ASSETS_VENDOR_FONTS'))
{
	define('STCC_ASSETS_VENDOR_FONTS', STCC_ASSETS_VENDOR . 'fonts/');
}

// Initialize the plugin.

STechBD\CookieCons\Main::init();