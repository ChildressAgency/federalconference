<?php get_header(); ?>
<main id="main">
  <div class="container">
    <h2 class="article-header title-border-none fedcon-green"><?php esc_html_e('Search', 'fedcon'); ?><small class="fedcon-light-blue"><?php printf(esc_html__('Showing results for "%s"', 'fedcon'), get_search_query()); ?></small></h2>
    <?php get_search_form(); ?>
    
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <div class="article_excerpt">
        <h2 class="article-header title-border-none fedcon-green"><?php the_title(); ?></h2>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" class="read-more">Read More...</a> 
      </div>
    <?php endwhile; else: ?>
      <p><?php esc_html_e('Sorry, nothing was found.', 'fedcon'); ?></p>
    <?php endif; ?>
  </div>
</main>
<?php get_footer();