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
    public const STCC_VERSION = '1.0.0';

    /**
     * Class constructor.
     */
    private function __construct()
    {
        register_activation_hook(STCC_PLUGIN, [$this, 'activate']);
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

        update_option('stechbd_cookiecons_version', self::STCC_VERSION);
    }

    /**
     * Initialize the plugin.
     * @return void
     */
    public function init_plugin(): void
    {
        /*new Assets();
        new Admin();
        new Frontend();*/
    }
}