<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}

function asset_uri( $image = "uc_menu_logo.png" ) {
  return get_stylesheet_directory_uri() . '/assets/' . $image ;
}

function get_current_template() {
    global $wp_query;
    $template_name = str_replace('.php','',get_post_meta($wp_query->post->ID,'_wp_page_template',true));
    if ( $template_name ) return $template_name;
    else return false;
}

require_once( __DIR__ . '/includes.php');

add_action('wp_enqueue_scripts', 'remove_theme_menu_js', 100);
function remove_theme_menu_js(){
  wp_dequeue_script('twentyseventeen-navigation');
}


