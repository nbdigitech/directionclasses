<article id="post-<?php the_ID(); ?>" <?php post_class() ?>>
  <div class="blog-post">
    <div class="blog-post-img-date-cats">
      <?php if (has_post_thumbnail()) {
        the_post_thumbnail('represent_blog_thumbnail');
      } ?>


    </div>
    <div class="blog-post-content">
      <h3 class="blog-post-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
      <ul class="admin-comment">
        <li class="cats"><?php the_category(); ?></li>
        <li><?php echo esc_html__('By', 'represent'); ?> <span class="admin"><?php the_author() ?> </span></li>
        <li class="date"><?php echo get_the_date() ?></li>
        <li class="comments"><?php comments_number(esc_html__('No responses','represent'),esc_html__('One Comment','represent') , esc_html__('% Comments','represent')); ?></li>
      </ul>

      <div class="excerpt">
        <p><?php echo wp_trim_words(get_the_content(), 25); ?></p>
      </div>
      <div class="read-more">
        <a href="<?php the_permalink() ?>"><?php echo esc_html__('Read More', 'represent') ?></a>
      </div>
    </div>
  </div>
</article>