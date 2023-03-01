<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Evolutap
 */

get_header();
?>

<div id="primary" class="content-area">
<main id="main" class="site-main">

<?php while ( have_posts() ) : the_post(); ?>

<?php
	$cats = array();
	
	foreach (get_the_category($post_id) as $c) {
		$cat = get_category($c);
		array_push($cats, $cat->name);
	}

	if (sizeOf($cats) > 0) {
		$post_categories = implode(', ', $cats);
	} 
?>

<section class="my-5">

	<div class="container">

		<div class="row justify-content-center">

			<div class="col-md-10">

				<div class="row">

					<div class="col-md-5">

						<div class="card border-0 shadow">

							<div class="card-img p-3">

								<?php if( get_field( 'enable_gallery' ) == 'No' ) : ?>
									<?php
										$altTitle = get_the_title();
										the_post_thumbnail('post-thumbnail', 
											array(
												'class' => 'img-fluid blog--post-img',
												'alt'   => $altTitle,
										));
									?>
								<?php else: ?>
									<!-- swiper -->
									<div class="swiper-container swiper-container-collections">

										<div class="swiper-wrapper">

											<!-- slide -->
											<?php if( have_rows( 'gallery' ) ) : 
													while( have_rows( 'gallery' ) ) : the_row(); 
											?>
														<div class="swiper-slide">
															<img
															class="img-fluid"
															src="<?php echo get_sub_field( 'photo' ) ?>"
															alt="<?php the_title() ?>">
														</div>
											<?php endwhile; 
												endif; 
											?>
											<!-- end slide -->
										</div>

										<!-- arrows -->
										<div class="swiper-button-next swiper-button-next-collections"></div>
										<div class="swiper-button-prev swiper-button-prev-collections"></div>

										<!-- pagination -->
										<div class="swiper-pagination swiper-pagination-collections"></div>
									</div>
									<!-- end swiper -->
								<?php endif; ?>
							</div>
						</div>
					</div>

					<div class="col-md-7 pt-4">

						<h2 class="color-folk--yellow">
							<?php echo the_title() ?>
						</h2>

						<div class="u-divider-yellow"></div>

						<h4 class="font-weight-normal color-folk--yellow mt-3 mb-0">
							€<span class="js-collections-price"><?php echo get_field( 'price' ) ?></span> EUR
						</h4>

						<p class="font-weight-bold text-capitalize mt-3 mb-1">
							size
						</p>

						<?php if( have_rows( 'sizes' ) ) : 
								while( have_rows( 'sizes' ) ) : the_row();
						?>
									<div class="collections__box-size">
										<span>
											<?php echo get_sub_field( 'size' ) ?>
										</span>
									</div>
						<?php 	endwhile; 
							endif;
						?>

						<p class="collections__content">
							<?php the_content() ?>
						</p>

						<div class="row">

							<div class="col-md-6 mt-4">

		    					<!-- <div id="smart-button-container">
		      						<div style="text-align: center;">
		        						<div id="paypal-button-container"></div>
		      						</div>
		    					</div> -->
								
								<?php
									foreach ($cats as $catt) {
										if ( $catt == 'Small' ) {
											get_template_part( 'template-parts/content-button-small' );
										}

										elseif ( $catt == 'Medium' ) {
											get_template_part( 'template-parts/content-button-medium' );
										}

										elseif ( $catt == 'Large' ) {
											get_template_part( 'template-parts/content-button-large' );
										}
									}
								?>
		    				</div>
    					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
	
<script>
	setTimeout(function() {
		if(document.querySelector( '.btn-buy' )) {
			document.querySelector( '.btn-buy' ).src = "https://jaquelinealmeida.com/wp-content/uploads/2021/07/buybutton.png" 
		}
	}, 1000)
</script>


<?php endwhile; ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
