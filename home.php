<?php get_header(); ?>
    <main id="main">
      <div class="container">
        <?php if(have_posts()): ?>
          <div class="row blog-list">
            <?php while(have_posts()): the_post(); ?>
              <div class="col-12 col-md-6 col-lg-4">
                <?php get_template_part('includes/blog-img-link'); ?>
              </div>
            <?php endwhile; ?>
          </div>
          <div class="pagination text-center d-block mt-5">
            <a href="#" class="btn-main load-more">Load More</a>
          </div>
        <?php else: ?>
          <p><?php esc_html_e('Sorry, nothing was found.', 'fedcon'); ?></p>
        <?php endif; ?>
      </div>
    </main>
<?php get_footer();