<header class="banner" role="banner">
  <a class="brand" href="<?= esc_url(home_url('/')); ?>">
    <div class="mobile-header">
      <!-- <?php bloginfo('name'); ?> -->
       <?php if ( get_theme_mod( 'm1_header' ) ) : ?>
          <img src="<?php echo get_theme_mod( 'm1_header' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" height="88" width="345">
        <?php else : ?>
          <img src="<?= get_template_directory_uri() . '/dist/images/logo.png'; ?>" height="88" width="345">
        <?php endif; ?>
    </div>
  </a>
  <div class="ribbon desktop">
    <nav class="ribbon-content">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
        endif;
      ?>
    </nav>
  </div>
  <nav class="navbar mobile">
    <div class="navbar-inner">
      <div class="container">
        <a class="brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?= get_template_directory_uri() . '/dist/images/logo_white_small.svg'; ?>"></a>
        <div type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        </div>
      </div>
    </div>
    <?php get_template_part('templates/mobile-menu'); ?>
  </nav>
</header>
