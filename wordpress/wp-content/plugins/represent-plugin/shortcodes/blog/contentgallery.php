<?php
/**
 * ------------- Gallery Post ------------------
 */
?>
<article  class='post-blog '>
  <ul class="meat-gallery-images-holder">

    <?php if ( has_post_thumbnail() ) { ?>
      <li>
        <?php the_post_thumbnail( 'represent_blog_shortcode'); ?>
      </li>
    <?php } ?>


    <?php

    $portfolio_image_gallery_val = get_post_meta( get_the_ID(), 'meat_portfolio-image-gallery', true );

    if($portfolio_image_gallery_val!='' ) $portfolio_image_gallery_array=explode(',',$portfolio_image_gallery_val);

    if(isset($portfolio_image_gallery_array) && count($portfolio_image_gallery_array)!=0):

      foreach($portfolio_image_gallery_array as $gimg_id):

        $gimage_wp = wp_get_attachment_image_src($gimg_id,'represent_blog_shortcode', true);
        echo '<li class="meat-gallery-image-holder" ><img src="'.$gimage_wp[0].'"/></li>';

      endforeach;

    endif;
    ?>
  </ul>
<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
  <?php if($blog_info == true ) {
    ?>
    <div class="blog-info">
              <span class="post-date">
              <?php
              ?>
                <i class="fa fa-clock-o"></i>
                <?php

                ?> <span><?php echo esc_html__('On','represent'); ?></span><?php
                ?> <span> <?php echo get_the_date( 'd M y'); ?></span> <?php
                ?>
              </span>
              <span class="post-user">
                <i class="fa fa-user"></i>
                <?php
                ?><span> <?php echo esc_html__('Posted by','represent'); ?> </span><?php
                ?><span> <?php  the_author(); ?></span> <?php
                ?>
              </span>
    </div>
  <?php
  } ?>

<p class="post-content">
  <?php echo wp_trim_words(get_the_content(),25); ?>

</p>
<div class="read-more">
  <a href="<?php the_permalink() ?>">
    <?php echo esc_html__('Read More','represent'); ?></a></div>
</article>