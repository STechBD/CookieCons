<?php


/**
 * Project: CookieCons
 * Description: CookieCons is a simple and lightweight cookie consent manager for WordPress.
 * Version: 1.0.0
 * Version Code: 1
 * Since: 1.0.0
 * Author: Md. Ashraful Alam Shemul
 * Email: ceo@stechbd.net
 * Website: https://project.stechbd.net/cookiecons/
 * Developer: S Technologies Limited
 * Homepage: https://www.stechbd.net
 * Contact: product@stechbd.net
 * Created: June 21, 2023
 * Updated: July 5, 2023
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
 * The frontend notice view file.
 * @since 1.0.0
 */


?>
<div class="stechbd-cookiecons">
    <div class="notice">
        <?= get_option('stechbd_cookiecons_notice') ?>
    </div>
    <div class="close">
        Got it
    </div>
</div>