<?php get_header(); ?>
    <section id="different">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <?php fedcon_article_section('intro_section_content'); ?>
          </div>
          <div class="col-md-5 d-flex flex-column justify-content-center align-items-center">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Corevaluesicongroup.png" class="img-fluid" alt="" />
          </div>
        </div>
      </div>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stripes-angle-bottom-left.png" class="bottom-stripes" alt="" />
    </section>

    <section id="history-awards">
      <div class="container">
        <?php fedcon_article_section('history_section_content'); ?>
          <!-- Icons as ACF-->
            <?php if( have_rows('missions') ): ?>
              <ul class="missions">
            	<?php while( have_rows('missions') ): the_row(); 
	         	// vars
	         	$image = get_sub_field('icon');
         		$title = get_sub_field('title');
         		$content = get_sub_field('content');
	        	?>
	              <li class="mission col-sm-4">
			    	<?php 
                        if( !empty( $image ) ): ?>
                          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-thumbnail" />
                       <?php endif; ?>
		             <h2 class="m_icon_title d-flex justify-content-center align-items-center"><?php echo $title; ?></h2>
		            <div class="d-flex justify-content-center align-items-center">
		             <h3 class="m_icon_title"><?php echo $content; ?></h3>
		            </div>
                	<?php endwhile; ?>
            	</ul>

            <?php endif; ?>
           </div>
     </section>

    <?php
      $page_id = get_the_ID();
      $gov_section_bg_img_id = get_post_meta($page_id, 'government_section_background_image', true);
      $gov_section_bg_img = wp_get_attachment_image_src($gov_section_bg_img_id, 'full');
      $gov_section_bg_img_url = $gov_section_bg_img[0];
      $gov_section_bg_img_css = get_field('government_section_background_image_css');
    ?>
    <section id="government-events" style="background-image:url(<?php echo esc_url($gov_section_bg_img_url); ?>); <?php echo esc_html($gov_section_bg_img_css); ?>">
      <div class="content-center mx-auto w-75 text-center">
        <h2><?php echo esc_html(get_field('government_section_title')); ?></h2>
        <?php echo wp_kses_post(get_field('government_section_content')); ?>
        <a href="<?php echo esc_url(home_url('government')); ?>" class="btn-main"><?php esc_html_e('Learn More', 'fedcon'); ?></a>
      </div>
      <div class="dark-overlay"></div>
    </section>
    
    <section id="interactive_map" style="padding-top:0;">

      <?php
        $map_location = new WP_Query(array(
          'post_type' => 'location',
          'posts_per_page' => -1,
          'post_status' => 'publish'
        ));
        if($map_location->have_posts()): ?>
          <div class="location-map embed-responsive embed-responsive-1by1">
            <?php while($map_location->have_posts()): $map_location->the_post(); ?>

              <?php $location = get_field('google_map_maker_location'); ?>
              <?php if($location): ?>
                <?php $marker_type = get_field('google_map_marker_type'); ?>
                <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>" data-marker_type="<?php echo esc_attr($marker_type); ?>">
                  <h4><?php echo esc_html__('Federal Conference', 'fedcon'); ?><br /><small><?php echo esc_html(get_the_title()); ?></small></h4>
                  <p class="map-address">
                    <span class="d-block"><?php echo esc_html(get_field('address')); ?></span>
                    <span><?php echo esc_html(get_field('city')) . ', ' . esc_html(get_field('state')) . ' ' . esc_html(get_field('zip')); ?></span>
                  </p>
                  <p class="map-phone">
                    <?php $map_phone = get_field('location_main_phone_number'); ?>
                    <a href="tel:<?php echo esc_attr($map_phone); ?>"><?php echo esc_html($map_phone); ?></a>
                  </p>
                </div>
              <?php endif; ?>

            <?php endwhile; ?>
          </div>
      <?php endif; ?>

    </section>

    <section id="team">
      <div class="container">
        <article>
          <h2 class="article-header <?php echo esc_attr(get_post_meta($page_id, 'team_section_title_border_color', true)) . ' ' . esc_attr(get_post_meta($page_id, 'team_section_title_color', true)); ?>"><?php echo esc_html(get_post_meta($page_id, 'team_section_title', true)); ?><small class="<?php echo esc_attr(get_post_meta($page_id, 'team_section_subtitle_color', true)); ?>"><?php echo esc_html(get_post_meta($page_id, 'team_section_subtitle', true)); ?></small></h2>
          <div class="article-body team-content">
            <?php echo wp_kses_post(get_post_meta($page_id, 'team_section_article', true)); ?>
          </div>

          <!-- Team Member Modal -->
            <div id="team-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="team-member-name" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <div class="flex-column">
                      <h4 id="team-member-name" class="modal-title"></h4>
                      <p id="team-member-position" class="mb-0"></p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div id="team-member-bio" class="modal-body"></div>
                </div>
              </div>
            </div>
          <!-- End Team Member Modal -->

          <?php 
            $team_members = get_post_meta($page_id, 'team_members', true);
            if($team_members): ?>
              <div class="team-members">
                <div class="row">
                  <?php 
                    for($t = 0; $t < $team_members; $t++):
                      $member_name = get_post_meta($page_id, 'team_members_' . $t . '_member_name', true);
                      $member_position = get_post_meta($page_id, 'team_members_' . $t . '_member_position', true);
                      $member_bio = wpautop(get_post_meta($page_id, 'team_members_' . $t . '_member_bio', true));

                      $member_img_id = get_post_meta($page_id, 'team_members_' . $t . '_member_image', true);
                      if($member_img_id){
                        $member_img = wp_get_attachment_image_src($member_img_id, 'full');
                        $member_img_url = $member_img[0];
                      }
                      else{
                        $member_img_url = get_stylesheet_directory_uri() . '/images/team-placeholder.jpg';
                      } ?>

                    <div class="col-sm-6 col-md-4 col-lg-3">
                      <a href="#" class="team-member" data-toggle="modal" data-target="#team-modal" data-member_name="<?php echo esc_html($member_name); ?>" data-member_position="<?php echo esc_html($member_position); ?>" data-member_bio="<?php echo wp_kses_post($member_bio); ?>">
                        <img src="<?php echo esc_url($member_img_url); ?>" class="img-fluid d-block mx-auto" alt="<?php echo esc_attr($member_name); ?>" />
                        <div class="team-member-caption d-flex flex-column justify-content-center">
                          <h4><?php echo esc_html($member_name); ?></h4>
                          <h5><?php echo esc_html($member_position); ?></h5>
                        </div>
                      </a>
                    </div>

                  <?php endfor; ?>
              </div>
            </div>
          <?php endif; ?>
        </article>
      </div>
    </section>
<?php get_footer();