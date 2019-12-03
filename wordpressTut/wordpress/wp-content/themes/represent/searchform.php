<?php
/**
 * The template for displaying search forms in Represent
 *
 */
?>
<form action="<?php echo esc_url(home_url('/')) ?>" class="searchform" id="searchform" method="get">
  <div class="search-input">
    <input type="text" id="s" placeholder="<?php echo esc_attr__('Type & hit enter...', 'represent') ?>" name="s">
  </div>
</form>
