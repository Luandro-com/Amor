<div class="mobile-menu">
  <div class="glyphicon glyphicon-remove"></div>
  <img src="<?= get_template_directory_uri() . '/dist/images/heart_deco.svg'; ?>" height="78" width="57">
  <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
    endif;
    ?>
</div>
