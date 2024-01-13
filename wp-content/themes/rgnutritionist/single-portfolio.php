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
    <figure>
      <?php the_post_thumbnail('portfolio-inside'); ?>
    </figure>
    <div class="article_content">
      <?php the_content(); ?>
    </div>
    <div class="article_gallery magnific">
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

<?php get_footer(); ?>
