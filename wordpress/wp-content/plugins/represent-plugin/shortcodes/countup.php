<?php 
if(!function_exists('represent_countup')){
  function represent_countup($atts) {
  	
	extract( shortcode_atts( array(
	"countup_number" => "2587",
	"countup_title" => "",
	"countup_description" => "",
	"countup_number_color" => "",
	"countup_title_color" => "",
	"countup_description_color" => ""

	), $atts));
	 ob_start();
    if ($countup_number_color != "")
    $number_style = "style= color:".$countup_number_color;
    if ($countup_title_color != "")
    $title_style = "style= color:".$countup_title_color;
    if ($countup_description_color != "")
    $description_style = "style= color:".$countup_description_color;
	?>
    <div class="counters-wrapper">
      <div class="counter">
        <div>
          <h4 class="counter-number" <?php if(isset($number_style)) echo $number_style ?> data-from="0" data-to="<?php echo $countup_number ?>">0</h4>
          <?php if($countup_title != "") {?>
            <h3 <?php if(isset($title_style)) echo $title_style ?>><?php echo  $countup_title ?></h3>
          <?php } ?>
        </div>

    <?php if($countup_description != "") {?>
      <div>
        <p <?php if(isset($description_style)) echo $description_style ?>><?php echo $countup_description ?></p>

      </div>
         <?php } ?>
      </div>
    </div>

	<?php
  	return ob_get_clean();
  }
   add_shortcode( 'represent_countup', 'represent_countup' );
}