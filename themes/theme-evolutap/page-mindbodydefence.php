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

                	<div class="header--box d-flex flex-column justify-content-center bg-folk--black">

                		<p 
                		class="header--text text-uppercase text-white mb-0 ml-2"
                		data-aos="zoom-out">
                			mind & body defence 
                		</p>

                		<h1 
                		class="header--title font-weight--black text-capitalize text-white"
                		data-aos="zoom-out">
                			programme
                		</h1>
                	</div>
                </div>
            </div>
        </div>
</div>
<!-- end banner social -->

<!-- submenu -->
<div class="submenu d-md-flex align-items-center my-5 my-md-0">

	<ul class="d-md-flex mb-0 ml-md-4">
		<!-- loop -->
		<li 
		class="submenu--item my-3 my-md-0" 
		data-aos="fade-left">
			<a
			class="submenu--links font-weight-bold text-uppercase"
			href="#">
				about
			</a>
		</li>
		<!-- end loop -->

		<li 
		class="submenu--item my-3 my-md-0" 
		data-aos="fade-left">
			<a
			class="submenu--links font-weight-bold text-uppercase"
			href="#programme">
				programme
			</a>
		</li>

		<li 
		class="submenu--item my-3 my-md-0" 
		data-aos="fade-left">
			<a
			class="submenu--links font-weight-bold text-uppercase"
			href="#timeline">
				timeline
			</a>
		</li>

		<li 
		class="submenu--item my-3 my-md-0" 
		data-aos="fade-left">
			<a
			class="submenu--links font-weight-bold text-uppercase"
			href="#coaches">
				coaches
			</a>
		</li>
	</ul>
</div>
<!-- end submenu -->

<!-- program -->
<section class="l-programme mt-6 pl-sm-5 pl-md-6">
	
	<div class="container">
		
		<div class="row">

			<div class="col-12">

				<h2 class="u-line-height-100 u-font-size-80 sm:u-font-size-100 xl:u-font-size-120 xxl:u-font-size-150 u-font-family-brokenz text-uppercase u-color-folk-light-purple mb-5">
					Express your Confidence
				</h2>
			</div>

			<div 
			class="col-lg-6 d-lg-flex align-items-center px-sm-0 pl-lg-3 pr-lg-0"
			data-aos="fade-right"
			data-aos-duration="1500">
                <img 
                class="img-fluid w-100 h-100 u-object-fit-cover"
                src="<?php echo get_field( 'image_the_programme' ) ?>" 
                alt="<?php the_title() ?>">
			</div>

			<div 
			class="col-lg-6 box-shadow-folk mt-5 mt-sm-0 py-5 pl-md-5" 
			data-aos="fade-left" 
			data-aos-duration="1500" 
			id="<?php echo sanitize_title(get_field('section_2')); ?>">

				<h3 class="l-programme__title">
					the programme
				</h3>

				<span class="l-programme__text mb-6">
					<?php echo get_field( 'content_the_programme' ) ?>
				</span>

				<div class="row">

					<div class="col-sm-8 col-xl-7">

						<a 
						class="l-programme__btn-quote py-4"
						href="<?php echo get_field( 'request_a_quote_the_programme' ) ?>">
							Request a Quote
						</a>
					</div>
				</div>
			</div>

			<div 
			class="col-12 mt-6" 
			id="why-mind-body">

				<span class="l-programme__content">
					<?php echo get_field( 'content' ) ?>
				</span>
			</div>
		</div>
		
		<div 
		class="row"
		id="<?php echo sanitize_title(get_field('section_3')); ?>">
			
			<div class="col-12 mt-8">
				<h2 class="u-line-height-100 u-font-size-80 sm:u-font-size-100 xl:u-font-size-120 xxl:u-font-size-150 u-font-family-brokenz text-uppercase u-color-folk-light-purple mb-5">
					Programme Timeline
				</h2>
			</div>

			<div class="col-12">

				<!-- loop -->
				<?php 
					if(have_rows( 'timeline' )) : 
						while(have_rows( 'timeline' )) : the_row(); 
				?>
							<div 
							class="l-programme__timeline__wrapper mb-4" 
							data-aos="fade-up" 
							data-aos-duration="1500">

								<div class="col-md-2 d-flex align-items-center px-0">
									<div class="l-programme__timeline__box-week">
										<p class="l-programme__timeline__week mb-0">
											<?php echo get_sub_field( 'week' ) ?>
										</p>
									</div>
								</div>

								<div class="col-md-10 py-2 pl-md-5">

									<h6 class="l-programme__timeline__title mb-0">
										<?php echo get_sub_field( 'title' ) ?> <br>

										<span class="u-color-folk-yellow mb-0">
											<?php echo get_sub_field( 'subtitle' ) ?>
										</span>
									</h6>
								</div>
							</div>
				<?php 
						endwhile;
					endif; 
				?>
				<!-- end loop -->
			</div>
		</div>
		
		<div 
		class="row"
		id="<?php echo sanitize_title(get_field('section_4')); ?>">
			
			<div class="col-12 mt-5">

				<h2 class="u-font-size-80 sm:u-font-size-100 xl:u-font-size-120 xxl:u-font-size-150 u-font-family-brokenz text-uppercase u-color-folk-light-purple mb-5">
					Coaches
				</h2>
			</div>

			<!-- loop -->
			<div>
				<?php 
					if(have_rows( 'coaches' )) : 
						while(have_rows( 'coaches' )) : the_row(); 
				?>
							<div class="l-programme__coaches__col-child col-12 mb-4">			

								<div class="row">

									<div class="l-programme__coaches__item-child col-xl-6 pt-3 px-xl-0">

										<img 
										class="img-fluid w-100 h-100"
										src="<?php echo get_sub_field( 'photo' ) ?>"
										alt="<?php echo get_sub_field( 'coach' ) ?>"
										data-aos="flip-left"
										data-aos-duration="1500">
									</div>

									<div 
									class="l-programme__coaches__item-child col-xl-6 mt-lg-5 mt-md-0 pt-lg-5 px-xl-0" 
									data-aos="fade-up">

										<div class="l-programme__coaches__content pt-4 px-3 pl-md-5 pr-md-4">
											<h4 class="l-programme__coaches__title">
												<?php echo get_sub_field( 'coach' ) ?>
											</h4>

											<span class="l-programme__coaches__text">
												<?php echo get_sub_field( 'content' ) ?>
											</span>
										</div>
									</div>
								</div>
							</div>
				<?php 
						endwhile; 
					endif; 
				?>
			</div>
			<!-- end loop -->
		</div>
	</div>
