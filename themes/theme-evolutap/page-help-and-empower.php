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
                			help and
                		</p>

                		<h1 
                		class="header--title font-weight--black text-capitalize text-white"
                		data-aos="zoom-out">
                			empower
                		</h1>
                	</div>
                </div>
            </div><!-- row -->
        </div><!-- col -->
    </div><!-- row -->
</div>
<!-- end banner social -->

<!-- share -->
<section class="share mt-6">

	<div class="container">

		<div class="row">
			
			<div class="col-12">

				<h2 class="section-title font-weight--black">
					Share with the world <br>
					how strong you are
				</h2>

				<h5 class="post--subtitle font-weight--medium color-folk--strong-gray">
					Overcoming stories that can help all of us
				</h5>

				<?= do_shortcode('[contact-form-7 id="50" title="Story"]') ?>
			</div>
		</div>
	</div>
</section>
<!-- end share -->

<!-- history -->
<section class="history my-6">

	<div class="container">
		
		<div class="row">
			
			<div class="col-12 mb-5">

				<h2 class="section-title font-weight--black">
					You can <span class="text-decoration-underline">Help</span> and <br>
					<span class="text-decoration-underline">Empower</span> other women <br>
					with your story
				</h2>

				<h5 class="post--subtitle font-weight--medium color-folk--strong-gray">
					Overcoming stories that can help all of us
				</h5>
			</div>
		</div>

		<div class="row justify-content-between">

			<?php 
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

				$args = array(
					'posts_per_page' => 10,
					'post_type'      => 'story',
					'order'          => 'DESC',
					'paged'          =>  $paged,
				);

				$stories = new WP_Query( $args );

				if( $stories->have_posts() ) : 
                    while( $stories->have_posts() ): $stories->the_post();
			?>
					<div 
					class="history--col my-4" 
					data-aos="zoom-out"
					data-aos-duration="500"
					data-aos-delay="300">

						<a 
						class="card border-0 rounded-0 box-shadow-folk px-0 px-md-3"
						href="<?= get_permalink($story->ID) ?>">

							<div class="card-body py-5">

								<h4 class="history--title mb-3">
									<?= the_title() ?>
								</h4>

								<span class="history--text d-block">
									<?= the_excerpt() ?>
								</span>

								<p class="history--by font-weight--medium">
									<?= get_field('by') ?>
								</p>
							</div>
						</a>
					</div>
			<?php endwhile; 
				endif;
			?>
		</div>

		<div class="row justify-content-center">

			<div class="col-4 d-flex justify-content-center my-5">
                <?php
                    echo paginate_links( array(
                        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                        'total'        => $stories->max_num_pages,
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

		<div class="row justify-content-end d-none">

			<div class="col-md-6 d-flex justify-content-end">
				<a
				class="btn btn--pattern icon-folk icon-folk--arrow-right icon-folk--invert font-weight--black text-white bg-folk--black mt-5 ml-sm-3"
				href="<?= get_home_url(null, 'help-and-empower') ?>">
					share yours	

					<span class="btn--line-bottom"></span>	
				</a>
			</div>
		</div>
	</div>
</section>
<!-- end history -->

<?php endwhile; ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
