<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://gauravtiwari.org
 * @since      1.0.0
 *
 * @package    Simple_Cookie_Notice
 * @subpackage Simple_Cookie_Notice/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Simple_Cookie_Notice
 * @subpackage Simple_Cookie_Notice/includes
 * @author     Gaurav Tiwari <gaurav@gauravtiwari.org>
 */
class Simple_Cookie_Notice_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'simple-cookie-notice',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
