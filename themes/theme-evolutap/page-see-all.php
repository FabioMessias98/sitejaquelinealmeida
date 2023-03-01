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

<div class="ml-9">
<?php
	$categorySlugSubmenu = $_GET['cat'];
	$categorySeeAll = get_category_by_slug($categorySlugSubmenu);

	$categoryParentID = $categorySeeAll->parent;
	$categoryParentSlug = get_term($categoryParentID, 'category');
?>
</div>

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

                		<p class="header--text text-uppercase text-white mb-0 ml-2">
                			the women
                		</p>

                		<h1 class="header--title font-weight--black text-capitalize text-white">
                			<!-- community -->
                			<?php
								if($categoryParentSlug->parent > 0) {
									echo $categoryParentSlug->name;
								}

								else {
									echo $categorySeeAll->name;
								}
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
			if($categoryParentSlug->parent > 0) {
				$categoryIDSubmenu = $categoryParentSlug->term_id;
			}

			else {
				$categoryIDSubmenu = $categorySeeAll->term_id;
			}
			
			$terms = get_terms(
			    array(
			        'taxonomy'   => 'category',
			        'hide_empty' => true,
			        'parent'     => $categoryIDSubmenu
			    )
			);

			$categoryID = 38;

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

<section class="mb-5 ml-md-9">

	<div class="container">

		<div class="row">

			<?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>

			<?php
				$categorySlug = $_GET['cat'];

				$args = array(
					'posts_per_page' => 6,
					'post_type'      => 'post',
					'category_name'  =>  $categorySlug, //blog
					'order'          => 'DESC',
					'paged'          =>  $paged,
				);

				$postsNext = new WP_Query( $args );

                if( $postsNext->have_posts() ) : 
                    while( $postsNext->have_posts() ): $postsNext->the_post();
			?>
						<div class="col-md-10 my-4">

							<a class="row see-all__link see-all__link--animation" href="<?php the_permalink() ?>">

								<div class="col-md-6 overflow-hidden">
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

								<div class="col-md-6">
									<h2 class="all-posts__title font-weight--black mb-4">
										<?= the_title() ?>
									</h2>

									<p class="all-posts__subtitle blog--date font-weight--black mb-0">
										<?= get_the_date('d/m/Y') ?>
									</p>

									<p>
										<?= the_excerpt() ?>
									</p>
								</div>
							</a>
						</div>
			<?php endwhile; 
				endif;

				wp_reset_query();
			?>
		</div>

		<div class="row justify-content-center">

			<div class="col-4 d-flex justify-content-center mt-4">
                <?php
                    echo paginate_links( array(
                        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                        'total'        => $postsNext->max_num_pages,
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
</section>

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
<?php endwhile; ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
