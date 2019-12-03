<?php
$attributes = array(
  'type' => 'dropdown',
  'heading' => esc_html__( "Style", "represent" ),
  'param_name' => 'represent_style',
  'value' => array(
    "Light Row" =>"light-section",
    "Darck Row" => ".dark-section",
  ),

);
vc_add_param( 'vc_row', $attributes ); // Note: 'vc_message' was used as a base for "Message box" element