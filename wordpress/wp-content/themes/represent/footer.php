<footer>
  <?php if (is_active_sidebar('footer_1')) { ?>
    <div class="footer-content">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <?php dynamic_sidebar('footer_1') ?>
          </div>
          <div class="col-sm-3">
            <?php dynamic_sidebar('footer_2') ?>
          </div>
          <div class="col-sm-3">
            <?php dynamic_sidebar('footer_3') ?>
          </div>
          <div class="col-sm-3">
            <?php dynamic_sidebar('footer_4') ?>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <?php
          global $represent;
          ?>
          <p class="copyright-text">
            <?php
            if(isset($represent["opt-copyright"]) ) {
              echo esc_html($represent["opt-copyright"]);
            } else {
              echo esc_html__('Copyright PixelWay 2019', 'represent');
            }

            ?>
          </p>

        </div>
        <div class="col-sm-6 text-right">
          <?php echo represent_socialMedias() ?>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer() ?>
</body>
</html>
