var $jq = jQuery.noConflict();

$jq('.tvo-slider').slick({
  dots: false,
  autoplay: true,
  autoplaySpeed: 1000,
  infinite: true,
  speed: 2000,
  slide: 'div',
  cssEase: 'ease-in-out',
  slidesToShow: 2,
  arrows: false,
});
