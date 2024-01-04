<footer class="trans-all-2">
  <img src="<?php echo get_template_directory_uri(); ?>/images/curve-green-top.svg" alt="" class="curves top">
  <div class="container">
    <h2>კონტაქტი</h2>
    <address>
      <ul>
        <li>
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-contact.svg" alt="">
          </figure>
          <div class="contact_texts">
            <h6>კონუსლტაცია</h6>
            <a href="mailto:rgnutritionist@gmail.com" title="rgnutritionist@gmail.com">rgnutritionist@gmail.com</a>
          </div>
        </li>
        <li>
          <div class="contact_texts">
            <h6>ჩაწერა</h6>
            <a href="mailto:healthdesignbyrg@gmail.com" title="healthdesignbyrg@gmail.com">healthdesignbyrg@gmail.com</a>
          </div>
        </li>
        <li>
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-phone.svg" alt="">
          </figure>
          <div class="contact_texts">
            <a href="tel:+995 598 75 03 74" title="+995 598 75 03 74">+995 598 75 03 74</a>
          </div>
        </li>
        <li>
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-location.svg" alt="">
          </figure>
          <div class="contact_texts">
            <span>მისამართის ტექსტი</span>
          </div>
        </li>
        <li>
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-instagram.svg" alt="">
          </figure>
          <div class="contact_texts">
            <a href="https://www.instagram.com/rgnutritionist/" title="Instagram" target="_blank">Instagram</a>
          </div>
        </li>
        <li>
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-linkedin.svg" alt="">
          </figure>
          <div class="contact_texts">
            <a href="https://linkedin.com/in/rgnutritionist" title="LinkedIn" target="_blank">LinkedIn</a>
          </div>
        </li>
      </ul>
    </address>
  </div>
</footer>

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