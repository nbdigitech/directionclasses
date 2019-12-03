<?php
if (!function_exists('represent_setup')) :
  function represent_setup()
  {
    /*	theme available for translation.
      Translations can be filed in the /languages/ directory.*/

    load_theme_textdomain("represent", get_template_directory() . '/languages');
    //____________navigation____________

    register_nav_menus(array(
      'header-menu' => esc_html__('Primary Navigation', 'represent'),
      'footer-menu' => esc_html__('Footer Navigation', 'represent'),
    ));
    /*
     * -------------- post format
     */
    if (function_exists('add_theme_support')) {
      add_theme_support('post-thumbnails');
      add_theme_support('post-formats', array('gallery', 'video', 'audio', 'quote'));
      add_theme_support('automatic-feed-links');
      add_theme_support('custom-background');
      add_theme_support('title-tag');
      add_theme_support('html5', array('search-form'));
      add_theme_support('editor-styles');
      add_editor_style();
    }

  }
endif;
add_action('after_setup_theme', 'represent_setup');
/**
 *--------------- Image presets-----------
 */
add_image_size('represent_blog_thumbnail', 730, 350, true);
add_image_size('represent_portfolio_thumbnail', 350, 1000, false);
add_image_size('represent_blog_shortcode', 360, 215, true);
add_image_size('represent-side-thumbnail', 90, 65, true);
add_image_size('represent-team-thumbnail', 270, 445, true);
add_image_size('represent-testimonial', 600, 400, false);
/**
 *----------------- include ------------------------------------------
 */
include_once(get_template_directory() . '/admin/theme-functions.php');
include_once(get_template_directory() . '/parts/menu/walker.php');
include_once(get_template_directory() . '/parts/menu/mega-menu.php');
include_once(get_template_directory() . '/admin/plugins/tgm/tgm-init.php');


if (!isset($content_width)) $content_width = 900;
/**
 *-----------------add Widget------------------------------------------
 */

function represent_widgets_init()
{
  //-------- Principal Sidebar
  register_sidebar(array(
    'name' => esc_html__('Sidebar', 'represent'),
    'id' => 'sidebar',
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ));
  //-------- Footer I Sidebar
  register_sidebar(array(
    'name' => esc_html__('Footer 1rst Columns', 'represent'),
    'id' => 'footer_1',
    'before_widget' => '<div id="%1$s" class="item %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ));
  //-------- Footer II Sidebar
  register_sidebar(array(
    'name' => esc_html__('Footer 2se Columns', 'represent'),
    'id' => 'footer_2',
    'before_widget' => '<div id="%1$s" class="item %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ));
  //-------- Footer III Sidebar
  register_sidebar(array(
    'name' => esc_html__('Footer 3thr Columns', 'represent'),
    'id' => 'footer_3',
    'before_widget' => '<div id="%1$s" class="item %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ));
  //-------- Footer IV Sidebar
  register_sidebar(array(
    'name' => esc_html__('Footer 4 Columns', 'represent'),
    'id' => 'footer_4',
    'before_widget' => '<div id="%1$s" class="item %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ));
}

add_action('widgets_init', 'represent_widgets_init');
/**
 *-----------------load js and css file ------------------------------------------
 */

function represent_js_css_file()
{
  //_____________font__________
  if (!class_exists('representPlugin')) {
    $protocol = is_ssl() ? 'https' : 'http';
    wp_enqueue_style('represent-font', $protocol . '://fonts.googleapis.com/css?family=Poppins:300,500,400,700');
  }
  //________________________css______________________________

  wp_enqueue_style('font-awesome', get_template_directory_uri() . "/stylesheets/plugins/font-awesome.min.css");
  wp_enqueue_style('lightslider', get_template_directory_uri() . "/stylesheets/plugins/lightslider.min.css");
  wp_enqueue_style('represent-style', get_template_directory_uri() . "/stylesheets/styles.css");

  wp_enqueue_style('represent-core-style', get_template_directory_uri() . "/stylesheets/core-style.css");
  wp_enqueue_style('animate', get_template_directory_uri() . "/stylesheets/plugins/animate.css");
  wp_enqueue_style('bootstrap4-block-grid', get_template_directory_uri() . "/stylesheets/plugins/bootstrap4-block-grid.min.css");
  wp_enqueue_style('owl-carousel', get_template_directory_uri() . "/stylesheets/plugins/owl.carousel.css");
  wp_enqueue_style('owl-theme-default', get_template_directory_uri() . "/stylesheets/plugins/owl.theme.default.css");
  wp_enqueue_style('owl-theme-green', get_template_directory_uri() . "/stylesheets/plugins/owl.theme.green.css");
  wp_enqueue_style('represent-style', get_template_directory_uri() . "/style.css");

  //__________________________js____________________________

  wp_enqueue_script('lightslider', get_template_directory_uri() . "/js/lightslider.min.js", array('jquery'), '1.0', true);
  wp_enqueue_script('bootstrap-dropdownhover', get_template_directory_uri() . "/js/tether.min.js", array('jquery'), '1.0', true);
  wp_enqueue_script('bootstrap', get_template_directory_uri() . "/js/bootstrap.min.js", array('jquery'), '1.0', true);
  wp_enqueue_script('jquery-appear', get_template_directory_uri() . "/js/jquery.appear.js", array('jquery'), '1.0', true);
  wp_enqueue_script('countTo', get_template_directory_uri() . "/js/countTo.js", array('jquery'), '1.0', true);
  wp_enqueue_script('owl-carousel', get_template_directory_uri() . "/js/owl.carousel.min.js", array('jquery'), '1.0', true);
  wp_enqueue_script('isotope-pkgd', get_template_directory_uri() . "/js/isotope.pkgd.min.js", array('jquery'), '1.0', true);
  wp_enqueue_script('slideout', get_template_directory_uri() . "/js/slideout.min.js", array('jquery'), '1.0', true);
  wp_enqueue_script('represent-scripts', get_template_directory_uri() . "/js/scripts.js", array('jquery'), '1.0', true);

  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  if (class_exists('representPlugin')) {
    include_once(get_template_directory() . '/admin/custom-style.php');
    wp_add_inline_style('represent-style', $represent_custom_css);
  }
}

add_action('wp_enqueue_scripts', 'represent_js_css_file');
