<?php
add_action('wp_enqueue_scripts',  function () {

    wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css');
    wp_enqueue_style('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css');
    wp_enqueue_style('fonts-googleapsis', 'https://fonts.googleapis.com');
    wp_enqueue_style('fonts-gstatic', 'https://fonts.gstatic.com');
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');


    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', array('jquery'), 'null', true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), 'null', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true);
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');