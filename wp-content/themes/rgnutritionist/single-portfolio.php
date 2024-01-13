<?php get_header(); ?>

<section class="page_title">
  <img src="<?php echo get_template_directory_uri(); ?>/images/curve-gray-top.svg" alt="" class="curves top">
  <img src="<?php echo get_template_directory_uri(); ?>/images/curve-gray-bot.svg" alt="" class="curves bot">
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
</section>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scripts/magnific/magnific.css">
<script src="<?php echo get_template_directory_uri(); ?>/scripts/magnific/magnific.js"></script>
<section class="article_body">
  <div class="container narrow">
    <figure class="featured_image">
      <?php the_post_thumbnail('portfolio-inside'); ?>
    </figure>
    <div class="article_content">
      <?php the_content(); ?>
    </div>
    <div class="article_gallery trans-all-2 magnific">
      <?php
      $gallery_items = get_field('gallery');
      ?>
      <?php if ($gallery_items) : ?>
      <?php foreach ($gallery_items as $gallery_item) : ?>
      <?php
          $item_type = $gallery_item['item_type'];
          ?>
      <?php if ($item_type == 'image') : ?>
      <?php
            $image = $gallery_item['image'];
            $thumbnail = $image['sizes']['services-listing'];
            $full = $image['url'];
            ?>
      <a href="<?php echo $full; ?>">
        <img src="<?php echo $thumbnail; ?>" alt="">
      </a>
      <?php elseif ($item_type == 'video') : ?>
      <?php $video = $gallery_item['video_url']; ?>
      <a href="<?php echo $video; ?>" class="mfp-iframe">
        <?php
              $url = $video;
              parse_str(parse_url($url, PHP_URL_QUERY), $query_params);
              $video_id = $query_params['v'];
              ?>
        <img src="https://i.ytimg.com/vi/<?php echo $video_id; ?>/hqdefault.jpg" alt="">
      </a>
      <?php endif; ?>
      <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
<script>
$('.magnific').magnificPopup({
  delegate: 'a',
  type: 'image',
  tLoading: 'Loading image #%curr%...',
  mainClass: 'mfp-img-mobile',
  gallery: {
    enabled: true,
    navigateByImgClick: true,
    preload: [0, 1]
  },
  image: {
    tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
    titleSrc: function(item) {
      return '';
    }
  }
});
</script>


<?php
$current_post_id = get_the_ID();

$args = [
  'post_type' => 'portfolio',
  'post_status' => 'publish',
  'posts_per_page' => 3,
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
    <div class="portfolio_item article">
      <div class="container">
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
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
