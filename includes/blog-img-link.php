<?php $post_img_url = get_the_post_thumbnail_url(get_the_ID()); ?>
  <a href="<?php the_permalink(); ?>" class="img-link d-flex align-items-center justify-content-center" style="background-image:url(<?php echo esc_url($post_img_url); ?>);">
    <div class="hover-content">
      <h3><?php the_title(); ?></h3>
      <div class="img-link-overlay"></div>
    </div>
  </a>