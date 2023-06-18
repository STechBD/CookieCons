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
 * Updated: June 16, 2023
 */

/**
 * The main plugin class file.
 */


namespace STechBD\CookieCons;

// Include all files

require_once ST_COOKIECONS_INC . 'Admin/Menu.php';

class Main
{
    /**
     * Plugin version.
     * @const string
     * @const string
     */
    public const ST_COOKIECONS_VERSION = '1.0.0';
    public const ST_COOKIECONS_VERSION_CODE = '1';

    /**
     * Class constructor.
     */
    private function __construct()
    {
        register_activation_hook(ST_COOKIECONS_PLUGIN, [$this, 'activate']);
        add_action('plugins_loaded', [$this, 'init_plugin']);
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
     * @return void
     */
    public static function activate(): void
    {
        $installed = get_option('stechbd_cookiecons_installed');

        if(!$installed)
        {
            update_option('stechbd_cookiecons_installed', time());
        }

        update_option('stechbd_cookiecons_version', self::ST_COOKIECONS_VERSION);
        update_option('stechbd_cookiecons_version_code', self::ST_COOKIECONS_VERSION_CODE);

	    $notice = get_option('stechbd_cookiecons_notice');

	    if(!$notice)
	    {
		    add_option('stechbd_cookiecons_notice', $_POST['notice']);
	    }
    }

    /**
     * Initialize the plugin.
     * @return void
     */
    public function init_plugin(): void
    {
		if(is_admin())
		{
			new Admin\Init();
		}
		else
		{
			new Frontend\Init();
		}
    }
}