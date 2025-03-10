<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://wdvillage.com/
 * @since             1.0.0
 * @package           Wdv_Mailchimp_Ajax
 *
 * @wordpress-plugin
 * Plugin Name:       WDV MailChimp Ajax
 * Plugin URI:        https://wdvillage.com/product/wdv-mailchimp-ajax-wp-plugin/
 * Description:       This plugin adding widget with contact form for MailChimp using ajax
 * Version:           2.0.9
 * Author:            wdvillage
 * Author URI:        http://wdvillage.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wdv-mailchimp-ajax
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WDV_MAILCHIMP_AJAX_VERSION', '2.0.9' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wdv-mailchimp-ajax-activator.php
 */
function activate_wdv_mailchimp_ajax() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wdv-mailchimp-ajax-activator.php';
	Wdv_Mailchimp_Ajax_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wdv-mailchimp-ajax-deactivator.php
 */
function deactivate_wdv_mailchimp_ajax() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wdv-mailchimp-ajax-deactivator.php';
	Wdv_Mailchimp_Ajax_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wdv_mailchimp_ajax' );
register_deactivation_hook( __FILE__, 'deactivate_wdv_mailchimp_ajax' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wdv-mailchimp-ajax.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wdv_mailchimp_ajax() {

	$plugin = new Wdv_Mailchimp_Ajax();
	$plugin->run();

}
run_wdv_mailchimp_ajax();

function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;          
}