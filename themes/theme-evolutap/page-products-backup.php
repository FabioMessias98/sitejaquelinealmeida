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

<section class="collections my-4 mb-5">

	<div class="container">

		<div class="row">

			<div class="col-12">

				<h1>
					<?php echo $post->post_title; ?>
				</h1>

				<div class="row justify-content-center">

					<!-- loop -->
					<?php $args = array(
							'posts_per_page' => -1,
							'post_type'      => 'products',
							'category_name'  => 'collections-product',
							'order'          => 'DESC',
						);

						$sales = new WP_Query( $args );

						if( $sales->have_posts() ) : 
	                    	while( $sales->have_posts() ): $sales->the_post();
					?>
								<div class="col-md-4 my-3 my-md-0">

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

											<span class="collections__view"></span>
										</div>

										<div class="card-body d-flex flex-column align-items-center pt-0">
											<p class="collections__product-title text-center color-folk--yellow mb-1">
												<!-- Chill Crew in Mint -->
												<?php the_title() ?>
											</p>

											<p class="collections__product-price text-center color-folk--yellow">
												€<?php echo get_field( 'price' ) ?>
											</p>

											<div class="row mb-3">
												<?php if( have_rows( 'sizes' ) ) : 
														while( have_rows( 'sizes' ) ) : the_row();
												?>
															<a
	class="collections__size <?php echo get_sub_field( 'link' ) == true ? 'active' : 'disable'; ?>"
															href="<?php echo get_sub_field( 'link' ) ?>">
																<?php echo get_sub_field( 'size' ) ?>
															</a>
												<?php 	endwhile; 
													endif;
												?>
											</div>

											<a
											class="collections__btn-buy bg-folk--yellow d-none"
											href="<?php echo get_field( 'buy' ) ?>"
											target="">
												buy
											</a>
										</div>
									</div>
								</div>
					<?php endwhile; 
						endif; 
					?>
					<!-- end loop -->
				</div>
			</div>
		</div>
	</div>
</section>

<?php endwhile; ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
