<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://heikomamerow.de
 * @since      1.0.0
 *
 * @package    Admin_Bar_Environment_Color
 * @subpackage Admin_Bar_Environment_Color/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Admin_Bar_Environment_Color
 * @subpackage Admin_Bar_Environment_Color/includes
 * @author     Heiko Mamerow <mail@heikomamerow.de>
 */
class Admin_Bar_Environment_Color_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'admin-bar-environment-color',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
