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

<?php
while ( have_posts() ) : the_post(); ?>

<!-- banner social -->
<div class="container-fluid">

    <div class="row">

        <div class="col-sm order-1 order-md-2">

            <div class="row">

                <div class="col-12 px-0">

                	<div class="header--box d-flex flex-column justify-content-center bg-folk--black">

                		<h1 
                		class="header--title font-weight--black text-capitalize text-white"
                		data-aos="zoom-out">
                			contact us
                		</h1>
                	</div>
                </div>
            </div><!-- row -->
        </div><!-- col -->
    </div><!-- row -->
</div>
<!-- end banner social -->

<!-- contact -->
<section class="pg-contact my-6">

	<div class="container">
		
		<div class="row">
			
			<div class="col-12">

				<!-- <form>

					<div class="form-row justify-content-between">
						
						<div class="col-lg-5 mt-2">

							<label 
							class="contact--label font-weight--regular text-capitalize mb-3" 
							for="firstName">
								first name
							</label>

							<input 
							class="contact--input form-control border-0 rounded-0 box-shadow-folk"
							type="text"
							id="firstName">
						</div>

						<div class="col-lg-5 mt-2">

							<label 
							class="contact--label font-weight--regular text-capitalize mb-3" 
							for="lastName">
								last name
							</label>

							<input 
							class="contact--input form-control border-0 rounded-0 box-shadow-folk"
							type="text"
							id="lastName">
						</div>

						<div class="col-12 mt-4">

							<label 
							class="contact--label font-weight--regular text-capitalize mb-3" 
							for="email">
								E-mail
							</label>

							<input 
							class="contact--input form-control border-0 rounded-0 box-shadow-folk"
							type="email"
							id="email">
						</div>

						<div class="col-lg-5 mt-4">

							<label 
							class="contact--label font-weight--regular text-capitalize mb-3" 
							for="phone">
								phone
							</label>

							<input 
							class="contact--input form-control border-0 rounded-0 box-shadow-folk"
							type="text"
							id="phone">
						</div>

						<div class="col-lg-5 mt-4 pt-5">
							<select class="h-100 form-control border-0 rounded-0 box-shadow-folk">
							    <option selected>What would you like to know </option>
							    <option>Mind&Body Defense Programme</option>
							    <option>Newsletter</option>
							    <option>Videos</option>
							    <option>Mind&Body Defense Programme</option>
							</select>
						</div>

						<div class="col-sm-4 mt-5">
							<input
							class="btn contact--submit font-weight--black text-white bg-folk--black"
							type="submit"
							value="SUBMIT">
						</div>
					</div>
				</form> -->

				<?= do_shortcode('[contact-form-7 id="190" title="Contact"]') ?>
			</div>
		</div>
	</div>
</section>
<!-- end contact -->

<?php endwhile; ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
