<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <?php get_template_part('templates/entry-meta'); ?>
    <header>
      <img class="amor-flower-deco" src="<?= get_template_directory_uri() . '/dist/images/flower_deco.svg'; ?>">
      <h2 class="entry-title"><?php the_title(); ?></h2>
    </header>
    <div class="border"></div>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
