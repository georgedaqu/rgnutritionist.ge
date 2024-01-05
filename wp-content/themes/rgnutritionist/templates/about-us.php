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
  <div class="portfolio_item">
    <img src="<?php echo get_template_directory_uri(); ?>/images/worm-right.svg" alt="" class="worm">
    <div class="container">
      <h2>სიუჟეტები და ინტერვიუები</h2>
      <div class="portfolio_items">
        <article>
          <figure>
            <a href="https://www.youtube.com/watch?v=4GqWV8HpFeg" class="magnific_video">
              <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio-1.jpg" alt="">
            </a>
            <figcaption>ვიდეოს სახელის ტექსტი</figcaption>
          </figure>
        </article>
        <article>
          <figure>
            <a href="https://www.youtube.com/watch?v=zXCElopXzfs" class="magnific_video">
              <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio-2.jpg" alt="">
            </a>
            <figcaption>ვიდეოს სახელის ტექსტი</figcaption>
          </figure>
        </article>
        <article>
          <figure>
            <a href="https://www.youtube.com/watch?v=8W0aGo_dMtM" class="magnific_video">
              <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio-3.jpg" alt="">
            </a>
            <figcaption>ვიდეოს სახელის ტექსტი</figcaption>
          </figure>
        </article>
        <article>
          <figure>
            <a href="https://www.youtube.com/watch?v=zXCElopXzfs" class="magnific_video">
              <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio-2.jpg" alt="">
            </a>
            <figcaption>ვიდეოს სახელის ტექსტი</figcaption>
          </figure>
        </article>
        <article>
          <figure>
            <a href="https://www.youtube.com/watch?v=8W0aGo_dMtM" class="magnific_video">
              <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio-3.jpg" alt="">
            </a>
            <figcaption>ვიდეოს სახელის ტექსტი</figcaption>
          </figure>
        </article>
      </div>
      <div class="see_all trans-all-2">
        <a href="javascript:void(0);" title="ნახე ყველა" class="btn btn-transparent btn-icon-right">
          <span>ნახე ყველა</span>
          <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-down.svg" alt="" class="svg-icon">
        </a>
      </div>
    </div>
  </div>
  <div class="portfolio_item">
    <img src="<?php echo get_template_directory_uri(); ?>/images/worm-right.svg" alt="" class="worm">
    <div class="container">
      <h2>სემინარები და ტრეინინგები</h2>
      <div class="portfolio_items">
        <article>
          <figure>
            <a href="https://www.youtube.com/watch?v=4GqWV8HpFeg" class="magnific_video">
              <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio-1.jpg" alt="">
            </a>
            <figcaption>ვიდეოს სახელის ტექსტი</figcaption>
          </figure>
        </article>
        <article>
          <figure>
            <a href="https://www.youtube.com/watch?v=zXCElopXzfs" class="magnific_video">
              <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio-2.jpg" alt="">
            </a>
            <figcaption>ვიდეოს სახელის ტექსტი</figcaption>
          </figure>
        </article>
        <article>
          <figure>
            <a href="https://www.youtube.com/watch?v=8W0aGo_dMtM" class="magnific_video">
              <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio-3.jpg" alt="">
            </a>
            <figcaption>ვიდეოს სახელის ტექსტი</figcaption>
          </figure>
        </article>
        <article>
          <figure>
            <a href="https://www.youtube.com/watch?v=8W0aGo_dMtM" class="magnific_video">
              <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio-3.jpg" alt="">
            </a>
            <figcaption>ვიდეოს სახელის ტექსტი</figcaption>
          </figure>
        </article>
      </div>
      <div class="see_all trans-all-2">
        <a href="javascript:void(0);" title="ნახე ყველა" class="btn btn-transparent btn-icon-right">
          <span>ნახე ყველა</span>
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

<?php get_footer(); ?>
