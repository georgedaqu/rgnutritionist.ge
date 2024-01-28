<?php

// Template Name: Collaboration

get_header();

?>

<section class="page_title">
  <img src="<?php echo get_template_directory_uri(); ?>/images/curve-gray-top.svg" alt="" class="curves top">
  <img src="<?php echo get_template_directory_uri(); ?>/images/curve-gray-bot.svg" alt="" class="curves bot">
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
</section>

<section class="article_body collaboration">
  <div class="container narrow">
    <figure class="featured_image">
      <?php the_post_thumbnail('portfolio-inside'); ?>
    </figure>
    <div class="article_content">
      <?php the_content(); ?>
    </div>
  </div>
</section>

<?php

$args = [
  'post_type' => 'portfolio',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'order' => 'DESC',
  'orderby' => 'date',
  'tax_query' => [
    [
      'taxonomy' => 'category',
      'field'    => 'slug',
      'terms'    => 'collaboration',
    ],
  ],
];
?>
<?php $query = new WP_Query($args); ?>

<?php $posts = $query->get_posts(); ?>
<?php if ($posts) : ?>
<section class="portfolio">
  <div class="portfolio_item article">
    <img src="<?php echo get_template_directory_uri(); ?>/images/worm-right.svg" alt="" class="worm">
    <div class="container">
      <h2><?php pll_e('Portfolio'); ?></h2>
      <div class="portfolio_items">
        <?php foreach ($posts as $post) : ?>
        <?php
            $postId = $post->ID;
            $image = get_the_post_thumbnail_url($postId, 'portfolio-article-listing');
            $title = get_the_title($postId);
            $link = get_post_permalink($postId);
            ?>
        <article>
          <figure>
            <a href="<?php echo $link; ?>" title="<?php echo $title; ?>">
              <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>">
            </a>
            <figcaption><?php echo $title; ?></figcaption>
          </figure>
        </article>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      </div>
      <div class="see_all trans-all-2">
        <a href="javascript:void(0);" title="<?php pll_e('See All'); ?>" class="btn btn-transparent btn-icon-right">
          <span><?php pll_e('See All'); ?></span>
          <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-down.svg" alt="" class="svg-icon">
        </a>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>
