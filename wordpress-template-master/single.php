<?php
get_header();

 ?>
<div class="container">
  <div class="row">
    <h1 class="mx-0"><?php the_title(); ?></h1>
  </div>
  <div class="row">
    <div class="col-md-12">

      <header class="masthead" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <div class="post-heading">
                <h1> <?php the_title(); ?></h1>
                <span class="meta">Vložil admin
                  <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a>
                  dne <?php the_date(); ?></span>
              </div>
            </div>
          </div>
        </div>
      </header>


      <nav class="navbar navbar-light bg-light navbar-expand-lg justify-content-between">

        <a class="navbar-brand" href="<?php echo home_url() ?>">
          <?php echo $custom_logo ?>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-t oggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <?php
          wp_nav_menu( array(
              'theme_location'  => 'left-side-menu',
              'depth'           => 2,
              'container'       => 'div',
              'container_class' => 'collapse navbar-collapse',
              //'menu_class'      => 'nav navbar-nav ml-auto',
              'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
              //'walker'          => new WP_Bootstrap_Navwalker()
          ) );
          ?>
        </div>



   </div>

  </div>
</div>
 <?php
 get_footer();

  ?>
