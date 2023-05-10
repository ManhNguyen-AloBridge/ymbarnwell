<?php
require_once get_stylesheet_directory() . '/const/config.php';

add_action('wp_enqueue_scripts', 'add_layout_style');
function add_layout_style()
{
    wp_enqueue_style('child-style', get_stylesheet_uri());
    // wp_enqueue_style('child-style', WP_SITEURL . '/wp-content/themes/twentytwentyone-child/style.css');

    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('child-theme-main-js', get_stylesheet_directory_uri() . '/assets/js/pages/home/index.js', array('jquery'));
    //     wp_enqueue_style('parent-style', WP_SITEURL . '/wp-content/themes/twentytwentyone-child/style.css');
    //     wp_enqueue_script('child-theme-main-js', WP_SITEURL . '/wp-content/themes/twentytwentyone-child/assets/js/pages/home/index.js', array('jquery'));
}

function get_template_child_directory()
{
    $template     = 'twentytwentyone-child';
    $theme_root   = get_theme_root_uri($template);
    $template_dir = "$theme_root/$template";

    return apply_filters('template_directory', $template_dir, $template, $theme_root);
}

function get_image_thumbnail_post($post)
{
    $imageUrl = null;
    if (has_post_thumbnail($post->ID)) {

        $imageUrl = wp_get_attachment_image_src(get_post_thumbnail_id($post), 'single-post-thumbnail')[0];
    }

    return $imageUrl;
}

add_action('wp_enqueue_scripts', 'add_pages_style');
function add_pages_style()
{

    wp_enqueue_style('home-page', get_template_child_directory() . '/assets/css/pages/home/index.css');

    wp_enqueue_style('single-page', get_template_child_directory() . '/assets/css/pages/single/index.css');
    wp_enqueue_style('about-page', get_template_child_directory() . '/assets/css/pages/about/index.css');
    wp_enqueue_style('search-page', get_template_child_directory() . '/assets/css/pages/search/index.css');

    // Component
    wp_enqueue_style('list-content', get_template_child_directory() . '/assets/css/components/pages/list-content.css');
    wp_enqueue_style('sidebar', get_template_child_directory() . '/assets/css/components/common/sidebar.css');


    // wp_enqueue_style('home-page', WP_SITEURL . '/wp-content/themes/twentytwentyone-child/assets/css/pages/home/index.css');
    // wp_enqueue_style('entertainment-page', WP_SITEURL . '/wp-content/themes/twentytwentyone-child/assets/css/pages/entertainment/index.css');
    // wp_enqueue_style('animal-page', WP_SITEURL . '/wp-content/themes/twentytwentyone-child/assets/css/pages/animal/index.css');
    // wp_enqueue_style('funny-page', WP_SITEURL . '/wp-content/themes/twentytwentyone-child/assets/css/pages/funny/index.css');
    // wp_enqueue_style('single-page', WP_SITEURL . '/wp-content/themes/twentytwentyone-child/assets/css/pages/single/index.css');
    // wp_enqueue_style('about-page', WP_SITEURL . '/wp-content/themes/twentytwentyone-child/assets/css/pages/about/index.css');
    // wp_enqueue_style('search-page', WP_SITEURL . '/wp-content/themes/twentytwentyone-child/assets/css/pages/search/index.css');
}
