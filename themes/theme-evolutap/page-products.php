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

<!-- banner social -->
<div class="container-fluid">

    <div class="row">
		
		<!-- sidebar social -->    
        <?= get_template_part('template-parts/content-sidebar-social') ?>
        <!-- end sidebar social -->

        <div class="header--col d-none d-md-block">
        </div>

        <div class="col-sm order-1 order-md-2">

            <div class="row">

                <div class="col-12 px-0">

                	<div class="header--box position-relative overlay--black pl-0">

	                    <picture>
	                        <source 
	                        srcset="<?= get_template_directory_uri() ?>/assets/public/images/banner-product.webp" 
	                        type="image/webp" loading="lazy" decoding="async">
	                        
	                        <source 
	                        srcset="<?= get_template_directory_uri() ?>/assets/public/images/banner-product.png" 
	                        type="image/png">
	                        
	                        <img 
	                        class="header--banner"
	                        src="<?= get_template_directory_uri() ?>/assets/public/images/img-banner-product.png" 
	                        alt="Banner product">
	                    </picture>

	                    <div class="header--box-content mt-lg-0 xl-mt-10">
	                		<h1 
	                		class="header--title text-center color-folk--yellow-weak md:u-font-size-161 sm:u-font-size-75 u-font-family-bronkz"
	                		data-aos="zoom-out">
	                			JAQUE ALMEIDA
	                		</h1>
                		</div>
                	</div>
                </div>
            </div><!-- row -->
        </div><!-- col -->
    </div><!-- row -->
</div>
<!-- end banner social -->

<!-- courses -->
<section class="l-products py-5">

    <div class="container mb-5">

        <div class="row justify-content-center">

            <div class="col-11 my-5">

                <h3 class="l-products__title">
                    Courses
                </h3>


                <!-- swiper -->
                <div class="position-relative">
                    <div class="swiper-container js-swiper-courses">

                        <div class="swiper-wrapper">

                            <!-- slide -->
                            <?php 
                                $args = array(
                                    'posts_per_page' => -1,
                                    'post_type'      => 'course',
                                    'order'          => 'DESC'
                                );

                                $courses = new WP_Query( $args );

                                if( $courses->have_posts() ) :
                                    while( $courses->have_posts() ) : $courses->the_post();
                            ?>
                                        <div class="swiper-slide">

                                            <a 
                                            class="l-products__card card border-0 text-decoration-none" 
                                            href="<?php echo get_field( 'buy_now' ) ?>"
                                            target="_blank"
                                            rel="noreferrer noopener">

                                                <div class="card-img">
                                                    <!-- <img 
                                                    class="img-fluid w-100"
                                                    src="<php echo get_template_directory_uri()?>/assets/public/images/service-image.webp" 
                                                    alt="Curso 1" /> -->

                                                    <?php
                                                        the_post_thumbnail('post-thumbnail',
                                                            array(
                                                                'class' => 'img-fluid w-100',
                                                                'alt'   => get_the_title()
                                                            )
                                                        );
                                                    ?>
                                                </div>

                                                <div class="card-body pt-4">

                                                    <h3 class="l-products__card__title mb-4">
                                                        <!-- Beginnings
                                                        Self Defence -->
                                                        <?php the_title() ?>
                                                    </h3>

                                                    <span class="l-products__card__text d-block mb-4">
                                                        <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor -->
                                                        <?php echo get_field( 'description') ?>
                                                    </span>

                                                    <div class="row">

                                                        <div class="col-6">

                                                            <div class="row">

                                                                <div class="col-12">
                                                                    <p class="l-products__card__buy-now py-1">
                                                                        Buy now
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-6 d-flex justify-content-center align-items-center">
                                                            <p class="l-products__card__price mb-0">
                                                                <!-- $99 -->
                                                                <?php echo '$' . get_field( 'price' ) ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                            <?php 
                                    endwhile;
                                endif;
                                
                                wp_reset_query();
                            ?>
                            <!-- end slide -->
                        </div>
                    </div>

                    <!-- arrows -->
                    <div class="swiper-button-prev l-products__button-pattern l-products__button-prev js-swiper-button-prev-courses"></div>
                    <div class="swiper-button-next l-products__button-pattern l-products__button-next js-swiper-button-next-courses"></div>
                </div>
                <!-- end swiper -->
            </div>

            <div class="col-11 my-5">

                <h3 class="l-products__title">
                    Products
                </h3>

                <!-- swiper -->
                <div class="position-relative">
                    <div class="swiper-container js-swiper-products">

                        <div class="swiper-wrapper">

                            <!-- slide -->
                            <?php 
                                $args = array(
                                    'posts_per_page' => -1,
                                    'post_type'      => 'product',
                                    'order'          => 'DESC'
                                );

                                $products = new WP_Query( $args );

                                if( $products->have_posts() ) :
                                    while( $products->have_posts() ) : $products->the_post();
                            ?>
                                        <div class="swiper-slide">

                                            <a 
                                            class="l-products__card card border-0 text-decoration-none" 
                                            href="<?php echo get_field( 'buy_now' ) ?>"
                                            target="_blank"
                                            rel="noreferrer noopener">

                                                <div class="card-img">
                                                    <!-- <img 
                                                    class="img-fluid w-100"
                                                    src="<php echo get_template_directory_uri()?>/assets/public/images/service-image.webp" 
                                                    alt="Curso 1" /> -->

                                                    <?php
                                                        the_post_thumbnail('post-thumbnail',
                                                            array(
                                                                'class' => 'img-fluid w-100',
                                                                'style' => 'height:514px',
                                                                'alt'   => get_the_title()
                                                            )
                                                        );
                                                    ?>
                                                </div>

                                                <div class="card-body pt-4">

                                                    <h3 class="l-products__card__title mb-4">
                                                        <!-- Beginnings
                                                        Self Defence -->
                                                        <?php the_title() ?>
                                                    </h3>

                                                    <span class="l-products__card__text d-block mb-4">
                                                        <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor -->
                                                        <?php echo get_field( 'description') ?>
                                                    </span>

                                                    <div class="row">

                                                        <div class="col-6">

                                                            <div class="row">

                                                                <div class="col-12">
                                                                    <p class="l-products__card__buy-now py-1">
                                                                        Buy now
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-6 d-flex justify-content-center align-items-center">
                                                            <p class="l-products__card__price mb-0">
                                                                <!-- $99 -->
                                                                <?php echo '$' . get_field( 'price' ) ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                            <?php 
                                    endwhile;
                                endif;
                                
                                wp_reset_query();
                            ?>
                            <!-- end slide -->
                        </div>
                    </div>

                    <!-- arrows -->
                    <div class="swiper-button-prev l-products__button-pattern l-products__button-prev js-swiper-button-prev-products"></div>
                    <div class="swiper-button-next l-products__button-pattern l-products__button-next js-swiper-button-next-products"></div>
                </div>
                <!-- end swiper -->
            </div>
        </div>
    </div>
</section>
<!-- end courses -->

<!-- testimonials -->
<?php echo get_template_part( 'template-parts/content', 'testimonials' ); ?>
<!-- end testimonials -->

<?php endwhile; ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
