<script>
var partners_slider = new Swiper(".partners_slider", {
  speed: 1000,
  loop: true,
  slidesPerView: 2,
  spaceBetween: 10,
  navigation: {
    nextEl: ".partners_slider_next",
    prevEl: ".partners_slider_prev",
  },
  breakpoints: {
    1280: {
      slidesPerView: 5,
      spaceBetween: 30
    },
    768: {
      slidesPerView: 5,
      spaceBetween: 20
    },
    576: {
      slidesPerView: 4,
      spaceBetween: 20
    }
  }
});
$('img.svg-icon').each(function() {
  var $img = $(this);
  var imgURL = $img.attr('src');
  $.get(
    imgURL,
    function(data) {
      var $svg = $(data).find('svg');
      $svg = $svg.attr('class', $img.attr('class'));
      $svg = $svg.removeAttr('xmlns:a');
      $img.replaceWith($svg);
    },
    'xml'
  );
});
</script>

<?php wp_footer(); ?>

</body>

</html>
