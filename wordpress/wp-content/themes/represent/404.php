<?php
get_header();
get_template_part('parts/title-bar');
?>
  <div class="container">
    <div class="row">
      <div class="404-container col-md-12">
        <div class="not-found404">
          <h2><?php echo esc_html__('404', 'represent') ?></h2>
          <h5><?php echo esc_html__('PAGE NOT FOUND', 'represent') ?></h5>

          <p><?php echo esc_html__('We’re sorry, the page you have looked for does not exist in our database! Maybe go to our ', 'represent');
            ?>
            <span><?php echo esc_html__('home page', 'represent') ?> </span> <?php echo esc_html__('or try to use a', 'represent') ?>
            <span><?php echo esc_html__('search?', 'represent') ?></span></p>

          <a href="<?php echo esc_url(home_url('/')); ?>" target="_self">
            <span class="btn-text"><?php echo esc_html__("Back to home", "represent") ?></span> </a>

        </div>

      </div>
    </div>
  </div>

<?php get_footer(); ?>