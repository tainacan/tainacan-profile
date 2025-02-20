<?php
/*
Plugin Name: Tainacan Profile
Plugin URI: https://tainacan.org/
Description: A Tainacan plugin that adds a user Profile page to its menu with dedicated features for a customized digital archive management.
Author: Tainacan.org
Author URI: https://tainacan.org/
Version: 0.0.1
Requires at least: 6.5
Tested up to: 6.7
Requires PHP: 7.0
Stable tag: 0.0.1
Text Domain: tainacan-profile
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Requires Plugins: tainacan
*/

if (!defined('ABSPATH')) {
    exit; // Avoid direct access
}

add_action('plugins_loaded', function() {

    if ( class_exists('\Tainacan\Pages') ) {
        require_once(__DIR__ . '/class-tainacan-profile.php');
        $Tainacan_Profile_Page = \Tainacan\Profile::get_instance();
    } else {
        add_action('admin_notices', function() {
            echo '<div class="notice notice-error is-dismissible"><p>' . __('Tainacan Profile plugin requires Tainacan plugin to be installed and activated.', 'tainacan-profile') . '</p></div>';
        });
    }
    
});
