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
    
   <section id="globus">
    <div class="container">
      <div class="row">
          <div class="col-lg-6">	
              <h2 class="article-header fedcon-green" id="globus_intro"><?php echo esc_html(get_field('intro_globus')); ?></h2>   
                <?php
                      if( have_rows('parts_we_reach') ): ?>
                      <ul class="globus">
                        <?php while ( have_rows('parts_we_reach') ) : the_row(); ?>
                          <li class="parts">
                            <?php echo the_sub_field('part_of_globus'); ?>
                          </li>  
                        <?php  endwhile; ?>
                      </ul>
                      <?php endif; ?>
            </div>   
          </div>
          <div class="row glob-img ">
          <div class="col-lg-6">
              <?php if( get_field('image') ): ?>
                <img src="<?php the_field('image'); ?>" />
              <?php endif; ?>
              
              
          </div>
      </div>
    </div>
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