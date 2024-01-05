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

<section class="portfolio">
  <?php
  $portfolio_row = get_field("portfolio_row");
  ?>
  <?php foreach ($portfolio_row as $portfolio_item) : ?>
  <?php
    $portfolio_row_title = $portfolio_item["portfolio_row_title"];
    $portfolio_item = $portfolio_item["portfolio_item"];
    ?>
  <div class="portfolio_item">
    <img src="<?php echo get_template_directory_uri(); ?>/images/worm-right.svg" alt="" class="worm">
    <div class="container">
      <h2><?php echo $portfolio_row_title; ?></h2>
      <div class="portfolio_items">
        <?php foreach ($portfolio_item as $item) : ?>
        <?php
            $portfolio_video = $item["portfolio_video"];
            $portfolio_title = $item["portfolio_title"];
            ?>
        <article>
          <figure>
            <a href="<?php echo $portfolio_video; ?>" class="magnific_video">
              <?php
                  $url = $portfolio_video;
                  parse_str(parse_url($url, PHP_URL_QUERY), $query_params);
                  $video_id = $query_params['v'];
                  ?>
              <img src="https://i.ytimg.com/vi/<?php echo $video_id; ?>/hqdefault.jpg" alt="">
            </a>
            <figcaption><?php echo $portfolio_title; ?></figcaption>
          </figure>
        </article>
        <?php endforeach; ?>
      </div>
      <div class="see_all trans-all-2">
        <a href="javascript:void(0);" title="<?php pll_e('See All'); ?>" class="btn btn-transparent btn-icon-right">
          <span><?php pll_e('See All'); ?></span>
          <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-down.svg" alt="" class="svg-icon">
        </a>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
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

$testimonials_title = get_field("testimonials_title");
$testimonials_items = get_field("testimonials_items");

?>

<section class="testimoinals">
  <div class="container">
    <div class="testimonial_body">
      <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial.svg" alt="" class="border svg-icon">
      <img src="<?php echo get_template_directory_uri(); ?>/images/quot.svg" alt="" class="quot">
      <div class="testimonial_slider swiper">
        <div class="swiper-wrapper">
          <?php foreach ($testimonials_items as $item) : ?>
          <?php
            $text = $item["text"];
            $author = $item["author"];
            ?>
          <div class="swiper-slide">
            <?php echo $text; ?>
            <h4>- <?php echo $author; ?></h4>
          </div>
          <?php endforeach; ?>
        </div>
        <div class="testimonial_slider_nav trans-all-2">
          <a href="javascript:void(0);" class="testimonial_slider_prev">
            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-left.svg" alt="" class="svg-icon">
          </a>
          <a href="javascript:void(0);" class="testimonial_slider_next">
            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-right.svg" alt="" class="svg-icon">
          </a>
        </div>
      </div>
    </div>
    <h2><?php echo $testimonials_title; ?></h2>
  </div>
</section>

<?php

$cv_columns = get_field("cv_columns");

?>

<section class="cv">
  <img src="<?php echo get_template_directory_uri(); ?>/images/curve.svg" alt="" class="curves top">
  <div class="container">
    <?php foreach ($cv_columns as $column) : ?>
    <?php
      $column_title = $column["column_title"];
      $column_items = $column["column_items"];
      ?>
    <div class="cv_column">
      <h2><?php echo $column_title; ?></h2>
      <ul>
        <?php foreach ($column_items as $item) : ?>
        <?php
            $image = $item["image"];
            $picture = $image["sizes"]["cv-listing"];
            $title = $item["title"];
            $features = $item["features"];
            $duration = $item["duration"];
            ?>
        <li>
          <figure>
            <img src="<?php echo $picture; ?>" alt="">
          </figure>
          <div class="cv_texts">
            <h3><?php echo $title; ?></h3>
            <div class="text">
              <ul>
                <?php foreach ($features as $feature) : ?>
                <?php
                $title = $feature["title"];
                ?>
                <li><?php echo $title; ?></li>
                <?php endforeach; ?>
              </ul>
              <div class="duration"><?php echo $duration; ?></div>
            </div>
          </div>
        </li>
        <?php endforeach; ?>
      </ul>
      <div class="see_all_cv trans-all-2">
        <a href="javascript:void(0);" title="<?php pll_e('See All'); ?>" class="btn btn-transparent btn-icon-right">
          <span><?php pll_e('See All'); ?></span>
          <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-down.svg" alt="" class="svg-icon">
        </a>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<script>
$(".cv .container .cv_column>ul").each(function() {
  var $this = $(this);
  var $portfolio_items = $this.find(">li").length;
  if ($portfolio_items > 3) {
    $this.next(".see_all_cv").css({
      "display": "flex"
    })
  }
});
$(".see_all_cv").each(function() {
  var $this = $(this);
  $this.click(function() {
    $this.prev("ul").find(">li").css({
      "display": "grid"
    });
    $this.hide();
  });
});
</script>

<?php get_footer(); ?>
