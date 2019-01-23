<?php
if(get_field('use_settings_from_home_page')){
  $page_id = get_option('page_on_front');
}
else{
  $page_id = get_the_ID();
}
  $contact_img_id = get_post_meta($page_id, 'contact_section_background_image', true);
  $contact_img = wp_get_attachment_image_src($contact_img_id, 'full');
  $contact_img_url = $contact_img[0];
  $contact_img_css = get_field('contact_section_background_image_css', $page_id);
?>
<section id="start" style="background-image:url(<?php echo esc_url($contact_img_url); ?>); <?php echo $contact_img_css; ?>">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stripes-angle-top-left-white.png" class="img-fluid top-stripes" alt="" />
  <div class="content-center mx-auto text-center">
    <h2><?php echo esc_html(get_field('contact_section_title', $page_id)); ?></h2>
    <?php echo wp_kses_post(get_field('contact_section_content', $page_id)); ?>
    <a href="<?php echo esc_url(home_url('contact-us')); ?>" class="btn-main"><?php _e('Contact Us', 'fedcon'); ?></a>
  </div>
  <div class="light-overlay"></div>
</section>