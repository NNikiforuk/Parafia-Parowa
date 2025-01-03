<?php

function wpdevs_load_scripts()
{
    wp_enqueue_style('wpdevs-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');

    wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'wpdevs_load_scripts');

function wpdevs_config()
{
    register_nav_menus(
        array(
            'wp_devs_main_menu' => 'Main Menu',
        )
    );

    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'wpdevs_config', 0);

if (! function_exists('wp_body_open')) {
    function wp_body_open()
    {
        do_action('wp_body_open');
    }
}
