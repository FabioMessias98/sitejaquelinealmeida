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
<div class="banner-social container-fluid">

    <div class="row">
		
		<!-- sidebar social -->    
        <?= get_template_part('template-parts/content-sidebar-social') ?>
        <!-- end sidebar social -->

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

	                    <div class="header--box-content">
	                		<h1 
	                		class="header--title text-center text-uppercase color-folk--yellow-weak md:u-font-size-161 u-font-size-100 u-font-family-bronkz"
	                		data-aos="zoom-out">
	                			About Me
	                		</h1>
                		</div>
                	</div>
                </div>
            </div>
        </div><!-- col -->
    </div><!-- row -->
</div>
<!-- end banner social -->

<!-- submenu -->
<!-- <div class="submenu d-none align-items-center mt-4 mt-md-0 mb-5 my-md-0">

	<?= do_shortcode('[dcms_childpages]'); ?>
</div> -->
<!-- end submenu -->

<!-- about -->
<section class="about pt-8 bg-folk--gray">

	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="row">
					<div class="col-12">
						<div>
							<div>
								<img style="float: left; padding-right:30px;" src= "http://jaqueline.test/wp-content/themes/theme-evolutap/assets/public/images/jaqueline-about.webp" alt="Longtail boat in Thailand">
							</div>
	
							<div class="mt-6 pb-3 bg-folk--white pr-3">

									<h1 class="text-center color-folk--yellow-weak xl:u-font-size-100 lg:u-font-size-64 md:u-font-size-58 u-font-family-bronkz" data-aos="zoom-out">
										Hi, I’m Coach Jaqueline Almeida.
									</h1>
								<p class="ml-3 font-size-20" data-aos="fade-up" data-aos-duration="1500">
									I am a multi- medalist Jiu Jitsu, Brown Belt Jiu Jitsu World Champion, Tedx Speaker, a ladies Jiu Jitsu & Self Defence Coach, Co-Founder of Mind & Body Defence, a Sports Commentator and Sports Engagement Strategist, a Personal Trainer, a Brazilian, a survivor ,a daughter, a friend, and
									last but definitely not least- a woman. <br> <br>
									I would describe myself as a powerful, confident, positive, and empathetic woman- but that has not always been the case.
									My personal journey has not been easy. I was born in Sao Paulo into an unstable and dysfunctional household. Unfortunately, the cycle of abuse that I had experienced growing up continued in my adult life which permeated into my own personal relationships in the future which were often
									unhealthy and unequal. <br> <br>
									Something needed to change.After years of working through and healing from my past trauma through a multi-disciplined
									journey.
									I regained my confidence and strength, leading to my relationships with myself and others transforming into healthy and long-lasting ones. I am proud of where I have come, and because of
									this I want to help other women to realise their full potential and to learn to never settle for less
									than what they deserve. <br> <br>
									This is what I believe to be my true purpose, which I found when I first started out facilitating self-
									defense classes in Dublin, Ireland- and I watched as that community grew and grew as more ladies
									joined, each bringing their own stories. I knew this was exactly where I needed to be and that my
									purpose was to help others to empower themselves and grow their self esteem. <br> <br>
									This is what I believe to be my true purpose, which I found when I first started out facilitating self-
									defense classes in Dublin, Ireland- and I watched as that community grew and grew as more ladies
									joined, each bringing their own stories. I knew this was exactly where I needed to be and that my
									purpose was to help others to empower themselves and grow their self esteem. <br> <br>
									This is what I believe to be my true purpose, which I found when I first started out facilitating self-
									defense classes in Dublin, Ireland- and I watched as that community grew and grew as more ladies
									joined, each bringing their own stories. I knew this was exactly where I needed to be and that my
									purpose was to help others to empower themselves and grow their self esteem. <br> <br>
								</p>

									<div class="d-flex justify-content-center">
										<div class="col-md-5 col-md-7 col-12">
											<a href="#" class="button-cta button-cta--watch-my py-3 px-5 my-4 d-block text-center">Watch my TedX Talk</a>
										</div>
									</div>

									<p class="ml-3 font-size-20" data-aos="fade-up" data-aos-duration="1500">
									I am a multi- medalist Jiu Jitsu, Brown Belt Jiu Jitsu World Champion, Tedx Speaker, a ladies Jiu Jitsu & Self Defence Coach, Co-Founder of Mind & Body Defence, a Sports Commentator and Sports Engagement Strategist, a Personal Trainer, a Brazilian, a survivor ,a daughter, a friend, and
									last but definitely not least- a woman.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-5 bg-folk--gray" style="margin-left: 6%;">
	<div class="container bg-folk--pink rounded-left py-4 px-6 position-relative">	
		<div class="d-flex">
			<h2 class="color-folk--yellow-weak u-font-family-bronkz md:u-font-size-84 u-font-size-52 text-uppercase ">be part of our female <br>
				empowerment community
			</h2>
			<img  style="position: absolute; bottom: 25px; right: 156px; " class="mx-3 d-xl-flex d-none" src="<?= get_template_directory_uri() ?>/assets/public/images/group-jaque.png" alt="equipe jaque" loading="lazy" decoding="async">
		</div>

		<div>
			<div class="col-lg-3 col-md-7 col-12" >
				<a href="#" class="button-cta button-cta--join-now py-3 px-md-5 px-3 my-4 d-block text-center">Join Now</a>
			</div>
		</div>
	</div>
</section>
<!-- end about -->

<!-- history -->
<section class="history my-6 d-none">

	<div class="container">
		
		<div class="row">
			
			<div class="col-12 mb-5">

				<h2 class="section-title font-weight--black">
					You can <span class="text-decoration-underline">Help</span> and <br>
					<span class="text-decoration-underline">Empower</span> other women <br>
					with your story
				</h2>

				<h5 class="post--subtitle font-weight--medium color-folk--strong-gray">
					Overcoming stories that can help all of us
				</h5>
			</div>
		</div>

		<div class="row justify-content-between">

			<?php $args = array(
					'posts_per_page' => 2,
					'post_type'      => 'story',
					'order'        => 'DESC',
				);

				$stories = new WP_Query( $args );

				if( $stories->have_posts() ) : 
                    while( $stories->have_posts() ): $stories->the_post();
			?>
					<div 
					class="history--col my-4" 
					data-aos="zoom-out"
					data-aos-duration="500"
					data-aos-delay="300">

						<a 
						class="card border-0 rounded-0 box-shadow-folk px-0 px-md-3"
						href="<?= get_permalink($story->ID) ?>">

							<div class="card-body py-5">

								<h4 class="history--title mb-3">
									<?= the_title() ?>
								</h4>

								<span class="history--text d-block">
									<?= the_excerpt() ?>
								</span>

								<p class="history--by font-weight--medium">
									<?= get_field('by') ?>
								</p>
							</div>
						</a>
					</div>
			<?php endwhile; 
				endif;
			?>
		</div>

		<div class="row justify-content-end">

			<div class="col-md-6 d-flex justify-content-end">
				<a
				class="btn btn--pattern icon-folk icon-folk--arrow-right icon-folk--invert font-weight--black text-white bg-folk--black mt-5 ml-sm-3"
				href="<?= get_home_url(null, 'help-and-empower') ?>">
					share yours	

					<span class="btn--line-bottom"></span>	
				</a>
			</div>
		</div>
	</div>
</section>
<!-- end history -->

<?php endwhile; ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
