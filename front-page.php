<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <article>
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post();
              the_content();
            }
          }
        ?>
      </article>
      <article>
        <h2>Our Services</h2>
        <div class="panel-group" id="services" role="tablist" aria-multiselectable="true">
          <div class="row">
            <?php $i=1; if(have_rows('our_services_column_1')): ?>
              <div class="col-sm-6">
                <?php $i=1; while(have_rows('our_services_column_1')): the_row(); ?>

                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="service-heading-<?php echo $i; ?>">
                      <h4 class="panel-title">
                        <a href="#service-<?php echo $i; ?>" class="collapsed" role="button" data-toggle="collapse" data-parent="#services" aria-expanded="false" aria-controls="service-<?php echo $i; ?>"><?php the_sub_field('service_title'); ?></a>
                      </h4>
                    </div>
                    <div id="service-<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="service-heading-<?php echo $i; ?>">
                      <div class="panel-body">
                        <ul>
                          <?php if(have_rows('services')): while(have_rows('services')): the_row(); ?>
                            <li><?php the_sub_field('service'); ?></li>
                          <?php endwhile; endif; ?>
                        </ul>
                      </div>
                    </div>
                  </div>

                <?php $i++; endwhile; ?>
              </div>
            <?php endif; ?>

            <?php if(have_rows('our_services_column_2')): ?>
              <div class="col-sm-6">
                <?php while(have_rows('our_services_column_2')): the_row(); ?>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="service-heading-<?php echo $i; ?>">
                      <h4 class="panel-title">
                        <a href="#service-<?php echo $i; ?>" class="collapsed" role="button" data-toggle="collapse" data-parent="#services" aria-expanded="false" aria-controls="service-<?php echo $i; ?>"><?php the_sub_field('service_title'); ?></a>
                      </h4>
                    </div>
                    <div id="service-<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="service-heading-<?php echo $i; ?>">
                      <div class="panel-body">
                        <ul>
                          <?php if(have_rows('services')): while(have_rows('services')): the_row(); ?>
                            <li><?php the_sub_field('service'); ?></li>
                          <?php endwhile; endif; ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                <?php $i++; endwhile; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </article>

      <?php if(get_field('our_expertise_section')): ?>
        <article>
          <?php the_field('our_expertise_section'); ?>
        </article>
      <?php endif; ?>

      <?php if(get_field('your_event_section')): ?>
        <article id="your-event">
          <?php the_field('your_event_section'); ?>
        </article>
      <?php endif; ?>

    </div>
  </main>

  <div id="contact-section">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stripes-upsidedown.png" class="img-responsive stripe-upsidedown" alt="" />
    <div class="container">
      <?php the_field('contact_section_text'); ?>
      <div class="row">
        <div class="col-sm-6">
          <h2 class="email-link">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/envelope-icon.png" class="center-block" alt="" />
            <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
          </h2>
        </div>
        <div class="col-sm-6">
          <h2 class="phone-link">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/phone-icon.png" class="center-block" alt="" />
            <a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a>
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div id="sign-up-section">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stripes-2.png" class="img-responsive stripe-2" alt="" />
    <div class="container">
      <?php the_field('sign_up_section_intro'); ?>
      <?php echo do_shortcode(get_field('contact_form_shortcode')); ?>
    </div>
  </div>

<?php get_footer(); ?>