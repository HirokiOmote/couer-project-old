import $ from 'jquery';
import 'bxslider';

function init () {
  $(function () {
    $('[data-infinite-slide]').bxSlider({
      ticker: true,
      speed: 35000,
      pager: false,
      controls: false,
      slideWidth: 240,
      slideMargin: 0,
      maxSlides: 2,
      infiniteLoop: true,
      preloadImages: 'visible'
    });
  });
}

export default init();
