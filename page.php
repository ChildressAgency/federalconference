<?php get_header(); ?>
<section id="page-intro">
  <div class="container">
    <?php fedcon_article_section('page_intro'); ?>
  </div>
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stripes-angle-bottom-left.png" class="bottom-stripes" alt="" />
</section>
<?php 
  $page_sections = get_field('page_sections');
  if($page_sections){
    for($i = 0; $i < $page_sections; $i++){
      echo '<section class="page-section">';
        fedcon_article_section('page_section_' . $i);
      echo '</section>';
    }
  }
?>
<?php get_footer();