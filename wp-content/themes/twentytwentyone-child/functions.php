<?php

// function twentytwentone_styles() {
//     wp_enqueue_style( 'child-style', get_stylesheet_uri(),
//     array( 'twenty-twenty-one-style' ), wp_get_theme()->get('Version') );
// }
// add_action( 'wp_enqueue_scripts', 'twentytwentyone_styles');

add_action('wp_enqueue_scripts', 'add_layout_style');
function add_layout_style()
{
    wp_enqueue_style('child-style', get_stylesheet_uri());
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('child-theme-main-js', get_stylesheet_directory_uri() . '/assets/js/pages/home/index.js', array('jquery'));
}

function get_template_child_directory()
{
    $template     = 'twentytwentyone-child';
    $theme_root   = get_theme_root_uri($template);
    $template_dir = "$theme_root/$template";

    return apply_filters('template_directory', $template_dir, $template, $theme_root);
}

add_action('wp_enqueue_scripts', 'add_pages_style');
function add_pages_style()
{
    wp_enqueue_style('home-page', get_template_child_directory() . '/assets/css/pages/home/index.css');
    wp_enqueue_style('entertainment-page', get_template_child_directory() . '/assets/css/pages/entertainment/index.css');
    wp_enqueue_style('animal-page', get_template_child_directory() . '/assets/css/pages/animal/index.css');
    wp_enqueue_style('funny-page', get_template_child_directory() . '/assets/css/pages/funny/index.css');
    wp_enqueue_style('detail-page', get_template_child_directory() . '/assets/css/pages/detail/index.css');
    wp_enqueue_style('about-page', get_template_child_directory() . '/assets/css/pages/about/index.css');
}
