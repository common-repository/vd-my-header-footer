<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.visualdesigner.io
 * @since      1.0.0
 *
 * @package    Vd
 * @subpackage Vd/includes
 */

if (defined('VD_CLS_MHF_I18N'))
  return;
define('VD_CLS_MHF_I18N', true);

class vD_MHF_i18n {

	public function load_plugin_textdomain() {
		load_plugin_textdomain('vd_mhf', false, dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/');
	}

}
