<?php
vc_map( array(
  'name' => esc_html__( 'Timeline', 'represent' ),
  'base' => 'represent_timeline',
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
       'Verticale' => 'verticale',
       'Horizontal' => 'horizontal',
     )
        ),
    array(
      'type' => 'param_group',
      'heading' => esc_html__( 'Values', 'represent' ),
      'param_name' => 'timeline',
      'description' => esc_html__( 'Enter values for graph - value, title.', 'represent' ),
      'value' => urlencode( json_encode( array(
        array(
          'label' => esc_html__( 'Time', 'represent' ),
          'value' => '90',
        ),
        array(
          'label' => esc_html__( 'Titel', 'represent' ),
          'value' => '80',
        ),
      ) ) ),
      'params' => array(
        array(
          'type' => 'textfield',
          'heading' => esc_html__( 'Time', 'represent' ),
          'param_name' => 'time',
          'description' => esc_html__( 'Enter text used as title of bar.', 'represent' ),
          'admin_label' => true,
        ),
        array(
          'type' => 'textfield',
          'heading' => esc_html__( 'Title', 'represent' ),
          'param_name' => 'title',
          'description' => esc_html__( 'Enter value of bar.', 'represent' ),
          'admin_label' => true,
        ),
        array(
          'type' => 'textfield',
          'heading' => esc_html__( 'Description', 'represent' ),
          'param_name' => 'description',
          'description' => esc_html__( 'Enter value of bar.', 'represent' ),
          'admin_label' => true,
        ),
      ),
    ),
  ),
));