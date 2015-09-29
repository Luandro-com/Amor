<header class="banner" role="banner">
  <a class="brand" href="<?= esc_url(home_url('/')); ?>">
    <div class="mobile-header">
      <?php bloginfo('name'); ?>
      <img src="<?= get_template_directory_uri() . '/dist/images/logo.png'; ?>" height="88" width="345">
    </div>
  </a>
  <nav class="navbar">
    <div class="navbar-inner">
      <div class="container">
        <div type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        </div>
        <a class="brand" href="#"><img src="<?= get_template_directory_uri() . '/dist/images/logo_white_small.svg'; ?>"></a>
        <div class="nav-collapse collapse">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
          endif;
          ?>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </nav>
</header>
