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
 * Created: June 17, 2023
 * Updated: June 17, 2023
 */


// Exit if accessed directly.
if(!defined('ABSPATH'))
{
	exit;
}


?>
<div class="wrap">
	<h1><?php _e('Settings - CookieCons', 'stechbd-cookiecons') ?></h1>
	<div id="ajax-response"></div>
	<p><?php _e('Put your custom notice for cookie policy.', 'stechbd-cookiecons') ?></p>
	<form method="post" name="notice" id="notice" class="validate">
		<table class="form-table" role="presentation">
			<tbody>
			<tr class="form-field form-required">
				<th scope="row">
					<?php _e('Custom Notice', 'stechbd-cookiecons') ?> <span class="description">(<?php _e('optional', 'stechbd-cookiecons') ?>)</span>
				</th>
				<td>
					<label>
						<textarea placeholder="This website uses cookies to improve your experience. &lt;a href=&quot;<?php get_site_url() ?>/privacy-policy/&quot;&gt;Learn More&lt;/a&gt;" rows="4" cols="70" id="notice" name="notice">This website uses cookies to improve your experience. <a href="<?php get_site_url() ?>/privacy-policy/">Learn More</a></textarea>
					</label>
				</td>
			</tr>
			</tbody>
		</table>
		<?php wp_nonce_field('stechbd-cookiecons') ?>
		<?php submit_button(__('Save', 'stechbd-cookiecons'), 'submitNotice', 'button-primary') ?>
	</form>
</div>