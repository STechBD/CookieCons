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
 * Updated: June 15, 2023
 * Text Domain: stechbd-cookiecons
 * Domain Path: /languages
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */


// Exit if accessed directly.
if(!defined('ABSPATH'))
{
	exit;
}

// Define the plugin paths.

define('ST_COOKIECONS_PLUGIN', plugin_dir_path(__FILE__));
const ST_COOKIECONS_INC = ST_COOKIECONS_PLUGIN . 'inc/';
const ST_COOKIECONS_ADMIN = ST_COOKIECONS_INC . 'Admin/';
const ST_COOKIECONS_FE = ST_COOKIECONS_INC . 'Frontend/';
const ST_COOKIECONS_ASSETS = ST_COOKIECONS_PLUGIN . 'assets/';
const ST_COOKIECONS_ASSETS_CSS = ST_COOKIECONS_ASSETS . 'css/';
const ST_COOKIECONS_ASSETS_JS = ST_COOKIECONS_ASSETS . 'js/';
const ST_COOKIECONS_ASSETS_IMG = ST_COOKIECONS_ASSETS . 'img/';
const ST_COOKIECONS_ASSETS_FONTS = ST_COOKIECONS_ASSETS . 'fonts/';
const ST_COOKIECONS_ASSETS_VENDOR = ST_COOKIECONS_ASSETS . 'vendor/';
const ST_COOKIECONS_ASSETS_VENDOR_CSS = ST_COOKIECONS_ASSETS_VENDOR . 'css/';
const ST_COOKIECONS_ASSETS_VENDOR_JS = ST_COOKIECONS_ASSETS_VENDOR . 'js/';
const ST_COOKIECONS_ASSETS_VENDOR_IMG = ST_COOKIECONS_ASSETS_VENDOR . 'img/';
const ST_COOKIECONS_ASSETS_VENDOR_FONTS = ST_COOKIECONS_ASSETS_VENDOR . 'fonts/';

require_once ST_COOKIECONS_INC . 'inc.php';

// Initialize the plugin.

STechBD\CookieCons\Main::init();