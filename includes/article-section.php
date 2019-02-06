<article>
  <h2 class="article-header <?php echo esc_attr(get_field($section_name . '_title_border_color')) . ' ' . esc_attr(get_field($section_name . '_title_color')); ?>"><?php echo esc_html(get_field($section_name . '_title')); ?><small class="<?php echo esc_attr(get_field($section_name . '_subtitle_color')); ?>"><?php echo esc_html(get_field($section_name . '_subtitle')); ?></small></h2>
  <div class="article-body">
    <?php echo wp_kses_post(get_field($section_name . '_article')); ?>
    <?php
      $button = get_field($section_name . '_article_button');
      if($button['link']){
        $button_link = $button['link'];
        $button_link_url = $button_link['url'];
        $button_link_text = $button_link['title'];
        $button_link_target = $button_link['target'] ? $button_link['target'] : '_self';
        $button_class = $button['style'];

        echo '<a href="' . esc_url($button_link_url) . '" class="' . esc_attr($button_class) . '" target="' . esc_attr($button_link_target) . '">' . esc_html($button_link_text) . '</a>';
      }
    ?>
  </div>
</article>
<div class="clearfix"></div>