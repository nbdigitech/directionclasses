<?php get_header();
get_template_part('parts/title-bar');
?>
  <div class="main-blog">
    <div class="container">
      <div class="row">
        <?php get_sidebar(); ?>
        <div class="col-lg-8 order-1 order-md-2 order-sm-2">
          <?php
          //____________ loop blog page __________
          if (have_posts()) : ?>
            <?php while (have_posts()) : the_post();
              /*
               * Include the post format-specific template for the content. If you want to
               * use this in a child theme, then include a file called called content-___.php
               * (where ___ is the post format) and that will be used instead.
               */
              get_template_part('content', get_post_format());
            endwhile; ?>
          <?php endif;
          //____________ Pagination
          ?>
          <div class="pagination">
            <?php
            global $wp_query;
            $big = 999999999;
            echo paginate_links(array(
              'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
              'format' => '?paged=%#%',
              'current' => max(1, get_query_var('paged')),
              'total' => $wp_query->max_num_pages,
              'prev_text' => esc_html__('prev', 'represent'),
              'next_text' => esc_html__('Next', 'represent'),

            ));
            ?>
          </div>
          <?php
          //______________ commentaire ___________
          if (comments_open()) {
            comments_template('', true);
          } ?>

        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>