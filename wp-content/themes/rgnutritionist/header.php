<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scripts/swiper/swiper.css">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.svg">
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/swiper/swiper.js"></script>
  </head>

  <body>

    <header class="header">
      <div class="container">
        <div class="menu_wrap">
          <?php
        wp_nav_menu([
          'theme_location'  => 'header_menu',
          'menu'        => 'header_menu',
          'container'      => 'nav',
          'container_class'  => 'navigation',
          'menu_class'    => 'nav'
        ]);
        ?>
        </div>
        <div class="logo">
          <a href="<?php echo get_home_url(); ?>" title="<?php bloginfo(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="logo">
          </a>
        </div>
        <div class="header_right">
          <ul class="lang">
            <?php pll_the_languages(array('show_flags' => 1, 'hide_current' => 1, 'show_names' => 0)); ?>
          </ul>
        </div>
      </div>
    </header>
