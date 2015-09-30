<form role="search" method="get" class="search-form form-inline" action="<?= esc_url(home_url('/')); ?>">
  <label class="sr-only"><?php _e('Buscar:', 'sage'); ?></label>
  <div class="input-group">
    <input type="search" value="<?= get_search_query(); ?>" name="s" class="search-field" placeholder="<?php _e('Buscar...', 'sage'); ?>" required>
    <span><button type="submit" class="search-submit "><span class="glyphicon glyphicon-search"></span></button></span>
  </div>
</form>
