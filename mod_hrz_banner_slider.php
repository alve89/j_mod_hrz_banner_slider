<?php
/**
 * @version 	1.0.4
 * @package 	mod_hrz_banner_slider
 * @copyright 	(c) 2021 Stefan Herzog
 * @license		GNU/GPL, http://www.gnu.org/licenses/gpl-3.0.html
 */

defined( '_JEXEC' ) or die( 'Restricted access' );


if(!defined('DS')) define('DS', DIRECTORY_SEPARATOR);
require_once( dirname(__FILE__).'/helper.php' );

require_once JPATH_ADMINISTRATOR . '/components/com_banners/helpers/banners.php';
BannersHelper::updateReset();
$banners = &modHrzBannerSlider::getList($params);

require( JModuleHelper::getLayoutPath( 'mod_hrz_banner_slider' ) );



?>
