<?php


/**
 * Plugin Name: CookieCons by STechBD.Net
 * Plugin URI: https://project.stechbd.net/cookiecons/
 * Description: CookieCons is a simple and lightweight cookie consent manager for WordPress.
 * Version: 1.0.0
 * Version Code: 1
 * Author: S Technologies Limited
 * Author URI: https://www.stechbd.net
 * Author Email: product@stechbd.net
 * Created: June 21, 2023
 * Updated: June 21, 2023
 */


?>
<div class="stechbd-cookiecons">
    <div class="notice">
        <?= get_option('stechbd_cookiecons_notice') ?>
    </div>
    <div class="close">
        <span class="dashicons dashicons-dismiss">x</span>
    </div>
</div>