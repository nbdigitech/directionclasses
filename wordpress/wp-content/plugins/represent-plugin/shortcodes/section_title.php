<?php
/**
 * ----------- Section Title
 */
function represent_section_title( $atts ) {
  extract( shortcode_atts( array(
    'section_title' => '',
    'section_title_color' => '',
    'section_subtitle' => '',
    'section_subtitle_color' => '',
    'section_align' => 'text-center',
  ), $atts ) );
  $section_title = str_replace("{","<span>",$section_title);
  $section_title = str_replace("}","</span>",$section_title);
  $section_title = str_replace("b/","<br/>",$section_title);

  ob_start();

  if ($section_title_color != '') $style_title = "style = color:".$section_title_color;
  if ($section_subtitle_color != '') $style_subtitle = "style = color:".$section_subtitle_color;
  ?>
  <div class="heading <?php echo $section_align ?>" >
    <?php if($section_subtitle != ''){ ?>
    <p <?php if (isset($style_subtitle)) echo $style_subtitle ?>><?php echo esc_html($section_subtitle) ?></p>
   <?php } ?>
    <h3 class="featured" <?php  if (isset($style_title)) echo $style_title ?>><?php echo $section_title ?></h3>
  </div>
  <?php
  return ob_get_clean();

}
add_shortcode('represent_section_title', 'represent_section_title');