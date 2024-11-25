<?php
// Enqueue Styles and Scripts
function my_custom_theme_enqueue_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'my_custom_theme_enqueue_styles' );
// Add theme support for custom logo
// function my_custom_theme_setup() {
//     add_theme_support( 'custom-logo' );
//     add_theme_support( 'post-thumbnails' );
//     add_theme_support( 'title-tag' );
//     add_theme_support( 'custom-background' );
// }

// add_action( 'after_setup_theme', 'my_custom_theme_setup' );
