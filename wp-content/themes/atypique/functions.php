<?php

function my_child_theme_enqueue_styles() {

$parent_style = 'parent-style';

wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
wp_enqueue_style( 'child-style',
  
    get_stylesheet_directory_uri() . '/style.css',
    array( $parent_style ),
    wp_get_theme()->get('Version')
  );
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
  function my_theme_enqueue_styles() { 
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
  } 

  require_once( get_stylesheet_directory() . '/template-parts/header.php' );

add_action( 'wp_enqueue_scripts', 'my_child_theme_enqueue_styles' );

function menu_scripts() {
  wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/assets/js/menu.js', array( 'jquery' ));
}
add_action( 'wp_enqueue_scripts', 'menu_scripts' );