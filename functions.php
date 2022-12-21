<?php


//load styles
function vyk_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v6.1.1/css/all.css' );
    wp_enqueue_style( 'splide-core', get_template_directory_uri() . '/assets/css/splide.min.css' );
    wp_enqueue_script( 'splide-js', get_template_directory_uri() . '/assets/js/splide.min.js', NULL, '1.0', true);
    wp_enqueue_script( 'main-js' , get_template_directory_uri() . '/assets/js/main.js' , array(), '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'vyk_scripts' );


//load menu
add_theme_support( 'menus' );

function custom_new_menu() {
	register_nav_menus(
    array(
      'header-menu' => __( 'Header menu' ),
      'footer-menu-2' => __( 'Footer menu 2')

    ) 
  );
}

add_action( 'init', 'custom_new_menu' );


add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
   add_theme_support( 'woocommerce' );
}   

