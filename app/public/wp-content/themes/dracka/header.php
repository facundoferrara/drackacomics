<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="site-header">
    <div class="header-inner">
      <div class="logo">Dracka</div>
      <button class="hamburger">☰</button>
    </div>

    <div class="mobile-overlay">

      <div class="overlay-header">
        <button class="overlay-close">✕</button>
      </div>

      <nav class="overlay-nav">
        <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container'      => false,
          'menu_class'     => 'overlay-menu',
        ]);
        ?>
      </nav>

      <nav class="overlay-social">
        <?php
        wp_nav_menu([
          'theme_location' => 'social',
          'container'      => false,
          'menu_class'     => 'social-menu',
          'link_before'    => '<span class="social-icon">',
          'link_after'     => '</span>',
        ]);
        ?>
      </nav>


    </div>

  </header>