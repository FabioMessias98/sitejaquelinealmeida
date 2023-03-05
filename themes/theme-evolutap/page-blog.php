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

<section class="banner-social container-fluid">

    <div class="row">
		
		<!-- sidebar social -->    
        <?= get_template_part('template-parts/content-sidebar-social') ?>
        <!-- end sidebar social -->

        <div class="col-sm order-1 order-md-2">

            <div class="row">

                <div class="col-12 px-0">

                	<div class="header--box overlay--black pl-0">

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

	                    <div class="header--box-content d-flex justify-content-start pl-5 mt-0">
	                		<h1 class="text-center text-uppercase color-folk--yellow-weak lg:u-font-size-220 md:u-font-size-161 u-font-size-120 u-font-family-bronkz aos-init aos-animate"
	                		data-aos="zoom-out">
							Blog	
	                		</h1>
                		</div>
                	</div>
                </div>
            </div>
        </div><!-- col -->
    </div><!-- row -->
</section>

<section class="blog mb-5 bg-folk--gray py-8">
	<div class="container">
		<h2 class="color-folk--light-purple u-font-family-bronkz text-uppercase font-size-100 py-3">blog</h2>
		<div class="row">

			<?php 
			$args = array(
				'posts_per_page' => -1,
				'post_type' => 'post',
				'category_name' => 'blog',
				'order' => 'desc'
			);

			$blogs = new WP_Query($args);
			if ($blogs->have_posts()):
				while($blogs->have_posts()): $blogs->the_post();
			?>
			<div class="col-lg-4 col-md-6 col-12 mb-6">
				<div class="bg-folk--white d-flex justify-content-between flex-column h-100">
					<div>
						<div class="position-relative">
							<img class="rounded-lg img-fluid" height="470" src="<?= get_template_directory_uri() ?>/assets/public/images/image-blog-1.png" alt="blog">
							<h2 class="text-white" style="position: absolute; left: 16px; bottom: 8px;"> 
								<?php the_title(); ?>
							</h2>	
						</div>

						<span class="color-folk--purple d-block blog__excerpt mt-4 px-3">
							<?php echo limit_words(get_the_content(), 30); ?>
						</span>
					</div>

					<div class="pb-4 px-3">
						<div class="col-12 px-0">
							<a href="#" class="button-cta button-cta--learn-blog py-3 px-3 mt-4 d-flex justify-content-between align-items-center">Learn more 
								<i class="far fa-chevron-right u-font-weight-black pr-4 font-size-30" style="opacity: 0.7;"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<?php 
				endwhile;
			endif;
			wp_reset_query();
			?> 
		</div>

		<div class="pb-4 px-3">
			<div class="col-12 px-0">
				<a href="#" class="button-cta button-cta--view-all py-3 px-3 mt-4 d-block text-center font-size-22">View All
				</a>
			</div>
		</div>
	</div>
</section>

<section class="videos">
	<div class="container">
	<h2 class="color-folk--light-purple u-font-family-bronkz text-uppercase font-size-100 py-3">Videos</h2>
		<div class="row">

			<?php 
			if(have_rows('videos_blog', 'option')):
				while(have_rows('videos_blog', 'option')): the_row();
			?>
			<div class="col-lg-4 col-md-6 col-12">
				<div class="position-relative">
					<img class="img-fluid" src="<?php echo get_sub_field( 'link_video_blog' ) ?>" alt="<?php echo get_sub_field( 'titulo_video_blog' ) ?>deo">
					<h2 class="text-white" style="position: absolute; left: 16px; bottom: 8px;"> 
						<?php echo get_sub_field( 'titulo_video_blog' ) ?>
					</h2>	
				</div>

				<div class="pb-4 px-3 py-5 bg-folk--white mb-6">
					<div class="col-12 px-0">
						<a href="#" class="button-cta button-cta--learn-blog py-3 px-3 text-center d-block"><?php echo get_sub_field( 'comecar_video_blog' ) ?></a>
					</div>
				</div>
				<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/VHeOZJKn3XE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
			</div>

			<?php 
            	endwhile;
          	endif;
        	?>
		</div>
		<div class="px-3">
			<div class="col-12 px-0">
				<a href="#" class="button-cta button-cta--view-all py-3 px-3 d-block text-center font-size-22 mb-n4">View All</a>
			</div>
		</div>
	</div>
