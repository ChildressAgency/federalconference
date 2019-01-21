<?php get_header(); ?>
<main id="main">
  <div class="container">
    
    <?php if(have_posts()): ?>
      <?php if($wp_query->post_count > 1): ?>
        <?php //archive loop ?>
      <?php else: ?>
        <?php //single result ?>
      <?php endif; ?>
    <?php else: ?>
      <?php //no posts found ?>
    <?php endif; ?>
  </div>
</main>
<?php get_footer();