</section>
<!-- end coaches -->

<!-- photos -->
<section 
class="l-photos py-5 mb-6" 
id="photos">

	<div class="container-fluid">

		<div class="row">

			<div class="col-12 mt-5">

				<h2 class="u-font-size-80 sm:u-font-size-100 xl:u-font-size-120 xxl:u-font-size-150 u-font-family-brokenz text-uppercase u-color-folk-light-purple ml-sm-5">
					Photos
				</h2>

				<!-- swiper -->
				<div class="swiper-container js-swiper-photos">

					<div class="swiper-wrapper">

						<!-- slide -->
						<?php
							$args = array( 
								'posts_per_page' => -1,
								'post_type'      => 'photo',
								'order'          => 'DESC'
							);

							$photos = new WP_Query( $args );

							if( $photos->have_posts() ) :
								while( $photos->have_posts() ) : $photos->the_post();
						?>
									<div class="swiper-slide">

										<?php
											the_post_thumbnail( 'post-thumbnail',
												array(
													'class' => 'img-fluid w-100 h-100',
													'alt'   => get_the_title()
											));
										?>
										<!-- <img
										class="img-fluid w-100"
										src="http://evolutap.test/wordpress/jaquelinealmeidaupdate/wp-content/uploads/2020/12/img-photo-1.png"
										alt="Photo 01"> -->
									</div>
						<?php 
								endwhile;
							endif;
							
							wp_reset_query();
						?>
						<!-- end slide -->
					</div>

					<!-- arrows -->
					<div class="swiper-button-pattern swiper-button-prev js-swiper-button-prev-photos"></div>
					<div class="swiper-button-pattern swiper-button-next js-swiper-button-next-photos"></div>
				</div>
				<!-- end swiper -->

				<div class="row justify-content-between d-none">

					<!-- loop -->
					<?php 
						$duration = 100;

						if(have_rows('photos')) : 
							while(have_rows('photos')) : the_row();
								$duration += 300;
					?>
								<div 
								class="col-md-6 col-lg-5 mb-5" 
								data-aos="zoom-in" 
								data-aos-duration="<?php echo $duration; ?>">

									<div class="card border-0 rounded-0 box-shadow-folk p-4">
										
										<div class="card-img">
											<img
											class="img-fluid"
											src="<?= get_sub_field('photo') ?>"
											alt="<?= get_sub_field('title') ?>">
										</div>

										<div class="card-body">
											<h4 class="photos--title font-weight--regular">
												<?= get_sub_field('title') ?>
											</h4>

											<p class="post--text font-weight--black">
												<?= get_the_date('d/m/Y') ?>
											</p>
										</div>
									</div>
								</div>
					<?php endwhile; 
						endif; 
					?>
					<!-- end loop -->
				</div>

				<div class="row justify-content-center d-none">

					<div class="col-md-4 d-flex justify-content-center mt-5">
						<a
						class="btn btn--pattern icon-folk icon-folk--arrow-right font-weight--black bg-folk--yellow"
						href="<?= get_home_url(null, 'photos') ?>">
							view more

							<span class="btn--line-bottom"></span>
						</a>
					</div>
				</div>
			</div>

			<div class="col-12 mt-5">

				<div class="row justify-content-center">

					<div class="col-sm-6 col-md-4 col-xxl-3">
						<a
						class="w-100 u-border-radius-8 d-block u-font-size-26 lg:u-font-size-32 xxl:u-font-size-42 u-font-family-bahnschrift text-center u-color-folk-white u-bg-folk-pink hover:u-bg-folk-light-purple py-2 py-xxl-4" 
						href="#">
							View More
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end photos -->

<!-- testemonials -->
<?php echo get_template_part( 'template-parts/content', 'testimonials' ) ?>
<!-- end testemonials -->

<?php endwhile; ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
