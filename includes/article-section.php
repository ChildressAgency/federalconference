<article class="hp-article">
  <h2 class="article-header <?php echo get_field($section_name . '_title_border_color') . ' ' . get_field($section_name . '_title_color'); ?>"><?php echo esc_html(get_field($section_name . '_title')); ?><small class="<?php echo get_field($section_name . '_subtitle_color'); ?>"><?php echo esc_html(get_field($section_name . '_subtitle')); ?></small></h2>
  <div class="article-body">
    <?php echo wp_kses_post(get_field($section_name . '_article')); ?>
  </div>
</article>
