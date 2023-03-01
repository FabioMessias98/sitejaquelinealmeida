<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evolutap
 */

get_header();
?>

<div id="primary" class="content-area">
<main id="main" class="site-main">

<?php while ( have_posts() ) : the_post(); ?>

<!-- courses -->
<section class="l-services">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <!-- swiper -->
                <div class="swiper-container js-swiper-courses">

                    <div class="swiper-wrapper">

                        <!-- slide -->
                        <div class="swiper-slide">

                            <div class="card">

                                <div class="card-img">
                                    <img src="" alt="" />
                                </div>

                                <div class="card-body">

                                    <h3>
                                        Beginnings
                                        Self Defence
                                    </h3>

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    </p>

                                    <div class="row">

                                        <div class="col-6">

                                            <div class="row">

                                                <div class="col-12">
                                                    <a href="#">
                                                        Buy now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <p>
                                                $99
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end slide -->
                    </div>
                </div>
                <!-- end swiper -->
            </div>
        </div>
    </div>
</section>
<!-- end courses -->

<?php endwhile; ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