</section>

<section class="principais-videos bg-folk--white py-7">
	<div class="container d-flex justify-content-center">
		<div class="row justify-content-center">
			<div class="col-lg-6 col-md-8 col-12">
				<div>
					<img class="img-fluid rounded-lg" width="450px" src="<?= get_template_directory_uri() ?>/assets/public/images/imagem-shop-now.png" alt="imagem fundo">
				</div>

				<div class="px-3 position-relative">
					<div class="col-lg-6 col-8 py-0" style="position: absolute; bottom: 47px; left: 47px;">
						<a href="#" class="button-cta button-cta--view-all py-3 px-3 d-flex justify-content-between align-items-center font-size-22 mb-n4">Shop Now
							<i class="far fa-chevron-right u-font-weight-black pr-3 font-size-30"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-8 col-12 mt-lg-0 mt-5">
				<div class="position-relative">
					<img class="img-fluid rounded-lg" width="450px" src="<?= get_template_directory_uri() ?>/assets/public/images/image-express.png" alt="imagem fundo">
					<h2 class="u-font-family-bronkz lg:u-font-size-64 md:u-font-size-50 u-font-size-45 color-folk--light-purple text-uppercase" style="position: absolute; top: 20px; left: 20px;">Learn to express <br>
						your confidence <br>
						through the programs
					</h2>
				</div>

				<div class="px-3 position-relative">
					<div class="col-lg-6 col-8 px-0" style="position: absolute; bottom: 47px; left: 47px;">
						<a href="#" class="button-cta button-cta--view-all py-3 px-3 d-flex justify-content-between align-items-center font-size-22 mb-n4">Learn More
							<i class="far fa-chevron-right u-font-weight-black pr-3 font-size-30"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>















<!-- submenu -->
<div class="submenu justify-content-between align-items-center my-5 my-md-0 d-none">

	<ul class="d-md-flex mb-0 ml-md-4">
		<li class="submenu--item my-3 my-md-0" data-aos="fade-left">
			<a
			class="submenu--links font-weight-bold text-uppercase active"
			href="<?= get_home_url(null, 'blog') ?>">
				overview
			</a>
		</li>

		<?php
			$terms = get_terms(
			    array(
			        'taxonomy'   => 'category',
			        'hide_empty' => true,
			        'parent'     => 38
			    )
			);

			$categoryID = 38;

			//get_home_url(null, 'filter?cat=' . $term->slug . '&id=' . $categoryID)
			//get_term_link($term->term_id)

			foreach($terms as $term): 
		?>
		<li class="submenu--item my-3 my-md-0" data-aos="fade-left">
			<a
			class="submenu--links font-weight-bold text-uppercase"
			href="<?= get_term_link($term->term_id) ?>">
				<?= $term->name; ?>
			</a>
		</li>
		<?php endforeach; ?>
		<!-- end loop -->
	</ul>

	<div class="col">

		<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">

			<div class="form-row justify-content-end">

				<div class="col-10 col-md-4">
					<input 
					class="form-control border-top-0 border-left-0 border-right-0 border-bottom rounded-0 bg-folk--none" 
					type="search" 
					name="s"
					value="" 
					placeholder="Search...">
					<input type="hidden" name="pag" value="<?= $post->post_name; ?>">
				</div>

				<div class="col-2">

					<span class="icon-search"></span>

					<input 
					class="btn-submit d-none" 
					type="submit" 
					value="Search">
				</div>
			</div>
		</form>
	</div>
</div>
<!-- end submenu -->

