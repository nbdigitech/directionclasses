<?php
/**
 * --------------- Pricing Table -------------
 */
function represent_pricing_table( $atts ) {
  extract( shortcode_atts( array(
    'title_table' => '',
    'price_table' => '',
    'price_detail_table' => '',
    'tible_options' => '',
    'button_table' => '',
    'button_link_table' => '',
    'featured_table' => '',
  ), $atts ) );
  ob_start();
  ?>
  <div class="pricing-tables">
  <div class="pricing-table <?php if ($featured_table == true) echo 'featured' ?>">
    <h3 class="title"><?php echo esc_html($title_table) ?></h3>
    
    <ul>
      <?php
      $table_info = vc_param_group_parse_atts( $tible_options );
        foreach ($table_info as $value) {
          ?>
          <li><?php echo esc_html($value['table_option']) ?></li>
          <?php
        }
      ?>
    </ul>
    <div class="price">
      <h4><span><?php echo esc_html($price_detail_table) ?></span><?php echo esc_html($price_table) ?></h4>
      
    </div>
    <?php $table_button_link = vc_build_link($button_link_table); ?>
    <div class="order"><button type="button" class="btn btn-secondary"><a href="<?php echo esc_html($table_button_link['url']) ?>"><?php echo esc_html($button_table) ?></a></button></div>
    
  </div>
  </div>
  <?php
 return ob_get_clean();

}
add_shortcode('represent_pricing_table', 'represent_pricing_table');
