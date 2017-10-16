import $ from 'jquery';

function navigation () {
  $(function () {
    $('[data-menu-trigger]').on('click', function () {
      $(this).next().slideToggle();
    });

    $('[data-navigation-sub-trigger]').on('click', function () {
      $(this).toggleClass('active');
      $(this).next().slideToggle();
    });

    if (window.innerWidth >= 1140) {
      $('[data-navigation-sub-mouseover]').on(
        {'mouseenter': function () {
          $('[data-navigation-submenu]').slideDown();
        },
        'mouseleave': function () {
          $('[data-navigation-submenu]').slideUp();
        }
        }
      );
    }
  });
}

export default navigation();
