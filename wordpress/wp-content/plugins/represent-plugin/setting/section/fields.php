<?php
//------------- General Setting --------------------
$represent_fields_general_setting[] = array(
  'id'       => 'opt-logo-link',
  'type'     => 'media',
  'url'      => true,
  'title'    => __('Upload Logo', 'represent'),
  'subtitle' => __('Upload header sit logo', 'represent'),
  'default'  => array(
    'url'=>'#'
  ),
);

$represent_fields_general_setting[] = array(
  'id'       => 'opt-title-bar-bg',
  'type'     => 'background',
  'output'    => array('.title-bar'),
  'title'    => __('Title Page background', 'represent'),
  'subtitle' => __('Title Page background with image, color, etc.', 'represent'),
  'default'  => array(
    'background-color' => '#1e73be',
  ),
);
//------------------color -------------------
$represent_fields_color_setting[] = array(
  'id'       => 'opt-primary-color',
  'type'     => 'color_rgba',
  'title'    => __( 'Primary Color', 'represent' ),
  'subtitle' => __( 'This a Primary color for theme.', 'represent' ),
  'output' => array(
    'color' => '.primary-color',
    'background-color' => '.primary-bg-color',
    'border-color' => '.primary-border-color',
  ),
  'default'   => array(
    'color'     => '#CDBD9D',
    'alpha'     => 1
  ),
);
$represent_fields_color_setting[] = array(
  'id'       => 'opt-body-color',
  'type'     => 'color_rgba',
  'title'    => __( 'Body Text Color', 'represent' ),
  'subtitle' => __( 'Body Text Color.', 'represent' ),
  'default'   => array(
    'color'     => '#555555',
    'alpha'     => 1
  ),
);$represent_fields_color_setting[] = array(
  'id'       => 'opt-body-alt-color',
  'type'     => 'color_rgba',
  'title'    => __( 'Body Text Color alt', 'represent' ),
  'subtitle' => __( 'Body Text Color alt.', 'represent' ),
  'default'   => array(
    'color'     => '#C8C8C8',
    'alpha'     => 1
  ),
);$represent_fields_color_setting[] = array(
  'id'       => 'opt-header-color',
  'type'     => 'color_rgba',
  'title'    => __( 'Header Text Color', 'represent' ),
  'subtitle' => __( 'Header Text Color.', 'represent' ),
  'default'   => array(
    'color'     => '#000000',
    'alpha'     => 1
  ),
);$represent_fields_color_setting[] = array(
  'id'       => 'opt-header-alt-color',
  'type'     => 'color_rgba',
  'title'    => __( 'Header Text Color Alt', 'represent' ),
  'subtitle' => __( 'Header Text Color Alt.', 'represent' ),
  'default'   => array(
    'color'     => '#000000',
    'alpha'     => 1
  ),
);$represent_fields_color_setting[] = array(
  'id'       => 'opt-button-text-color',
  'type'     => 'color_rgba',
  'title'    => __( 'Button Text Color', 'represent' ),
  'subtitle' => __( 'Button Text color.', 'represent' ),
  'default'   => array(
    'color'     => '#000000',
    'alpha'     => 1
  ),
);
$represent_fields_color_setting[] = array(
  'id'       => 'opt-button-text-color-alt',
  'type'     => 'color_rgba',
  'title'    => __( 'Button text Color Alt', 'represent' ),
  'subtitle' => __( 'Button text Color Alt', 'represent' ),
  'default'   => array(
    'color'     => '#ffffff',
    'alpha'     => 1
  ),
);
$represent_fields_color_setting[] = array(
  'id'       => 'opt-border-color',
  'type'     => 'color_rgba',
  'title'    => __( 'Border Color Default', 'represent' ),
  'subtitle' => __( 'Border Color Default', 'represent' ),
  'default'   => array(
    'color'     => '#cacfd5',
    'alpha'     => 1
  ),
);
//------------- Font Setting --------------------
$represent_fields_font_setting[] = array(
  'id'       => 'opt-body-font',
  'type'     => 'typography',
  'title'    => __('Body Fonts', 'represent'),
  'subtitle' => __('Body Fonts.', 'represent'),
  'color'=>false,
  'text-align'=>false,
  'subsets'=>false,
  'units'=>'rem',
  'default'     => array(

    'font-family' => 'Poppins',

  ),
);
$represent_fields_font_setting[] = array(
  'id'       => 'opt-header-font',
  'type'     => 'typography',
  'title'    => __('Header Fonts', 'represent'),
  'subtitle' => __('Header Fonts.', 'represent'),
  'color'=>false,
  'text-align'=>false,
  'subsets'=>false,
  'units'=>'rem',
  'default'     => array(
    'font-family' => 'Poppins',
  ),
);
//------------- Footer Setting --------------------
$represent_fields_footer_setting[] = array(
  'id'       => 'opt-footer-bg',
  'type'     => 'background',
  'output'    => array('footer .footer-content'),
  'title'    => __('Footer Page background', 'represent'),
  'subtitle' => __('footer Page background with image, color, etc.', 'represent'),
  'default'  => array(
    'background-color' => '#212427',
  )
);

$represent_fields_footer_setting[] = array(
  'id'       => 'opt-footer-copyright-bg',
  'type'     => 'background',
  'output'    => array('footer .copyright'),
  'title'    => __('Footer Page background', 'represent'),
  'subtitle' => __('footer Page background with image, color, etc.', 'represent'),
  'default'  => array(
    'background-color' => '#1a1c1d',
  )
);

$represent_fields_footer_setting[] = array(
  'id'       => 'text-social-media',
  'type'     => 'sortable',
  'label'     => true,
  'title'    => __('Social Media', 'represent'),
  'subtitle' => __('Define and reorder Your Social Media.', 'represent'),
  'desc'     => __('Define and reorder Your Social Media.', 'represent'),
  'mode'     => 'text',
  'options' => array(
    'facebook-f' => 'Facebook Link',
    'twitter' => 'Twitter Link',
    'linkedin' => 'Linkedin Link',
    'dribbble' => 'Dribbble Link',
    'youtube' => 'Youtube Link',
    'vimeo' => 'Vimeo Link',
    'pinterest-p' => 'Pinterest Link',
    'behance' => 'Behance Link',
  ),
);
$represent_fields_footer_setting[] = array(
  'id'       => 'opt-copyright',
  'type'     => 'text',
  'output'    => array('footer .footer-content'),
  'title'    => __('Copyright', 'represent'),
'default' => 'Copyright PixelWay 2019'
);
