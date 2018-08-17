<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="">

  <meta http-equiv="cache-control" content="public">
  <meta http-equiv="cache-control" content="private">

  <title>Federal Conference</title>

  <?php wp_head(); ?>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
  <header id="header">
    <div class="container">
      <a href="<?php echo home_url(); ?>" class="header-logo">
        <?php $header_logo = get_field('header_logo', 'option'); ?>
        <img src="<?php echo $header_logo['url']; ?>" class="img-responsive pull-left" alt="<?php echo $header_logo['alt']; ?>" />
      </a>
      <div class="social pull-right">
        <?php if(get_field('linkedin', 'option')): ?>
          <a href="<?php the_field('linkedin', 'option'); ?>" target="_blank" class="text-hide">LinkedIn<i class="fab fa-linkedin"></i></a>
        <?php endif; if(get_field('twitter', 'option')): ?>
          <a href="<?php the_field('twitter', 'option'); ?>" target="_blank" class="text-hide">Twitter<i class="fab fa-twitter-square"></i></a>
        <?php endif; if(get_field('facebook', 'option')): ?>
          <a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="text-hide">Facebook<i class="fab fa-facebook"></i></a>
        <?php endif; ?>
      </div>
    </div>
  </header>

  <div id="hp-hero" class="hero">
    <div class="container">
      <div class="hero-caption">
        <div class="row">
          <div class="col-sm-6">
            <h1>On Time.<br />On Budget.<br />Unforgettable.<br /><small>Our expertise is your event</small></h1>
          </div>
          <div class="col-sm-6">
            <div class="embed-responsive embed-responsive-16by9">
              <?php if(get_field('hero_video')):
                $hero_video = get_field('hero_video');
                $hero_video = str_replace('></iframe>', ' class="embed-responsive-item"></iframe>', $hero_video);
                echo $hero_video;
              else: ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video-placeholder.png" class="img-responsive center-block" alt="" />
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="hero-sub-caption">
        <h2><em>NEW WEBSITE COMING SOON!</em></h2>
        <p>Scroll down to learn more</p>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/down-arrow.png" alt="" />
      </div>
    </div>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stripes.png" class="stripes" alt="" />
  </div>
