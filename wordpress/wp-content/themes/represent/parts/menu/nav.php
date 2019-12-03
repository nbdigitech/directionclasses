<nav class="navbar navbar-expand-lg  navbar-light">
  <div class="container">
    <?php global $represent; ?>
    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
      <?php if (isset($represent) && $represent['opt-logo-link']['url'] != '#') { ?>
        <img alt="<?php echo esc_attr__("Brand", "represent") ?>"
             src="<?php echo esc_url($represent['opt-logo-link']['url']) ?>">
      <?php } else { ?>
        <h1 class="represent-sittitle"><?php echo bloginfo('name') ?></h1>
      <?php } ?>
    </a>
    <button class="navbar-toggler hamburger hamburger--spin" type="button" data-toggle="collapse"
            data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="hamburger-box navbar-toggler-icon">
        <span class="hamburger-inner"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <?php
      $args = array(
        'theme_location' => 'header-menu',
        'menu_class' => 'navbar-nav',
        'walker' => new creativo_navwalker(),
        'fallback_cb' => 'represent_primary_menu'
      );
      wp_nav_menu($args)
      ?>
    </div>
  </div>
</nav>