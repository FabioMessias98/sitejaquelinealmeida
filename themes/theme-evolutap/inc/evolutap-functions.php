<?php

function add_slug_body_class($classes)
{
    global $post;
    if (isset($post)) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}
add_filter('body_class', 'add_slug_body_class');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

show_admin_bar(false);

register_nav_menus(array(
    'primary' => 'Menu Primário',
));

/**
 * Enqueue scripts and styles.
 */
function evolutap_scripts()
{
    wp_enqueue_style('evolutap-style', get_stylesheet_uri());
    wp_enqueue_style('evolutap-main-style', get_template_directory_uri() . '/assets/public/css/main.css');
    wp_enqueue_style('evolutap-custom-style', get_template_directory_uri() . '/assets/public/css/custom.css');

    wp_enqueue_style('custom-style', get_template_directory_uri() . '/custom.css');

    wp_enqueue_script('evolutap-main-scripts', get_template_directory_uri() . '/assets/public/js/main.js', array(), '1.0.1', true);
    wp_enqueue_script('evolutap-modernizr', get_template_directory_uri() . '/assets/modernizr/modernizr.js', array(), '1.0.1', true);
    wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/custom.js', array(), '1.0.0', true);

    // wp_dequeue_style('wp-block-library');
}
add_action('wp_enqueue_scripts', 'evolutap_scripts');

require get_template_directory() . '/inc/functions/register-post-types.php';
require get_template_directory() . '/inc/functions/register-rest-fields.php';

function limit_words($string, $word_limit) {  
    $words = explode(' ', $string, ($word_limit + 1));  
    if(count($words) > $word_limit) { array_pop($words); array_push($words, "..."); }  
    return implode(' ', $words);
}
