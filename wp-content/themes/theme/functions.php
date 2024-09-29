<?php

function load_stylesheets()
{
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
    wp_register_style('stylesheet', get_template_directory_uri() . '/assets/css/index.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');

    wp_register_script('script', get_template_directory_uri() . '/js/wow.min.js', '', 1, 'all');
    wp_enqueue_script('script');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');



add_theme_support('post-thumbnails');
add_theme_support('custom-logo');
add_theme_support('title-tag');