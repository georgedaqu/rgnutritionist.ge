<footer class="trans-all-2">
  <img src="<?php echo get_template_directory_uri(); ?>/images/curve-green-top.svg" alt="" class="curves top">
  <div class="container">
    <h2><?php echo get_field('footer_title', 'option'); ?></h2>
    <address>
      <?php
      $contect_items = get_field('contact_items', 'option');
      ?>
      <ul>
        <?php foreach ($contect_items as $item) : ?>
        <li>
          <?php if ($item['icon']) : ?>
          <figure>
            <img src="<?php echo $item['icon']; ?>" alt="">
          </figure>
          <?php endif; ?>
          <div class="contact_texts">
            <?php if ($item['subtitle']) : ?>
            <h6>
              <?php echo $item['subtitle']; ?>
            </h6>
            <?php endif; ?>
            <?php if ($item['item_type'] == "email") : ?>
            <a href="mailto:<?php echo $item['email']; ?>" title="<?php echo $item['email']; ?>"><?php echo $item['email']; ?></a>
            <?php endif; ?>
            <?php if ($item['item_type'] == "phone") : ?>
            <a href="tel:<?php echo $item['phone']; ?>" title="<?php echo $item['phone']; ?>"><?php echo $item['phone']; ?></a>
            <?php endif; ?>
            <?php if ($item['item_type'] == "link") : ?>
            <?php $link = $item['link']; ?>
            <a href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
            <?php endif; ?>
            <?php if ($item['item_type'] == "text") : ?>
            <span><?php echo $item['text']; ?></span>
            <?php endif; ?>
          </div>
        </li>
        <?php endforeach; ?>
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
