<?php
defined( '_JEXEC' ) or die( 'Restricted access' );


if(!defined('DS')) define('DS', DIRECTORY_SEPARATOR);
require_once( dirname(__FILE__).DS.'helper.php' );

require_once JPATH_ADMINISTRATOR . '/components/com_banners/helpers/banners.php';
BannersHelper::updateReset();
$banners = &modHrzBannerSlider::getList($params);

require( JModuleHelper::getLayoutPath( 'mod_hrz_banner_slider' ) );



?>
