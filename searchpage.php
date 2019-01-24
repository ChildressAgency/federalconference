<?php
/*
  Template Name: Search Page
*/
// https://codex.wordpress.org/Creating_a_Search_Page

get_header(); ?>
<main id="main">
  <div class="container">
    <h2 class="article-header title-border-none fedcon-green"><?php esc_html_e('Search', 'fedcon'); ?></h2>
    <?php get_search_form(); ?>
  </div>
</main>
<?php get_footer();