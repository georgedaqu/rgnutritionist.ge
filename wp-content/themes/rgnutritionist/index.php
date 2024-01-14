<?php get_header(); ?>

<section class="page_title">
  <img src="<?php echo get_template_directory_uri(); ?>/images/curve-gray-top.svg" alt="" class="curves top">
  <img src="<?php echo get_template_directory_uri(); ?>/images/curve-gray-bot.svg" alt="" class="curves bot">
  <div class="container">
    <h1><?php pll_e("Blog"); ?></h1>
  </div>
</section>

<section class="blog_listing trans-all-4">
  <div class="container">
    <?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 10,
    );
    ?>
    <?php $query = new WP_Query($args); ?>
    <?php if ($query->have_posts()) : ?>
      <?php while ($query->have_posts()) : ?>
        <?php $query->the_post(); ?>
        <article>
          <figure>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
              <?php the_post_thumbnail('blog-featured'); ?>
            </a>
          </figure>
          <time><?php echo get_the_date(); ?></time>
          <h3><?php the_title(); ?></h3>
        </article>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>