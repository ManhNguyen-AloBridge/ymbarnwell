<?php

// function twentytwentone_styles() {
//     wp_enqueue_style( 'child-style', get_stylesheet_uri(),
//     array( 'twenty-twenty-one-style' ), wp_get_theme()->get('Version') );
// }
// add_action( 'wp_enqueue_scripts', 'twentytwentyone_styles');

require_once get_stylesheet_directory() . '/const/config.php';


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
    wp_enqueue_style('entertainment-page', get_template_child_directory() . '/assets/css/pages/entertainment/index.css');
    wp_enqueue_style('animal-page', get_template_child_directory() . '/assets/css/pages/animal/index.css');
    wp_enqueue_style('funny-page', get_template_child_directory() . '/assets/css/pages/funny/index.css');
    wp_enqueue_style('detail-page', get_template_child_directory() . '/assets/css/pages/detail/index.css');
    wp_enqueue_style('about-page', get_template_child_directory() . '/assets/css/pages/about/index.css');
}

add_action('pre_get_posts',  'set_posts_per_page');
function set_posts_per_page($query)
{

    global $wp_the_query;

    if ((!is_admin()) && ($query === $wp_the_query) && ($query->is_search())) {
        $query->set('posts_per_page', 3);
    } elseif ((!is_admin()) && ($query === $wp_the_query) && ($query->is_archive())) {
        $query->set('posts_per_page', 7);
    }
    // Etc..

    return $query;
}


function my_pagination($args = array())
{
    global $wp_query;
    $output = '';

    if ($wp_query->max_num_pages <= 1) {
        return;
    }

    $pagination_args = array(
        'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
        'total'        => $wp_query->max_num_pages,
        'current'      => max(1, get_query_var('paged')),
        'format'       => '?paged=%#%',
        'show_all'     => false,
        'type'         => 'plain',
        'end_size'     => 2,
        'mid_size'     => 1,
        'prev_next'    => true,
        //'prev_text'    => __( '&laquo; Prev', 'text-domain' ),
        //'next_text'    => __( 'Next &raquo;', 'text-domain' ),
        //'prev_text'    => __( '&lsaquo; Prev', 'text-domain' ),
        //'next_text'    => __( 'Next &rsaquo;', 'text-domain' ),
        'prev_text'    => sprintf(
            '<i></i> %1$s',
            apply_filters(
                'my_pagination_page_numbers_previous_text',
                __('Newer Posts', 'text-domain')
            )
        ),
        'next_text'    => sprintf(
            '%1$s <i></i>',
            apply_filters(
                'my_pagination_page_numbers_next_text',
                __('Older Posts', 'text-domain')
            )
        ),
        'add_args'     => false,
        'add_fragment' => '',

        // Custom arguments not part of WP core:
        'show_page_position' => false, // Optionally allows the "Page X of XX" HTML to be displayed.
    );

    $pagination_args = apply_filters('my_pagination_args', array_merge($pagination_args, $args), $pagination_args);

    $output .= paginate_links($pagination_args);

    // Optionally, show Page X of XX.
    if (true == $pagination_args['show_page_position'] && $wp_query->max_num_pages > 0) {
        $output .= '<span class="page-of-pages">' .
            sprintf(__('Page %1s of %2s', 'text-domain'), $pagination_args['current'], $wp_query->max_num_pages) .
            '</span>';
    }

    return $output;
}
