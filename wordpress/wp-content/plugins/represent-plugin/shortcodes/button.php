<?php 
if(!function_exists('represent_button')){
  function represent_button($atts) {
  	
	extract( shortcode_atts( array(
	"button_url" => "",
	"button_size" => "",
	"button_style" => "",


	), $atts));	
	 ob_start();

    $url = vc_build_link( $button_url );
	?>

      <div class="<?php echo $button_size .' ' . $button_style ?>"><a href="<?php echo $url['url'] ?>"><?php echo $url['title'] ?></a> </div>




	<?php
  	return ob_get_clean();
  }
   add_shortcode( 'represent_button', 'represent_button' );
}