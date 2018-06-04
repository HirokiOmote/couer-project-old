import $ from 'jquery';

function init () {
  $('[data-navigation-submenu]').slideUp();

  if (window.innerWidth < 1140) {
    $('[data-menu-trigger]').fadeIn().removeClass('active');
    $('[data-navigation]').hide();
    $('[data-navigation-sub-trigger]').show();
  } else {
    $('[data-menu-trigger]').fadeOut();
    $('[data-navigation]').fadeIn();
  }
}

function navigation () {
  let timer = false;

  $(function () {
    $('[data-menu-trigger]').on('click', function () {
      $(this).next().slideToggle();
    });

    $('[data-navigation-sub-trigger]').on('click', function () {
      $(this).toggleClass('active');
      $(this).next().slideToggle();
    });

    if (window.innerWidth >= 1024) {
      $('[data-navigation-sub-mouseover]').on({
        'mouseenter': function () {
          $(this).children('[data-navigation-submenu]').slideDown();
        },
        'mouseleave': function () {
          $(this).children('[data-navigation-submenu]').slideUp();
        }}
      );
    }

    $(window).resize(function () {
      if (timer !== false) {
        clearTimeout(timer);
      }

      timer = setTimeout(function () {
        init();
      }, 200);
    });
  });
}

export default navigation();
