<?php
/**
 * @version 	1.0.4
 * @package 	mod_hrz_banner_slider
 * @copyright 	(c) 2021 Stefan Herzog
 * @license		GNU/GPL, http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die( 'Restricted access' );

if(boolval($params->get('loadjs'))) {
	JHtml::_('jquery.framework');
}

$document = JFactory::getDocument();
$document->addStyleSheet("https://kenwheeler.github.io/slick/slick/slick.css");
$document->addStyleDeclaration($params->get('customCSS'));

?>

<div class="hrz-slider ">

<?php


$target = '_blank';
$class  = '';

switch($params->get('target')) {
  case 0:
    $target = '_self';
    break;

  case 1:
    $target = '_blank';
    break;

  default:
    $target = '_blank';
}
foreach($banners as $banner) {
	?>
  <div class="hrz-slide">
    <div class="sliderImage">
      <center>
        <a href="<?=JRoute::_('index.php?option=com_banners&task=click&id='. $banner->id);?>" class="<?=$class;?>" target="<?=$target;?>">
          <?php
						if(!is_null($banner->custombannercode) && !empty($banner->custombannercode)) {
							echo $banner->custombannercode;
						}
						else {
							?><img src="<?=JUri::root().$banner->params->get('imageurl');?>" /><?php
						}
						?>
        </a>
      </center>
    </div>
  </div>
	<?php
}
?>
</div>

<!-- These scripts need to be loaded after the slides! -->
<script type="text/javascript" src="<?=$params->get('slickJS');?>"></script>
<script type="text/javascript">
	var $jq = jQuery.noConflict();
	$jq('.hrz-slider').not('.slick-initialized').slick({
		<?=$params->get('sliderJS');?>
	});
	</script>
