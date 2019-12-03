<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
<div class="bg-preloader">
  <div class="mask">
    <span class="preloader"></span>
    <?php esc_html__('Loading...', 'represent'); ?>
  </div>
</div>
<?php get_template_part('parts/menu/nav') ?>