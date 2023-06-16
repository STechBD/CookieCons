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
 * Created: June 15, 2023
 * Updated: June 16, 2023
 */


namespace STechBD\CookieCons\Admin;

/**
 * The admin page class file.
 */
class Settings
{
	public function __construct()
	{
		echo '<div class="wrap">
				<h1>' . _e('Settings - CookieCons', 'stechbd-cookiecons') . '</h1>
				<div id="ajax-response"></div>
				<p>' . _e('Put your custom notice for cookie policy.', 'stechbd-cookiecons') . '</p>
				<form method="post" name="createuser" id="createuser" class="validate" novalidate="novalidate">
					<table class="form-table" role="presentation">
						<tbody>
						<tr class="form-field form-required">
							<td>
								<label for="notice">' . _e('Custom Notice', 'stechbd-cookiecons') . ' <span class="description">(' . _e('optional', 'stechbd-cookiecons') . ')</span></label>
							</td>
							<td>
								<textarea name="notice" type="text" id="notice" aria-required="true" maxlength="60">
									This website uses cookies to improve your experience. <a href="' . get_site_url() . '/privacy-policy/">Learn More</a>
								</textarea>
							</td>
						</tr>
						</tbody>
					</table>
					<p class="submit"><input type="submit" name="submitNotice" id="submitNotice" class="button button-primary" value="Save"></p>
				</form>
			</div>';
	}
}