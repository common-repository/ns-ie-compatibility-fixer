<?php
/*
Plugin Name: NS Ie Compatibility Fixer
Plugin URI: https://wordpress.org/plugins/ns-ie-compatibility-fixer/
Description: This plugin force ie to see compatibility in lastest version
Version: 2.1.5
Author: NsThemes
Author URI: http://www.nsthemes.com
Text Domain: ns-ie-compatibility-fixer
Domain Path: /languages
License: GNU General Public License v2.0
License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** 
 * @author        PluginEye
 * @copyright     Copyright (c) 2019, PluginEye.
 * @version         1.0.0
 * @license       https://www.gnu.org/licenses/gpl-3.0.html GNU General Public License Version 3
 * PLUGINEYE SDK
*/

require_once('plugineye/plugineye-class.php');
$plugineye = array(
    'main_directory_name'       => 'ns-ie-compatibility-fixer',
    'main_file_name'            => 'ns-ie-compatibility-fixer.php',
    'redirect_after_confirm'    => 'admin.php?page=ns-ie-compatibility-fixer%2Fns-admin-options%2Fns_admin_option_dashboard.php',
    'plugin_id'                 => '250',
    'plugin_token'              => 'NWNmZmM3ZTNiYzU4MjljYWEwNWFlYWFhZjQ4NmJkM2Y2OTdhYWZmYTJlNzRlNmExODA1ZmYxMTMzNjY1MjZlYzBhZTAzOGE1YWNhNGI=',
    'plugin_dir_url'            => plugin_dir_url(__FILE__),
    'plugin_dir_path'           => plugin_dir_path(__FILE__)
);

$plugineyeobj250 = new pluginEye($plugineye);
$plugineyeobj250->pluginEyeStart();      

/* *** include text domain *** */
function ns_ie_compatibility_load_plugin_textdomain() {
    load_plugin_textdomain( 'ns-ie-compatibility', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'ns_ie_compatibility_load_plugin_textdomain' );

require_once( plugin_dir_path( __FILE__ ).'ns-admin-options/ns-admin-options-setup.php');

function ns_ie_compatibility_fixer(){

    $ns_ie_compatibility_fixer_option_value=get_option('ns_ie_compatibility_fixer_option');
    if(!$ns_ie_compatibility_fixer_option_value)
    	$ns_ie_compatibility_fixer_option_value='IE=edge';
	
	echo '<meta http-equiv="X-UA-Compatible" content="'.$ns_ie_compatibility_fixer_option_value.'">';
}
add_action('wp_head', 'ns_ie_compatibility_fixer');

/* *** add link premium *** */
add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'nsiecompatibilityfixer_add_action_links' );

function nsiecompatibilityfixer_add_action_links ( $links ) {	
 $mylinks = array('<a id="nsiefpremiumlinkpremium" href="https://www.nsthemes.com/?ref-ns=2&campaign=ICF-linkpremium" target="_blank">'.__( 'Join NS Club', 'ns-ie-compatibility-fixer' ).'</a>');
return array_merge( $links, $mylinks );
}