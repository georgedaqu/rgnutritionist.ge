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
  $('.one, .two, .three, .four, .five, .six, .seven, .eight, .hero_title, .hero_text').jParallax({
    moveFactor: 10,
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
    <?php wp_reset_postdata(); ?>
  </div>
</section>

<section class="front_collaboration">
  <h2 class="collab_title"><?php pll_e('Collaboration'); ?></h2>
  <figure class="bean first">
    <img src="<?php echo get_field("collab_image_one"); ?>" alt="">
    <figcaption><?php echo get_field("collab_title_one"); ?></figcaption>
  </figure>
  <figure class="bean second">
    <img src="<?php echo get_field("collab_image_two"); ?>" alt="">
    <figcaption><?php echo get_field("collab_title_two"); ?></figcaption>
  </figure>
  <figure class="bean third">
    <img src="<?php echo get_field("collab_image_three"); ?>" alt="">
    <figcaption><?php echo get_field("collab_title_three"); ?></figcaption>
  </figure>
  <div class="veg-more trans-all-2">
    <?php
    $collab_link = get_field("collab_link");
    ?>
    <a href="<?php echo $collab_link['url']; ?>" title="<?php echo $collab_link['title']; ?>" class="btn btn-light btn-icon-right">
      <span><?php echo $collab_link['title']; ?></span>
      <img src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg" alt="" class="svg-icon">
    </a>
  </div>
  <img src="<?php echo get_template_directory_uri(); ?>/images/vegan-2.png" alt="" class="vegan veg-one">
  <img src="<?php echo get_template_directory_uri(); ?>/images/vegan-2.png" alt="" class="vegan veg-two">
  <img src="<?php echo get_template_directory_uri(); ?>/images/vegan-5.png" alt="" class="vegan veg-three">
  <img src="<?php echo get_template_directory_uri(); ?>/images/vegan-4.png" alt="" class="vegan veg-four">
  <img src="<?php echo get_template_directory_uri(); ?>/images/vegan-5.png" alt="" class="vegan veg-five">
  <img src="<?php echo get_template_directory_uri(); ?>/images/vegan-6.png" alt="" class="vegan veg-six">
  <img src="<?php echo get_template_directory_uri(); ?>/images/vegan-6.png" alt="" class="vegan veg-seven">
  <img src="<?php echo get_template_directory_uri(); ?>/images/vegan-8.png" alt="" class="vegan veg-eight">
</section>

<script>
  $('.veg-one, .veg-two, .veg-three, .veg-four, .veg-five, .veg-six, .veg-seven, .veg-eight, .collab_title, .first, .second, .third, .veg-more').jParallax({
    moveFactor: 10,
    targetContainer: '.front_collaboration'
  });
</script>

<section class="partners">
  <img src="<?php echo get_template_directory_uri(); ?>/images/curve-gray-top.svg" alt="" class="curves top">
  <div class="container">
    <h2><?php echo get_field("partners_title"); ?></h2>
    <div class="partners_slider_wrap">
      <a href="javascript:void(0);" class="partners_slider_nav partners_slider_prev">
        <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-left.svg" alt="" class="svg-icon">
      </a>
      <a href="javascript:void(0);" class="partners_slider_nav partners_slider_next">
        <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-right.svg" alt="" class="svg-icon">
      </a>
      <?php
      $partners = get_field("partners");
      ?>
      <div class="partners_slider swiper">
        <div class="swiper-wrapper">
          <?php foreach ($partners as $partner) : ?>
            <div class="swiper-slide">
              <img src="<?php echo $partner['image']; ?>" alt="">
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>