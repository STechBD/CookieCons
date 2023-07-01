<?php


/**
 * Project: CookieCons
 * Description: CookieCons is a simple and lightweight cookie consent manager for WordPress.
 * Version: 1.0.0
 * Version Code: 1
 * Author: Md. Ashraful Alam Shemul
 * Email: ceo@stechbd.net
 * Website: https://project.stechbd.net/cookiecons/
 * Publisher: S Technologies Limited
 * Homepage: https://www.stechbd.net
 * Contact: product@stechbd.net
 * Created: June 3, 2023
 * Updated: June 29, 2023
 */


namespace STechBD\CookieCons;

/**
 * The main plugin class.
 */
class Main
{
    /**
     * Class constructor.
     * @return void
     * @since 1.0.0
     */
    private function __construct()
    {
        register_activation_hook(ST_COOKIECONS_FILE, [$this, 'activate']);
		register_deactivation_hook(ST_COOKIECONS_FILE, [$this, 'deactivate']);
        add_action('plugins_loaded', [$this, 'init_plugin']);
    }

	/**
	 * Plugin initiation hook.
	 * @return Main
	 * @since 1.0.0
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
     * @since 1.0.0
     */
    public function activate(): void
    {
        $installed = get_option('stechbd_cookiecons_installed');
		$notice = get_option('stechbd_cookiecons_notice');
		$noticeValue = 'This website uses cookies to improve your experience. <strong><a href="' . ST_COOKIECONS_SITE . 'privacy-policy/">Learn More</a></strong>';

        if(!$installed)
        {
            update_option('stechbd_cookiecons_installed', time());
        }

        update_option('stechbd_cookiecons_version', ST_COOKIECONS_VERSION);
        update_option('stechbd_cookiecons_version_code', ST_COOKIECONS_VERSION_CODE);

		if(!$notice)
		{
			add_option('stechbd_cookiecons_notice', $noticeValue);
		}
    }

	/**
	 * Plugin deactivation hook.
	 * @return void
	 * @since 1.0.0
	 */
	public function deactivate(): void
	{
		// To be added later.
	}

    /**
     * Initialize the plugin.
     * @return void
     * @since 1.0.0
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