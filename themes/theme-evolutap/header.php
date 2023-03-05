<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Evolutap
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9C7LFTYDRS%22%3E"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-9C7LFTYDRS');
    </script>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php
        $children = $wp_query->query_vars["category__in"]; 
        $count = 0;  

        //var_dump($wp_query->queried_object->parent);

        // echo "Pai:". $wp_query->queried_object->parent; 
        // echo "|"; 
        // echo "Filhos:";  

        // foreach ($children as $child) { 
        //     if (($wp_query->query_vars["category__in"][$count]) != ($wp_query->query_vars["cat"])) { 
        //         echo $wp_query->query_vars["category__in"][$count]; 
        //         echo ""; 
        //     } 

        //     $count ++; 
        // }
    ?>

    <div id="page" class="site">
        <a class="skip-link screen-reader-text d-none" href="#content"><?php esc_html_e('Skip to content', 'valente'); ?></a>

        <header id="masthead" class="l-header header py-3 site-header navbar-static-top bg-folk--black" role="banner">
                    
            <div class="header--col bg-folk--white">
            </div>

            <div class="container">

                <nav class="navbar navbar-expand-lg justify-content-between justify-content-lg-start p-0">
                    <div class="navbar-brand">
                        <a href="<?= get_home_url() ?>">
                            <img class="img-fluid" src="<?= wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full')[0] ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                        </a>
                    </div>

                    <?php
                    wp_nav_menu(array(
                        'theme_location'    => 'primary',
                        'container'       => 'div',
                        'container_id'    => 'main-nav',
                        'container_class' => 'collapse navbar-collapse d-none d-lg-flex mr-4',
                        'menu_id'         => false,
                        'menu_class'      => 'navbar-nav',
                        'depth'           => 3,
                        'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                        'walker'          => new wp_bootstrap_navwalker()
                    ));
                    ?>

                    <!-- <div class="d-none">
                        <picture>
                            <source 
                            srcset="<?= get_template_directory_uri() ?>/assets/public/images/icon-hamburger.webp" 
                            type="image/webp">
                            
                            <source 
                            srcset="<?= get_template_directory_uri() ?>/assets/public/images/icon-hamburger.png" 
                            type="image/png">
                            
                            <img 
                            class="header--icon-hamburger"
                            src="<?= get_template_directory_uri() ?>/assets/public/images/icon-hamburger.png" 
                            alt="Ícone Hamburger">
                        </picture>

                        <button 
                        class="hamburger hamburger--emphatic ml-4" 
                        id="hamburguer-mobile" 
                        aria-label="toggler menu" 
                        type="button">
                            <span></span>
                            <span></span>
                        </button>
                    </div> -->

                    <div id="menu-mobile" class="mobile-menu d-flex d-lg-none flex-column align-items-center justify-content-start">

                        <div class="close-button">
                            <i class="fas fa-times"></i>
                        </div>

                        <!-- <div class="navbar-brand">
                            <a href="<?= get_home_url() ?>">
                                <img class="img-fluid" src="<= wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full')[0] ?>" alt="<php echo esc_attr(get_bloginfo('name')); ?>">
                            </a>
                        </div> -->

                        <?php
                        wp_nav_menu(array(
                            'theme_location'    => 'primary',
                            'container'       => 'div',
                            'container_id'    => 'main-nav-mobile',
                            'container_class' => 'd-flex flex-column',
                            'menu_id'         => false,
                            'menu_class'      => 'navbar-nav',
                            'depth'           => 3,
                            'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                            'walker'          => new wp_bootstrap_navwalker()
                        ));
                        ?>
                    </div>

                    <div class="d-flex align-items-center justify-content-center d-lg-none">
                        <button id="hamburguer-mobile" class="hamburger hamburger--emphatic ml-4" aria-label="toggler menu" type="button">

                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </nav>
            </div>
        </header><!-- #masthead -->

        <!-- social media mobile -->
        <div class="social-media-mobile d-none">

            <div class="social-media-mobile__icon-share"></div>

            <ul class="social-media-mobile__list">
                <li class="social-media-mobile__item">
                    <p 
                    class="social-media-mobile__socials social-media-mobile__socials--facebook mb-0"
                    data-social="facebook">
                        Link do Facebook
                    </p>
                </li>

                <li class="social-media-mobile__item">
                    <p 
                    class="social-media-mobile__socials social-media-mobile__socials--twitter mb-0"
                    data-social="twitter">
                        Link do Twitter
                    </p>
                </li>

                <li class="social-media-mobile__item">
                    <p 
                    class="social-media-mobile__socials social-media-mobile__socials--linkedin mb-0"
                    data-social="linkedin">
                        Link do Linkedin
                    </p>
                </li>
            </ul>
        </div>
        <!-- end social media mobile -->

        <!-- share -->
        <?= get_template_part('template-parts/content-share') ?>
        <!-- end share -->

        <?php
            $parentID = $wp_query->queried_object->parent;
            $parentCategoryName = get_cat_name($parentID);
            //echo 'Parent: ' . strtolower($parentCategoryName);
        ?>
        <div class="archive-<?= strtolower($parentCategoryName); ?>">   