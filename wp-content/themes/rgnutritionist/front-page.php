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

<section class="front_about">
  <div class="container">
    <div class="about_content">
      <h2><?php echo get_field("about_title"); ?></h2>
      <div class="about_text"><?php echo get_field("about_text"); ?></div>
      <div class="more trans-all-2">
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

<?php
$args = [
  'post_type' => 'service',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'order' => 'DESC',
  'orderby' => 'date',
];
?>
<?php $query = new WP_Query($args); ?>

<?php $posts = $query->get_posts(); ?>

<section class="front_services">
  <img src="<?php echo get_template_directory_uri(); ?>/images/worm-tall.svg" class="worm" alt="">
  <div class="container">
    <?php foreach ($posts as $post) : ?>
      <?php
      $postId = $post->ID;
      $image = get_the_post_thumbnail_url($postId, 'services-listing');
      $title = get_the_title($postId);
      $excerpt = get_the_excerpt($postId);
      $link = get_post_permalink($postId);
      ?>
      <article class="trans-all-2">
        <figure>
          <a href="<?php echo $link; ?>" title="<?php echo $title; ?>">
            <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>">
          </a>
        </figure>
        <div class="front_services_text">
          <h2>
            <a href="<?php echo $link; ?>" title="<?php echo $title; ?>"><?php echo $title; ?></a>
          </h2>
          <div class="text">
            <p><?php echo $excerpt; ?></p>
          </div>
          <div class="more trans-all-2">
            <a href="<?php echo $link; ?>" title="<?php pll_e('Read more'); ?>" class="btn btn-light btn-icon-right">
              <span><?php pll_e('Read more'); ?></span>
              <img src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg" alt="" class="svg-icon">
            </a>
          </div>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<?php get_footer(); ?>