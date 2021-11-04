<?php
defined('_JEXEC') or die( 'Restricted access' );

if($params->loadjs) JHtml::_('jquery.framework');

$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base()."modules/mod_hrz_banner_slider/media/css/style.css");
$document->addStyleSheet("https://kenwheeler.github.io/slick/slick/slick.css");

?>

<div class="tvo-slider ">

  <?php

modHrzBannerSlider::varDump($params);

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
    <div class="tvo-slide">
      <div class="sliderImage">
        <center>
          <a href="<?=JRoute::_('index.php?option=com_banners&task=click&id='. $banner->id);?>" class="<?=$class;?>" target="<?=$target;?>">
            <img src="<?=DS.$banner->params->get('imageurl');?>" width="<?=$width;?>%"/>
          </a>
        </center>
      </div>
    </div>
  	<?php
  }

   ?>

</div>
