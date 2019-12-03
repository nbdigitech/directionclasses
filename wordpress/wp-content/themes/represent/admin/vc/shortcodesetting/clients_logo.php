<?php
/**
 * ---------- Clients Logo param
 */
vc_map( array(
    'name' => esc_html__( 'Clients Logo', 'represent' ),
    'base' => 'represent_clients_logo',
    "icon" => get_template_directory_uri()."/images/team-logo.png",
    "category" => 'Represent',
    "content_element" => true,
    "is_container"    => false,
    'params' => array(
      array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Layout', 'represent' ),
        'param_name' => 'client_layout',
        'description' => esc_html__( 'Enter text used as title', 'represent' ),
        'value' => array(
          'Caroucel' => 'caroucel',
          'Grid' => 'grid',
        ),
      ),
      array(
        'type' => 'attach_images',
        'heading' => esc_html__( 'Logos', 'represent' ),
        'param_name' => 'client_logo',
        'description' => esc_html__( 'Enter text used as title', 'represent' ),
      ),
      array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Logo to show', 'represent' ),
        'param_name' => 'logo_to_show',
        'description' => esc_html__( 'Enter text used as title', 'represent' ),
        "dependency" => array(
          "element" => "client_layout",
          "value" => "caroucel"
        )
      ),
      array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Columns', 'represent' ),
        'param_name' => 'logo_columns',
        'description' => esc_html__( 'Enter Columns number', 'represent' ),
        "dependency" => array(
          "element" => "client_layout",
          "value" => "grid"
        )
      ),

    )
  )
);