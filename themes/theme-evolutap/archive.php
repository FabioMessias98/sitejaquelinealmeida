<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evolutap
 */

get_header();
?>

<div id="primary" class="content-area">
<main id="main" class="site-main">

<header class="page-header">
<?php
the_archive_title( '<h1 class="page-title">', '</h1>' );
the_archive_description( '<div class="archive-description">', '</div>' );
?>
</header><!-- .page-header -->

<div class="ml-9">
	<?php
		$page_object = get_queried_object();
		$categoryID = get_cat_ID($page_object->cat_name);
		//$categoryName = get_cat_name($page_object->parent); //nao apagar ainda
		$categorySlug = get_category($page_object->parent);

		// echo '<pre>';
		// var_dump($categorySlug);
		// echo '</pre>';

		$termCategoryName = get_term_by( 'slug', $categorySlug->slug, 'category' );
	?>	
</div>

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

                		<p class="header--text text-uppercase text-white mb-0 ml-2">
                			the women 
                		</p>

                		<h1 class="header--title font-weight--black text-capitalize text-white">
                			<?php
                				if($page_object->parent == 38) :
                					echo 'Community';

                				else:
	                				if($termCategoryName->parent == 0) :
	                					echo $page_object->cat_name;

	                				elseif($page_object->parent == 38):
	                					echo 'Community';
	                				else :
	         							echo get_cat_name($page_object->parent);
	                				endif;
	                			endif;
                			?>
                		</h1>
                	</div>
                </div>
            </div><!-- row -->
        </div><!-- col -->
    </div><!-- row -->
</div>
<!-- end banner social -->

<!-- submenu -->
<div class="submenu d-md-flex justify-content-between align-items-center my-5 my-md-0">

	<ul class="d-md-flex mb-0 ml-md-4">

		<li class="submenu--item my-3 my-md-0" data-aos="fade-left">
			<a
			class="submenu--links font-weight-bold text-uppercase"
			href="<?= get_home_url(null, 'blog') ?>">
				overview
			</a>
		</li>

		<?php
			$terms = get_terms(
			    array(
			        'taxonomy'   => 'category',
			        'hide_empty' => true,
			        'parent'     => 10
			    )
			);

			foreach($terms as $term): 
				if($page_object->parent == $term->term_id) : 
					$categorySubmenu = $page_object->parent;
					break;

				elseif($page_object->parent == 38) :
					$categorySubmenu = $page_object->parent;
					break;

				else : 
					$categorySubmenu = $page_object->term_id;
				endif;
			endforeach; 
		?>

		<!-- loop -->
		<?php
			$terms = get_terms(
			    array(
			        'taxonomy'   => 'category',
			        'hide_empty' => true,
			        'parent'     => $categorySubmenu
			    )
			);
			
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

	<div class="col-md-3">

		<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">

			<div class="form-row justify-content-end">

				<div class="col-10">
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

<!-- main post -->
<section class="blog mt-5">
	
	<div class="container">

		<div class="row">

			<!-- loop -->
			<?php
				$args = array(
					'posts_per_page' => 1,
					'post_type'      => 'post',
					'category_name'  => $page_object->slug,
					'order'          => 'DESC',
				);

				$posts = new WP_Query( $args );

                if( $posts->have_posts() ) : 
                    while( $posts->have_posts() ): $posts->the_post();
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

					<div class="row justify-content-center">

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
<!-- end main post -->

<!-- if ( have_posts() ) : -->

<!-- while ( have_posts() ) : the_post(); -->

<!-- 
/*
* Include the Post-Type-specific template for the content.
* If you want to override this in a child theme, then include a file
* called content-___.php (where ___ is the Post Type name) and that will be used instead.
*/
	get_template_part( 'template-parts/content', get_post_type() ); 
-->

<!-- endwhile; -->

<!-- the_posts_navigation();

else :
	get_template_part( 'template-parts/content', 'none' );

endif;
-->

<!-- posts-next -->
<section class="posts-next">

	<div class="container">

		<div class="row">
			
			<div class="col-12 mt-5">

				<div class="row justify-content-between">

					<!-- loop -->
					<?php
						$args = array(
							'posts_per_page' => 6,
							'post_type'      => 'post',
							'category_name'  => $page_object->slug,
							'order'          => 'ASC',
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
										class="card blog__post-details border-0 box-shadow-folk pt-3 px-3 pb-5"
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

											<div class="card-footer border-top-0 bg-folk--white mt-8 px-1 px-lg-4">
												<span
												class="btn btn--pattern icon-folk icon-folk--arrow-right font-weight--black bg-folk--yellow">
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

				<div class="row justify-content-center">

					<div class="col-md-4 d-flex justify-content-center mt-5 mb-6">						
						<?php
							$seeAllCategorySlug = $page_object->slug;
						?>

						<a
						class="btn btn--pattern icon-folk icon-folk--arrow-right font-weight--black bg-folk--yellow"
						href="<?= get_home_url(null, 'see-all?cat=' . $seeAllCategorySlug) ?>">
							see all
							<span class="btn--line-bottom"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end posts-next -->

<!-- content -->
<section class="content my-6">

	<div class="container">

		<div class="row">

			<div class="col-12">

				<h2 class="section-title font-weight--black mb-4"> 
					See all the Content
				</h2>

				<div class="row justify-content-center">
					
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

</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
