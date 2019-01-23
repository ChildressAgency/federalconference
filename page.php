<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <article class="blog-article">
          <h2 class="article-header title-border-none fedcon-green"><?php the_title(); ?></h2>
          <div class="article-body">
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile; else: ?>
        <p><?php esc_html_e('Sorry, nothing was found.', 'fedcon'); ?></p>
      <?php endif; ?>
    </div>
  </main>
<?php get_footer();