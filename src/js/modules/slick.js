import $ from 'jquery';
import 'slick-carousel';

function topNews () {
  $('.slick').slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 5,
    responsive: [
      {
        breakpoint: 1023,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2
        }
      }
    ]
  });
}

function init () {
  $(function () {
    topNews();
  });
}

export default init();
