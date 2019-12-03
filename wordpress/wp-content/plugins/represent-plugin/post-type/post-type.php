<?php
/**
 * Created by PhpStorm.
 * User: abdellatif
 * Date: 1/22/2017
 * Time: 10:10 PM
 */
/*-------------- portfolio custom posttyp -----------------------*/
if( ! function_exists('portfolio_posttype')):
  function portfolio_posttype() {
    register_post_type( 'portfolio',
      array(
        'labels' => array(
          'name' => __( 'Portfolio', 'represent' ),
          'singular_name' => __( 'portfolio', 'represent' ),
          'add_new' => __( 'Add New Portfolio Item', 'represent' ),
          'add_new_item' => __( 'Add New Portfolio Item', 'represent' ),
          'edit_item' => __( 'Edit portfolio', 'represent' ),
          'new_item' => __( 'Add New Portfolio Item', 'represent' ),
          'view_item' => __( 'View Portfolio Item', 'represent' ),
          'search_items' => __( 'Search Portfolio Item', 'represent' ),
          'not_found' => __( 'No Portfolio Item found', 'represent' ),
          'not_found_in_trash' => __( 'No Portfolio Item found in trash', 'represent' )
        ),
        'public' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array( 'title', 'comments','editor' , 'thumbnail'),
        'capability_type' => 'post',
        'rewrite' => array("slug" => "portfolio"), // Permalinks format
        'menu_position' => 5
      )
    );
    register_taxonomy( 'portfolio_categories', 'portfolio', array( 'hierarchical' => true,
      'label' => 'Categories',
      'query_var' => true,
      'show_ui' => true,
      'rewrite' => true ) );
  }
  add_action( 'init', 'portfolio_posttype' );
endif;
/*-------------- Testimonails custom posttyp -----------------------*/
if( ! function_exists('testimonails_posttype')):
  function testimonails_posttype() {
    register_post_type( 'testimonail',
      array(
        'labels' => array(
          'name' => __( 'Testimonail', 'represent' ),
          'singular_name' => __( 'testimonail', 'represent' ),
          'add_new' => __( 'Add New Testimonail Item', 'represent' ),
          'add_new_item' => __( 'Add New testimonail Item', 'represent' ),
          'edit_item' => __( 'Edit testimonail', 'represent' ),
          'new_item' => __( 'Add New testimonail Item', 'represent' ),
          'view_item' => __( 'View testimonail Item', 'represent' ),
          'search_items' => __( 'Search testimonail Item', 'represent' ),
          'not_found' => __( 'No testimonail Item found', 'represent' ),
          'not_found_in_trash' => __( 'No Testimonail Item found in trash', 'represent' )
        ),
        'public' => true,
        'supports' => array( 'title', 'comments','editor' , 'thumbnail'),
        'capability_type' => 'post',
        'rewrite' => array("slug" => "testimonail"), // Permalinks format
        'menu_position' => 5
      )
    );
  }
  add_action( 'init', 'testimonails_posttype' );
endif;