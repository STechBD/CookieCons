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
 * Updated: July 2, 2023
 */


?>
<div class="stechbd-cookiecons">
    <div class="notice">
        <?= get_option('stechbd_cookiecons_notice') ?>
    </div>
    <div class="close">
        <span class="dashicons dashicons-dismiss"></span>
    </div>
</div>