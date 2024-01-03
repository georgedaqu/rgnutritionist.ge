<?php get_header(); ?>

<section class="hero_wrap">
  <div class="hero">
    <img src="<?php echo get_template_directory_uri(); ?>/images/curve-gray-top.svg" alt="" class="curves top">
    <img src="<?php echo get_template_directory_uri(); ?>/images/curve-gray-bot.svg" alt="" class="curves bot">
    <div class="hero_content">
      <figure class="hero_title">
        <img src="<?php echo get_field("hero_greeting"); ?>" alt="">
      </figure>
      <div class="hero_text"><?php echo get_field("hero_text"); ?></div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/images/vegan-1.png" alt="" class="vegan one">
    <img src="<?php echo get_template_directory_uri(); ?>/images/vegan-2.png" alt="" class="vegan two">
    <img src="<?php echo get_template_directory_uri(); ?>/images/vegan-3.png" alt="" class="vegan three">
    <img src="<?php echo get_template_directory_uri(); ?>/images/vegan-4.png" alt="" class="vegan four">
    <img src="<?php echo get_template_directory_uri(); ?>/images/vegan-5.png" alt="" class="vegan five">
    <img src="<?php echo get_template_directory_uri(); ?>/images/vegan-6.png" alt="" class="vegan six">
    <img src="<?php echo get_template_directory_uri(); ?>/images/vegan-7.png" alt="" class="vegan seven">
    <img src="<?php echo get_template_directory_uri(); ?>/images/vegan-8.png" alt="" class="vegan eight">
  </div>
</section>

<script>
  (function($) {
    $.fn.extend({
      jParallax: function(opt) {
        var defaults = {
            moveFactor: 5,
            targetContainer: 'body'
          },
          o = $.extend(defaults, opt);
        return this.each(function() {
          var background = $(this);
          $(o.targetContainer).on('mousemove', function(e) {
            mouseX = e.pageX;
            mouseY = e.pageY;
            windowWidth = $(window).width();
            windowHeight = $(window).height();
            percentX = (0 - ((mouseX / windowWidth) * o.moveFactor) - (o.moveFactor / 2) + o.moveFactor) / 2;
            percentY = (0 - ((mouseY / windowHeight) * o.moveFactor) - (o.moveFactor / 2) + o.moveFactor) / 2;
            background[0].style.transform = "translate(" + percentX + "%," + percentY + "%)";
          });
        });
      }
    });
  }(jQuery));

  $('.one, .two, .three, .four, .five, .six, .seven, .eight, .hero_title, .hero_text').jParallax({
    moveFactor: 50,
    targetContainer: '.hero'
  });
</script>

<section class="front_about trans-all-2">
  <div class="container">
    <div class="about_content">
      <h2><?php echo get_field("about_title"); ?></h2>
      <div class="about_text"><?php echo get_field("about_text"); ?></div>
      <div class="more">
        <?php
        $about_link = get_field("about_link");
        ?>
        <a href="<?php echo $about_link['url']; ?>" title="<?php echo $about_link['title']; ?>" class="btn btn-light btn-icon-right">
          <span><?php echo $about_link['title']; ?></span>
          <img src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg" alt="" class="svg-icon">
        </a>
      </div>
    </div>
    <figure>
      <img src="<?php echo get_field("about_image"); ?>" alt="">
    </figure>
  </div>
</section>

<?php get_footer(); ?>