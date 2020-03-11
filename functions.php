<?php

// Theme Suppport
function theme_setup () {
  // featured image
  add_theme_support('post-thumbnails');

  set_post_thumbnail_size(900, 600);

  // Post Format Support
  add_theme_support('post-formats', array(
    'gallery'
  ));
}

add_action('after_setup_theme', 'theme_setup');