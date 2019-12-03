<?php

function represent_admin_register()
{
  wp_register_script('represent-admin-scripts', get_template_directory_uri() . '/admin/js/admin-scripts.js',
    array('jquery'), false, true);
  wp_enqueue_script('represent-admin-scripts');
}

add_action('admin_enqueue_scripts', 'represent_admin_register');
//-------- load  visual composer -----
if (function_exists('vc_set_as_theme')) vc_set_as_theme(true);

// Initialising Shortcodes
if (class_exists('WPBakeryVisualComposerAbstract')) {
  function require_composer_Extend()
  {
    require_once get_template_directory() . '/admin/vc/extend.php';
  }

  add_action('init', 'require_composer_Extend', 2);
}


//----------- function is blog----------
function represent_is_blog()
{
  global $post;
  $posttype = get_post_type($post);
  return (((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_tag())) && ($posttype == 'post')) ? true : false;
}

//------------ call back nav function ----------
function represent_primary_menu()
{
  echo "<div class='empty-menu'> " . esc_html__('Please, Create your Menu frome appearance > menu', 'represent') . "</div>";
}

//------------- function page title --------------
function represent_page_title()
{
  if (represent_is_blog()) {
    $represent_blog_ID = get_option('page_for_posts');
    if ($represent_blog_ID == 0) {
      ?>
      <h5><?php echo esc_html__('Recent Posts', 'represent') ?></h5>
      <h2><?php echo esc_html__('Blog', 'represent') ?></h2>

    <?php
    } else {
      ?>
      <?php if (get_post_meta(get_the_ID(), 'sub_title', true) != '') { ?>
        <h5><?php echo get_post_meta(get_the_ID(), 'sub_title', true); ?></h5>
      <?php } ?>
      <h2><?php echo get_the_title($represent_blog_ID) ?></h2>

    <?php
    }
  } else {

    ?>
    <?php if (get_post_meta(get_the_ID(), 'sub_title', true) != '') { ?>
      <h5><?php echo get_post_meta(get_the_ID(), 'sub_title', true); ?></h5>
    <?php }
    if (is_search()) {
      ?><h2><?php echo esc_html__('Search', 'represent') ?></h2> <?php
    } elseif (is_404()) {
      ?> <h2><?php echo esc_html__('404', 'represent') ?></h2> <?php
    } else {
      ?> <h2><?php the_title() ?></h2> <?php
    }
    ?>


  <?php

  }
}


//-------------- post format ------------
function represent_get_media($type = array())
{
  $content = do_shortcode(apply_filters('the_content', get_the_content()));
  $embed = get_media_embedded_in_content($content, $type);
  if (in_array('audio', $type)):
    $output = str_replace('?visual=true', '?visual=false', $embed[0]);
  else:
    if (!empty($embed)) {
      $output = $embed[0];
    } else {
      $output = null;
    }
  endif;

  return $output;
}

//--------- Social medias -----
function represent_socialMedias()
{
  global $represent;
  $output = '';
  if (isset($represent['text-social-media'])) {
    foreach ($represent['text-social-media'] as $data => $value) {
      if (!empty($value)) {
        $output .= '<a href="' . esc_url($value) . '">';
        $output .= '<i class="fa fa-' . esc_attr($data) . '"></i>';
        $output .= '</a>';
      }
    }
  }
  return $output;
}

?>