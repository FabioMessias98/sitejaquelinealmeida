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

	<!-- <footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<php echo esc_url( __( 'https://wordpress.org/', 'evolutap' ) ); ?>">
				<php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'evolutap' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'evolutap' ), 'evolutap', '<a href="https://evolutap.com.br">Evolutap</a>' );
				?>
		</div>
	</footer> #colophon -->

<!-- social -->
<section class="social-media mb-5 bg-folk--gray">

	<div class="container">

		<div class="row">

			<div class="col-12">

				<h2 class="section-title color-folk--light-purple text-center text-uppercase u-font-family-bronkz">
					Social Media
				</h2>

				<ul class="d-flex justify-content-between justify-content-md-center my-5 px-4 px-md-0">
					<li class="justify-content-center list-style-none my-3 mx-3 mx-sm-0 d-none">
						<div class="sidebar-social--icons mb-0" data-social="instagram">
							<li class="u-list-style-none mx-2">
								<a href="#" target="_blank" rel="noopener noreferrer"  class="u-icon__brands u-icon__instagram-square font-size-0 before::u-font-size-57 color-folk--pink text-decoration-none hover:u-color-folk-black">Link facebook</a>
							</li>
							<li class="u-list-style-none mx-5">
								<a href="#" target="_blank" rel="noopener noreferrer"  class="u-icon__brands u-icon__linkedin font-size-0 before::u-font-size-57 color-folk--purple text-decoration-none hover:u-color-folk-black">Link facebook</a>
							</li>
						</div>
					</li>

                   
                    <!-- <li 
                    class="d-flex justify-content-center list-style-none mt-3"
                    data-aos="flip-down">
                        <a
                        class="social-media--icons"
                        href="#"
                        rel="noopener noreferrer"
                        target="_blank">
                            <picture>

                                <source 
                                srcset="<= get_template_directory_uri() ?>/assets/public/images/icon-linkedin-large.webp" 
                                type="image/webp">
                                
                                <source 
                                srcset="<= get_template_directory_uri() ?>/assets/public/images/icon-linkedin-large.png" 
                                type="image/png">
                                
                                <img 
                                class="social-media--img m-auto d-block"
                                src="<= get_template_directory_uri() ?>/assets/public/images/icon-linkedin-large.png" 
                                alt="Jaque - Linkedin">
                            </picture>
                        </a>
                    </li> -->
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

				<h2 class="section-title line-height-100 mb-0 text-uppercase color-folk--yellow-weak xl:u-font-size-160 lg:u-font-size-105 u-font-family-bronkz">
					Be the First to Know
				</h2>

				<p class="contact--label font-weight--regular mb-4 text-white">
					Join the Newsletter
				</p>

				<form>

					<div class="form-row flex-column">
						
						<div class="d-flex">
							<div class="col-xl-3 col-lg-5 mt-2 pl-1">
								<input
								class="contact--input form-control border-0 rounded-0 box-shadow-folk pl-4"
								type="text"
								id="firstName"
								placeholder="First Name">
							</div>
							<div class="col-xl-3 col-lg-5 mt-2 px-1">
								<input
								class="contact--input form-control border-0 rounded-0 box-shadow-folk pl-4"
								type="text"
								id="lastName"
								placeholder="Last Name">
							</div>
						</div>

						<div class="col-xl-6 col-lg-10 mt-4">

							<input 
							class="contact--input form-control border-0 rounded-0 box-shadow-folk pl-4"
							type="email"
							id="email"
							placeholder="Email">
						</div>

						<div class="col-sm-10 mt-5">
							<input
							class="btn contact--submit text-white bg-folk--light-purple font-size-22 rounded-sm"
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

						<!-- <a 
						class="footer--items d-block font-weight--regular text-white mb-1"
						href="#">
							Women Martial Arts
						</a>

						<a 
						class="footer--items d-block font-weight--regular text-white mb-1"
						href="#">
							Women Self Defence
						</a>

						<a 
						class="footer--items d-block font-weight--regular text-white mb-1"
						href="#">
							Sports Matketing
						</a> -->
					</div>

					<div class="col-md-6 col-lg-3 my-4 my-lg-0 pr-0">

						<h5 class="footer--title font-weight-bold text-uppercase text-white">
							contact
						</h5>

                        <div>
    						<a href="mailto:ja@jaquelinealmeida.com" class="footer--items font-weight--regular mb-1 pl-2 text-white" style="color:black;">
    							ja@jaquelinealmeida.com
    						</a>
                        </div>
                        <div>
    						<a href="tel:+3530899434826" class="footer--items font-weight--regular text-white mb-1">
    							+ 353 089 943 4826
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