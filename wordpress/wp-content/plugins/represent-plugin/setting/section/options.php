<?php

require_once(  plugin_dir_path( __FILE__ ). 'fields.php' );

Redux::setSection( $opt_name, array(
  'title' => __( 'General Setting', 'represent' ),
  'id'    => 'basic',
  'desc'  => __( 'Basic fields as subsections.', 'represent' ),
  'icon'  => 'el el-home'
) );
//---- General Setting ----------------
Redux::setSection( $opt_name, array(
  'title'      => __( 'General', 'represent' ),
  'desc'       => __( 'General setting Represent theme ', 'represent' ) ,
  'id'         => 'opt-general-setting',
  'subsection' => false,
  'fields'     => $represent_fields_general_setting,
) );
//---- Color Setting ----------------
Redux::setSection( $opt_name, array(
  'title'      => __( 'Theme Color ', 'represent' ),
  'desc'       => __( 'Color Represent theme ', 'represent' ) ,
  'id'         => 'opt-color-setting',
  'subsection' => false,
  'fields'     => $represent_fields_color_setting,
) );
//---- Fonts Setting ----------------
Redux::setSection( $opt_name, array(
  'title'      => __( 'Theme Fontts ', 'represent' ),
  'desc'       => __( 'Fonts Represent theme ', 'represent' ) ,
  'id'         => 'opt-font-setting',
  'subsection' => false,
  'fields'     => $represent_fields_font_setting,
) );
//---- Footer Setting ----------------
Redux::setSection( $opt_name, array(
  'title'      => __( 'Footer', 'represent' ),
  'desc'       => __( 'Footer setting Represent theme ', 'represent' ) ,
  'id'         => 'opt-footer-setting',
  'subsection' => false,
  'fields'     => $represent_fields_footer_setting,
) );
