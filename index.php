<?php get_header(); ?>
<main id="main">
  <div class="container">
    
    <?php if(have_posts()): ?>
      <?php if($wp_query->post_count > 1): ?>
        <?php //archive loop ?>
        <div class="article-excerpt">
          <h2 class="article-header title-border-none fedcon-green"><?php the_title(); ?></h2>
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>" class="read-more">Read More...</a>
        </div>
      <?php else: ?>
        <?php //single result ?>
        <article class="blog-article">
          <h2 class="article-header title-border-none fedcon-green"><?php the_title(); ?></h2>
          <div class="article-body">
            <?php the_content(); ?>
          </div>
        </article>
      <?php endif; ?>
    <?php else: ?>
      <?php //no posts found ?>
      <p><?php esc_html_e('Sorry, nothing was found.', 'fedcon'); ?>
    <?php endif; ?>
  </div>
</main>
<?php get_footer();