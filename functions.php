<?php
add_action('wp_footer', 'show_template');
function show_template() {
	global $template;
	print_r($template);
}

add_action('wp_enqueue_scripts', 'jquery_cdn');
function jquery_cdn(){
  if(!is_admin()){
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', false, null, true);
    wp_enqueue_script('jquery');
  }
}

add_action('wp_enqueue_scripts', 'fedcon_scripts');
function fedcon_scripts(){
  wp_register_script(
    'bootstrap-popper',
    'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',
    array('jquery'),
    '',
    true
  );

  wp_register_script(
    'bootstrap-scripts',
    'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js',
    array('jquery', 'bootstrap-popper'),
    '',
    true
  );

  wp_register_script(
    'fedcon-scripts',
    get_stylesheet_directory_uri() . '/js/fedcon-scripts.js',
    array('jquery', 'bootstrap-scripts'),
    '',
    true
  );

  wp_enqueue_script('bootstrap-popper');
  wp_enqueue_script('bootstrap-scripts');
  wp_enqueue_script('fedcon-scripts');
}

add_filter('script_loader_tag', 'fedcon_add_script_meta', 10, 2);
function fedcon_add_script_meta($tag, $handle){
  switch($handle){
    case 'jquery':
      $tag = str_replace('></script>', ' integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>', $tag);
      break;

    case 'bootstrap-popper':
      $tag = str_replace('></script>', ' integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>', $tag);
      break;

    case 'bootstrap-scripts':
      $tag = str_replace('></script>', ' integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>', $tag);
      break;
  }

  return $tag;
}

add_action('wp_enqueue_scripts', 'fedcon_styles');
function fedcon_styles(){
  wp_register_style(
    'bootstrap-css',
    'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'
  );

  wp_register_style(
    'google-fonts',
    'https://fonts.googleapis.com/css?family=Open+Sans:400,700'
  );

  wp_register_style(
    'fontawesome',
    'https://use.fontawesome.com/releases/v5.6.3/css/all.css'
  );

  wp_register_style(
    'fedcon-css',
    get_stylesheet_directory_uri() . '/style.css'
  );

  wp_enqueue_style('bootstrap-css');
  wp_enqueue_style('google-fonts');
  wp_enqueue_style('fontawesome');
  wp_enqueue_style('fedcon-css');
}

add_filter('style_loader_tag', 'fedcon_add_css_meta', 10, 2);
function fedcon_add_css_meta($link, $handle){
  switch($handle){
    case 'bootstrap-css':
      $link = str_replace('/>', ' integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">', $link);
      break;

    case 'fontawesome':
      $link = str_replace('/>', ' integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">', $link);
      break;
  }

  return $link;
}

add_action('after_set_theme', 'fedcon_setup');
function fedcon_setup(){
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(320, 320);

  register_nav_menus(array(
    'header-nav' => 'Header Navigation',
    'footer-nav' => 'Footer Navigation',
    'expertise-nav' => 'Expertise Sidebar Navigation',
    'your-event-nav' => 'Your Event Sidebar Navigation'
  ));

  load_theme_textdomain('fedcon', get_stylesheet_directory_uri() . '/languages');
}

require_once dirname(__FILE__) . '/includes/class-wp-bootstrap-navwalker.php';

function fedcon_header_fallback_menu(){ ?>
  <div id="navbar" class="collapse navbar-collapse justify-content-end">
  <ul class="navbar-nav">
    <li class="nav-item<?php if(is_page('about')){ echo ' active'; } ?>">
      <a href="<?php echo esc_url(home_url('about')); ?>" class="nav-link"><?php esc_html_e('About', 'fedcon'); ?></a>
    </li>
    <li class="nav-item<?php if(is_page('our-expertise') || is_page_template('expertise.php')){ echo ' active'; } ?>">
      <a href="<?php echo esc_url(home_url('our-expertise')); ?>" class="nav-link"><?php esc_html_e('Our Expertise', 'fedcon'); ?></a>
    </li>
    <li class="nav-item<?php if(is_page('your-event') || is_page_template('your-event.php')){ echo ' active'; } ?>">
      <a href="<?php echo esc_url(home_url('your-event')); ?>" class="nav-link"><?php esc_html_e('Your Event', 'fedcon'); ?></a>
    </li>
    <li class="nav-item<?php if(is_page('news-media') || is_single('post')){ echo ' active'; } ?>">
      <a href="<?php echo esc_url(home_url('news-media')); ?>" class="nav-link"><?php esc_html_e('News/Media', 'fedcon'); ?></a>
    </li>
    <li class="nav-item<?php if(is_page('government')){ echo ' active'; } ?>">
      <a href="<?php echo esc_url(home_url('government')); ?>" class="nav-link"><?php esc_html_e('Government', 'fedcon'); ?></a>
    </li>
    <li class="nav-item<?php if(is_page('careers')){ echo ' active'; } ?>">
      <a href="<?php echo esc_url(home_url('careers')); ?>" class="nav-link"><?php esc_html_e('Careers', 'fedcon'); ?></a>
    </li>
    <li class="nav-item<?php if(is_page('contact-us')){ echo ' active'; } ?>">
      <a href="<?php echo esc_url(home_url('contact-us')); ?>" class="nav-link"><?php esc_html_e('Contact Us', 'fedcon'); ?></a>
    </li>
  </ul>
</div>
<?php }

