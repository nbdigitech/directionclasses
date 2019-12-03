<?php
if(!function_exists('represent_timeline')){
	function represent_timeline($atts) {
		extract( shortcode_atts( array(
			'style' => 'verticale',
			'timeline' => '',


		), $atts ) );

		ob_start(); ?>
		<?php
		$timeline = (array) vc_param_group_parse_atts( $timeline );

if($style == 'verticale')  {
  ?><div class="timeline"><?php
  foreach ( $timeline as $line ) {
    $line_time = $line['time'];
    $line_title = $line['title'];
    $line_description = $line['description'];
    ?>
      <div class="entry">
        <div class="title">
          <h4><?php echo $line_time ?></h4>
          
        </div>
        <div class="body">
          <h4><?php echo $line_title ?></h4>
          <p><?php echo $line_description ?></p>
        </div>
      </div>

  <?php
  }
  ?></div><?php
}else{
  foreach ( $timeline as $line ) {
    $line_time = $line['time'];
    $line_title = $line['title'];
    $line_description = $line['description'];
    ?>
    <div>
      <h2><?php echo $line_time ?></h2>
      <h3><?php echo $line_title ?></h3>
      <p><?php echo $line_description ?></p>
    </div>

  <?php
  }
}

?>


		<?php return ob_get_clean();
	}
	add_shortcode( 'represent_timeline', 'represent_timeline' );
}
?>