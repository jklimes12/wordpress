<?php

function register_my_menu()
{
    register_nav_menu('side-menu', __('Side Menu'));
    register_nav_menu('left-side-menu', __('Left side Menu'));
}
add_action('init', 'register_my_menu');

// style.css add
wp_enqueue_style('style', get_stylesheet_uri());

// adding bootstrap
wp_enqueue_script('jqery-js', get_template_directory_uri() . "/libs/jquery/jquery-3.3.1.slim.min.js");
wp_enqueue_style('BOOTSTRAP', get_template_directory_uri() . "/libs/bootstrap/css/bootstrap.min.css");
wp_enqueue_script('popper', get_template_directory_uri() . "/libs/popper/popper.min.js");
wp_enqueue_script('BOOTSTRAP-JS', get_template_directory_uri() . "/libs/bootstrap/js/bootstrap.bundle.js");

//enable thumbnails
add_theme_support("post-thumbnails");

require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
