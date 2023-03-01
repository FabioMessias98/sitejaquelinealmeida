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

<!-- banner social -->
<div class="banner-social container mt-6">

    <div class="row">
		
		<!-- sidebar social -->    
        <?= get_template_part('template-parts/content-sidebar-social') ?>
        <!-- end sidebar social -->

        <div class="container order-2 mt-6 mt-md-4 mr-0 px-3">

        	<div class="row">

		        <div class="col-sm">

		            <div class="row">

		                <div class="col-12">

							<div class="row">

								<div class="col-lg-2">
									<p class="post--subtitle blog--date font-weight--black mb-0 mb-lg-3">
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
										<?= $post->post_content; ?>
									</span>
								</div>
							</div>
		                
		                	<!-- get_template_part( 'template-parts/content', get_post_type() ); -->
		                </div>
		            </div><!-- row -->
		        </div><!-- col -->
		    </div>
		</div>
    </div><!-- row -->
</div>
<!-- end banner social -->

<!-- channel -->
<section class="channel my-6">

	<div class="container">
		
		<div class="row">
			
			<div class="col-12">

				<h2 class="section-title font-weight--black mb-4">
					The Women Channel
				</h2>

				<div class="row">

					<!-- model 3 -->
					<div class="col-md-6"><!--channel--item channel--model-3 -->
						
						<div class="card justify-content-center bg-folk--black pt-4 pb-6 px-3">

							<div class="card-body pt-0">

								<h3 class="channel--model-3-title font-weight--black text-center text-white">
									Big Community
									of strong women
								</h3>

								<p class="training--phrase font-weight--regular text-center text-uppercase text-white">
									like you
								</p>
							</div>

							<div class="card-footer border-top-0 d-flex justify-content-center bg-folk--none px-1 px-lg-4">
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
					<!-- end model 3 -->

					<!-- photos -->
					<div class="col-md-6"><!-- channel--item channel--model-4 -->
						
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
								<?php   endwhile; 
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
		</div>
	</div>
</section>
<!-- end channel -->

<?php endwhile; ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
