<?php get_header(); ?>
  <section id="contact">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 no-gutter">
          <section id="contact-info" class="d-flex flex-column justify-content-start h-100">
            <div class="contact-info media flex-column flex-sm-row">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cell-phone-icon.png" class="align-self-center mx-4" alt="" />
              <div class="media-body align-self-center">
                <h2><?php esc_html_e('Call Us', 'fedcon'); ?></h2>
                <?php $phone = get_field('phone_number', 'option'); ?>
                <a href="tel:<?php echo esc_attr($phone); ?>"><?php echo esc_html($phone); ?></a>
              </div>
            </div>
            <div class="contact-info media flex-column flex-sm-row">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/email-icon.png" class="align-self-center mx-4" alt="" />
              <div class="media-body align-self-center">
                <h2><?php esc_html_e('Email Us', 'fedcon'); ?></h2>
                <?php $email = sanitize_email(get_field('email_address', 'option')); ?>
                <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
              </div>
            </div>
            <div class="contact-info media flex-column flex-sm-row">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/map-marker-icon.png" class="align-self-center mx-4" alt="" />
              <div class="media-body align-self-center">
                <h2><?php esc_html_e('Find Us', 'fedcon'); ?></h2>
                <p><?php echo esc_html(get_field('street_address', 'option')); ?><br /><?php echo esc_html(get_field('city_state_zip', 'option')); ?></p>
              </div>
            </div>
            <div class="contact-info media flex-column flex-sm-row">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/printer-icon.png" class="align-self-center mx-4" alt="" />
              <div class="media-body align-self-center">
                <h2><?php esc_html_e('Fax Us', 'fedcon'); ?></h2>
                <p><?php echo esc_html('fax_number', 'option'); ?></p>
              </div>
            </div>
          </section>
        </div>
        <div class="col-md-6 no-gutter">
          <section id="contact-form">
            <header>
              <h2><?php echo esc_html(get_field('contact_form_intro_title')); ?></h2>
              <?php echo wp_kses_post(get_field('contact_form_intro')); ?>
            </header>
            <?php echo do_shortcode(get_field('contact_form_shortcode')); ?>
          </section>
        </div>
      </div>
    </div>
  </section>

  <section id="google-map">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stripes-angle-top-left.png" class="top-stripes" alt="" />
    <div class="container-fluid h-100">
      <div class="row h-100">
        <div class="col-12 no-gutter h-100">
          <div class="embed-responsive embed-responsive-16by9 h-100">
            <?php fedcon_esc_iframe(get_field('google_map_iframe')); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer();