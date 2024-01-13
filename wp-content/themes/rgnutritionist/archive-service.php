<?php get_header(); ?>

<section class="page_title">
  <img src="<?php echo get_template_directory_uri(); ?>/images/curve-gray-top.svg" alt="" class="curves top">
  <img src="<?php echo get_template_directory_uri(); ?>/images/curve-gray-bot.svg" alt="" class="curves bot">
  <div class="container">
    <h1><?php pll_e("Services"); ?></h1>
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
  <div class="container">
    <div class="services_items">
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
  </div>
</section>

<?php get_footer(); ?>