<!-- blog -->
<section class="blog mt-5 d-none">
	
	<div class="container">

		<div class="row">

			<!-- loop -->
			<?php
				$args = array(
					'posts_per_page' => 1,
					'post_type'      => 'post',
					'category_name'  => 'destacar-post', //destacar-post
					'order'          => 'DESC',
				);

				$photos = new WP_Query( $args );

                if( $photos->have_posts() ) : 
                    while( $photos->have_posts() ): $photos->the_post();
                    	$featuredPostID = $post->ID;
			?>
				<a 
				class="col-12 blog__post-details"
				href="<?php the_permalink() ?>">

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

											$altTitle = get_the_title();
											the_post_thumbnail('post-thumbnail', 
												array('class' => 'img-fluid blog--post-img',
													'alt'   => $altTitle,
												));
							?>
				

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
							<span
							class="btn btn--pattern icon-folk icon-folk--arrow-right font-weight--black bg-folk--yellow mt-5">
								read more

								<span class="btn--line-bottom"></span>	
							</span>
						</div>
					</div>
				</a>
			<?php endwhile; 
				endif;
			?>
			<!-- end loop -->
		</div>
	</div>
</section>		
<!-- end blog -->

<!-- posts-next -->
<section class="posts-next d-none">

	<div class="container">

		<div class="row">
			
			<div class="col-12 mt-5">

				<div class="row justify-content-between">

					<!-- loop -->
					<?php
						$args = array(
							'posts_per_page' => 6,
							'post_type'      => 'post',
							'category_name'  => 'blog',
							'order'          => 'DESC',
						);

						$postsNext = new WP_Query( $args );

		                if( $postsNext->have_posts() ) : 
		                    while( $postsNext->have_posts() ): $postsNext->the_post();
		                    	if($post->ID != $featuredPostID) :
					?>
									<div 
									class="col-md-6 col-lg-5 mt-3 mb-3 mt-md-0 mb-md-5 px-0 px-md-3"
									data-aos="fade-up"
									data-aos-duration="500"
									data-aos-delay="300">

										<a 
										class="card blog__post-details border-0 box-shadow-folk d-flex pt-3 px-3 pb-5"
										href="<?php the_permalink() ?>">
											
											<div class="card-img">
												<?php
													if(have_rows('media')) :
														while(have_rows('media')) : the_row();
															if(get_sub_field('select_media') != 'Video') :

																$altTitle = get_the_title();
																the_post_thumbnail('post-thumbnail', 
																	array('class' => 'img-fluid blog--post-img',
																		'alt'   => $altTitle,
																	));
												?>
									

												<?php else: ?>
													<div>
														<?= get_sub_field('video') ?>
													</div>

												<?php 		endif;
														endwhile;
													endif;
												?>
											</div>

											<div class="card-body">

												<p class="post--text font-weight--black">
													<?= get_the_date('d/m/Y') ?>
												</p>

												<h4 class="training--title">
													<?= the_title() ?>
												</h4>

												<p class="training--phrase">
													<?= the_excerpt() ?>
												</p>

											</div>

											<div class="card-footer border-top-0 bg-folk--white px-1 px-lg-4">
												<span
												class="btn btn--pattern icon-folk icon-folk--arrow-right d-inline-block font-weight--black bg-folk--yellow">
													read more

													<span class="btn--line-bottom"></span>
												</span>
											</div>
										</a>
									</div>
					<?php 		endif;
							endwhile; 
						endif;

						wp_reset_query();
					?>
					<!-- end loop -->
				</div>
			</div>
		</div>

		<div class="row justify-content-center">

			<div class="col-md-4 d-flex justify-content-center mt-5">
				<!-- get_home_url(null, 'see-all?cat=blog') -->

				<a
				class="btn btn--pattern icon-folk icon-folk--arrow-right font-weight--black bg-folk--yellow"
				href="<?= get_term_link(10) ?>">
					see all
					<span class="btn--line-bottom"></span>
				</a>
			</div>
		</div>
	</div>
</section>
<!-- end posts-next -->

<!-- content -->
<section class="content my-6 d-none">

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
<section class="channel my-6 d-none">

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
