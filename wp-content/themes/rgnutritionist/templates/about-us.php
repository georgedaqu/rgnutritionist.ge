<?php

// Template Name: About Us

get_header();

?>

<section class="page_title">
  <img src="<?php echo get_template_directory_uri(); ?>/images/curve-gray-top.svg" alt="" class="curves top">
  <img src="<?php echo get_template_directory_uri(); ?>/images/curve-gray-bot.svg" alt="" class="curves bot">
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
</section>

<section class="front_about">
  <div class="container">
    <div class="about_content">
      <h2><?php echo get_field("intro_title"); ?></h2>
      <div class="about_text"><?php echo get_field("intro_text"); ?></div>
    </div>
    <figure>
      <img src="<?php echo get_field("intro_image"); ?>" alt="">
    </figure>
  </div>
</section>

<?php get_footer(); ?>