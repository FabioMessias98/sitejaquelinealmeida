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

<?php if (have_posts()) :  while ( have_posts() ) : the_post(); ?>

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

                	<div class="header--box d-flex flex-column justify-content-center bg-folk--black">

                		<h1 class="header--title font-weight--black text-capitalize text-white">
                			store
                		</h1>
                	</div>
                </div>
            </div><!-- row -->
        </div><!-- col -->
    </div><!-- row -->
</div>
<!-- end banner social -->

<!-- blog -->
<section class="blog mt-5">
	
	<div class="container">

		<div class="row">

			<!-- loop -->
			<?php $args = array(
					'posts_per_page' => 1,
					'post_type'      => 'store',
					'order'          => 'DESC',
				);

				$stores = new WP_Query( $args );

				if( $stores->have_posts() ) : 
                    while( $stores->have_posts() ): $stores->the_post();
			?>
				<div class="col-12">

					<div class="row">

						<div class="col-lg-2 d-flex align-items-center">
							<p class="post--subtitle blog--date font-weight--black">
								<?= get_the_date('d/m/Y') ?>
							</p>
						</div>

						<div class="col-lg-8">
							<h2 class="post--title font-weight--black mb-4">
								<?= the_title() ?>
							</h2>
						</div>
					</div>

					<div class="row">

						<div class="col-lg-8 offset-lg-2">

							<?php
								if(have_rows('media')) :
									while(have_rows('media')) : the_row();
										if(get_sub_field('select_media') != 'Video') :
							?>
											<img
											class="img-fluid"
											src="<?= get_sub_field( 'image' ) ?>"
											alt="<?= the_title() ?>">

							<?php else: ?>
								<div>
									<?= get_sub_field('video') ?>
								</div>

							<?php 		endif;
									endwhile;
								endif;
							?>

							<span class="post--text d-block mt-3">
								<?= the_excerpt() ?>
							</span>
						</div>
					</div>

					<div class="row justify-content-lg-end">

						<div class="col-md-10 d-flex">
							<a
							class="btn btn--pattern icon-folk icon-folk--arrow-right font-weight--black bg-folk--yellow mt-5"
							href="<?= get_permalink($stores->ID) ?>">
								view more

								<span class="btn--line-bottom"></span>	
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
</section>		
<!-- end blog -->

<!-- content -->
<section class="content my-6">

	<div class="container">

		<div class="row">

			<div class="col-12">

				<h2 class="section-title font-weight--black mb-4"> 
					See all the Content
				</h2>

				<div class="row">
					
					<div class="col-md-8 offset-lg-2">

						<ul>
							<!-- loop -->
							<?php
								$terms = get_terms(
								    array(
								        'taxonomy'   => 'category',
								        'hide_empty' => true,
								        'parent'     => 10
								    )
								);
								
								foreach($terms as $term): 
							?>
							<li class="content--category-items list-style-none">
								<a 
								class="content--category d-block font-weight--regular text-capitalize text-decoration-none color-folk--strong-black"
								href="<?= get_term_link($term->term_id) ?>">
									<?= $term->name; ?>
								</a>
							</li>
							<?php endforeach; ?>
							<!-- end loop -->
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end content -->

