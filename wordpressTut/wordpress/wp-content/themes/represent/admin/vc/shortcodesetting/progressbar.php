<?php
vc_map( array(
  'name' => esc_html__( 'Progress Bar', 'represent' ),
  'base' => 'represent_progressbar',
  "icon" => get_template_directory_uri()."/images/team-logo.png",
  "category" => 'Represent',
  "content_element" => true,
  "is_container"    => false,
  'params' => array(
   
    array(
      'type' => 'textfield',
      'heading' => esc_html__( 'Widget title', 'represent' ),
      'param_name' => 'title',
      'description' => esc_html__( 'Enter text used as widget title (Note: located above content element).', 'represent' ),
    ),
    array(
      'type' => 'param_group',
      'heading' => esc_html__( 'Values', 'represent' ),
      'param_name' => 'values',
      'description' => esc_html__( 'Enter values for graph - value, title.', 'represent' ),
      'value' => urlencode( json_encode( array(
        array(
          'label' => esc_html__( 'Development', 'represent' ),
          'value' => '90',
        ),
        array(
          'label' => esc_html__( 'Design', 'represent' ),
          'value' => '80',
        ),
        array(
          'label' => esc_html__( 'Marketing', 'represent' ),
          'value' => '70',
        ),
      ) ) ),
      'params' => array(
        array(
          'type' => 'textfield',
          'heading' => esc_html__( 'Label', 'represent' ),
          'param_name' => 'label',
          'description' => esc_html__( 'Enter text used as title of bar.', 'represent' ),
          'admin_label' => true,
        ),
        array(
          'type' => 'textfield',
          'heading' => esc_html__( 'Value', 'represent' ),
          'param_name' => 'value',
          'description' => esc_html__( 'Enter value of bar.', 'represent' ),
          'admin_label' => true,
        ),
      ),
    ),
    array(
      'type' => 'textfield',
      'heading' => esc_html__( 'Units', 'represent' ),
      'param_name' => 'units',
      'description' => esc_html__( 'Enter measurement units (Example: %, px, points, etc. Note: graph value and units will be appended to graph title).', 'represent' ),
    ),
    
  ),
));