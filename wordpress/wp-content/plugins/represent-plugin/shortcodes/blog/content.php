<?php
/**
 * -------------- Standar Post-----------------
 */
?>
<article  class='blog-post  '>
<div class="blog-post-inner">
    		<?php if ( has_post_thumbnail() ) {
  the_post_thumbnail( 'represent_blog_shortcode');
} ?>
<div class="blog-post-copy">
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
  <?php echo wp_trim_words(get_the_content(),18); ?>

</p>
<div class="read-more"><a href="<?php the_permalink() ?>">Read More</a></div>
</div>
</div>
</article>