<?php
/**
 * Plugin Name: Silk
 * Description: A modern API for WordPress.
 * Author: Evan Mattson
 * Author URI: https://aaemnnost.tv/
 *
 * Version: 0.12.0
 *
 * GitHub Plugin URI: aaemnnosttv/silk-plugin
 * Requires PHP: 5.6
 *
 * License: MIT
 * License URI: https://opensource.org/licenses/MIT
 */

if (! function_exists('sorry_but_not_sorry_silk_requires_greater_php_notice')) {
    function sorry_but_not_sorry_silk_requires_greater_php_notice() {
        echo '
        <div id="message" class="error">
            <p>Sorry, but <strong>Silk requires PHP version 5.6 or higher</strong>.  Your version of PHP is <code>' . phpversion() . '</code>.</p>
            <p>In order to prevent your website from blowing up, the rest of the plugin has been prevented from loading.</p>
            <p>To make this message go away, please upgrade your version of PHP or deactivate the plugin.</p>
        </div>
        ';
    }
}

if (version_compare(phpversion(), '5.6', '<')) {
    add_action('admin_notices', 'sorry_but_not_sorry_silk_requires_greater_php_notice');
    return;
}

require_once(__DIR__ . '/dist/vendor/autoload.php');

/**
* If you made it this far, congratulations.  Prepare for awesome.
*/
do_action('silk/loaded');
