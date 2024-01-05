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
        <a href="javascript:void(0);" title="ნახე ყველა" class="btn btn-transparent btn-icon-right">
          <span>ნახე ყველა</span>
          <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-down.svg" alt="" class="svg-icon">
        </a>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</section>

<section class="testimoinals">
  <div class="container">
    <div class="testimonial_body">
      <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial.svg" alt="" class="border svg-icon">
      <img src="<?php echo get_template_directory_uri(); ?>/images/quot.svg" alt="" class="quot">
      <div class="testimonial_slider swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <p>კვება არ არის მხოლოდ ენერგია, არამედ ჯანმრთელობის, კულტურის, კომუნიკაციისა და ყოველდღიურობის დიდი ნაწილი</p>
            <h4>- ქეთი</h4>
          </div>
          <div class="swiper-slide">
            <p>დაბალანსებული კვება დაგეხმარება გახდეთ მეტად პროდუქტიული, გაიუმჯობესოთ ჯანმრთელობა და ცხოვრების ხარისხი!</p>
            <h4>- სალომე</h4>
          </div>
          <div class="swiper-slide">
            <p>კვების ბალანსი ჯანმრთელობის ერთ-ერთი საუკეთესო ინვესტიციაა თქვენი მომავლისთვის!</p>
            <h4>- ლუკა</h4>
          </div>
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
    <h2>კმაყოფილი მომხმარებელი</h2>
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

<?php get_footer(); ?>
