<?php


/**
 * Plugin Name: CookieCons by STechBD.Net
 * Plugin URI: https://project.stechbd.net/cookiecons/
 * Description: CookieCons is a simple and lightweight cookie consent manager for WordPress.
 * Version: 1.0.0
 * Version Code: 1
 * Since
 * Author: S Technologies Limited
 * Author URI: https://www.stechbd.net
 * Requires at least: 5.0.0
 * Tested up to: 6.2.2
 * Requires PHP: 8.0
 * Created: June 3, 2023
 * Updated: July 5, 2023
 * Text Domain: stechbd-cookiecons
 * Domain Path: /languages
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */


/**
 * Exit if accessed directly.
 * @since 1.0.0
 */
if(!defined('ABSPATH'))
{
	exit;
}

/**
 * Plugin information.
 * @const string ST_COOKIECONS_PLUGIN
 * @const string ST_COOKIECONS_SITE
 * @const string ST_COOKIECONS_FILE
 * @const string ST_COOKIECONS_INC
 * @const string ST_COOKIECONS_ADMIN
 * @const string ST_COOKIECONS_FE
 * @const string ST_COOKIECONS_ASSETS
 * @const string ST_COOKIECONS_CSS
 * @const string ST_COOKIECONS_JS
 * @const string ST_COOKIECONS_IMG
 * @const string ST_COOKIECONS_VERSION
 * @const string ST_COOKIECONS_VERSION_CODE
 * @const string ST_COOKIECONS_SITE_PLUGIN
 * @const string ST_COOKIECONS_SITE_CSS
 * @const string ST_COOKIECONS_SITE_JS
 * @since 1.0.0
 */

define('ST_COOKIECONS_PLUGIN', plugin_dir_path(__FILE__));
define('ST_COOKIECONS_SITE', home_url() . '/');
const ST_COOKIECONS_FILE = __FILE__;
const ST_COOKIECONS_INC = ST_COOKIECONS_PLUGIN . 'inc/';
const ST_COOKIECONS_ADMIN = ST_COOKIECONS_INC . 'Admin/';
const ST_COOKIECONS_FE = ST_COOKIECONS_INC . 'Frontend/';
const ST_COOKIECONS_ASSET = ST_COOKIECONS_PLUGIN . 'asset/';
const ST_COOKIECONS_CSS = ST_COOKIECONS_ASSET . 'css/';
const ST_COOKIECONS_JS = ST_COOKIECONS_ASSET . 'js/';
const ST_COOKIECONS_IMG = ST_COOKIECONS_ASSET . 'img/';
const ST_COOKIECONS_VERSION = '1.0.0';
const ST_COOKIECONS_VERSION_CODE = '1';
const ST_COOKIECONS_SITE_PLUGIN = ST_COOKIECONS_SITE . 'wp-content/plugins/stechbd-cookiecons/';
const ST_COOKIECONS_SITE_CSS = ST_COOKIECONS_SITE_PLUGIN . 'asset/css/';
const ST_COOKIECONS_SITE_JS = ST_COOKIECONS_SITE_PLUGIN . 'asset/js/';

require_once ST_COOKIECONS_INC . 'inc.php';


/**
 * Initialize the plugin.
 * @return void
 * @since 1.0.0
 */
STechBD\CookieCons\Main::init();