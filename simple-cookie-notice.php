<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://gauravtiwari.org
 * @since             1.0.0
 * @package           Simple_Cookie_Notice
 *
 * @wordpress-plugin
 * Plugin Name:       Simple Cookie Notice
 * Plugin URI:        https://gauravtiwari.org/snippet/simple-cookie-notice/
 * Description:       Insert Simple Cookie Notice
 * Version:           1.2.0
 * Author:            Gaurav Tiwari
 * Author URI:        https://gauravtiwari.org
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       simple-cookie-notice
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}
define( 'SIMPLE_COOKIE_NOTICE_VERSION', '0.0.1' );

function simple_cookie_notice_notice(){?>

    <p id="cookie-notice"><span>By visiting our website, you accept use of cookies and agree to <a href="/privacy-policy/" target="_blank" style="color:#001947!important;">privacy policy</a>.</span><button onclick="acceptCookie();" class="md-cookie-button">Accept</button></p>
    <style>#cookie-notice{display:flex;align-items:center;left:50%;transform:translateX(-50%);font-family:inherit;font-size:15px;background:#ffffff; color:#001947; padding:10px 20px;position:fixed;bottom:10px;box-shadow:0 10px 20px rgba(0,0,0,.2);border-radius:3px;margin:0px;visibility:hidden;z-index:1000000;box-sizing:border-box}#cookie-notice button{color:#ffffff;background:#001947;border:0;padding:5px 10px;cursor:pointer;font-size:inherit;margin-left:10px;border-radius:3px}@media only screen and (max-width:800px){#cookie-notice{flex-direction:column;width:100%;bottom:0;left:0;border-radius:0;transform:none;text-align:center}#cookie-notice button{margin:10px 0px 0px 0px}}</style>
    <script>function acceptCookie(){document.cookie="cookieaccepted=1; expires=Sun, 1 Jan 2045 12:00:00 UTC; path=/",document.getElementById("cookie-notice").style.visibility="hidden"}document.cookie.indexOf("cookieaccepted")<0&&(document.getElementById("cookie-notice").style.visibility="visible");</script>
    
    <?php }
    
    add_action('wp_footer','simple_cookie_notice_notice');
