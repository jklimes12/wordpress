<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <?php
$custom_logo = wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'full' );
?>

<nav class="navbar navbar-light bg-light navbar-expand-lg justify-content-between">

  <a class="navbar-brand" href="<?php echo home_url() ?>">
    <?php echo $custom_logo ?>
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <?php
    wp_nav_menu( array(
        'theme_location'  => 'side-menu',
        'depth'           => 2,
        'container'       => 'div',
        'container_class' => 'collapse navbar-collapse',
        'menu_class'      => 'nav navbar-nav ml-auto',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker()
    ) );
    ?>
  </div>
</nav>
</body>
</html>
