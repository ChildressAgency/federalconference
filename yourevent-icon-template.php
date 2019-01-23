<?php
/**
 * Template Name: Your Event Icon Template
 */
get_header(); ?>
    <section id="expertise-intro">
      <div class="container">
        <?php fedcon_article_section('yourevent_intro'); ?>
      </div>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stripes-angle-bottom-left.png" class="bottom-stripes" alt="" />
    </section>

    <section id="expertise-links">
      <div class="container">
        <article>
          <?php fedcon_article_section('yourevent_section'); ?>
          <div class="article-body">
            <div class="row">
              <?php
                $expertise = new WP_Query(array(
                  'post_type' => 'yourevent',
                  'post_status' => 'publish',
                  'posts_per_page' => -1
                ));
                if($expertise->have_posts()): while($expertise->have_posts()): $expertise->the_post(); ?>
                  <div class="col-sm-6 col-md-4">
                    <a href="<?php the_permalink(); ?>" class="service-icon">
                      <div class="animated spin">
                        <?php fedcon_esc_svg(get_field('service_icon')); ?>
                      </div>
                      <h3><?php the_title(); ?></h3>
                    </a>
                  </div>
              <?php endwhile; endif; wp_reset_postdata(); ?>
            </div>
          </div>
        </article>
      </div>
    </section>
<?php get_footer();