<!-- channel -->
<section class="channel my-6">

	<div class="container">
		
		<div class="row">

			<div class="col-12">

				<div class="row">

					<div class="col-md-6">

						<div class="row align-content-between h-100">

							<div class="col-12 mb-3">

								<div class="card justify-content-center bg-folk--black py-6 px-3">

									<div class="card-body py-0">

										<h3 class="channel--model-3-title font-weight--black text-center text-white">
											Big Community <br>
											of strong women
										</h3>

										<p class="training--phrase font-weight--regular text-center text-uppercase text-white">
											like you
										</p>
									</div>

									<div class="card-footer border-top-0 d-flex justify-content-center bg-folk--none mt-6 py-0 px-1 px-lg-4">
										<a
										class="btn btn--pattern channel--model-3-btn font-weight--black bg-folk--yellow"
										href="https://www.facebook.com/groups/225083874806432?modal=false&should_open_composer=false"
										target="_blank">
											join us

											<span class="btn--line-bottom"></span>
										</a>
									</div>
								</div>
							</div>

							<!-- photos -->
							<div class="col-12 mb-3 mb-md-0">
								
								<!-- swiper -->
								<div class="swiper-container swiper-container-photos">

									<div class="swiper-wrapper align-items-end">
										
										<!-- slide -->
										<?php
											$args = array(
												'posts_per_page' => -1,
												'post_type'      => 'post',
												'category_name'  => 'highlight-photo',
												'order'          => 'ASC',
											);

											$photos = new WP_Query( $args );

							                if( $photos->have_posts() ) : 
							                    while( $photos->have_posts() ): $photos->the_post();	
										?>
													<div class="swiper-slide swiper-slide-photos align-items-end">
														<a class="d-flex" href="<?= get_home_url(null, 'photos') ?>">
															<?php
																$altTitle = get_the_title();
																the_post_thumbnail('post-thumbnail', 
																	array('class' => 'img-fluid blog--post-img',
																		  'alt'   => $altTitle,
																	));
															?>
														</a>
													</div>
										<?php
											    endwhile; 
											endif;
										?>
										<!-- end slide -->
									</div>
								</div>
								<!-- end swiper -->
							</div>
							<!-- end photos -->
						</div>
					</div>

					<div class="col-md-6 d-flex">
						<?php $args = array(
						        'posts_per_page' => 1,
						        'post_type'      => 'women_channel',
						        'order'        => 'ASC',
						    );

						    $channels = get_posts($args);

						    foreach ($channels as $channel) :
						        setup_postdata($channel); 

								if(have_rows('the_women_channel', $channel->ID)) : 
									while(have_rows('the_women_channel', $channel->ID)) : the_row();
										if(have_rows('mind_body')) : 
											while(have_rows('mind_body')) : the_row();
						?>
												<div class="row">

													<div class="col-12">

														<div class="card box-shadow-folk bg-folk--yellow pt-6 px-3 px-md-5">

															<div class="card-body p-0">
																<h4 class="channel--model-2-title font-weight--black text-center">
																	<?= get_sub_field('title') ?>
																</h4>

																<p class="channel--model-2-subtitle font-weight-bold text-center text-uppercase mb-0 pt-4">
																	defence programme
																</p>
															</div>

															<div class="card-img d-md-flex pb-0">
																
																<?php if(have_rows('gallery')) : 
																		while(have_rows('gallery')) : the_row();
																?>
																<div class="channel--model-2-box-img">
																	<img 
																	class="img-fluid"
																	src="<?= get_sub_field('photo') ?>"
																	alt="">
																</div>
																<?php endwhile; 
																	endif;
																?>
															</div>


															<div class="card-body py-0">
																<p class="training--phrase font-weight--regular">
																	<?= get_sub_field('content') ?> 
																</p>
															</div>

															<div class="card-footer border-top-0 bg-folk--none my-4 px-1 px-lg-4">
																<a
																class="btn btn--pattern icon-folk icon-folk--arrow-right icon-folk--invert font-weight--black text-white bg-folk--black"
																href="<?= get_sub_field('learn') ?>">
																	learn more

																	<span class="btn--line-bottom"></span>
																</a>
															</div>
														</div>
													</div>
												</div>
						<?php 				endwhile; 
										endif;
							 		endwhile; 
								endif;
							endforeach;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container d-none">
		
		<div class="row">
			
			<div class="col-12">

				<h2 class="section-title font-weight--black mb-4">
					The Women Channel
				</h2>

				<div class="channel--grid">

					<!-- model 3 -->
					<div class="channel--item channel--model-3">
						
						<div class="card justify-content-center bg-folk--black py-6 px-3">

							<div class="card-body">

								<h3 class="channel--model-3-title font-weight--black text-center text-white">
									Big Community
									of strong women
								</h3>

								<p class="training--phrase font-weight--regular text-center text-uppercase text-white">
									like you
								</p>
							</div>

							<div class="card-footer border-top-0 d-flex justify-content-center bg-folk--none mt-6 px-1 px-lg-4">
								<a
								class="btn btn--pattern channel--model-3-btn font-weight--black bg-folk--yellow"
								href="<?= get_home_url(null, 'blog') ?>">
									join us

									<span class="btn--line-bottom"></span>
								</a>
							</div>
						</div>
					</div>
					<!-- end model 3 -->

					<!-- model 2 -->
					<div class="channel--item channel--model-2">
						
						<div class="card box-shadow-folk bg-folk--yellow pt-6 px-3 px-md-5">

							<div class="card-body px-0">
								<h4 class="channel--model-2-title font-weight--black text-center">
									Mind & Body
								</h4>

								<p class="channel--model-2-subtitle font-weight-bold text-center text-uppercase pt-6 pb-4">
									defence programme
								</p>
							</div>

							<div class="card-img d-md-flex pb-5">
								
								<div class="channel--model-2-box-img">
									<img 
									class="img-fluid"
									src="<?= get_template_directory_uri()?>/assets/public/images/img-lorna-lawless-radius.webp"
									alt="">
								</div>

								<div class="channel--model-2-box-img">
									<img 
									class="img-fluid"
									src="<?= get_template_directory_uri()?>/assets/public/images/img-jaqueline-almeida-radius.webp"
									alt="">
								</div>
							</div>

							<div class="card-body pt-4 pt-md-7">
								<p class="training--phrase font-weight--regular">
									Consectetuer adipiscing elit, sed diam
									nibh euismod tincidunt ut laoreet dolore
									magna aliquam erat volutpat. Ut wisi enim
									ad minim veniam, quis nostrud. 
								</p>
							</div>

							<div class="card-footer border-top-0 bg-folk--none mt-6 mb-9 px-1 px-lg-4">
								<a
								class="btn btn--pattern icon-folk icon-folk--arrow-right icon-folk--invert font-weight--black text-white bg-folk--black"
								href="<?= get_home_url(null, 'program/#why-mind-body') ?>">
									learn more

									<span class="btn--line-bottom"></span>
								</a>
							</div>
						</div>
					</div>
					<!-- end model 2 -->

					<!-- model 4 -->
					<div 
					class="channel--item channel--model-4"
					style="background-image: url(<?= get_template_directory_uri()?>/assets/public/images/img-4-channel.webp);">
					</div>
					<!-- model 4 -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end channel -->

<?php endwhile; endif; ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
