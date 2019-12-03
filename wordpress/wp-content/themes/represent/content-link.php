<?php
/**
 *---------- post type Quote---------------
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class() ?>>
  <div class="post-link">
    <i class="fa fa-link"></i>
    <?php the_content() ?>
  </div>
</article>