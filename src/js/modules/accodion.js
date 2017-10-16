import $ from 'jquery';

function accordion () {
  $(function () {
    $('[data-accordion]').on('click', function () {
      $(this).next().slideToggle();
    });
  });
}

export default accordion();
