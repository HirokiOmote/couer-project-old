import $ from 'jquery';
import smoothScroll from 'smooth-scroll';

function init () {
  $(function () {
    const scroll = new smoothScroll('[data-scroll]');

    scroll.init();
    $('[data-scroll]').hide();

    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        $('[data-scroll]').fadeIn();
      } else {
        $('[data-scroll]').fadeOut();
      }
    });
  });
}

export default init();
