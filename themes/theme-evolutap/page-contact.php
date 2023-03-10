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

<?php
while ( have_posts() ) : the_post(); ?>

<!-- banner social -->
<section class="banner-social container-fluid">

    <div class="row">
		
		<!-- sidebar social -->    
        <?php get_template_part('template-parts/content-sidebar-social') ?>
        <!-- end sidebar social -->

        <div class="col-sm order-1 order-md-2">

            <div class="row">

                <div class="col-12 px-0">

                	<div class="header--box overlay--black pl-0">

	                    <picture>
	                        <source 
	                        srcset="<?php echo get_template_directory_uri() ?>/assets/public/images/contact-us.webp" 
	                        type="image/webp" loading="lazy" decoding="async">
	                        
	                        <source 
	                        srcset="<?php echo get_template_directory_uri() ?>/assets/public/images/contact-us.png"
	                        type="image/png">
	                        
	                        <img 
	                        class="header--banner"
	                        src="<?php echo get_template_directory_uri() ?>/assets/public/images/contact-us.png"
	                        alt="Ícone Hamburger">
	                    </picture>

	                    <div class="header--box-content d-flex justify-content-start pl-md-5 pl-0 mt-0">
	                		<h1 class="text-center text-uppercase color-folk--yellow-weak xxl:u-font-size-233 lg:u-font-size-220 md:u-font-size-161 u-font-size-120 u-font-family-bronkz aos-init aos-animate"
	                		data-aos="zoom-out">
							contact us
	                		</h1>
                		</div>
                	</div>
                </div>
            </div>
        </div><!-- col -->
    </div><!-- row -->
</section>
<!-- end banner social -->

<!-- contact -->
<section class="feature pg-contact mt-10 mb-5">

	<div class="container">
		
		<div class="row">
			
			<div class="col-12">

				<form>

					<div class="form-row flex-column">
						
						<div class="d-flex flex-md-row flex-column">
							<div class="col-xl-6 col-md-6 col-12 mt-2 pl-1 pr-md-5 pr-0">
								<label class="color-folk--purple u-font-family-Bahnschrift u-font-size-26 font-weight-bold">First Name</label>
								<input
								class="contact--input--message-new-bg-color page-contact form-control border-0 rounded-0 box-shadow-folk pl-4 mb-lg-0 mb-3"
								type="text"
								id="firstName">
							</div>
							<div class="col-xl-6 col-md-6 col-12 mt-2 px-md-1 pl-1 pr-0">
								<label class="color-folk--purple u-font-family-Bahnschrift u-font-size-26 font-weight-bold">Last Name</label>
								<input
								class="contact--input--message-new-bg-color form-control border-0 rounded-0 box-shadow-folk pl-4"
								type="text"
								id="lastName">
							</div>
						</div>

						<div class="col-xl-12 col-12 mt-4 px-md-1">
							<label class="color-folk--purple u-font-family-Bahnschrift u-font-size-26 font-weight-bold">Email</label>
							<input 
							class="contact--input--message-new-bg-color form-control border-0 rounded-0 box-shadow-folk pl-4"
							type="email"
							id="email">
						</div>

						<div class="d-flex flex-wrap align-items-end">
							<div class="col-xl-6 col-lg-6 col-12 mt-4 pl-1 pr-lg-5 pr-0">
								<label class="color-folk--purple u-font-family-Bahnschrift u-font-size-26 font-weight-bold">Phone</label>
								<input
								class="contact--input--message-new-bg-color form-control border-0 rounded-0 box-shadow-folk pl-4"
								type="tel"
								id="phone">
							</div>

							<!-- <div class="col-xl-6 col-md-12 col-lg-6 col-12 mt-20 px-md-1">
								<select class="form-control border-0 rounded-0 box-shadow-folk" style="padding: 2rem 0.5rem;"> 
									<option selected>What would you like to know </option>
									<option>Mind&Body Defense Programme</option>
									<option>Newsletter</option>
									<option>Videos</option>
									<option>Mind&Body Defense Programme</option>
								</select>
							</div> -->

							<div class="col-lg-6 mt-13 pl-2 pr-0 px-md-1">

								<input type="hidden" id="selected-contact">

								<div class="l-selected js-selected">
									<div class="l-selected__current js-selected-current">
										Selecionar
									</div>

									<div class="l-selected__items">
										<div class="l-selected__item js-selected-item">
											Mind&Body Defense Programme
										</div>

										<div class="l-selected__item js-selected-item">
											Newsletter
										</div>

										<div class="l-selected__item js-selected-item">
											Videos
										</div>
									</div>

									<div class="l-selected__arrow"></div>
								</div>
							</div>
						</div>

						<div class="d-flex flex-column">
							<div class="col-xl-12 col-12 mt-4 px-0">
								<label class="color-folk--purple u-font-family-Bahnschrift u-font-size-26 font-weight-bold">Message</label>
								<textarea class="w-100" id="" cols="30" rows="10"></textarea>
							</div>
						</div>

						<div class="col-xl-12 col-12 mt-5">
							<input
							class="btn contact--submit text-white bg-folk--light-purple font-size-22 rounded-sm d-block w-100 p-3"
							type="submit"
							value="Submit">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- end contact -->

<?php endwhile; ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
