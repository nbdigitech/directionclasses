<?php
/**
 * ---------- Pricing Table parameter ---------------
 */
vc_map( array(
  'name' => esc_html__( 'Pricing Table', 'represent' ),
  'base' => 'represent_pricing_table',
    "icon" => get_template_directory_uri()."/images/team-logo.png",
    "category" => 'Represent',
  "content_element" => true,
  "is_container"    => false,
  'params' => array(
    array(
      'type' => 'textfield',
      'heading' => esc_html__( 'Title', 'represent' ),
      'param_name' => 'title_table',
      'description' => esc_html__( 'Enter text used as title', 'represent' ),
    ),
    array(
      'type' => 'textfield',
      'heading' => esc_html__( 'Price', 'represent' ),
      'param_name' => 'price_table',
      'description' => esc_html__( 'Enter text used as Price', 'represent' ),
    ),
    array(
      'type' => 'textfield',
      'heading' => esc_html__( 'Price detail', 'represent' ),
      'param_name' => 'price_detail_table',
      'description' => esc_html__( 'Enter text used as Price detail', 'represent' ),
    ),
    array(
      "type" => "param_group",
      "heading" => esc_html__("Option", 'represent'),
      "param_name" => "tible_options",
      'value' => urlencode( json_encode( array(
        array(
          'text' => '1 Database',
        ),
        array(
          'text' => '5GB Storage',
        ),
        array(
          'text' => '20 Users',
        ),
      ) ) ),
      'params' => array(
        array(
          'type' => 'textfield',
          'heading' => esc_html__( 'Option', 'represent' ),
          'param_name' => 'table_option',
          'description' => esc_html__( 'Enter Line text.', 'represent' ),
          'admin_label' => true,
        ),
      ),
    ),
    array(
      'type' => 'textfield',
      'heading' => esc_html__( 'Button Name', 'represent' ),
      'param_name' => 'button_table',
      'description' => esc_html__( 'Enter text used as Price detail', 'represent' ),
    ),
    array(
      'type' => 'vc_link',
      'heading' => esc_html__( 'Button Link', 'represent' ),
      'param_name' => 'button_link_table',
      'description' => esc_html__( 'Enter text used as Price detail', 'represent' ),
    ),
    array(
      'type' => 'checkbox',
      'heading' => esc_html__( 'Featured Table', 'represent' ),
      'param_name' => 'featured_table',
      "value" => __( "Yes, please", "represent" ),
    ),
  )
  )
);