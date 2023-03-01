<?php

// function social_media_init() {
//     $args = array(
//         'public' => true,
//         'label'  => 'Social Media',
//         'show_in_rest'       => true, 
//         'menu_icon'           => 'dashicons-share'
//     );
//     register_post_type('social_media', $args );
// }
// add_action( 'init', 'social_media_init' );

function products_channel_init() {
    $args = array(
        'public' => true,
        'label'  => 'Products',
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

// function Produtos_init() {
//     $args = array(
//         'public' => true,
//         'label'  => 'Produtos',
//         'publicly_queryable' => true,
//         'show_ui' => true,
//         'query_var' => true,
//         'show_in_rest' => true,
//         'menu_icon'           => 'dashicons-admin-users',
//         'capability_type' => 'post',
//         'hierarchical' => false,
//         'supports' => array('title')
//     );
//     register_post_type('Produtos', $args );
// }
// add_action( 'init', 'Produtos_init' );

// function create_produtos_taxonomies() {

//     $args = array(
//         'hierarchical'      => true, 
//         'labels'            => array('name' => 'Marcas'),
//         'show_ui'           => true,
//         'show_admin_column' => true,
//         'query_var'         => true,
//         'show_in_rest' => true,
//         'rest_base'          => 'marcas_categories',
//         'rest_controller_class' => 'WP_REST_Terms_Controller', 
//         'rewrite'           => array( 'slug' => 'marcas_categories' ),
//         'default_term' => 'gore'
//     );

//     register_taxonomy( 'marcas_categories', array( 'produtos' ), $args );
// }
// add_action( 'init', 'create_produtos_taxonomies', 0 );

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


// function novidades_init() {
//     $args = array(
//         'public' => true,
//         'label'  => 'Novidades',
//         'show_in_rest'       => true, 
//         'menu_icon'           => 'dashicons-admin-users'
//     );
//     register_post_type('Novidades', $args );
// }
// add_action( 'init', 'novidades_init' );

// function videos_conceitos_register() {
//     $args = array(
//         'labels' => array('name' => 'Vídeos Conceitos'),
      
//         'menu_icon'    => 'dashicons-format-status', 
//         'rewrite' => array('slug' => 'videos_conceitos'),

//     ); 
//     register_post_type( 'videos_conceitos' , $args );
// }
// add_action('init', 'videos_conceitos_register');
// function equipe_init() {
//     $args = array(
//         'public' => true,
//         'label'  => 'Equipe',
//         'publicly_queryable' => true,
//         'show_ui' => true,
//         'query_var' => true,
//         'show_in_rest' => true,
//         'menu_icon'           => 'dashicons-admin-users',
//         'capability_type' => 'post',
//         'hierarchical' => false,
//         'supports' => array('title')
//     );
//     register_post_type('equipe', $args );
// }
// add_action( 'init', 'equipe_init' );

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

