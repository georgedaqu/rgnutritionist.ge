<?php get_header(); ?>

<section class="page_title">
  <img src="<?php echo get_template_directory_uri(); ?>/images/curve-gray-top.svg" alt="" class="curves top">
  <img src="<?php echo get_template_directory_uri(); ?>/images/curve-gray-bot.svg" alt="" class="curves bot">
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
</section>

<section class="front_about reversed">
  <div class="container">
    <div class="about_content">
      <div class="about_text"><?php the_content(); ?></div>
    </div>
    <figure>
      <?php the_post_thumbnail('service-image');  ?>
    </figure>
  </div>
</section>

<?php get_footer(); ?>