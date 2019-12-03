<?php
if(!function_exists('represent_list')){
	function represent_list($atts) {
		extract( shortcode_atts( array(
			'style' => 'style1',
			'values' => '',
		), $atts ) );

		ob_start(); ?>
		<?php



		$values = (array) vc_param_group_parse_atts( $values );

		$max_value = 0.0;
		$graph_lines_data = array();
		foreach ( $values as $data ) {
			$new_line = $data;
			$new_line['value'] = isset( $data['value'] ) ? $data['value'] : '';

			if ( $max_value < (float) $new_line['value'] ) {
				$max_value = $new_line['value'];
			}
			
			$graph_lines_data[] = $new_line;
		}
?>

		<ul class="<?php echo $style ?>">
			<?php
			foreach ( $graph_lines_data as $line ) {
				$line_value =  $line['value'];
			?>


                <li><?php echo $line_value  ?></li>

			<?php
			} ?>
		</ul>



		<?php return ob_get_clean();
	}
	add_shortcode( 'represent_list', 'represent_list' );
}
?>