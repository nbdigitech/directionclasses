<?php
if(!function_exists('represent_progressbar')){
	function represent_progressbar($atts) {
		extract( shortcode_atts( array(
			'title' => '',
			'values' => '',
			'units' => '%',
			'css' => '',
		), $atts ) );

		ob_start(); ?>
		<?php



		$values = (array) vc_param_group_parse_atts( $values );

		$max_value = 0.0;
		$graph_lines_data = array();
		foreach ( $values as $data ) {
			$new_line = $data;
			$new_line['value'] = isset( $data['value'] ) ? $data['value'] : 0;
			$new_line['label'] = isset( $data['label'] ) ? $data['label'] : '';

			if ( $max_value < (float) $new_line['value'] ) {
				$max_value = $new_line['value'];
			}
			
			$graph_lines_data[] = $new_line;
		}
?>
	<div>
		<div class="skill-bars">
			<?php
			foreach ( $graph_lines_data as $line ) {
				$line_value =  $line['value'];
				$line_label =  $line['label'];
			?>
                <h5><?php echo esc_attr($line_label); ?></h5>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $line_value ?>" aria-valuemin="0" aria-valuemax="100" style="width:0">
                        <span><?php echo $line_value . esc_attr($units) ?></span>
                    </div>
                </div>

			<?php
			} ?>
		</div>
	</div>


		<?php return ob_get_clean();
	}
	add_shortcode( 'represent_progressbar', 'represent_progressbar' );
}
?>