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

<div class="ml-9">
	<?php
		$categoryAll = array(16, 24, 18, 19, 20);
		$cats = array();

		foreach (get_the_category($post->ID) as $c) {
			$cat = get_category($c);
			array_push($cats, $cat->category_parent);
		}

		foreach ($cats as $catt) {
			for ($i = 0; $i < count($categoryAll); $i++) {
				if($catt == $categoryAll[$i]) {
					$categoryID = $catt;
				}
			}
		}
	?>
</div>

<?php if($categoryID > 0) : ?>
<!-- submenu -->
<div class="submenu d-md-flex justify-content-between align-items-center mt-5 mb-0 my-md-0">

	
	<ul class="d-md-flex mb-0 ml-md-4">
		<li class="submenu--item my-3 my-md-0" data-aos="fade-left">
			<a
			class="submenu--links font-weight-bold text-uppercase"
			href="<?= get_home_url(null, 'blog') ?>">
				overview
			</a>
		</li>

		<?php
			//get_home_url(null, 'filter/?cat=' . $term->slug . '&id=' . $categoryID)
		
			$terms = get_terms(
			    array(
			        'taxonomy'   => 'category',
			        'hide_empty' => true,
			        'parent'     => $categoryID
			    )
			);
			
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
<?php endif; ?>

<!-- banner social -->
<div class="banner-social container mt-0 mt-md-6">

    <div class="row">
		
		<!-- sidebar social -->    
        <?= get_template_part('template-parts/content-sidebar-social') ?>
        <!-- end sidebar social -->

        <div class="container order-2 mt-6 mt-md-4 mr-0 px-3">

        	<div class="row">

		        <div class="col-sm">

		            <div class="row">

		                <div class="col-12">
		                	<?php
								$cats = get_the_category($post->ID);  

								$parent = get_category($cats[0]->category_parent);

								if (is_wp_error($parent)){
									$cat = get_category($cats[0]);
								}

								else{
									$cat = $parent;
								} 
							?>

							<div class="row">

								<div class="col-lg-10 offset-lg-2 mb-3 mb-lg-0">
									<h6 class="post--subtitle women-inspiration font-weight--regular text-uppercase">
										<a class="single__link-the-women" href="<?= get_home_url(null, 'blog') ?>">the women communit</a> / women <?= $cat->slug; ?>
							    	</h6>
								</div>

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

				<h2 class="section-title font-weight--black mt-5 mb-3">
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
			<div class="col-md-6 col-lg-5 my-3 px-0 px-md-3">

				<a 
				class="card border-0 blog__post-details box-shadow-folk pt-3 px-3 pb-5"
				href="<?= the_permalink() 	?>">
					
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
						<span
						class="btn btn--pattern icon-folk icon-folk--arrow-right font-weight--black bg-folk--yellow"
						>
							read more

							<span class="btn--line-bottom"></span>
						</span>
					</div>
				</a>
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
					<div class="col-md-6 mt-5 mt-lg-0"><!-- channel--item channel--model-4 -->
						
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
