<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://https://kharadionline.com/
 * @since             1.0.0
 * @package           Petpuja
 *
 * @wordpress-plugin
 * Plugin Name:       Petpuja
 * Plugin URI:        https://https://kharadionline.com/
 * Description:       Try most reliable petpuja api intregration plugin.
 * Version:           1.0.0
 * Author:            Aryan Bokde
 * Author URI:        https://https://kharadionline.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       petpuja
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
define( 'PETPUJA_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-petpuja-activator.php
 */
function activate_petpuja() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-petpuja-activator.php';
	Petpuja_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-petpuja-deactivator.php
 */
function deactivate_petpuja() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-petpuja-deactivator.php';
	Petpuja_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_petpuja' );
register_deactivation_hook( __FILE__, 'deactivate_petpuja' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-petpuja.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_petpuja() {

	$plugin = new Petpuja();
	$plugin->run();

}
run_petpuja();
