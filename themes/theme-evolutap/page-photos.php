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

                		<!-- <p class="header--text text-uppercase text-white mb-0 ml-2">
                			the women
                		</p> -->

                		<h1 class="header--title font-weight--black text-capitalize text-white">
                			photos
                		</h1>
                	</div>
                </div>
            </div><!-- row -->
        </div><!-- col -->
    </div><!-- row -->
</div>
<!-- end banner social -->

<section class="gallery mt-3 d-none">

	<div class="container">

		<div class="row">

			<div class="col-12 d-none d-md-block">

				<div class="row">

					<!-- loop -->
					<?php 
					    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

						$args = array(
					        'posts_per_page' => 6,
					        'post_type'      => 'post',
					        'category_name'  => 'photos',
					        'order'          => 'ASC',
					        'paged'          =>  $paged,
					    );

					    $photos = new WP_Query( $args );

					   	if($photos->have_posts()) : 
                    		while($photos->have_posts()): $photos->the_post();
    				?>

								<div class="col-4 mt-3 test">
								 	<?php
										$altTitle = get_the_title();
										the_post_thumbnail('post-thumbnail', 
											array('class' => 'img-fluid',
												  'alt'   => $altTitle,
										));
									?>
								</div>
					<?php   endwhile; 
						endif;
					?>
					<!-- end loop -->
				</div>

				<div class="row justify-content-center">

					<div class="col-4 d-flex justify-content-center my-5">
		                <?php
		                    echo paginate_links( array(
		                        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
		                        'total'        => $photos->max_num_pages,
		                        'current'      => max( 1, get_query_var( 'paged' ) ),
		                        'format'       => '?paged=%#%',
		                        'show_all'     => false,
		                        'type'         => 'plain',
		                        'end_size'     => 2,
		                        'mid_size'     => 1,
		                        'prev_next'    => true,
		                        'prev_text'    => sprintf( '<i></i> %1$s', __( '', 'text-domain' ) ),
		                        'next_text'    => sprintf( '%1$s <i></i>', __( '', 'text-domain' ) ),
		                        'add_args'     => false,
		                        'add_fragment' => '',
		                    ) );
		                ?>
					</div>
				</div>
			</div>

			<div class="col-12 d-md-none my-6">

				<!-- swiper -->
				<div class="swiper-container swiper-container-gallery">

					<div class="swiper-wrapper">

						<!-- slide -->
						<?php
							$args = array(
								'posts_per_page' => -1,
								'post_type'      => 'post',
								'category_name'  => 'gallery',
								'order'          => 'ASC',
							);

							$galleries = new WP_Query( $args );

                        	if( $galleries->have_posts() ) : 
                           		while( $galleries->have_posts() ): $galleries->the_post();
						?>
									<div class="swiper-slide swiper-slide-gallery">
										<?php 
											$altTitle = get_the_title();
											the_post_thumbnail('post-thumbnail', 
												array('class' => 'img-fluid',
													'alt'   => $altTitle,
												)); 
										?>
									</div>
						<?php endwhile; 
							endif;

							//wp_reset_query(); 
						?>
						<!-- end slide -->
					</div>
					
					<div class="swiper-pagination swiper-pagination-gallery"></div>
				</div>
				<!-- end swiper -->
			</div>
		</div>
	</div>
</section>

<!-- photos -->
<section class="photos mt-6 mt-md-0 mb-6" id="photos">

	<div class="container">

		<div class="row">

			<div class="col-12">

				<h2 class="section-title font-weight--black">
					Photos
				</h2>

				<div class="row justify-content-between">

					<!-- loop -->
					<?php 
					    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

						$args = array(
					        'posts_per_page' => 6,
					        'post_type'      => 'post',
					        'category_name'  => 'photos',
					        'order'          => 'ASC',
					        'paged'          =>  $paged,
					    );

					    $photos = new WP_Query( $args );

					   	if($photos->have_posts()) : 
                    		while($photos->have_posts()): $photos->the_post();
    				?>
								<div class="col-md-6 col-lg-4 mb-5" data-aos="zoom-in" data-aos-duration="<?= $duration; ?>">

									<div class="card border-0 rounded-0 box-shadow-folk p-4">
										
										<div class="card-img">
											<?php 
												$altTitle = get_the_title();
												the_post_thumbnail('post-thumbnail', 
													array('class' => 'img-fluid',
														'alt'   => $altTitle,
													)); 
											?>
										</div>

										<div class="card-body">
											<h4 class="photos--title font-weight--regular">
												<!-- the_title() -->
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

				<div class="row justify-content-center">

					<div class="col-4 d-flex justify-content-center my-5">
		                <?php
		                    echo paginate_links( array(
		                        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
		                        'total'        => $photos->max_num_pages,
		                        'current'      => max( 1, get_query_var( 'paged' ) ),
		                        'format'       => '?paged=%#%',
		                        'show_all'     => false,
		                        'type'         => 'plain',
		                        'end_size'     => 2,
		                        'mid_size'     => 1,
		                        'prev_next'    => true,
		                        'prev_text'    => sprintf( '<i></i> %1$s', __( '', 'text-domain' ) ),
		                        'next_text'    => sprintf( '%1$s <i></i>', __( '', 'text-domain' ) ),
		                        'add_args'     => false,
		                        'add_fragment' => '',
		                    ) );
		                ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end photos -->

<?php endwhile; ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
