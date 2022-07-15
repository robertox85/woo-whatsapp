<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://robertodimarco.it/
 * @since      1.3.3
 *
 * @package    Woo_Whatsapp
 * @subpackage Woo_Whatsapp/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.3.3
 * @package    Woo_Whatsapp
 * @subpackage Woo_Whatsapp/includes
 * @author     Roberto Di Marco <dimarco.roberto85@gmail.com>
 */
class Woo_Whatsapp_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.3.3
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'woo-whatsapp',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
