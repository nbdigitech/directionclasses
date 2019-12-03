<?php
/**
 * ---------- Pricing Table parameter ---------------
 */
vc_map( array(
  'name' => esc_html__( 'Team', 'represent' ),
  'base' => 'represent_team',
    "category" => 'Represent',
    "icon" => get_template_directory_uri()."/images/team-logo.png",
  "content_element" => true,
  "is_container"    => false,
  'params' => array(
    array(
      'type' => 'dropdown',
      'heading' => esc_html__( 'Style', 'represent' ),
      'param_name' => 'member_style',
      'description' => esc_html__( 'Enter text used as title', 'represent' ),
      "value" => array(
        "Style I"=>"team-style1",
        "Style II"=>"team-style2"
      ),
    ),
    array(
      'type' => 'textfield',
      'heading' => esc_html__( 'Name', 'represent' ),
      'param_name' => 'member_name',
      'description' => esc_html__( 'Enter text used as title', 'represent' ),
    ),
    array(
      'type' => 'attach_image',
      'heading' => esc_html__( 'Member Image', 'represent' ),
      'param_name' => 'member_image',
      'description' => esc_html__( 'Enter text used as Price', 'represent' ),
    ),
    array(
      'type' => 'textfield',
      'heading' => esc_html__( 'Job', 'represent' ),
      'param_name' => 'member_job',
      'description' => esc_html__( 'Enter text used as Price detail', 'represent' ),
    ),
    array(
      "type" => "param_group",
      "heading" => esc_html__("Option", 'represent'),
      "param_name" => "team_socials",
      'value' => urlencode( json_encode( array(
        array(
          'text' => 'Facebook',
        ),
        array(
          'text' => 'Twitter',
        ),
        array(
          'text' => 'Instagram',
        ),
      ) ) ),
      'params' => array(
        array(
          'type' => 'iconpicker',
          'heading' => esc_html__( 'Social Icon', 'represent' ),
          'param_name' => 'team_social_icon',
          'description' => esc_html__( 'Enter Line text.', 'represent' ),
          'admin_label' => true,
        ), array(
          'type' => 'textfield',
          'heading' => esc_html__( 'Social Link', 'represent' ),
          'param_name' => 'team_social_link',
          'description' => esc_html__( 'Enter Line text.', 'represent' ),
          'admin_label' => true,
        ),
      ),
    ),
  )
  )
);