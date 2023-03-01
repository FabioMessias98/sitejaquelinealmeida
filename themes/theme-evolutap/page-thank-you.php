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

<section class="sec-thank-you">

	<div class="container-fluid">

		<div class="row">

			<div class="col-12">

				<h2 class="sec-thank-you__title font-weight-bold text-center text-capitalize">
					thank you!
				</h2>

				<a 
				class="sec-thank-you__link d-block font-weight-bold text-center"
				href="<?= get_home_url(null, '') ?>">
					click to go back
				</a>
			</div>
		</div>
	</div>
</section>

<?php endwhile; ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
