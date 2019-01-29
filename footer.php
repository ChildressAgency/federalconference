<?php 
  if(!is_front_page() && !is_page('contact-us') && !is_page('careers')){
    get_template_part('includes/contact', 'section');
  }
?>

    <footer id="footer" class="d-flex align-items-stretch">
      <div class="container-fluid">
        <div class="row">
          <div id="footer-contact-nav" class="col-12 col-md-8 col-lg-9 order-2 order-md-1">
            <div id="logo-contact-info" class="row no-gutters justify-content-center">
              <div class="col-sm-3">
                <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-compact.png" class="img-fluid" alt="<?php echo esc_html(bloginfo('name')); ?> Logo" /></a>
              </div>
              <div class="col-sm-9 flex-column align-self-center">
                <div class="contact-info text-center">
                  <p><?php echo get_field('street_address', 'option') ? esc_html(get_field('street_address', 'option')) . ', ' : ''; ?><?php echo esc_html(get_field('city_state_zip', 'option')); ?></p>
                  <ul class="list-inline">
                    <?php 
                      $phone = esc_attr(get_field('phone_number', 'option'));
                      if($phone){
                        echo '<li class="list-inline-item"><p>Phone: <a href="tel:' . $phone . '">' . $phone . '</a></p></li>';
                      }
                    
                      $fax = esc_attr(get_field('fax_number', 'option'));
                      if($fax){
                        echo '<li class="list-inline-item"><p>Fax: ' . $fax . '</p></li>';
                      }

                      $email = sanitize_email(get_field('email_address', 'option'));
                      if($email){
                        echo '<li class="list-inline-item"><p><a href="mailto:' . $email . '">' . $email . '</a></p></li>';
                      }
                    ?>
                  </ul>
                </div>
              </div>
            </div>
            <div class="nav-copyright">
              <?php
                $footer_nav_args = array(
                  'theme_location' => 'footer-nav',
                  'menu' => '',
                  'container' => 'nav',
                  'container_id' => 'footer-nav',
                  'container_class' => 'd-flex justify-content-center navbar-expand',
                  'menu_id' => '',
                  'menu_class' => 'navbar-nav flex-row flex-wrap justify-content-center',
                  'echo' => true,
                  'fallback_cb' => 'fedcon_footer_fallback_menu',
                  'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  'depth' => 1
                );
                wp_nav_menu($footer_nav_args);
              ?>

              <div class="copyright text-center">
                <ul class="list-inline">
                  <li class="list-inline-item">&copy;<?php echo date('Y'); ?> <?php echo esc_html(bloginfo('name')); ?></li>
                  <li class="list-inline-item">
                    <a href="<?php esc_url(home_url('privacy-policy')); ?>"><?php esc_html_e('Privacy Policy', 'fedcon'); ?></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="<?php esc_url(home_url('terms-and-conditions')); ?>"><?php esc_html_e('Terms and Conditions', 'fedcon'); ?></a>
                  </li>
                  <li class="list-inline-item">Website created by <a href="https://childressagency.com">The Childress Agency</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="footer-social" class="col-12 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center order-1 order-md-2">
            <h4>Stay in touch</h4>
            <div class="social">
              <?php
                $facebook = get_field('facebook', 'option');
                $twitter = get_field('twitter', 'option');
                $linkedin = get_field('linkedin', 'option');
                $email = get_field('email_address', 'option');

                if($facebook): ?>
                  <a href="<?php echo esc_url($facebook); ?>" class="facebook"><i class="fab fa-facebook-square"></i><span class="sr-only">Facebook</span></a>
              <?php endif; if($twitter): ?>
                <a href="<?php echo esc_url($twitter); ?>" class="twitter"><i class="fab fa-twitter-square"></i><span class="sr-only">Twitter</span></a>
              <?php endif; if($linkedin): ?>
                <a href="<?php echo esc_url($linkedin); ?>" class="linkedin"><i class="fab fa-linkedin"></i><span class="sr-only">LinkedIn</span></a>
              <?php endif; if($email): ?>
                <a href="<?php echo sanitize_email($email); ?>" class="email"><i class="far fa-envelope"></i><span class="sr-only">Email</span></a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>