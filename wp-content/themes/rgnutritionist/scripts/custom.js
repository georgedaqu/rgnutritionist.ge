$(document).ready(function () {
  // Outside click
  $(document).click(function (e) {
    if (!$(e.target).closest('.burger_trigger, .menu_wrap').length > 0) {
      $('.menu_wrap').removeClass('active');
    }
  });
  // Burger menu
  $('.burger_trigger').click(function () {
    $(this).addClass('active');
    $('.menu_wrap').addClass('active');
    $('body').addClass('overflow');
  });
  $('.menu_wrap .close').click(function () {
    $(this).removeClass('active');
    $('.menu_wrap').removeClass('active');
    $('body').removeClass('overflow');
  });
});
