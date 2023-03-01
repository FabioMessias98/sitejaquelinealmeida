<?php
/**
 * The template for displaying blog category
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evolutap
 */

get_header();
?>

<div id="primary" class="content-area">
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

                		<p class="header--text text-uppercase text-white mb-0 ml-2">
                			the women
                		</p>

                		<h1 class="header--title font-weight--black text-capitalize text-white">
                			community
                		</h1>
                	</div>
                </div>
            </div><!-- row -->
        </div><!-- col -->
    </div><!-- row -->
</div>
<!-- end banner social -->

<!-- blog -->
<section class="blog mt-5">
	
<div class="container">

<div class="row">

<?php if ( have_posts() ) : ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php 
/*
* Include the Post-Type-specific template for the content.
* If you want to override this in a child theme, then include a file
* called content-___.php (where ___ is the Post Type name) and that will be used instead.
*/ 
?>

	<div class="col-12 my-5 d-none">

		<div class="row">

			<div class="col-lg-2 d-flex align-items-center">
				<p class="post--subtitle blog--date font-weight--black mb-0">
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
					$altTitle = get_the_title();
					the_post_thumbnail('post-thumbnail', 
						array('class' => 'img-fluid blog--post-img',
							'alt'   => $altTitle,
						)); 
				?>

				<span class="post--text d-block mt-3">
					<?= the_excerpt() ?>
				</span>
			</div>
		</div>

		<div class="row justify-content-lg-end">

			<div class="col-md-10 d-flex">
				<a
				class="btn btn--pattern icon-folk icon-folk--arrow-right font-weight--black bg-folk--yellow mt-5"
				href="<?php the_permalink() ?>">
					read more

					<span class="btn--line-bottom"></span>	
				</a>
			</div>
		</div>
	</div>

	<div class="col-10">

		<div class="row">

			<div class="col-6">
				<?php 
					$altTitle = get_the_title();
					the_post_thumbnail('post-thumbnail', 
						array('class' => 'img-fluid blog--post-img',
							'alt'   => $altTitle,
						)); 
				?>
			</div>

			<div class="col-6">
				<h2 class="post--title font-weight--black mb-4">
					<?= the_title() ?>
				</h2>

				<p class="post--subtitle blog--date font-weight--black mb-0">
					<?= get_the_date('d/m/Y') ?>
				</p>

				<p>
					<?= the_excerpt() ?>
				</p>
			</div>
		</div>
	</div>

<?php endwhile;

// the_posts_navigation();

else :
get_template_part( 'template-parts/content', 'none' );

endif;
?>
</div>
</div>
</section>
<!-- end blog -->

</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
