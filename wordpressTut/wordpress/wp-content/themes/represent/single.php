<?php get_header();
get_template_part('parts/title-bar');
?>

<section class="blog single-blog content-wrapper">
  <div class="container">
    <div class="row">
      <?php get_sidebar(); ?>
      <div class="col-sm-8 order-1 order-sm-2">
        <div class="blog-post">
          <?php if (have_posts()) :
            while (have_posts()) : the_post();
              ?>
              <div class="blog-post-img-date-cats">
                <?php if (has_post_thumbnail()) {
                  the_post_thumbnail('represent_blog_thumbnail');
                } ?>

              </div>
              <div class="blog-post-content">
                <ul class="admin-comment">
                  <li class="cats"><?php the_category(); ?></li>
                  <li><?php echo esc_html__('By', 'represent'); ?> <span class="admin"><?php the_author() ?> </span>
                  </li>
                  <li class="date"><?php echo get_the_date() ?></li>
                  <li class="comments"><?php comments_number('No responses', 'One Comment', '% Comments'); ?></li>
                </ul>
                <div class="excerpt clearfix">
                  <?php the_content() ?>
                </div>
                <?php if (has_tag()) {
                  the_tags('<div class="tags">',' ','</div>');
                } ?>
              </div>
              <?php
              if (comments_open() || get_comments_number()) {
                comments_template('', true);
              }
              ?>
            <?php endwhile;
          endif;
          wp_link_pages(array('before' => '<div class="page-pagination">', 'after' => '</div>', 'link_before' => '<span class="page-numbers">', 'link_after' => '</span>',)); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
