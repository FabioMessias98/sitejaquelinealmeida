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

    <?php while ( have_posts() ) :the_post();?>

    <section class="woman woman--mobile-woman bg-video">
        <div class="container-fluid">
             <!-- sidebar social -->    
            <?php get_template_part('template-parts/content-sidebar-social') ?>
             <!-- end sidebar social -->


             <div class="row pt-17">

                <div class="col-lg-5 col-12 px-0">

                    <div class="overlay--black pl-0 h-auto">

                        <div class="mt-0">
                            <h1 class="header--title text-uppercase color-folk--yellow-weak u-font-size-100 xxl:u-font-size-180 xl:u-font-size-143 u-font-family-bronkz h-auto pl-md-7 pl-5" data-aos="zoom-out">
                            Self defence <br>
                            for woman
                            </h1>

                            <p class="pl-md-7 pl-5 u-font-family-Bahnschrift xl:u-font-size-32 u-font-size-22 text-white">Learn how to build your self <br>
                            confidence and emotional <br>
                            wellbeing by strengthening <br>
                            your mind and body through <br>
                            simple and effective <br>
                            techniques, today.
                            </p>

                            <div class="pb-5 px-3">
                                <div class="col-xl-9 col-xxl-8 col-md-6 col-11 px-0 ml-md-6 ml-3">
                                    <a href="#" class="button-cta button-cta--learn-blog py-3 px-3 mt-4 d-flex justify-content-between align-items-center u-font-family-Bahnschrift">Join our self defense course
                                        <i class="far fa-chevron-right u-font-weight-black pr-4 font-size-30" style="opacity: 0.7;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 d-lg-flex d-none">
                    <iframe class="w-100 pb-8 rounded-lg"  src="https://www.youtube.com/embed/_mgcUf1HRmo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>  

             </div>
        
        </div>
    </section>

    <section class="feature bg-folk--white pb-5">
        <div class="container">
            <div class="row">
                <div class="d-flex flex-column w-100 align-items-center my-6">
                    <h2 class="color-folk--light-purple u-font-family-bronkz xl:u-font-size-94 md:u-font-size-58 u-font-size-37 text-uppercase text-center">Why you Should Learn Jiu Jitsu/ Self Defence?</h2>
                    <h3 class="color-folk--purple xl:u-font-size-37 md:u-font-size-30 text-center">For women, taught by women</h3>
                </div>


                <div class="col-md-6 col-12">
                    <ul class="u-font-family-Bahnschrift color-folk--purple u-list-style-none">
                        <li class="mb-3 l-self-defence__item xl:u-font-size-32 md:u-font-size-22">
                            It will build your confidence
                        </li>
                        <li class="mb-3 l-self-defence__item xl:u-font-size-32 md:u-font-size-22">
                            It will build your confidenceIt helps improve your mental <br> health
                        </li>
                        <li class="mb-3 l-self-defence__item xl:u-font-size-32 md:u-font-size-22">
                            Develop Self-Discipline and <br> Respect
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-12">
                        <ul class="u-font-family-Bahnschrift color-folk--purple xl:u-font-size-32 u-list-style-none">
                        <li class="mb-3 l-self-defence__item xl:u-font-size-32 md:u-font-size-22">
                            There is no age tostart learning <br> jiu jitsu or self defense skills
                        </li>
                        <li class="mb-3 l-self-defence__item xl:u-font-size-32 md:u-font-size-22">
                            It will help you overcome your <br> fears
                        </li>
                        <li class="mb-3 l-self-defence__item xl:u-font-size-32 md:u-font-size-22">
                            It helps improve your physical <br> conditioning
                        </li>
                    </ul>
                </div>

                <div class="d-flex justify-content-center w-100">
                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="button-cta button-cta--watch-my py-3 px-md-5 px-sm-2 mt-4 d-block text-center u-font-family-Bahnschrift xl:u-font-size-22">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="self-defence py-md-6 pt-7 bg-folk--gray">
        <div class="container">
            <div class="col-12">
                <img class="img-fluid rounded-lg d-md-flex d-none" src="<?= get_template_directory_uri()?>/assets/public/images/self-defence.png" alt="self defence">

                <div class="defence-tutorials defence-tutorials--mobile-defence-tutorials ">
                    <h1 class="text-center u-font-family-bronkz color-folk--yellow-weak xl:u-font-size-94 md:u-font-size-55 u-font-size-45">Free Self Defence Tutorials</h1>
                    <div class="d-flex justify-content-center w-100">
                        <div class="col-lg-6 col-md-8 col-12">
                            <a href="#" class="button-cta button-cta--watch-my py-3 px-md-5 px-sm-2 mt-4 d-block text-center u-font-family-Bahnschrift xl:u-font-size-22">Watch Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
<?php echo get_template_part('template-parts/content', 'blog-call-to-action')  ?>
<?php echo get_template_part('template-parts/content', 'testimonials')  ?>


    <?php endwhile;?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>
