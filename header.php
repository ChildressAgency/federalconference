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
      <div id="hero-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <?php
            $page_id = get_the_ID();
            $slides = get_post_meta($page_id, 'hero_slides', true);
            if($slides):
              for($i = 0; $i < $slides; $i++){
                $slide_img_id = get_post_meta($page_id, 'hero_slides_' . $i . '_slide', true);
                $slide_img = wp_get_attachment_image_src($slide_img_id, 'full');
                $slide_img_url = $slide_img[0];

                $slide_css = get_post_meta($page_id, 'hero_slides_' . $i . '_slide_css', true);
                $active = ($i == 0) ? ' active' : '';
                echo '<div class="carousel-item' . $active . '" style="background-image:url(' . esc_url($slide_img_url) . ');' . $slide_css . '"></div>';
              } ?>
              <div class="dark-overlay"></div>
              <div class="container">
                <div class="carousel-caption">
                  <?php 
                    for($i = 0; $i < $slides; $i++){
                      $slide_title = get_post_meta($page_id, 'hero_slides_' . $i . '_title', true);
                      $initial_title = ($i == 0) ? ' slideInRight title-show' : '';
                      echo '<h1 id="slide-title-' . $i . '" class="caption-title animated' . $initial_title . '">' . esc_html($slide_title) . '</h1>';
                    }
                  ?>
                  <p><?php echo sprintf('%s<span>%s</span>', esc_html_x('is what we do', 'First part of subtitle', 'fedcon'), esc_html_x('and we do it extremely well!', 'second part of subtitle', 'fedcon')); ?></p>
                </div>
              </div>
          <?php endif; ?>
        </div>

        <ol class="carousel-indicators">
          <?php 
            for($i = 0; $i < $slides; $i++){
              $active = ($i == 0) ? ' class="active"' : '';
              echo '<li data-target="#hero-carousel" data-slide-to="' . $i . '"' . $active . '></li>';
            }
          ?>
        </ol>
      </div>
    </section>
  <?php else:
    if(is_home() || is_singular('post')){
      $page_id = fedcon_get_page_id('news-media');
    }
    else{
      $page_id = get_the_ID();
    }

    $hero_img_id = get_post_meta($page_id, 'hero_image', true);
    $hero_img_css = get_field('hero_image_css', $page_id);

    if(!$hero_img_id || $hero_img_id == ''){
      $hero_img_id = get_option('options_default_hero_image');
      $hero_img_css = get_option('options_default_hero_image_css');
    }

    $hero_img = wp_get_attachment_image_src($hero_img_id, 'full');
    $hero_img_url = $hero_img[0];
  ?>
    <section class="hero" style="background-image:url(<?php echo esc_url($hero_img_url); ?>);<?php echo $hero_img_css ? $hero_img_css : ''; ?>">
      <div class="hero-caption d-flex justify-content-center align-items-center h-100">
        <h1><?php echo get_field('hero_title', $page_id) ? esc_html(get_field('hero_title', $page_id)) : esc_html(get_the_title()); ?></h1>
      </div>
      <div class="dark-overlay"></div>
    </section>
  <?php endif; ?>