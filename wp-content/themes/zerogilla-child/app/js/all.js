$(document).ready(function () {

  $('.service-tab').on('click', function () {
    const key = $(this).data('tab');

    // LEFT
    $('.service-tab').removeClass('active');
    $(this).addClass('active');

    // RIGHT
    $('.service-image').removeClass('active');
    $('.service-image[data-tab="' + key + '"]').addClass('active');
  });

});
