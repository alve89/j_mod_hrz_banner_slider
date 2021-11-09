<?php
/**
 * @version 	1.0.4
 * @package 	mod_hrz_banner_slider
 * @copyright 	(c) 2021 Stefan Herzog
 * @license		GNU/GPL, http://www.gnu.org/licenses/gpl-3.0.html
 */

defined( '_JEXEC' ) or die( 'Restricted access' );

class modHrzBannerSlider {
	public static function &getList(&$params) {

		JModelLegacy::addIncludePath(JPATH_ROOT.'/components/com_banners/models', 'BannersModel');
		$document	= JFactory::getDocument();
		$app		= JFactory::getApplication();
		$keywords	= explode(',', $document->getMetaData('keywords'));

		$model = JModelLegacy::getInstance('Banners', 'BannersModel', array('ignore_request' => true));
		$model->setState('filter.client_id', (int) $params->get('cid'));
		$model->setState('filter.category_id', $params->get('catid', array()));
		$model->setState('list.limit', (int) $params->get('count', 1));
		$model->setState('list.start', 0);
		$model->setState('filter.ordering', $params->get('ordering'));
		$model->setState('filter.tag_search', $params->get('tag_search'));
		$model->setState('filter.keywords', $keywords);
		$model->setState('filter.language', $app->getLanguageFilter());

		$banners = $model->getItems();
		$model->impress();

		return $banners;
	}
}



?>
