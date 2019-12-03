<?php 
if(!function_exists('represent_iconplustext')){
  function represent_iconplustext($atts) {
  	
	extract( shortcode_atts( array(
	"iconplustext_chose" => "",
	"iconplustext_icon" => "",
	"iconplustext_image" => "",
	"iconplustext_title" => "",
	"iconplustext_title_color" => "",
	"iconplustext_discription" => "",
	"iconplustext_discription_color" => "",
	"iconplustext_style" => "tic-style1",
	"iconplustext_show_readmore" => "",
	"iconplustext_readmore" => ""

	), $atts));	
	 ob_start();
    if ($iconplustext_title_color != "")
    $title_style = "style = color:".$iconplustext_title_color;

    if ($iconplustext_discription_color != "")
      $discription_style = "style = color:".$iconplustext_discription_color;
    $url = vc_build_link( $iconplustext_readmore );
	?>
    <div class="text-with-icon <?php echo $iconplustext_style ?>">
      <?php if($iconplustext_chose == 'icon') { ?>
      <div class="icon-box ">
        <i class="<?php echo $iconplustext_icon ?>"></i>
      </div>
      <?php }else {
        ?>
        <div class="icon-box ">
          <img alt="logo" src="<?php echo  wp_get_attachment_url( $iconplustext_image );  ?>">

        </div>
      <?php
      } ?>
      <div class="media-body">
        <h5 class="media-heading" <?php if(isset($title_style)) echo $title_style ?>><?php echo $iconplustext_title ?></h5>
        <p <?php  if(isset($discription_style)) echo $discription_style ?>><?php echo $iconplustext_discription ?></p>
      </div>
      <?php if($iconplustext_show_readmore == 'yes' and $url['title'] != '') {?>
      <div class="readmore"><a href="<?php echo $url['url'] ?>"><?php echo $url['title'] ?></a> </div>
      <?php } ?>
    </div>



	<?php
  	return ob_get_clean();
  }
   add_shortcode( 'represent_iconplustext', 'represent_iconplustext' );
}