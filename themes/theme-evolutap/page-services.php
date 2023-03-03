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
	                        srcset="<?= get_template_directory_uri() ?>/assets/public/images/banner-jaqueline.webp" 
	                        type="image/webp" loading="lazy" decoding="async">
	                        
	                        <source 
	                        srcset="<?= get_template_directory_uri() ?>/assets/public/images/banner-jaqueline.png" 
	                        type="image/png">
	                        
	                        <img 
	                        class="header--banner"
	                        src="<?= get_template_directory_uri() ?>/assets/public/images/img-banner-home.png" 
	                        alt="Ícone Hamburger">
	                    </picture>

	                    <div class="header--box-content mt-lg-0 xl-mt-10">
	                		<h1 
	                		class="header--title text-center color-folk--yellow-weak md:u-font-size-161 sm:u-font-size-75 u-font-family-bronkz"
	                		data-aos="zoom-out">
	                			JAQUE ALMEIDA
	                		</h1>

	                		<div class="header--text text-center text-white mb-0 ml-2 letter-spacing-0">
	                			<div>
									<ul class="d-md-flex justify-content-center flex-sm-column flex-md-row align-items-center">
										<li class="u-list-style-none">
											<span class="color-folk--white lg:u-font-size-19 md:u-font-size-17">Female Empowerment</span>
										</li>
										<li class="u-list-style-none">
											<span class="u-icon__pipeline before::u-font-size-32 color-folk--white before::color-folk--yellow-weak px-25 lg:u-font-size-19 md:u-font-size-17">Self Defence Coaching</span>
										</li>
										<li class="u-list-style-none">
											<span class="u-icon__pipeline before::u-font-size-32 color-folk--white before::color-folk--yellow-weak px-25 lg:u-font-size-19 md:u-font-size-17">Personal Development</span>
										</li>
									</ul>
								</div>
							</div>
                		</div>
                	</div>
                </div>
            </div><!-- row -->
        </div><!-- col -->
    </div><!-- row -->
</div>
<!-- end banner social -->

<!-- courses -->
<section class="l-services py-5">

    <div class="container mb-5">

        <div class="row justify-content-center">

            <!-- loop -->
            <?php for( $i = 0; $i < 2; $i++ ) : ?>
            <div class="col-11 my-5">

                <h3 class="l-services__title">
                    Courses
                </h3>


                <!-- swiper -->
                <div class="position-relative">
                    <div class="swiper-container js-swiper-courses">

                        <div class="swiper-wrapper">

                            <!-- slide -->
                            <?php for( $j = 0; $j < 10; $j++ ) : ?>
                            <div class="swiper-slide">

                                <a 
                                class="l-services__card card border-0 text-decoration-none" 
                                href="#"
                                target="_blank"
                                rel="noreferrer noopener">

                                    <div class="card-img">
                                        <img 
                                        class="img-fluid w-100"
                                        src="<?php echo get_template_directory_uri()?>/assets/public/images/service-image.webp" 
                                        alt="Curso 1" />
                                    </div>

                                    <div class="card-body pt-4">

                                        <h3 class="l-services__card__title mb-4">
                                            Beginnings
                                            Self Defence
                                        </h3>

                                        <p class="l-services__card__text mb-4">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        </p>

                                        <div class="row">

                                            <div class="col-6">

                                                <div class="row">

                                                    <div class="col-12">
                                                        <p class="l-services__card__buy-now py-1">
                                                            Buy now
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6 d-flex justify-content-center align-items-center">
                                                <p class="l-services__card__price mb-0">
                                                    $99
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php endfor; ?>
                            <!-- end slide -->
                        </div>
                    </div>

                    <!-- arrows -->
                    <div class="swiper-button-prev l-services__button-pattern l-services__button-prev js-swiper-button-prev-services"></div>
                    <div class="swiper-button-next l-services__button-pattern l-services__button-next js-swiper-button-next-services"></div>
                </div>
                <!-- end swiper -->
            </div>
            <?php endfor; ?>
            <!-- end loop -->
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
