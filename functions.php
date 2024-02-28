<?php 
function headless_wordpress_theme_setup() {
  add_theme_support( 'align-wide' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'editor-styles');
  add_editor_style( 'css/custom-editor-style.css' );
}

add_action( 'after_setup_theme', 'headless_wordpress_theme_setup' );