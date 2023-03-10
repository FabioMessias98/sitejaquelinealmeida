<?php

function course_init() {
    $args = array(
        'public'       => true,
        'label'        => 'Courses',
        'show_in_rest' => true,
        'supports'     => array('title', 'thumbnail'), 
        'menu_icon'    => 'dashicons-products'
    );
    
    register_post_type('course', $args );
}
add_action( 'init', 'course_init' );

function product_init() {
    $args = array(
        'public'       => true,
        'label'        => 'Products',
        'show_in_rest' => true,
        'supports'     => array('title', 'thumbnail'), 
        'menu_icon'    => 'dashicons-products'
    );
    
    register_post_type('product', $args );
}
add_action( 'init', 'product_init' );

function testimonials_init() {
    $args = array(
        'public'       => true,
        'label'        => 'Testimonials',
        'show_in_rest' => true,
        'supports'     => array('title', 'thumbnail'), 
        'menu_icon'    => 'dashicons-testimonial'
    );
    register_post_type('testimonials', $args );
}
add_action( 'init', 'testimonials_init' );

function photos_init() {
    $args = array(
        'public'       => true,
        'label'        => 'Photos',
        'show_in_rest' => true,
        'supports'     => array('title', 'thumbnail'), 
        'menu_icon'    => 'dashicons-format-gallery'
    );

    register_post_type('photo', $args );
}
add_action( 'init', 'photos_init' );

function products_channel_init() {
    $args = array(
        'public' => true,
        'label'  => 'Products Backup',
        'show_in_rest'       => true, 
        'menu_icon'           => 'dashicons',
        'menu_icon'           => 'dashicons-products',
        'taxonomies'          => array( 'category' ),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
    );
    register_post_type('products', $args );
}
add_action( 'init', 'products_channel_init' );

function women_channel_init() {
    $args = array(
        'public' => true,
        'label'  => 'The Women Channel',
        'show_in_rest'       => true, 
        'menu_icon'           => 'dashicons-admin-site-alt3'
    );
    register_post_type('women_channel', $args );
}
add_action( 'init', 'women_channel_init' );

function story_init() {
    $args = array(
        'public' => true,
        'label'  => 'Story',
        'show_in_rest'       => true, 
        'menu_icon'           => 'dashicons-book'
    );
    register_post_type('story', $args );
}
add_action( 'init', 'story_init' );

function create_produtos_2_taxonomies() {

    $args = array(
        'hierarchical'      => true, 
        'labels'            => array('name' => 'Tipo'),
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest' => true,
        'rest_base'          => 'utilizacao_categories',
        'rest_controller_class' => 'WP_REST_Terms_Controller', 
        'rewrite'           => array( 'slug' => 'utilizacao_categories' ),
    );

    register_taxonomy( 'utilizacao_categories', array( 'produtos' ), $args );
}
add_action( 'init', 'create_produtos_2_taxonomies', 0 );

function create_times_taxonomies() {

    $args = array(
        'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
        'labels'            => array('name' => 'Cidades'),
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest' => true,
        'rest_base'          => 'cidades_categories',
        'rest_controller_class' => 'WP_REST_Terms_Controller', 
        'rewrite'           => array( 'slug' => 'cidades-categories' ),
    );

    register_taxonomy( 'cidades_categories', array( 'equipe' ), $args );
}
add_action( 'init', 'create_times_taxonomies', 0 );

function create_times_2_taxonomies() {

    $args = array(
        'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
        'labels'            => array('name' => 'Regiões'),
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest' => true,
        'rest_base'          => 'regioes_categories',
        'rest_controller_class' => 'WP_REST_Terms_Controller', 
        'rewrite'           => array( 'slug' => 'regios-categories' ),
    );

    register_taxonomy( 'regioes_categories', array( 'equipe' ), $args );
}
add_action( 'init', 'create_times_2_taxonomies', 0 );

function dcms_list_child_pages() {
    global $post;
    $string = '';
    $child_of = $post->ID;

    if ( is_page() && $post->post_parent ){
        $child_of= $post->post_parent;
    }
    
    $params = array(
        'child_of'     => $child_of,
        'title_li'     => '',
        'echo'         => 0
    );

    $childpages = wp_list_pages($params);

    if ( $childpages ) {
        $string = '<ul class="d-md-flex mt-3 mt-md-0 mb-0 ml-md-4 list-child-pages">' . $childpages . '</ul>';
    }

    return $string;
}

add_shortcode('dcms_childpages', 'dcms_list_child_pages');

function create_page() {

    if( function_exists('acf_add_options_page') ) {	
        acf_add_options_page( 
            array( 
                'page_title' => 'General Information', 
                'menu_title' => 'General Information', 
                'menu_slug'  => 'general-information', 
                'capability' => 'edit_posts', 
                'position'   => '23,3', 
                'redirect'   => false, 
                'icon_url'   => 'dashicons-info' 
        ));
    }
}
add_action( 'init', 'create_page' );

// function create_taxonomy() {
//     register_taxonomy( 
//         'products_courses_category', 
//         'products-courses', 
//         array( 
//             'labels' => array( 
//                 'name'          => 'Categorias', 
//                 'singular_name' => 'Categoria' 
//             ), 
//         'hierarchical'      => true, 
//         'show_admin_column' => true 
//     ));
// }
// add_action( 'init', 'create_taxonomy' );

