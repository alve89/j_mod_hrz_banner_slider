<?php
// No direct access to this file
defined('_JEXEC') or die;

/**
 * Script file of mod_hrz_jsn_user module
 */
class mod_hrz_banner_sliderInstallerScript
{
	/**
	 * Method to install the extension
	 * $parent is the class calling this method
	 *
	 * @return void
	 */
	function install($parent)
	{
			JFactory::getApplication()->enqueueMessage('Make sure to include the following JavaScript files manually in the following order (e. g. in Gantry template): <br/>
                                                  <ol>
																										<li>(perhaps <a href="https://code.jquery.com/" target="_blank">jQuery</a>, <a href="https://code.jquery.com/" target="_blank">jQuery Migrate</a>)</li>
                                                  	<li><a href="https://kenwheeler.github.io/slick/slick/slick.js" target="_blank">slick.js</a></li>
                                                  	<li><a href="'.JURI::root().'modules/mod_hrz_banner_slider/media/js/slider.js" target="_blank">slider.js</a></li>
																									</ol>', 'warning');
	}
//https://code.jquery.com/jquery-1.11.0.min.js
//https://code.jquery.com/jquery-migrate-1.2.1.min.js
	/**
	 * Method to uninstall the extension
	 * $parent is the class calling this method
	 *
	 * @return void
	 */
	function uninstall($parent)
	{
	}

	/**
	 * Method to update the extension
	 * $parent is the class calling this method
	 *
	 * @return void
	 */
	function update($parent)
	{
		$this->install($parent);
	}

	/**
	 * Method to run before an install/update/uninstall method
	 * $parent is the class calling this method
	 * $type is the type of change (install, update or discover_install)
	 *
	 * @return void
	 */
	function preflight($type, $parent)
	{
	}

	/**
	 * Method to run after an install/update/uninstall method
	 * $parent is the class calling this method
	 * $type is the type of change (install, update or discover_install)
	 *
	 * @return void
	 */
	function postflight($type, $parent)
	{
	}
}
