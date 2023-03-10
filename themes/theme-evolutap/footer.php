<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Evoluta
 */

?>

	</div><!-- #content -->

	<!-- social -->
	<section class="social-media pt-8 pb-5 bg-folk--gray">

		<div class="container">

			<div class="row">

				<div class="col-12">

					<h2 class="u-line-height-100 u-font-size-80 sm:u-font-size-100 xl:u-font-size-120 xxl:u-font-size-150 u-font-family-brokenz text-center text-uppercase u-color-folk-light-purple mb-5">
						Social Media
					</h2>

					<ul class="d-flex justify-content-around justify-content-md-center my-3 mt-md-5 px-4 px-md-0">
						
						<li class="u-list-style-none mx-3 mx-md-5">
							<a 
							class="u-icon__brands u-icon__instagram-square font-size-0 before::u-font-size-70 before::xxl:u-font-size-100 text-decoration-none u-color-folk-pink hover:u-color-folk-yellow"
							href="<?php echo get_field( 'link_instagram_general_information', 'option' ) ?>" 
							target="_blank" 
							rel="noopener noreferrer">
								Link instagram
							</a>
						</li>

						<li class="u-list-style-none mx-3 mx-md-5">
							<a 
							class="u-icon__brands u-icon__linkedin font-size-0 before::u-font-size-70 before::xxl:u-font-size-100 text-decoration-none u-color-folk-purple hover:u-color-folk-yellow"
							href="<?php echo get_field( 'link_linkedin_general_information', 'option' ) ?>" 
							target="_blank" 
							rel="noopener noreferrer">
								Link linkedin
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- end social -->

	<!-- contact -->
	<section class="contact mb-6 image-banner-form py-6">

		<div class="container">
			
			<div class="row">
				
				<div class="col-12">

					<h2 class="line-height-100 mb-0 text-uppercase color-folk--yellow-weak xl:u-font-size-160 lg:u-font-size-105 md:u-font-size-75 u-font-size-60 u-font-family-bronkz">
						Be the First to Know
					</h2>

					<p class="contact--label font-weight--regular mb-4 text-white">
						Join the Newsletter
					</p>

					<form>

						<div class="form-row flex-column">
							
							<div class="d-flex flex-md-row flex-column">
								<div class="col-xl-3 col-md-5 col-12 mt-2 pl-1">
									<input
									class="contact--input form-control border-0 rounded-0 box-shadow-folk pl-4 mb-lg-0 mb-3"
									type="text"
									id="firstName"
									placeholder="First Name">
								</div>
								<div class="col-xl-3 col-md-5 col-12 mt-2 px-md-1 pl-1">
									<input
									class="contact--input form-control border-0 rounded-0 box-shadow-folk pl-4"
									type="text"
									id="lastName"
									placeholder="Last Name">
								</div>
							</div>

							<div class="col-xl-6 col-md-10 col-12 mt-4 px-md-1 pr-3">

								<input 
								class="contact--input form-control border-0 rounded-0 box-shadow-folk pl-4"
								type="email"
								id="email"
								placeholder="Email">
							</div>

							<div class="col-xl-6 col-md-10	 mt-5">
								<input
								class="btn contact--submit text-white bg-folk--light-purple font-size-22 rounded-sm d-block w-100 p-3"
								type="submit"
								value="Subscribe">
							</div>
						</div>
					</form>

					<a class="link-thank-you d-none" href="<?= get_home_url(null, 'thank-you') ?>"></a>
					<?= do_shortcode('[contact-form-7 id="25" title="Newsletter"]') ?>
				</div>
			</div>
		</div>
	</section>
	<!-- end contact -->

	<footer class="footer bg-folk--purple py-6" id="contact">

		<div class="container">
			
			<div class="row">

				<div class="col-12">

					<div class="row">

						<div class="col-md-6 col-lg-3 my-4 my-lg-0">

							<div class="footer--box">
								<!-- <p class="footer--logo font-weight--regular text-uppercase text-white mb-0">
									logo
								</p> -->

								<?php if(wp_get_attachment_image_src(get_theme_mod('custom_logo'))) : ?>
									<a href="<?= get_home_url() ?>">
										<img class="img-fluid" src="<?= wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full')[0] ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
									</a>
								<?php endif; ?>
							</div>
						</div>

						<div class="col-md-6 col-lg-3 my-4 my-lg-0">

							<h5 class="footer--title font-weight-bold text-uppercase text-white">
								program
							</h5>

							<a 
							class="footer--items d-block font-weight--regular text-white mb-1"
							href="<?= get_home_url(null, 'mindbodydefence/#why-mind-body')?>">
								Why Mind&Body?
							</a>

							<a 
							class="footer--items d-block font-weight--regular text-white mb-1"
							href="<?= get_home_url(null, 'mindbodydefence/#timeline')?>">
								Programme Timeline
							</a>

							<a 
							class="footer--items d-block font-weight--regular text-white mb-1"
							href="<?= get_home_url(null, 'mindbodydefence/#coaches')?>">
								Coaches
							</a>

							<a 
							class="footer--items d-block font-weight--regular text-white mb-1"
							href="<?= get_home_url(null, 'mindbodydefence/#photos')?>">
								Photos
							</a>

							<a 
							class="footer--items d-block font-weight--regular text-white mb-1"
							href="<?= get_home_url(null, 'mindbodydefence/#testemonials')?>">
								Testemonials
							</a>
						</div>

						<div class="col-md-6 col-lg-3 my-4 my-lg-0">

							<h5 class="footer--title font-weight-bold text-uppercase text-white">
								blog
							</h5>

							<?php
								$terms = get_terms(
									array(
										'taxonomy'   => 'category',
										'hide_empty' => true,
										//'number'     => -1,
										'parent'     => 10
									)
								);
								
								foreach($terms as $term): 
							?>
								<a 
								class="footer--items d-block font-weight--regular text-white mb-1"
								href="<?= get_term_link($term->term_id) ?>">
									Women <?= $term->name; ?> 
								</a>
							<?php 
								endforeach;
							?>
						</div>

						<div class="col-md-6 col-lg-3 my-4 my-lg-0 pr-0">

							<h5 class="footer--title font-weight-bold text-uppercase text-white">
								contact
							</h5>

							<div>
								<a href="<?php echo 'mailto:' . get_field( 'email_general_information', 'option' ) ?>" class="footer--items font-weight--regular mb-1 pl-2 text-white" style="color:black;">
									<?php echo get_field( 'email_general_information', 'option' ) ?>							
								</a>
							</div>
							<div>
								<a href="<?php echo 'tel:' . get_field( 'phone_general_information', 'option' ) ?>" class="footer--items font-weight--regular text-white mb-1">
									<?php echo get_field( 'phone_general_information', 'option' ) ?>	
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</footer>

	<!-- btn up -->
	<div class="btn-up__box d-none">
		<span class="btn-up__icon"></span>
	</div>
	<!-- end btn up -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>