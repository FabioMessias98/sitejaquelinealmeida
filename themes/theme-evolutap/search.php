<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Evolutap
 */

get_header();
?>

<section id="primary" class="content-area">
<main id="main" class="site-main">

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

                		<h1 class="header--title font-weight--black text-capitalize text-white">
                			<?php
                				$page_name = $_GET['pag'];
                				echo $page_name;
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
<div class="submenu d-md-flex justify-content-end align-items-center my-5 my-md-0">

	<ul class="mb-0 ml-md-4 d-none">
		<?php
			$terms = get_terms(
			    array(
			        'taxonomy'   => 'category',
			        'hide_empty' => true,
			        'parent'     => 38
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

	<div class="col-6">

		<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">

			<div class="form-row justify-content-end">

				<div class="col-10 col-md-6">
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

<?php if ( have_posts() ) : ?>

	<header class="page-header">
		<h1 class="page-title">
			<?php
				/* translators: %s: search query. */
				printf( esc_html__( 'Search Results for: %s', 'evolutap' ), '<span>' . get_search_query() . '</span>' );
			?>
		</h1>
	</header><!-- .page-header -->

	<div class="container-fluid">

		<div class="row">

			<!-- sidebar social -->    
        	<?= get_template_part('template-parts/content-sidebar-social') ?>
        	<!-- end sidebar social -->

        	<div class="container order-2 mt-6 mt-md-3 mx-0 ml-md-9">

        		<div class="row">

		        	<div class="col-sm order-1 order-md-2">

		           		<div class="row">

		                	<div class="col-12">

		                		<div class="row">
									<?php while ( have_posts() ) : the_post(); ?>

										<div class="col-12 my-3">
											<?php get_template_part( 'template-parts/content', 'search' ); ?>
										</div>
									<?php endwhile; the_posts_navigation(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php 
	else :
		get_template_part( 'template-parts/content', 'none' ); ?>
<?php endif; ?>

</main><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
