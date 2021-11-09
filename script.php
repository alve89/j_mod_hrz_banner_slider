<?php
/**
 * @version 	1.0.4
 * @package 	mod_hrz_banner_slider
 * @copyright 	(c) 2021 Stefan Herzog
 * @license		GNU/GPL, http://www.gnu.org/licenses/gpl-3.0.html
 */


// No direct access to this file
defined('_JEXEC') or die;

/**
 * Script file of mod_hrz_jsn_user module
 */
class mod_hrz_banner_sliderInstallerScript {
	/**
	 * Method to install the extension
	 * $parent is the class calling this method
	 *
	 * @return void
	 */
	function install($parent) {
	}
	/**
	 * Method to uninstall the extension
	 * $parent is the class calling this method
	 *
	 * @return void
	 */
	function uninstall($parent) {
	}

	/**
	 * Method to update the extension
	 * $parent is the class calling this method
	 *
	 * @return void
	 */
	function update($parent) {
		$this->install($parent);
	}

	/**
	 * Method to run before an install/update/uninstall method
	 * $parent is the class calling this method
	 * $type is the type of change (install, update or discover_install)
	 *
	 * @return void
	 */
	function preflight($type, $parent) {
	}

	/**
	 * Method to run after an install/update/uninstall method
	 * $parent is the class calling this method
	 * $type is the type of change (install, update or discover_install)
	 *
	 * @return void
	 */
	function postflight($type, $parent) {
	}
}
