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
                			mind & body defence 
                		</p>

                		<h1 
                		class="header--title font-weight--black text-capitalize text-white"
                		data-aos="zoom-out">
                			programme
                		</h1>
                	</div>
                </div>
            </div><!-- row -->
        </div><!-- col -->
    </div><!-- row -->
</div>
<!-- end banner social -->

<div class="my-5 ml-9 d-none">
	<!--
		// $categories = wp_get_object_terms( $post->ID, 'category', [ 'parent' => 10, 'number' => 1 ] );

		// if ( ! empty( $categories ) ) {
		//     $category_links = [];

		//     foreach ( $categories as $category ) {
		//         $category_links[] = '<a href="' . esc_url( get_term_link( $category ) ) . '">' . $category->name . '</a>';
		//     }

		//     echo implode( ', ', $category_links );
		// }


		// =================
		$terms = get_terms(
		    array(
		        'taxonomy'   => 'category',
		        'hide_empty' => true,
		        //'number'     => -1,
		        'parent'     => 10
		    )
		);

		foreach($terms as $term): 
	-->

		<!-- <a href="<= get_term_link($term->term_id) ?>">Link Category</a> -->
	<!-- 
		endforeach;
	-->
</div>

<!-- submenu -->
<div class="submenu d-md-flex align-items-center my-5 my-md-0">

	<ul class="d-md-flex mb-0 ml-md-4">
		<!-- loop -->
		<li class="submenu--item my-3 my-md-0" data-aos="fade-left">
			<a
			class="submenu--links font-weight-bold text-uppercase"
			href="#">
				about
			</a>
		</li>
		<!-- end loop -->

		<li class="submenu--item my-3 my-md-0" data-aos="fade-left">
			<a
			class="submenu--links font-weight-bold text-uppercase"
			href="#programme">
				programme
			</a>
		</li>

		<li class="submenu--item my-3 my-md-0" data-aos="fade-left">
			<a
			class="submenu--links font-weight-bold text-uppercase"
			href="#timeline">
				timeline
			</a>
		</li>

		<li class="submenu--item my-3 my-md-0" data-aos="fade-left">
			<a
			class="submenu--links font-weight-bold text-uppercase"
			href="#coaches">
				coaches
			</a>
		</li>
	</ul>
</div>
<!-- end submenu -->

<!-- program -->
<?php if(have_rows( 'the_programme' )) : 
		while(have_rows( 'the_programme' )) : the_row();
?>
<section class="program mt-6">
	
	<div class="container">
		
		<div class="row">

			<div class="col-12">

				<h2 class="section-title font-weight--black mb-5">
					Express your <br>
					Confidence
				</h2>
			</div>

			<div 
			class="col-lg-6 d-lg-flex align-items-center px-sm-0 pl-lg-3 pr-lg-0"
			data-aos="fade-right"
			data-aos-duration="1500"
			>
                <img 
                class="img-fluid"
                src="<?= get_sub_field('image') ?>" 
                alt="">
			</div>

			<div 
			class="col-lg-6 box-shadow-folk mt-5 mt-sm-0 py-md-5 pl-md-5" 
			data-aos="fade-left" 
			data-aos-duration="1500" id="<?= sanitize_title(get_field('section_2')); ?>">

				<h3 class="program--title font-weight--black text-capitalize">
					the programme
				</h3>

				<p class="program--text mb-6">
					<?= get_sub_field('content') ?>
				</p>

				<span class="program--text d-block font-weight--regular">
					<?= get_sub_field('items') ?>
				</span>

				<a
				class="btn program--btn-quote font-weight--black bg-folk--yellow mt-6"
				href="<?= get_home_url(null, 'contact') ?>">
					request a quote

					<span class="btn--line-bottom"></span>
				</a>
			</div>
		</div>
	</div>
</section>
<?php endwhile; 
	endif;
?>

<section class="program">

	<div class="container">

		<div class="row">

			<div class="col-12 mt-6" id="why-mind-body">

				<!-- <pre class="ml-9">
					<php var_dump($post); ?>
				</pre> -->

				<span class="program--content">
					<!-- the_content() -->
					<?= $post->post_content; ?>
				</span>
			</div>
		</div>
	</div>
</section>
<!-- end program -->

