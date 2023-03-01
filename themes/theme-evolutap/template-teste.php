<?php

/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evolutap
 * 
 * Template Name: Template Teste
 * Template Post Type: page
 */

get_header();
$page_slug = $post->post_name;
?>

<div id="primary">
<main id="main">

<?php
if (have_posts()) :
while (have_posts()) : the_post(); ?>

    <h1>Template Teste</h1>

<?php endwhile;
endif;
?>
</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
