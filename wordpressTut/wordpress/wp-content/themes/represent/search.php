<?php get_header();
get_template_part('parts/title-bar'); ?>
  <div class="content-wrapper ">
    <div class="container ">
      <div class="row">
        <div class="search-result col-lg-8">
          <?php if (have_posts()) { ?>
            <?php while (have_posts()) {
              the_post(); ?>
              <article>
                <div class="represent-post-content">
                  <?php if (has_post_thumbnail()) { ?>
                    <div class="represent-post-image">
                      <a itemprop="url" href="<?php the_permalink() ?>"
                         title="<?php echo esc_attr__('the title', 'represent'); ?>">
                        <?php the_post_thumbnail('represent_blog_thumbnail'); ?>
                      </a>
                    </div>
                  <?php } ?>
                  <div class="represent-post-title-area ">
                    <div class="represent-post-title-area-inner">
                      <h5 itemprop="name" class="represent-post-title entry-title">
                        <a itemprop="url" href="<?php the_permalink() ?>"><?php the_title() ?></a>
                      </h5>

                      <p itemprop="description" class="represent-post-excerpt">
                        <?php echo wp_trim_words(do_shortcode(get_the_content(), 25)); ?>
                      </p>
                    </div>
                  </div>
                </div>
              </article>
            <?php }
          } else {
            if (is_search()) { ?>
              <div class="no-result  col-lg-12">
                <h2
                  class="sorry"><?php echo esc_html__('Sorry, but nothing matched your search terms.', 'represent'); ?> </h2>

                <h3
                  class="try"><?php echo esc_html__('Please try again with some different keywords.', 'represent'); ?> </h3>
                <?php get_search_form(); ?>
              </div>
            <?php } else { ?>
              <div class="no-result col-lg-6">
                <p><?php echo esc_html__('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'represent'); ?></p>
                <?php get_search_form(); ?>
              </div>
            <?php
            }
          }
          wp_reset_query(); ?>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>