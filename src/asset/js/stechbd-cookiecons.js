/**
 * Plugin Name: CookieCons by STechBD.Net
 * Plugin URI: https://project.stechbd.net/cookiecons/
 * Description: CookieCons is a simple and lightweight cookie consent manager for WordPress.
 * Version: 1.0.0
 * Version Code: 1
 * Author: S Technologies Limited
 * Author URI: https://www.stechbd.net
 * Author Email: product@stechbd.net
 * Created: June 22, 2023
 * Updated: June 28, 2023
 */


jQuery(document).ready(function() {
    var cookieValue = getCookie('stechbd-cookiecons');
    
    if (cookieValue === 'accepted') {
        jQuery('.stechbd-cookiecons').hide();
    }
    
    jQuery('.stechbd-cookiecons .close').click(function() {
        setCookie('stechbd-cookiecons', 'accepted');
        jQuery('.stechbd-cookiecons').fadeOut();
    });
});

// Function to set a cookie
function setCookie(name, value) {
    var date = new Date();
    date.setTime(date.getTime() + (10 * 365 * 24 * 60 * 60 * 1000)); // Set expiration date to 10 years in the future
    var expires = 'expires=' + date.toUTCString();
    document.cookie = name + '=' + value + ';' + expires + ';path=/';
}

// Function to retrieve the value of a cookie
function getCookie(name) {
    var cookieName = name + '=';
    var cookieArray = document.cookie.split(';');
    for (var i = 0; i < cookieArray.length; i++) {
        var cookie = cookieArray[i];
        while (cookie.charAt(0) === ' ') {
            cookie = cookie.substring(1);
        }
        if (cookie.indexOf(cookieName) === 0) {
            return cookie.substring(cookieName.length, cookie.length);
        }
    }
}