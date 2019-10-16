<?php
/**
 * Plugin Name: federalconference.com Core Functionality
 * Description: This contains all your site's core functionality so that it is theme independent. <strong>If should always be activated</strong>.
 * Author: The Childress Agency
 * Author URI: https://childressagency.com
 * Version: 1.0
 * Text Domain: fedcon
 */

if(!defined('ABSPATH')){ exit; }

define('FEDCON_PLUGIN_DIR', dirname(__FILE__));
define('FEDCON_PLUGIN_URL', plugin_dir_url(__FILE__));

/**
 * Load acf if not already loaded
 */
if(!class_exists('acf')){
  require_once FEDCON_PLUGIN_DIR . '/vendors/advanced-custom-fields-pro/acf.php';
  add_filter('acf/settings/path', 'fedcon_acf_settings_path');
  add_filter('acf/settings/dir', 'fedcon_acf_settings_dir');
}

function fedcon_acf_settings_path($path){
  $path = plugin_dir_path(__FILE__) . 'vendors/advanced-custom-fields-pro/';
  return $path;
}

function fedcon_acf_settings_dir($dir){
  $dir = plugin_dir_url(__FILE__) . 'vendors/advanced-custom-fields-pro/';
  return $dir;
}

/**
 * Prevent plugin from updating in case of plugin with same name in repo.
 */
/*
add_filter('http_request_args', 'fedcon_dont_update_plugin', 5, 2);
function fedcon_dont_update_plugin($r, $url){
  if(strpos($url, 'https://api.wordpress.org/plugins/update-check/1.1/') !== 0){
    return $r;  // not a plugin update request
  }

  $plugins = json_decode($r['body']['plugins'], true);
  unset($plugins['plugins'][plugin_basename(__FILE__)]);
  //$r['body']['plugins'] = json_decode($plugins);
  $r['body']['plugins'] = $plugins;
  return $r;
}*/

add_action('plugins_loaded', 'fedcon_load_textdomain');
function fedcon_load_textdomain(){
  load_plugin_textdomain('fedcon', false, basename(FEDCON_PLUGIN_DIR) . '/languages');
}

require_once FEDCON_PLUGIN_DIR . '/includes/fedcon-create-post-types.php';
add_action('init', 'fedcon_create_post_types');

add_action('acf/init', 'fedcon_acf_fields');
function fedcon_acf_fields(){
  acf_add_options_page(array(
    'page_title' => esc_html__('General Settings', 'fedcon'),
    'menu_title' => esc_html__('General Settings', 'fedcon'),
    'menu_slug' => 'general-settings',
    'capability' => 'edit_posts',
    'redirect' => false
  ));

  require_once FEDCON_PLUGIN_DIR . '/includes/custom-fields/fedcon-acf-general-fields.php';
  require_once FEDCON_PLUGIN_DIR . '/includes/custom-fields/fedcon-acf-article-fields.php';
  require_once FEDCON_PLUGIN_DIR . '/includes/custom-fields/fedcon-acf-home-page-fields.php';
  require_once FEDCON_PLUGIN_DIR . '/includes/custom-fields/fedcon-acf-hero-settings.php';
  require_once FEDCON_PLUGIN_DIR . '/includes/custom-fields/fedcon-acf-contact-section-settings.php';
  require_once FEDCON_PLUGIN_DIR . '/includes/custom-fields/fedcon-acf-about-page-settings.php';
  require_once FEDCON_PLUGIN_DIR . '/includes/custom-fields/fedcon-acf-careers-page-settings.php';
  require_once FEDCON_PLUGIN_DIR . '/includes/custom-fields/fedcon-acf-contact-page-settings.php';
  require_once FEDCON_PLUGIN_DIR . '/includes/custom-fields/fedcon-acf-expertise-settings.php';
  require_once FEDCON_PLUGIN_DIR . '/includes/custom-fields/fedcon-acf-yourevent-settings.php';
  require_once FEDCON_PLUGIN_DIR . '/includes/custom-fields/fedcon-acf-sectioned-page-template-settings.php';
}