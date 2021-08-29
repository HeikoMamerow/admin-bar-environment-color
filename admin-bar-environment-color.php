<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://heikomamerow.de
 * @since             1.0.0
 * @package           Admin_Bar_Environment_Color
 *
 * @wordpress-plugin
 * Plugin Name:       Admin Bar Environment Color
 * Plugin URI:        https://github.com/HeikoMamerow/admin-bar-environment-color
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Heiko Mamerow
 * Author URI:        https://heikomamerow.de
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       admin-bar-environment-color
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
define( 'ADMIN_BAR_ENVIRONMENT_COLOR_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-admin-bar-environment-color-activator.php
 */
function activate_admin_bar_environment_color() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-admin-bar-environment-color-activator.php';
	Admin_Bar_Environment_Color_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-admin-bar-environment-color-deactivator.php
 */
function deactivate_admin_bar_environment_color() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-admin-bar-environment-color-deactivator.php';
	Admin_Bar_Environment_Color_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_admin_bar_environment_color' );
register_deactivation_hook( __FILE__, 'deactivate_admin_bar_environment_color' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-admin-bar-environment-color.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_admin_bar_environment_color() {

	$plugin = new Admin_Bar_Environment_Color();
	$plugin->run();

}
run_admin_bar_environment_color();
