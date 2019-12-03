<?php
if (is_active_sidebar('sidebar')) : ?>
  <aside class="col-lg-4 sidebar order-2 order-md-1 order-sm-1">
    <?php dynamic_sidebar('sidebar'); ?>
  </aside><!-- #secondary -->
<?php endif;