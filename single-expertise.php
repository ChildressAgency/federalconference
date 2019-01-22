<?php get_header(); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <nav id="sidebar-nav">
          <ul class="nav flex-column">
            <?php
              $page_id = get_the_ID();
              $expertise = new WP_Query(array(
                'post_type' => 'expertise',
                'post_status' => 'publish',
                'posts_per_page' => -1
              ));
              if($expertise->have_posts()): while($expertise->have_posts()): $expertise->the_post(): ?>
                <?php $expertise_id = get_the_ID(); ?>
                <li class="nav-item<?php if($page_id == $expertise_id){ echo ' active'; } ?>"><a href="<?php the_permalink(); ?>" class="nav-link"><?php the_title(); ?></a></li>
            <?php endwhile; endif; wp_reset_postdata(); ?>
          </ul>
        </nav>
      </div>
      <div class="col-md-8">
        <main id="main">
          <article class="blog-article">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile; else: ?>
              <p><?php esc_html_e('Sorry, nothing was found.', 'fedcon'); ?></p>
            <?php endif; ?>
          </article>
        </main>
      </div>
    </div>
  </div>
<?php get_footer();