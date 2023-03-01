<?php

/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evolutap
 * 
 * Template Name: Template About
 * Template Post Type: page
 */

get_header();
$page_slug = $post->post_name;


?>

<div id="primary">
<main id="main">

<?php
if (have_posts()) :
while (have_posts()) : the_post(); ?>

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

                		<h1 class="header--title font-weight--black text-white">
                			<!-- About me -->
                			<?= $post->post_title; ?>
                		</h1>
                	</div>
                </div>
            </div><!-- row -->
        </div><!-- col -->
    </div><!-- row -->
</div>
<!-- end banner social -->

<!-- submenu -->
<div class="submenu d-md-flex align-items-center mt-4 mt-md-0 mb-5 my-md-0">

	<?= do_shortcode('[dcms_childpages]'); ?>
</div>
<!-- end submenu -->

<!-- about -->
<section class="about mt-6">

	<div class="container">

		<div class="row">

			<div class="col-12">
				<?= $post->post_content; ?>
			</div>
		</div>
	</div>
</section>
<!-- end about -->

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

			<!-- loop -->
			<?php
				$args = array(
					'posts_per_page' => 2,
					'post_type'      => 'post',
					'category_name'  => 'story',
					'order'          => 'DESC',
				);

				$stories = new WP_Query( $args );

                if( $stories->have_posts() ) : 
                    while( $stories->have_posts() ): $stories->the_post();
			?>
			<div class="history--col my-4">

				<div class="card border-0 rounded-0 box-shadow-folk px-0 px-md-3">

					<div class="card-body py-5">

						<h4 class="history--title mb-3">
							<?= the_title() ?>
						</h4>

						<span class="history--text d-block">
							<?= the_content() ?>
						</span>

						<p class="history--by font-weight--medium">
							<?= get_field('by') ?>
						</p>
					</div>
				</div>
			</div>
			<?php endwhile; 
				endif;
			?>
			<!-- end loop -->
		</div>

		<div class="row justify-content-end">

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

<?php endwhile;
endif;
?>
</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
