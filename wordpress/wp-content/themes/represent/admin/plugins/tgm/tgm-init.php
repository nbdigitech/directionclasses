<?php

/**
 * TGM Init Class
 */
include_once ('class-tgm-plugin-activation.php');

function represent_register_required_plugins() {

	$plugins = array(
    array(
      'name'      => 'Represent Main Plugin', // The plugin name
      'slug'      => 'represent-plugin', // The plugin slug (typically the folder name)
      'source'      => get_template_directory() . '/admin/plugins/represent-plugin.zip', // The plugin source
      'required'      => false, // If false, the plugin is only 'recommended' instead of required
      'version'     => '0.1', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
      'force_activation'    => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
      'force_deactivation'  => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
      'external_url'    => '', // If set, overrides default API URL and points to an external URL
    ),
    array(
      'name'      => 'Slider Revolution',
      'slug'      => 'revslider',
      'source'      => 'http://www.pixelgadget.net/wp/plugins/revslider.zip',
      'required'      => false,
      'version'     => '5.4.8',
      'force_activation'    => false,
      'force_deactivation'  => false,
      'external_url'    => '',
    ),
    array(
      'name'      => 'WPBakery Visual Composer', // The plugin name
      'slug'      => 'js_composer', // The plugin slug (typically the folder name)
      'source'      => 'http://www.pixelgadget.net/wp/plugins/js_composer.zip', // The plugin source
      'required'      => false, // If false, the plugin is only 'recommended' instead of required
      'version'     => '5.6', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
      'force_activation'    => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
      'force_deactivation'  => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
      'external_url'    => '', // If set, overrides default API URL and points to an external URL
    ),
		array(
			'name' 	   => 'Redux Framework',
			'slug' 	   => 'redux-framework',
			'required' => true,
		),
    array(
      'name'    => esc_html__('contact form7', 'represent'),
      'slug'    => 'contact-form-7',
      'required'  => false,
      'force_activation'    => false,
    ),
	);

	$config = array(
		'domain'       		=> 'redux-framework',         	// Text domain - likely want to be the same as your theme.
		'default_path' 		=> '',                         	// Default absolute path to pre-packaged plugins
    'parent_slug'           => 'plugins.php',
    'capability'            => 'manage_options',
		'menu'         		=> 'install-required-plugins', 	// Menu slug
		'has_notices'      	=> true,                       	// Show admin notices or not
		'is_automatic'    	=> true,					   	// Automatically activate plugins after installation or not
	);

	tgmpa( $plugins, $config );

}
add_action( 'tgmpa_register', 'represent_register_required_plugins' );