<?php get_header();
if (!is_front_page())
  get_template_part('parts/title-bar');
?>
<div class="content-wrapper ">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <?php
        if (have_posts()) :
          while (have_posts()) : the_post();
            the_content();
            if (comments_open()) {
              comments_template('', true);
            }
          endwhile;
        endif;
        ?>
      </div>
    </div>
    <?php wp_link_pages(array('before' => '<div class="page-pagination">', 'after' => '</div>', 'link_before' => '<span class="page-numbers">', 'link_after' => '</span>',)); ?>
  </div>
</div>
<?php get_footer(); ?>
