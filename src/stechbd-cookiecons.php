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

define('STCC_PLUGIN', plugin_dir_path(__FILE__));
const STCC_INC = STCC_PLUGIN . 'inc/';
const STCC_ASSETS = STCC_PLUGIN . 'assets/';
const STCC_ASSETS_CSS = STCC_ASSETS . 'css/';
const STCC_ASSETS_JS = STCC_ASSETS . 'js/';
const STCC_ASSETS_IMG = STCC_ASSETS . 'img/';
const STCC_ASSETS_FONTS = STCC_ASSETS . 'fonts/';
const STCC_ASSETS_VENDOR = STCC_ASSETS . 'vendor/';
const STCC_ASSETS_VENDOR_CSS = STCC_ASSETS_VENDOR . 'css/';
const STCC_ASSETS_VENDOR_JS = STCC_ASSETS_VENDOR . 'js/';
const STCC_ASSETS_VENDOR_IMG = STCC_ASSETS_VENDOR . 'img/';
const STCC_ASSETS_VENDOR_FONTS = STCC_ASSETS_VENDOR . 'fonts/';

require_once STCC_INC . 'Main.php';

// Initialize the plugin.

STechBD\CookieCons\Main::init();