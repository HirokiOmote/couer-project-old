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

function infiniteSlide () {
  $('[data-infinite-slide]').slick({
    dots: false,
    arrows: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 0,
    cssEase: 'linear',
    speed: 5000,
    slidesToShow: 8,
    pauseOnFocus: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 1900,
        settings: {
          slidesToShow: 7
        }
      },
      {
        breakpoint: 1439,
        settings: {
          slidesToShow: 6
        }
      },
      {
        breakpoint: 1199,
        settings: {
          slidesToShow: 4
        }
      },
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
    topNews();
    infiniteSlide();
  });

  reInit();
}

export default init();
