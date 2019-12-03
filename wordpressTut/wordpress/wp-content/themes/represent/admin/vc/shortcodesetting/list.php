<?php
vc_map( array(
  'name' => esc_html__( 'List', 'represent' ),
  'base' => 'represent_list',
  "icon" => get_template_directory_uri()."/images/team-logo.png",
  "category" => 'Represent',
  "content_element" => true,
  "is_container"    => false,
  'params' => array(
    array(
      'type' => 'dropdown',
      'heading' => esc_html__( 'Style', 'represent' ),
      'param_name' => 'style',
      'value' => array(
        'Style 1' => 'style1',
        'Style 2' => 'style2',
        'Style 3' => 'style3',
        'Style 4' => 'style4',
        'Style 5' => 'style5',
      )
    ),
    array(
      'type' => 'param_group',
      'heading' => esc_html__( 'Values', 'represent' ),
      'param_name' => 'values',
      'description' => esc_html__( 'Enter values for graph - value, title.', 'represent' ),
      'value' => urlencode( json_encode( array(
        array(
          'label' => esc_html__( 'List item', 'represent' ),
          'value' => 'Item',
        ),
        array(
          'label' => esc_html__( 'List item', 'represent' ),
          'value' => 'Item',
        ),
        array(
          'label' => esc_html__( 'List item', 'represent' ),
          'value' => 'Item',
        ),
      ) ) ),
      'params' => array(
        array(
          'type' => 'textfield',
          'heading' => esc_html__( 'List item', 'represent' ),
          'param_name' => 'value',
          'description' => esc_html__( 'Enter text.', 'represent' ),
          'admin_label' => true,
        ),
      ),
    ),
  ),
));