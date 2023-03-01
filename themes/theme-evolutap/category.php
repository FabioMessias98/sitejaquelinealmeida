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

		//echo '<pre class="ml-9">';
		//var_dump($page_object);
		//echo '</pre>';
	?>
</div>

<div class="ml-9">
	<!--$page_object->cat_name; -->
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
                			<!-- $page_object->cat_name; -->
                			community
                		</h1>
                	</div>
                </div>
            </div><!-- row -->
        </div><!-- col -->
    </div><!-- row -->
</div>
<!-- end banner social -->

<section class="sec-see-all mb-5 ml-md-9">

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

</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
