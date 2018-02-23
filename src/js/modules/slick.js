import $ from 'jquery';
import 'slick-carousel';

function topNews () {
  $('[data-top-news]').slick({
    dots: false,
    arrows: false,
    infinite: true,
    autoplay: true,
    speed: 300,
    slidesToShow: 5,
    pauseOnFocus: false,
    pauseOnHover: false,
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

function reInit () {
  let timer = false;

  window.addEventListener('resize', function () {
    if (timer !== false) {
      clearTimeout(timer);
    }

    timer = setTimeout(function () {
      $('[data-top-news]').slick('reinit');
      $('[data-infinite-slide]').slick('reinit');
    }, 200);
  });
}

function init () {
  $(function () {
    reInit();
    topNews();
  });
}

export default init();
