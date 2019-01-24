<?php 
/**
 * Template Name: Sectioned Page Template
 * Description: A page template with intro section. Each additional section alternates the background color.
 */
get_header(); ?>

<?php if(get_field('page_intro_title') || get_field('page_intro_subtitle') || get_field('page_intro_article')): ?>
<section id="page-intro">
  <div class="container">
    <?php fedcon_article_section('page_intro'); ?>
  </div>
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stripes-angle-bottom-left.png" class="bottom-stripes" alt="" />
</section>
<?php endif; ?>
<?php 
  //$page_sections = get_field('page_sections');
  $page_id = get_the_ID();
  $page_sections = get_post_meta($page_id, 'page_sections', true);
  if($page_sections){
    for($i = 0; $i < $page_sections; $i++){
      echo '<section class="page-section"><div class="container">';
        fedcon_article_section('page_sections_' . $i . '_page_section');
      echo '</div></section>';
    }
  }
?>
<?php get_footer();