<!-- timeline -->
<section class="timeline mt-sm-5" id="<?= sanitize_title(get_field('section_3')); ?>">
	
	<div class="container">
		
		<div class="row">
			
			<div class="col-12 mt-5 mt-md-0 mb-0 mb-md-5">
				<h2 class="section-title font-weight--black">
					Programme Timeline
				</h2>
			</div>

			<div class="col-12">

				<!-- loop -->
				<?php if(have_rows( 'timeline' )) : 
						while(have_rows( 'timeline' )) : the_row(); 
				?>
				<div class="row timeline--row-hover" data-aos="fade-up" data-aos-duration="1500">

					<div class="col-md-2 d-flex align-items-center mt-5 mb-0 my-md-5">
						<p class="program--text font-weight--black text-uppercase">
							<?= get_sub_field('week') ?>

							<span class="timeline--week color-folk--yellow">
								<?= get_sub_field('week') ?>
							</span>
						</p>
					</div>

					<div class="col-md-10 my-0 my-md-5">

						<h6 class="timeline--title font-weight--medium">
							<?= get_sub_field('title') ?>
						</h6>

						<p class="timeline--description  font-weight--medium color-folk--yellow">
							<?= get_sub_field('subtitle') ?>
						</p>
					</div>
				</div>
				<?php endwhile;
					endif; 
				?>
				<!-- end loop -->
			</div>
		</div>
	</div>
</section>
<!-- end timeline -->

<!-- coaches -->
<section class="coaches" id="<?= sanitize_title(get_field('section_4')); ?>">

	<div class="container">
		
		<div class="row">
			
			<div class="col-12 mb-n8">

				<h2 class="section-title font-weight--black">
					Coaches
				</h2>
			</div>

			<!-- loop -->
			<?php if(have_rows( 'coaches' )) : 
					while(have_rows( 'coaches' )) : the_row(); 
			?>
			<div class="col-12 coaches--col-child mt-7 mb-0 mb-lg-9 pt-5">			

				<div class="row justify-content-between">

					<div class="col-md-5 coaches--col-min-child">

						<img 
						class="img-fluid"
						src="<?= get_sub_field('photo') ?>"
						alt="<?= get_sub_field('coach') ?>"
						data-aos="flip-left"
						data-aos-duration="1500">

						<span class="coaches--square"></span>
					</div>

					<div class="col-md-5 coaches--col-min-child mt-5 mt-md-0" data-aos="fade-up">

						<h4 class="coaches--name font-weight--black">
							<?= get_sub_field('coach') ?>
						</h4>

						<p class="coaches--text font-weight--regular mb-4 mb-md-7">
							<?= get_sub_field('content') ?>
						</p>

						<span class="coaches--text d-block font-weight-bold mt-4">
							<?= get_sub_field('items') ?>
						</span>
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
<!-- end coaches -->

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
						$duration = 100;

						if(have_rows('photos')) : 
							while(have_rows('photos')) : the_row();
								$duration += 300;
					?>
								<div class="col-md-6 col-lg-5 mb-5" data-aos="zoom-in" data-aos-duration="<?= $duration; ?>">

									<div class="card border-0 rounded-0 box-shadow-folk p-4">
										
										<div class="card-img">
											<img
											class="img-fluid"
											src="<?= get_sub_field('photo') ?>"
											alt="<?= get_sub_field('title') ?>">
										</div>

										<div class="card-body">
											<h4 class="photos--title font-weight--regular">
												<?= get_sub_field('title') ?>
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

					<div class="col-md-4 d-flex justify-content-center mt-5">
						<a
						class="btn btn--pattern icon-folk icon-folk--arrow-right font-weight--black bg-folk--yellow"
						href="<?= get_home_url(null, 'photos') ?>">
							view more

							<span class="btn--line-bottom"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end photos -->

<!-- testemonials -->
<section class="testemonials mb-6" id="testemonials">
	
	<div class="container">

		<div class="row">
			
			<div class="col-12">

				<h2 class="section-title font-weight--black">
					Testimonials
				</h2>
			</div>
		</div>

		<div class="row">

			<!-- loop -->
			<?php if(have_rows( 'testemonials' )) : 
					while(have_rows( 'testemonials' )) : the_row(); 
			?>
			<div class="col-12 box-shadow-folk mb-5 py-5 px-md-7" data-aos="fade-up">

				<div class="row">

					<div class="col-md-4 col-lg-3">
						<img 
						class="img-fluid d-block mx-auto mx-md-0"
						src="<?= get_sub_field('photo') ?>"
						alt="<?= get_sub_field('name') ?>">
					</div>

					<div class="col-8 d-none d-md-flex d-lg-none flex-column justify-content-center">
						<h5 class="testemonials--name font-weight--medium">
							<?= get_sub_field('name') ?>
						</h5>

						<p class="testemonials--subject-matter font-weight--regular text-uppercase">
							<?= get_sub_field('title') ?>
						</p>
					</div>

					<div class="col-lg-9 mt-5 mt-lg-0">

						<h5 class="testemonials--name font-weight--medium d-md-none d-lg-block">
							<?= get_sub_field('name') ?>
						</h5>

						<p class="testemonials--subject-matter font-weight--regular text-uppercase d-md-none d-lg-block">
							<?= get_sub_field('title') ?>
						</p>

						<p class="post--text font-weight--regular">
							<?= get_sub_field('testemonial') ?>
						</p>
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
<!-- end testemonials -->

<?php endwhile; ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
