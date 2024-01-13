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

<?php
$post_slug = get_post_field('post_name', get_post());

if ($post_slug == "individual-consultation") {
  $article_category = "individual";
} else {
  $article_category = "corporate";
}

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
      'terms'    => $article_category,
    ],
  ],
];
?>
<?php $query = new WP_Query($args); ?>

<?php $posts = $query->get_posts(); ?>

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

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scripts/magnific/magnific.css">
<script src="<?php echo get_template_directory_uri(); ?>/scripts/magnific/magnific.js"></script>
<script>
$(".portfolio .portfolio_item .container .portfolio_items").each(function() {
  var $this = $(this);
  var $portfolio_items = $this.find("article").length;
  if ($portfolio_items > 3) {
    $this.next(".see_all").css({
      "display": "flex"
    })
  }
});
$(".see_all").each(function() {
  var $this = $(this);
  $this.click(function() {
    $this.prev(".portfolio_items").find("article").css({
      "display": "block"
    });
    $this.hide();
  });
});
if ($(".magnific_video").length) {
  $(".magnific_video").magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });
}
</script>

<?php
$current_post_id = get_the_ID();

$args = [
  'post_type' => 'service',
  'post_status' => 'publish',
  'posts_per_page' => 2,
  'post__not_in' => array($current_post_id),
  'order' => 'DESC',
  'orderby' => 'date',
];
?>
<?php $query = new WP_Query($args); ?>

<?php $posts = $query->get_posts(); ?>

<section class="related_services">
  <img src="<?php echo get_template_directory_uri(); ?>/images/curve-gray-top.svg" alt="" class="curves top">
  <div class="container">
    <h2 class="section-title"><?php pll_e('See Also'); ?></h2>
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
