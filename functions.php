<?php

//Load Stylesheets

function load_css()
{
    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all' );
    wp_enqueue_style( 'mytheme-custom', get_template_directory_uri() . '/custom.css' );
    wp_enqueue_style( 'main');
}
add_action('wp_enqueue_scripts', 'load_css');

function load_js()
{
    wp_register_style('style', get_template_directory_uri() . '/dist/app.css', [], 1, 'all');
    wp_enqueue_style( 'style');

    wp_enqueue_script('jquery');

    wp_register_script('app', get_template_directory_uri() . '/dist/app.js', ['jquery'], 1, true);
    wp_enqueue_script( 'app');
}
add_action('wp_enqueue_scripts', 'load_js');

//Theme options

add_theme_support('menus');

//Menus

register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'footer-menu' => 'Footer Menu Location'
    )
);

// function additional_post_type(){

//     $arg = array(
        
//         'public' => true,
//         'has_archive' => true,
//         'supports' => array('title', 'editor', 'thumbnail'),

//     );

//     register_post_type('cars', $args);


// }
// add_action('init', 'additional_post_type')