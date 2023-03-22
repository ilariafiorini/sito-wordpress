<?php
function custom_style(){
    wp_enqueue_style( "wpcf7-custom", get_stylesheet_directory_uri(). "/assets/css/wpcf7.css",array(), false );
    if (is_page(7)){
        wp_enqueue_script( "custom", get_stylesheet_directory_uri(). "/assets/js/script.js",array(), null );
    }
}
add_action('wp_enqueue_scripts', 'custom_style');