<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="cache-control" content="public">
    <meta http-equiv="cache-control" content="private">

    <title><?php echo esc_html(bloginfo('name')); ?></title>

    <?php wp_head(); ?>
  
  </head>
  <body <?php body_class(); ?>>
    <header id="header">
      <div class="container-fluid">
        <div id="masthead" class="d-none d-sm-flex justify-content-end">
          <?php
            $phone = get_field('phone_number', 'option');
            $email = get_field('email_address', 'option');
            $facebook = get_field('facebook', 'option');
            $twitter = get_field('twitter', 'option');
            $linkedin = get_field('linkedin', 'option');
          ?>
          <a href="tel:<?php echo esc_html($phone); ?>"><?php echo esc_html($phone); ?></a>
          <span class="bullet-divider">&bull;</span>
          <a href="mailto:<?php echo sanitize_email($email); ?>"><?php echo sanitize_email($email); ?></a>
          <span class="vertical-divider"></span>
          <a href="<?php echo esc_url(home_url('search-page')); ?>"><i class="fas fa-search"></i><span class="sr-only"><?php esc_html_e('Search', 'fedcon'); ?></span></a>
          <span class="vertical-divider"></span>
          <div class="social">
            <?php if($facebook): ?>
              <a href="<?php esc_url($facebook); ?>" class="facebook"><i class="fab fa-facebook-square"></i><span class="sr-only">Facebook</span></a>
            <?php endif; if($twitter): ?>
              <a href="<?php esc_url($twitter); ?>" class="twitter"><i class="fab fa-twitter-square"></i><span class="sr-only">Twitter</span></a>
            <?php endif; if($linkedin): ?>
              <a href="<?php esc_url($linkedin); ?>" class="linkedin"><i class="fab fa-linkedin"></i><span class="sr-only">LinkedIn</span></a>
            <?php endif; ?>
          </div>
        </div>

        <nav id="logo-nav" class="navbar navbar-expand-lg">
          <a href="<?php echo esc_url(home_url()); ?>" class="navbar-brand">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="" alt="<?php echo esc_html(bloginfo('name')); ?> Logo" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle Navigation', 'fedcon'); ?>">
            <i class="fas fa-bars"></i>
          </button>

          <?php 
            $header_nav_args = array(
              'theme_location' => 'header-nav',
              'menu' => '',
              'container' => 'div',
              'container_id' => 'navbar',
              'container_class' => 'collapse navbar-collapse justify-content-end',
              'menu_id' => '',
              'menu_class' => 'navbar-nav',
              'echo' => true,
              'fallback_cb' => 'fedcon_header_fallback_menu',
              'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth' => 2,
              'walker' => new WP_Bootstrap_Navwalker()
            );
            wp_nav_menu($header_nav_args);
          ?>

        </nav>
      </div>
    </header>

  <?php if(is_front_page()): ?>
    <section id="hp-hero" class="hp-hero">
      <div id="hero-carousel" class="carousel slide carousel-fade" data-ride="">
        <div class="carousel-inner">
          <div class="carousel-item active" style="background-image:url(images/speaking-in-front-of-crowd.jpg);"></div>
          <div class="carousel-item" style="background-image:url(images/slide-2.jpg);"></div>
          <div class="carousel-item" style="background-image:url(images/slide-3.jpg);"></div>
          <div class="carousel-item" style="background-image:url(images/slide-4.jpg);"></div>

          <div class="dark-overlay"></div>
          <div class="container">
            <div class="carousel-caption">
              <h1 id="slide-title-0" class="caption-title animated slideInRight title-show">Event Planning</h1>
              <h1 id="slide-title-1" class="caption-title animated">Slide 2</h1>
              <h1 id="slide-title-2" class="caption-title animated">Slide 3</h1>
              <h1 id="slide-title-3" class="caption-title animated">Slide 4</h1>
              <p>is what we do<span>and we do it extremely well!</span></p>
            </div>
          </div>
        </div>

        <ol class="carousel-indicators">
          <li data-target="#hero-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#hero-carousel" data-slide-to="1"></li>
          <li data-target="#hero-carousel" data-slide-to="2"></li>
          <li data-target="#hero-carousel" data-slide-to="3"></li>
        </ol>
      </div>
    </section>
  <?php else: ?>
    <section class="hero" style="background-image:url(images/back-of-audience.jpg); background-position:center center;">
      <div class="hero-caption d-flex justify-content-center align-items-center h-100">
        <h1>About Us</h1>
      </div>
      <div class="dark-overlay"></div>
    </section>
  <?php endif; ?>