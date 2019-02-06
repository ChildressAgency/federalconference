<?php get_header(); ?>
    <main id="hp-main">
      <section id="solutions">
        <div class="container">
          <div class="row no-gutters">
            <div class="col-md-6">
              <?php fedcon_article_section('first_section_content'); ?>
            </div>
          </div>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/people-around-table.png" class="img-fluid" alt="" />
      </section>

      <section id="services">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <?php fedcon_article_section('services_section_content'); ?>
            </div>
            <div class="col-md-5">
              <div class="row">
                <?php 
                  $featured_services = get_field('featured_services');
                  if($featured_services):
                    foreach($featured_services as $featured_service): ?>
                      <div class="col-6">
                        <a href="<?php echo esc_url(get_permalink($featured_service->ID)); ?>" class="service-icon">
                          <div class="animated spin">
                            <?php fedcon_esc_svg(get_field('service_icon', $featured_service->ID)); ?>
                          </div>
                          <h3><?php echo esc_html(get_the_title($featured_service->ID)); ?></h3>
                        </a>
                      </div>
                <?php endforeach; endif; ?>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php
        $video = get_field('video_section_video');
        if($video): ?>
          <section id="hp-video">
            <div class="container">
              <div class="row">
                <div class="col-sm-6">
                  <?php fedcon_article_section('video_section_content'); ?>
                </div>
                <div class="col-sm-6">
                  <div class="embed-responsive embed-responsive-16by9">
                    <?php echo $video; ?>
                  </div>
                </div>
              </div>
            </div>
          </section>
      <?php endif; ?>

      <?php get_template_part('includes/contact', 'section'); ?>

      <?php if(have_rows('testimonials')): ?>
        <section id="testimonials">
          <div class="container">
            <h2 class="article-header <?php echo get_field('testimonials_section_title_color'); ?>"><?php echo esc_html(get_field('testimonials_section_title')); ?><small class="<?php echo get_field('testimonials_section_subtitle_color'); ?>"><?php echo esc_html(get_field('testimonials_section_subtitle')); ?></small></h2>
            <div id="testimonial-slider" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <?php $t = 0; while(have_rows('testimonials')): the_row(); ?>
                  <div class="carousel-item<?php if($t == 0){ echo ' active'; } ?>">
                    <?php echo wp_kses_post(get_sub_field('testimonial')); ?>
                    <cite>&mdash; <?php echo esc_html(get_sub_field('testimonial_author')); ?></cite>
                  </div>
                <?php $t++; endwhile; ?>
              </div>

              <a href="#testimonial-slider" class="carousel-control-prev" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true">&lt;</span>
                <span class="sr-only"><?php _e('Previous', 'fedcon'); ?></span>
              </a>
              <a href="#testimonial-slider" class="carousel-control-next" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true">&gt;</span>
                <span class="sr-only"><?php _e('Next', 'fedcon'); ?></span>
              </a>
              <span class="slide-counter">1 / <?php echo $t; ?></span>
            </div>
          </div>
        </section>
      <?php endif; ?>

      <?php
        $recent_posts = new WP_Query(array(
          'post_type' => 'post',
          'post_status' => 'publish',
          'posts_per_page' => 4
        ));

        if($recent_posts->have_posts()): ?>
          <section id="past-projects">
            <div class="container">
              <?php fedcon_article_section('news_media_section_intro'); ?>
            </div>
            <div class="container-fluid">
              <div class="row justify-content-center">
                <?php while($recent_posts->have_posts()): $recent_posts->the_post(); ?>
                  <div class="col-12 col-sm-6 col-lg-3 no-gutter">
                    <?php get_template_part('includes/blog-img-link'); ?>
                  </div>
                <?php endwhile; ?>
              </div>
            </div>
          </section>
      <?php endif; wp_reset_postdata(); ?>

      <section id="join-us">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stripes-angle-top-right.png" class="img-fluid top-stripes" alt="" />
        <div class="content-center mx-auto w-75 text-center">
          <h2><?php echo esc_html(get_field('careers_section_title')); ?></h2>
          <?php echo wp_kses_post(get_field('careers_section_content')); ?>
          <a href="<?php echo esc_url(home_url('careers')); ?>" class="btn-main"><?php esc_html_e('Join Us', 'fedcon'); ?></a>
        </div>
      </section>

      <?php 
        $awards = get_post_meta($page_id, 'awards', true);
        if($awards): ?>
          <section id="history">
            <div class="container">
              <h2 class="article-header title-border-none fedcon-green"><?php echo esc_html(get_field('awards_section_title')); ?></h2>
              <ul class="list-inline text-center">
                <?php for($a = 0; $a < $awards; $a++): ?>
                  <li class="list-inline-item">
                    <?php 
                      $award_img_id = get_post_meta($page_id, 'awards_' . $a . '_award_image', true);
                      $award_img = wp_get_attachment_image_src($award_img_id, 'full');
                      $award_img_url = $award_img[0];
                      $award_img_alt = get_post_meta($award_img_id, '_wp_attachment_image_alt', true);

                      $award_link = get_post_meta($page_id, 'awards_' . $a . '_award_link', true);
                      $award_title = get_post_meta($page_id, 'awards_' . $a . '_award_title', true);
                    ?>
                    <img src="<?php echo esc_url($award_img_url); ?>" class="img-fluid" alt="<?php echo esc_attr($award_img_alt); ?>" />
                    <a href="<?php echo $award_link ? esc_url($award_link) : '#'; ?>"><?php echo esc_html($award_title); ?></a>
                  </li>
                <?php endfor; ?>
              </ul>
            </div>
          </section>
      <?php endif; ?>
    </main>
<?php get_footer();