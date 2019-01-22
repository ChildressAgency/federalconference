<?php get_header(); ?>
    <section id="careers-intro">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <?php fedcon_article_section('intro_section_content'); ?>
          </div>
          <div class="col-md-5 d-flex flex-column justify-content-center align-items-center">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/man-on-soapbox.png" class="img-fluid" alt="" />
          </div>
        </div>
      </div>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stripes-angle-bottom-left.png" class="img-fluid bottom-stripes" alt="" />
    </section>

    <section id="company-culture">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <?php fedcon_article_section('company_culture_content'); ?>
          </div>
          <?php
            $company_culture_img_id = get_post_meta(get_the_ID(), 'company_culture_image', true);
            $company_culture_img = wp_get_attachment_image_src($company_culture_img_id, 'full');
            $company_culture_img_url = $company_culture_img[0];
            $company_culture_img_alt = get_post_meta($company_culture_img_id, '_wp_attachment_image_alt', true);
          ?>
          <div class="col-md-5 d-flex flex-column justify-content-center align-items-center">
            <img src="<?php echo esc_url($company_culture_img_url); ?>" class="img-fluid" alt="<?php echo esc_attr($company_culture_img_alt); ?>" />
          </div>
        </div>
      </div>
    </section>

    <section id="benefits-openings-eoe">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 no-gutter">
            <section id="benefits">
              <?php fedcon_article_section('employee_benefits'); ?>
            </section>
          </div>
          <div class="col-md-6 no-gutter flex-column">
            <?php
              $openings_bg_img_id = get_post_meta(get_the_ID(), 'openings_section_background_image', true);
              $openings_bg_img = wp_get_attachment_image_src($openings_bg_img_id, 'full');
              $openings_bg_img_url = $openings_bg_img[0];
              $openings_bg_img_css = get_post_meta(get_the_ID(), 'openings_section_background_image_css', true);
            ?>
            <section id="openings" class="d-flex flex-column justify-content-center align-items-center text-center" style="background-image:url(<?php echo esc_url($openings_bg_img_url); ?>); <?php echo esc_html($openings_bg_img_css); ?>">
              <div class="content-center">
                <h2><?php echo esc_html(get_field('openings_section_title'); ?></h2>
                <?php echo wp_kses_post(get_field('openings_section_content')); ?>
                <a href="<?php echo esc_url('openings_section_link'); ?>" class="btn-main"><?php esc_html_e('Jobs', 'fedcon'); ?></a>
              </div>
              <div class="dark-overlay"></div>
            </section>
            <section id="eoe">
              <div class="eoe-inner mx-auto">
                <h3><?php echo esc_html(get_field('eoe_section_title')); ?></h3>
                <?php echo wp_kses_post(get_field('eoe_section_content')); ?>
              </div>
            </section>
          </div>
        </div>
      </div>
    </section>

    <section id="apply">
      <div class="container">
        <?php fedcon_article_section('apply_section'); ?>
      </div>
    </section>
<?php get_footer();