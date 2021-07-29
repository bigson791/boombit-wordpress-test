<?php

function add_css_js(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_script('pooper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', array('jquery'),'2.9',true  );
    wp_enqueue_script('boostrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', array('pooper'),'5.0',true  );
}

add_action('wp_enqueue_scripts', 'add_css_js');

// soport images EN featured image support 
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, true ); // default Featured Image dimensions (cropped)
 
    add_image_size( 'category-thumb', 300, 9999 ); // 300 pixels wide (and unlimited height)
 }