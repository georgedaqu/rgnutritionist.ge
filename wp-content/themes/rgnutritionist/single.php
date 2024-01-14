<?php get_header(); ?>

<section class="page_title">
  <img src="<?php echo get_template_directory_uri(); ?>/images/curve-gray-top.svg" alt="" class="curves top">
  <img src="<?php echo get_template_directory_uri(); ?>/images/curve-gray-bot.svg" alt="" class="curves bot">
  <div class="container">
    <h1><?php pll_e("Blog"); ?></h1>
  </div>
</section>

<section class="article_page trans-all-2">
  <div class="container narrow">
    <figure class="featured_image">
      <?php the_post_thumbnail('blog-featured'); ?>
    </figure>
    <time><?php echo get_the_date(); ?></time>
    <h2><?php the_title(); ?></h2>
    <div class="blog_content">
      <?php the_content(); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>