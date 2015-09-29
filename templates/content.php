<?php get_template_part('templates/entry-meta'); ?>
<article <?php post_class(); ?>>
  <header>
    <img class="amor-flower-deco" src="<?= get_template_directory_uri() . '/dist/images/flower_deco.svg'; ?>">
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </header>
  <div class="border"></div>
  <div class="entry-summary">
    <?php the_content(); ?>
  </div>
  <div class="post-footer">
    <img src="<?= get_template_directory_uri() . '/dist/images/flower_deco_2.svg'; ?>" height="43px" />
  </div>
</article>