function fedcon_footer_fallback_menu(){ ?>
  <nav id="footer-nav" class="d-flex justify-content-center navbar-expand">
    <ul class="navbar-nav flex-row flex-wrap justify-content-center">
      <li class="nav-item">
        <a href="<?php echo esc_url(home_url('about')); ?>" class="nav-link"><?php esc_html_e('About', 'fedcon'); ?></a>
      </li>
      <li class="nav-item">
        <a href="<?php echo esc_url(home_url('our-expertise')); ?>" class="nav-link"><?php esc_html_e('Our Expertise', 'fedcon'); ?></a>
      </li>
      <li class="nav-item">
        <a href="<?php echo esc_url(home_url('your-event')); ?>" class="nav-link"><?php esc_html_e('Your Event', 'fedcon'); ?></a>
      </li>
      <li class="nav-item">
        <a href="<?php echo esc_url(home_url('news-media')); ?>" class="nav-link"><?php esc_html_e('News/Media', 'fedcon'); ?></a>
      </li>
      <li class="nav-item">
        <a href="<?php echo esc_url(home_url('government')); ?>" class="nav-link"><?php esc_html_e('Government', 'fedcon'); ?></a>
      </li>
      <li class="nav-item">
        <a href="<?php echo esc_url(home_url('careers')); ?>" class="nav-link"><?php esc_html_e('Careers', 'fedcon'); ?></a>
      </li>
      <li class="nav-item">
        <a href="<?php echo esc_url(home_url('contact-us')); ?>" class="nav-link"><?php esc_html_e('Contact Us', 'fedcon'); ?></a>
      </li>
    </ul>
  </nav>
<?php }

function fedcon_article_section($section_name){
  include(locate_template('includes/article-section.php', false, false));
}

function fedcon_esc_svg($svg){
  $kses_defaults = wp_kses_allowed_html('post');

  $svg_args = array(
    'svg' => array(
      'class' => true,
      'id' => true,
      'xmlns' => true,
      'viewbox' => true,
      'width' => true,
      'height' => true
    ),
    'defs' => array(),
    'title' => array(),
    'g' => array(
      'id' => true
    ),
    'path' => array(
      'class' => true,
      'd' => true,
      'fill' => true
    ),
    'rect' => array(
      'class' => true,
      'x' => true,
      'y' => true,
      'width' => true,
      'height' => true,
      'transform' => true,
      'fill' => true
    ),
    'polygon' => array(
      'class' => true,
      'points' => true,
      'fill' => true
    )
  );

  $allowed_tags = array_merge($kses_defaults, $svg_args);
  echo wp_kses($svg, $allowed_tags);
}

function fedcon_go_back_button(){
  $previous = 'javascript:history.go(-1)';
  if(isset($_SERVER['HTTP_REFERER'])){
    $previous = esc_url($_SERVER['HTTP_REFERER']);
  }

  echo '<a href="' . $previous . '" class="btn-main">Back</a>';
}

// disable gutenberg editor
// https://www.billerickson.net/disabling-gutenberg-certain-templates/

function fedcon_disable_editor($id = false){
  if(empty($id)){ return false; }

  $excluded_templates = array(
    // templates/about.php
  );

  $excluded_ids = array(
    get_option('page_on_front'),
    // fedcon_get_page_id('page-slug'),
  );

  $id = intval($id);
  $template = get_page_template_slug($id);

  return in_array($id, $excluded_ids) || in_array($template, $excluded_templates);
}

function fedcon_get_page_id($page_slug){
  $page = get_page_by_path($page_slug);
  return $page->ID;
}

add_filter('use_block_editor_for_post_type', 'fedcon_disable_gutenberg', 10, 2);
function fedcon_disable_gutenberg($can_edit, $post_type){
  if(!(is_admin() && !empty($_GET['post']))){ return $can_edit; }

  if(fedcon_disable_editor($_GET['post'])){
    $can_edit = false;
  }

  return $can_edit;
}

add_action('admin_head', 'fedcon_disable_classic_editor');
function fedcon_disable_classic_editor(){
  $screen = get_current_screen();
  if($screen->id !== 'page' || !isset($_GET['post'])){
    return;
  }

  if(fedcon_disable_editor($_GET['post'])){
    remove_post_type_support('page', 'editor');
  }
}
// end disable gutenberg editor