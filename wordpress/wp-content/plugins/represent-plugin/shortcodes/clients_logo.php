<?php
/**
 * ----------- Clients Logo
 */
function represent_clients_logo( $atts ) {
  extract( shortcode_atts( array(
    'client_layout' => 'caroucel',
    'client_logo' => '',
    'logo_to_show'=> '4',
    'logo_columns'=> '3',
  ), $atts ) );
  ob_start();
  $client_logo = explode(',', $client_logo );
  if($client_layout == 'caroucel') {
  ?>
  <div class="clients-item owl-carousel" data-show="<?php echo $logo_to_show ?>">
  <?php
  }else{
    ?>
    <div class="block-grid-md-<?php echo $logo_columns ?>">
  <?php
  }
  foreach ($client_logo as $logo_id) {
    $client_logo_src = wp_get_attachment_image_src( $logo_id );
    ?>
    <div>
      <img src="<?php echo esc_url($client_logo_src[0]) ?>" alt="logo" >
   </div>
  <?php
  }
  ?></div><?php
  return ob_get_clean();

}
add_shortcode('represent_clients_logo', 'represent_clients_logo');