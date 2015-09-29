<?php use Roots\Sage\Titles; ?>

<div class="page-header">
  <!-- <h1><?= Titles\title(); ?></h1> -->
   <div class="mobile">
    <div class="col-xs-9">
      <div class="amor-boxed">
        <div class="amor-inner-box">
          <img src="<?= get_template_directory_uri() . '/dist/images/leaf_deco.svg'; ?>" height="20px" />
          <h4>Guia de Fornecedores</h4>
        </div>
      </div>
    </div>
    <div class="col-xs-3 row">
      <a href="facebook.com" class="col-xs-12"><img src="<?= get_template_directory_uri() . '/dist/images/facebook.svg'; ?>" height="33px" /></a>
      <br />
      <a href="pinterest.com" class="col-xs-12"><img src="<?= get_template_directory_uri() . '/dist/images/pinterest.svg'; ?>" height="33px" /></a>
    </div>
  </div>
  <!-- Carousel -->
  <div class="amor-carousel">
   <?php
      $args = array( 'numberposts' => '5' );
      $recent_posts = wp_get_recent_posts( $args );

    ?>
    <?php foreach($recent_posts as $post) : ?>
      <?php
        $background = wp_get_attachment_image_src( get_post_thumbnail_id($post["ID"]), "large" )
      ?>
      <div>
          <a href="<?php echo get_permalink($post['ID']) ?>">
              <div class="amor-carousel-img" style="background-image:url('<?php echo $background[0] ?>')">
                <h2><?php echo $post['post_title'] ?></h2>
              </div>
          </a>
      </div>
  <?php endforeach; ?>
  </div>
</div>
