<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evolutap
 */

get_header();
?>

<div id="primary" class="content-area">
<main id="main" class="site-main">

<?php if ( have_posts() ) : ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php 
/*
* Include the Post-Type-specific template for the content.
* If you want to override this in a child theme, then include a file
* called content-___.php (where ___ is the Post Type name) and that will be used instead.
*/ 
?>

<h1>Categoria Filhos</h1>

<?php endwhile;

the_posts_navigation();

else :

get_template_part( 'template-parts/content', 'none' );

endif;
?>

</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
