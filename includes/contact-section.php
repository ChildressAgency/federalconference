<?php
$page_id = get_the_ID();
$use_home_page_settings = get_post_meta($page_id, 'use_settings_from_home_page', true);

if($use_home_page_settings == '' || $use_home_page_settings == 1 || $use_home_page_settings == true){
  //$page_id = get_option('page_on_front');
  $home_page = get_page_by_path('home');
  $page_id = $home_page->ID;
}

  $contact_img_id = get_post_meta($page_id, 'contact_section_background_image', true);
  $contact_img = wp_get_attachment_image_src($contact_img_id, 'full');
  $contact_img_url = $contact_img[0];
  $contact_img_css = get_post_meta($page_id, 'contact_section_background_image_css', true);
?>
<section id="start" style="background-image:url(<?php echo esc_url($contact_img_url); ?>); <?php echo $contact_img_css; ?>">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stripes-angle-top-left-<?php echo is_front_page() ? 'gray' : 'white'; ?>.png" class="img-fluid top-stripes" alt="" />
  <div class="content-center mx-auto text-center">
    <h2><?php echo esc_html(get_post_meta($page_id, 'contact_section_title', true)); ?></h2>
    <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'contact_section_content', true))); ?>
    <a href="<?php echo esc_url(home_url('contact-us')); ?>" class="btn-main"><?php _e('Contact Us', 'fedcon'); ?></a>
  </div>
  <div class="light-overlay"></div>
</section>