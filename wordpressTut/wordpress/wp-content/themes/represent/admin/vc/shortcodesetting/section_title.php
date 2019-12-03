<?php
/**
 * ----------- Section Title
 */

vc_map( array(
  'name' => esc_html__( 'Section Title', 'represent' ),
  'base' => 'represent_section_title',
    "icon" => get_template_directory_uri()."/images/team-logo.png",
    "category" => 'Represent',
  "content_element" => true,
  "is_container"    => false,
  'params' => array(
    array(
      'type' => 'dropdown',
      'heading' => esc_html__( 'Title Align', 'represent' ),
      'param_name' => 'section_align',
      'description' => esc_html__( 'Chose Align', 'represent' ),
      "value" => array(
        "Center" => 'text-center',
        "Right" => 'text-right',
        "left" => 'text-left',
      ),
    ),
    array(
      'type' => 'textfield',
      'heading' => esc_html__( 'Title', 'represent' ),
      'param_name' => 'section_title',
      'description' => esc_html__( 'Enter text used as title. add b/ to have a break and {your text} to get bold style', 'represent' ),
      'edit_field_class' => 'vc_col-xs-8',
      ),
    array(
      'type' => 'colorpicker',
      'heading' => esc_html__( 'Title Text Color', 'represent' ),
      'param_name' => 'section_title_color',
      'description' => esc_html__( 'Enter text color', 'represent' ),
      'edit_field_class' => 'vc_col-xs-4',
    ),
    array(
      'type' => 'textfield',
      'heading' => esc_html__( 'SubTitle', 'represent' ),
      'param_name' => 'section_subtitle',
      'description' => esc_html__( 'Enter text used as subtitle', 'represent' ),
      'edit_field_class' => 'vc_col-xs-8',
    ),
    array(
      'type' => 'colorpicker',
      'heading' => esc_html__( 'Sub-Title text Color', 'represent' ),
      'param_name' => 'section_subtitle_color',
      'description' => esc_html__( 'Enter text color', 'represent' ),
      'edit_field_class' => 'vc_col-xs-4',
    ),
  )
  )
);