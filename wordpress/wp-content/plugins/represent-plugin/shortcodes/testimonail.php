<?php
/**
 * Created by PhpStorm.
 * User: abdellatif
 * Date: 1/22/2017
 * Time: 10:03 PM
 */
function represent_testimonail( $atts ) {
    extract( shortcode_atts( array(
        'testimonail_item_to_display' => '1',
        'testimonail_quote_text_color' => '',
        'testimonail_name_text_color' => '',
        'testimonail_job_text_color' => '',
    ), $atts ) );

    ob_start();
  if ($testimonail_quote_text_color != "")
  $quote_style = 'style= color:'.$testimonail_quote_text_color.';';
  if ($testimonail_name_text_color != "")
    $name_style = 'style= color:'.$testimonail_name_text_color.';';
  if ($testimonail_job_text_color != "")
    $job_style = 'style= color:'.$testimonail_job_text_color.';';
  ?>
  <div class="testimonials">
<!--   <div class="gr-image">
    <img id="grand-image" class="grand-image" src="" alt="image">
  </div> -->
  <div class="testimonails-items owl-carousel">

    <?php
    	$loop = new WP_Query( array( 'posts_per_page' => $testimonail_item_to_display, 'post_type' => 'testimonail' ) );
  while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="item-testimonail">
    
        <div>
          <p <?php if(isset($quote_style)) echo $quote_style ?>><?php echo get_the_content(); ?></p>
          <?php if ( has_post_thumbnail() ) {
      the_post_thumbnail( 'thumbnail');
            $image_src = get_the_post_thumbnail_url(get_the_ID(),"represent-testimonial");
    } ?>
          <div class="client-details">
          <h5 <?php if(isset($name_style))  echo $name_style ?>><?php the_title() ?></h5>
          <p class="job-title" <?php if(isset($job_style)) echo $job_style ?>><?php echo get_post_meta(get_the_ID(),'job_title',true) ?></p>
          </div>
          <input type="hidden" class="srcimage" value="<?php echo $image_src ?>">
        </div>

    </div>
    <?php endwhile;?>

  </div>
  </div>
    <?php
    return ob_get_clean();

}
add_shortcode('represent_testimonail', 'represent_testimonail');