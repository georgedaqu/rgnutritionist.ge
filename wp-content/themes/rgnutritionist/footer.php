<script>
var main_slider = new Swiper(".main_slider", {
  speed: 1000,
  loop: true,
  slidesPerView: 1,
  navigation: {
    nextEl: ".main_slider_next",
    prevEl: ".main_slider_prev",
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
