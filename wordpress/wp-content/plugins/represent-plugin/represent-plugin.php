<?php 
/**
 * Plugin Name: Rpresent plugin
 * Plugin URI: http://www.lexusdesign.com 
 * Description: Features Represent themes.
 * Version: 0.1
 * Author: Represent Team lexusdesign 
 * Author URI: http://www.lexusdesign.com 
 */
class representPlugin {
 function __construct () {


 require_once(  plugin_dir_path( __FILE__ ).'/meta-box.php' );

 require_once(  plugin_dir_path( __FILE__ ).'/shortcodes/blog.php' );
 require_once(  plugin_dir_path( __FILE__ ).'/shortcodes/countup.php' );
 require_once(  plugin_dir_path( __FILE__ ).'/shortcodes/progressbar.php' );
 require_once(  plugin_dir_path( __FILE__ ).'/shortcodes/iconplustext.php' );
 require_once(  plugin_dir_path( __FILE__ ).'/shortcodes/portfolio.php' );
 require_once(  plugin_dir_path( __FILE__ ).'/shortcodes/section_title.php' );
 require_once(  plugin_dir_path( __FILE__ ).'/shortcodes/clients_logo.php' );
 require_once(  plugin_dir_path( __FILE__ ).'/shortcodes/pricing_table.php' );
 require_once(  plugin_dir_path( __FILE__ ).'/shortcodes/team.php' );
 require_once(  plugin_dir_path( __FILE__ ).'/shortcodes/testimonail.php' );
 require_once(  plugin_dir_path( __FILE__ ).'/shortcodes/timeline.php' );
 require_once(  plugin_dir_path( __FILE__ ).'/shortcodes/list.php' );
 require_once(  plugin_dir_path( __FILE__ ).'/shortcodes/button.php' );



 //___________widget________________
 require_once(  plugin_dir_path( __FILE__ ).'/widget/recent-post.php' );

//___________ Post Type _____________________
require_once(  plugin_dir_path( __FILE__ ).'/post-type/post-type.php' );
//___________ Panel _____________________
require_once(  plugin_dir_path( __FILE__ ).'/setting/admin-init.php' );
 }
}
$representPlugin = new representPlugin();