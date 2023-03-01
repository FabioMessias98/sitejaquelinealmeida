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

<div class="ml-9">
	<?php
		// $cats = array();
		
		// foreach (get_the_category($post_id) as $c) {
		// 	$cat = get_category($c);
		// 	array_push($cats, $cat->name);
		// }

		// if (sizeOf($cats) > 0) {
		// 	$post_categories = implode(', ', $cats);
		// } 

		// echo $post_categories . '<br>';

		
		//Pega todas as categorias do post
		$cats = get_the_category($post->ID);  

		//Verifica a primeira categoria retornada e pega seu parentesco. 
		//Se um post tem múltiplas categorias que levam a parentescos separados, retornará o primeiro parentesco pertencente à primeira categoria retornada.
		$parent = get_category($cats[0]->category_parent);

		//Se obtiver uma mesnagem de erro, significa que já estamos na categoria-pai.
		if (is_wp_error($parent)){
			$cat = get_category($cats[0]);
		}
		//Senão, atribui a categoria retornada para trabalhar equivalente a uma categoria-pai.
		else{
			$cat = $parent;
		} 

		//Exibe o slug da categoria
		//echo $cat->slug;
	?>
</div>

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
		                
		                	<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
		                </div>
		            </div><!-- row -->
		        </div><!-- col -->
		    </div>
		</div>
    </div><!-- row -->
</div>
<!-- end banner social -->

<!-- related posts -->
<section class="related-posts mb-6">
	
	<div class="container">
		
		<?php
			$orig_post = $post;
			
			global $post;
			
			$categories = get_the_category($post->ID);

			if ($categories) :
				$category_ids = array();
		?>
		<div class="row">
			
			<div class="col-12">

				<h2 class="section-title font-weight--black mb-5">
					Related Posts
				</h2>
			</div>
		</div>

		<div class="row justify-content-between">

			<!-- loop -->
			<?php
				foreach($categories as $individual_category) 
					$category_ids[] = $individual_category->term_id;

					$args = array(
						'category__in' => $category_ids,
						'post__not_in' => array($post->ID),
						'posts_per_page'=> 3, 
						'caller_get_posts'=>1
					);
				
				$my_query = new wp_query( $args );

				if( $my_query->have_posts() ) :
					while( $my_query->have_posts() ) :
						$my_query->the_post(); 
			?>
			<div class="col-md-6 col-lg-5 my-3 my-md-0 px-0 px-md-3">

				<div class="card border-0 box-shadow-folk pt-3 px-3 pb-5">
					
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

						<h4 class="training--title">
							<!-- How I felt Inspired When <br>
							I`ve lost Motivation -->
							<?= the_title() ?>
						</h4>

						<p class="training--phrase">
							<!-- Consectetuer adipiscing elit, sed diam nibh
							euismod tincidunt ut laoreet dolore magna
							aliquam erat volutpat. -->
							<?= the_excerpt() ?>
						</p>

					</div>

					<div class="card-footer border-top-0 bg-folk--white mt-8 px-1 px-lg-4">
						<a
						class="btn btn--pattern icon-folk icon-folk--arrow-right font-weight--black bg-folk--yellow"
						href="<?= the_permalink() 	?>">
							read more

							<span class="btn--line-bottom"></span>
						</a>
					</div>
				</div>
			</div>
			<?php   	endwhile; 
					endif; 
				endif; 
				
				$post = $orig_post;
				wp_reset_query(); 
			?>
			<!-- end loop -->

			<!-- <div class="col-md-6 col-lg-5 my-3 my-md-0 px-0 px-md-3">

				<div class="card border-0 box-shadow-folk pt-3 px-3 pb-5">
					
					<div class="card-img">
						<img 
						class="img-fluid"
						src="<?= get_template_directory_uri()?>/assets/public/images/img-related-posts-2.webp"
						alt="Jiu Jitsu Mobility">
					</div>

					<div class="card-body">

						<h4 class="training--title">
							How I felt Inspired When <br>
							I`ve lost Motivation
						</h4>

						<p class="training--phrase">
							Consectetuer adipiscing elit, sed diam nibh
							euismod tincidunt ut laoreet dolore magna
							aliquam erat volutpat.
						</p>

					</div>

					<div class="card-footer border-top-0 bg-folk--white mt-8 px-1 px-lg-4">
						<a
						class="btn btn--pattern icon-folk icon-folk--arrow-right font-weight--black bg-folk--yellow"
						href="#">
							read more

							<span class="btn--line-bottom"></span>
						</a>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</section>
<!-- end related posts -->

<!-- channel -->
<section class="channel my-6">

	<div class="container">
		
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
								href="https://www.facebook.com/groups/225083874806432?modal=false&should_open_composer=false"
								target="_blank">
									join us

									<span class="btn--line-bottom"></span>
								</a>
							</div>
						</div>
					</div>
					<!-- end model 3 -->

					<!-- model 4 -->
					<div class="channel--item channel--model-4">
						<!-- <div> -->
							<a href="<?= get_home_url(null, 'photos') ?>">
								<img
								class="img-fluid h-100 object-fit-cover"
								src="<?= get_template_directory_uri()?>/assets/public/images/img-4-channel.webp);">
							</a>
						<!-- </div> -->
					</div>
					<!-- model 4 -->
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
