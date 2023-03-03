<?php

/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evolutap
 */

get_header();
?>

<div id="primary">
<main id="main">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- <picture>
<source srcset="<?= get_template_directory_uri() ?>/assets/public/images/blog-1.webp" type="image/webp">
<source srcset="<?= get_template_directory_uri() ?>/assets/public/images/blog-1.png" type="image/png">
<img src="<?= get_template_directory_uri() ?>/assets/public/images/blog-1.png" alt="">
</picture> -->

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

                	<div class="header--box position-relative overlay--black pl-0">

	                    <picture>
	                        <source 
	                        srcset="<?= get_template_directory_uri() ?>/assets/public/images/banner-jaqueline.webp" 
	                        type="image/webp" loading="lazy" decoding="async">
	                        
	                        <source 
	                        srcset="<?= get_template_directory_uri() ?>/assets/public/images/banner-jaqueline.png" 
	                        type="image/png">
	                        
	                        <img 
	                        class="header--banner"
	                        src="<?= get_template_directory_uri() ?>/assets/public/images/img-banner-home.png" 
	                        alt="Ícone Hamburger">
	                    </picture>

	                    <div class="header--box-content mt-lg-0 xl-mt-10">
	                		<h1 
	                		class="header--title text-center color-folk--yellow-weak md:u-font-size-161 sm:u-font-size-75 u-font-family-bronkz"
	                		data-aos="zoom-out">
	                			JAQUE ALMEIDA
	                		</h1>

	                		<div class="header--text text-center text-white mb-0 ml-2 letter-spacing-0">
	                			<div>
									<ul class="d-md-flex justify-content-center flex-sm-column flex-md-row align-items-center">
										<li class="u-list-style-none">
											<span class="color-folk--white lg:u-font-size-19 md:u-font-size-17">Female Empowerment</span>
										</li>
										<li class="u-list-style-none">
											<span class="u-icon__pipeline before::u-font-size-32 color-folk--white before::color-folk--yellow-weak px-25 lg:u-font-size-19 md:u-font-size-17">Self Defence Coaching</span>
										</li>
										<li class="u-list-style-none">
											<span class="u-icon__pipeline before::u-font-size-32 color-folk--white before::color-folk--yellow-weak px-25 lg:u-font-size-19 md:u-font-size-17">Personal Development</span>
										</li>
									</ul>
								</div>
							</div>
                		</div>
                	</div>
                </div>
            </div><!-- row -->
        </div><!-- col -->
    </div><!-- row -->
</div>
<!-- end banner social -->

<!-- feature -->
<section class="feature pt-8 bg-folk--gray">

	<div class="container">

		<div class="row">

			<div class="col-12">

				<div class="row">

					<div class="col-xl-5 col-md-12 d-md-flex justify-content-md-center pr-md-0 pl-md-2 pl-sm-0">

						<picture>
                            <source 
                            srcset="<?= get_template_directory_uri() ?>/assets/public/images/jaque-medal-gold.webp" 
                            type="image/webp">
                            
                            <source 
                            srcset="<?= get_template_directory_uri() ?>/assets/public/images/jaque-medal-gold.png" 
                            type="image/png">
                            
                            <img 
                            class="img-fluid"
                            src="<?= get_template_directory_uri() ?>/assets/public/images/img-feature.png" 
                            alt="Ícone Hamburger">
                        </picture>
					</div>

					<div 
					class="col-xl-6 col-lg-12 d-lg-flex justify-content-lg-center mt-xl-5 mt-sm-0 px-0"
					data-aos="fade-up" data-aos-duration="1500">

					<div class="mt-12 bg-folk--white pl-5 pr-3 pb-xl-0 pb-md-4">
						<h2 class="color-folk--yellow-weak font-size-84 u-font-family-bronkz">HELLO,</h2>

						<p>
							Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt quam dicta aperiam similique? Culpa quod officiis vitae mollitia obcaecati nesciunt eveniet unde corrupti magni, ratione debitis! Iste doloribus necessitatibus delectus.
						</p>

						<p>
							Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta, aspernatur, vero earum odio veniam, voluptatum iste explicabo velit modi facere voluptatem cum? Magnam, laborum optio consequatur eligendi quia facilis explicabo.
						</p>

						<div class="d-flex align-items-center flex-column">
							<div class="col-md-9 col-sm-12">
								<a href="#" class="button-cta py-3 px-5 mt-4 d-block text-center">Learn more about me </a>
							</div>
							<div class="col-md-9 col-sm-12">
								<a href="#" class="button-cta button-cta--watch-my py-3 px-md-5 px-sm-2 mt-4 d-block text-center">Watch my Tedx session today</a>
							</div>
						</div>
					</div>

						<div style="display: none;">
							<?php
								$terms = get_terms(
								    array(
								        'taxonomy'   => 'category',
								        'hide_empty' => true,
								        //'number'     => -1,
								        'parent'     => 10
								    )
								);

								//get_home_url(null, 'categories/?cat=' . $term->slug . '&id=' . $term->term_id)
								//get_term_link($term->term_id)

								foreach($terms as $term): 
							?>
									<a 
									class="feature--text d-block font-weight--black text-uppercase color-folk--strong-black"
									href="<?= get_term_link($term->term_id) ?>">
										- women: <?= $term->name; ?>
									</a>
							<?php 
								endforeach;
							?>

							<a
							class="btn btn--pattern icon-folk icon-folk--arrow-right font-weight--black bg-folk--yellow mt-6 ml-md-3"
							href="<?= get_home_url(null, 'blog') ?>">
								see all

								<span class="btn--line-bottom"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end feature -->

<!-- how -->
<section 
class="how pt-6 bg-folk--gray"
data-aos="fade-up"
data-aos-duration="2000"
data-aos-delay="500">

	<div class="container">
		
		<div class="row">

			<div class="col-12 box-shadow-folk py-5 rounded banner-jaque-fund">

			<style>	
					.banner-jaque-fund {
						background-image: url("<?php echo get_template_directory_uri() ?>/assets/public/images/banner-jaque-fundo.webp");
					}
			</style>


				<div class="row justify-content-center">

					<div class="col-12 px-4 px-lg-5">
						<!-- <span >
							<= $post->post_content; ?>
						</span> -->

						<h2><?php echo get_field('titulo_my_mission') ?></h2>

						<span class="post--text d-block font-weight--regular text-white">
							<?php echo get_field('descricao_my_mission') ?>
						</span>
					</div>

					<!-- <div class="col-lg-6 px-4 pl-lg-6 pr-lg-5">
						<p class="post--text font-weight--regular">
							A study at Cornell University found that women are too concerned about not being liked, not looking attractive, outshining others or attracting a lot of attention. 
						</p>

						<p class="post--text font-weight--regular">
							The search for self-confidence, especially as a female, seems to be an endless journey, due to the finding mentioned above of a fear of insecurity and daily trauma. All this was essential for me to boost my growth in my search for self-knowledge in these three areas of life, work and sports.
						</p>

						<p class="post--text font-weight--regular">
							Throughout this process I have heard different stories, had conversations with different professionals from different areas, I have also studied and read some books. In conclusion, after all my attempts, the stories and life experiences were more revealing for my process of improvement, for building my confidence, concentrating on my strengths and

						</p>
					</div>

					<div class="col-lg-6 px-4 pl-lg-5 pr-lg-6">
						<p class="post--text font-weight--regular">
							my achievements, whatever it might be, to focus on what I don't do well.
						</p>

						<p class="post--text font-weight--regular">
							Due to all this and as a result of feeling uncomfortable with some approaches to women's campaigns in sports or advertising campaigns, I decided to conduct a survey. The goal was to find out what other women feel about it. The results showed that more than 70% of the women I interviewed believe that gym campaigns are either OK, all the same, or very bad. 
						</p>

						<p class="post--text font-weight--regular">
							With the discoveries I made from my research I decided I had to create this website with the objective of sharing inspiration to help other women through their experiences  and positively impact their lives. Also, the idea is to bring a little more knowledge about the female audience TO companies AND to present a different approach of their campaigns.
						</p>
					</div> -->
				</div>
			</div>
		</div>		
	</div>
</section>
<!-- end how -->

<!-- channel -->
<section class="channel pt-6 mb-6 d-none">

	<div class="container">

		<div class="row">

			<div class="col-12">
				<h2 class="section-title mb-4 text-uppercase text-center color-folk--light-purple u-font-family-bronkz lg:u-font-size-121 md:u-font-size-98 sm:u-font-size-48">
					Become Empowered, Today!
				</h2>
				<h3 class="color-folk--purple text-center font-size-57">
					For women, taught by women
				</h3>
			</div>
		</div>

		<?php $args = array(
		        'posts_per_page' => 1,
		        'post_type'      => 'women_channel',
		        'order'        => 'ASC',
		    );

		    $channels = get_posts($args);

		    foreach ($channels as $channel) :
		        setup_postdata($channel); 

					if(have_rows('the_women_channel', $channel->ID)) : 
						while(have_rows('the_women_channel', $channel->ID)) : the_row();
		?>
		<div class="row">

			<div class="col-12">

				<div class="row">

					<div class="col-md-6">

						<div class="row">

							<?php
								$args = array(
									'posts_per_page' => 1,
									'post_type'      => 'post',
									'category_name'  => 'highlighted-post-channel', //blog
									'order'          => 'DESC',
								);

								$postsNext = new WP_Query( $args );

				                if( $postsNext->have_posts() ) : 
				                    while( $postsNext->have_posts() ): $postsNext->the_post();
							?>
							<div class="col-12 mb-3">

								<a 
								class="card border-0 box-shadow-folk text-decoration-none pt-3 px-3 pb-5"
								href="<?php the_permalink() ?>" style="color:#000;">
							
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

										<h4 class="training--title color-folk--strong-black mb-4">
											<!-- get_sub_field('titulo') -->
											<?= the_title() ?>
										</h4>
									
										<p class="training--phrase">
											<!-- get_sub_field('conteudo') -->
											<?= the_excerpt() ?>
										</p>
								
									</div>

									<div class="card-footer border-top-0 bg-folk--white py-0 px-1 px-lg-0">
										<span
										class="btn btn--pattern js-btn-read-more icon-folk icon-folk--arrow-right d-inline-block font-weight--black bg-folk--yellow"
										>
											read more

											<span class="btn--line-bottom"></span>
										</span>
									</div>
								</a>
							</div>
							<?php endwhile; 
								endif;

								wp_reset_query();
							?>

							<div class="col-12 mb-3">

								<div class="card justify-content-center bg-folk--black py-5 px-3">

									<div class="card-body py-0">

										<h3 class="channel--model-3-title font-weight--black text-center text-white">
											Big Community <br>
											of strong women
										</h3>

										<p class="training--phrase font-weight--regular text-center text-uppercase text-white">
											like you
										</p>
									</div>

									<div class="card-footer border-top-0 d-flex justify-content-center bg-folk--none mt-6 py-0 px-1 px-lg-4">
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
						</div>
					</div>

					<div class="col-md-6">

						<div class="row h-100">
							<?php if(have_rows('mind_body')) : 
									while(have_rows('mind_body')) : the_row();
							?>
							<div class="col-12 mb-3">

								<div class="card box-shadow-folk bg-folk--yellow pt-6 px-3 px-md-5">

									<div class="card-body p-0">
										<h4 class="channel--model-2-title font-weight--black text-center">
											<?= get_sub_field('title') ?>
										</h4>

										<p class="channel--model-2-subtitle font-weight-bold text-center text-uppercase mb-0 pt-6">
											defence programme
										</p>
									</div>

									<div class="card-img d-md-flex pb-5">
										
										<?php if(have_rows('gallery')) : 
												while(have_rows('gallery')) : the_row();
										?>
										<div class="channel--model-2-box-img">
											<img 
											class="img-fluid"
											src="<?= get_sub_field('photo') ?>"
											alt="">
										</div>
										<?php endwhile; 
											endif;
										?>
									</div>


									<div class="card-body py-0">
										<span class="training--phrase d-block font-weight--regular">
											<?= get_sub_field('content') ?> 
										</span>
									</div>

									<div class="card-footer border-top-0 bg-folk--none mt-6 mb-8 px-1 px-lg-4">
										<a
										class="btn btn--pattern icon-folk icon-folk--arrow-right icon-folk--invert font-weight--black text-white bg-folk--black"
										href="<?= get_sub_field('learn') ?>">
											learn more

											<span class="btn--line-bottom"></span>
										</a>
									</div>
								</div>
							</div>
							<?php endwhile; 
								endif;
							?>
						</div>
					</div>
				</div>
			</div>
		<?php 		endwhile; 
				endif;
			endforeach;
		?>

			<div class="col-12">

				<div class="row">

					<!-- photos -->
					<div class="col-md-6 mb-3 mb-md-0">

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

					<!-- video -->
					<?php
						foreach ($channels as $channel) :
					        setup_postdata($channel); 

							if(have_rows('the_women_channel', $channel->ID)) : 
								while(have_rows('the_women_channel', $channel->ID)) : the_row();
									if(have_rows('video_group')) : 
										while(have_rows('video_group')) : the_row();
							
					?>
											<div class="col-md-6 channel--model-5--col mb-3 mb-md-0">
												<img
												class="channel--model-5--overlay-video img-fluid object-fit-cover" 
												src="<?= get_sub_field('thumbnail') ?>">

								                <?= get_sub_field('video') ?>
											</div>
					<?php               endwhile;
									endif; 	
								endwhile; 
							endif;
						endforeach;
					?>					
					<!-- end video -->
				</div>
			</div>
		</div>
	</div>

	<div class="container d-none">
		
		<div class="row">
			
			<?php if(have_rows('the_women_channel')) : 
					while(have_rows('the_women_channel')) : the_row();
			?>
			<div class="col-12">

				<h2 class="section-title font-weight--black mb-4">
					The Women Channel
				</h2>

				<div class="channel--grid">

					<?php if(have_rows('motivation')) : 
							while(have_rows('motivation')) : the_row();
					?>
					<div class="channel--item channel--model-1">
						
						<div class="card border-0 box-shadow-folk pt-3 px-3 pb-5">
							
							<div class="card-img">

								<!-- <img 
								class="img-fluid"
								src="<?= get_template_directory_uri()?>/assets/public/images/img-women-channel-1.webp"
								alt="Jiu Jitsu Mobility"> -->

								<img 
								class="img-fluid"
								src="<?= get_sub_field('imagem') ?>"
								alt="">
							</div>

							<div class="card-body">

								<h4 class="training--title mb-4">
									<!-- How I felt Inspired When
									I`ve lost Motivation -->

									<?= get_sub_field('titulo') ?>
								</h4>
							
								<p class="training--phrase">
									<!-- The standard Lorem Ipsum passage, used since the 1500s“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum […] -->

									<?= get_sub_field('conteudo') ?>
								</p>
						
							</div>

							<div class="card-footer border-top-0 bg-folk--white mt-8 px-1 px-lg-4">
								<a
								class="btn btn--pattern icon-folk icon-folk--arrow-right font-weight--black bg-folk--yellow"
								href="<?= get_sub_field('link') ?>">
									read more

									<span class="btn--line-bottom"></span>
								</a>
							</div>
						</div>
					</div>
					<?php endwhile; 
						endif;
					?>
					<!-- end model 1 -->

					<!-- model 2 -->
					<?php if(have_rows('mind_body')) : 
							while(have_rows('mind_body')) : the_row();
					?>
					<div class="channel--item channel--model-2">
						
						<div class="card box-shadow-folk bg-folk--yellow pt-6 px-3 px-md-5">

							<div class="card-body px-0">
								<h4 class="channel--model-2-title font-weight--black text-center">
									<!-- Mind & Body -->
									<?= get_sub_field('title') ?>
								</h4>

								<p class="channel--model-2-subtitle font-weight-bold text-center text-uppercase pt-6 pb-4">
									defence programme
								</p>
							</div>

							<div class="card-img d-md-flex pb-5">
								
								<?php if(have_rows('gallery')) : 
										while(have_rows('gallery')) : the_row();
								?>
								<div class="channel--model-2-box-img">
									<!-- <img 
									class="img-fluid"
									src="<?= get_template_directory_uri()?>/assets/public/images/img-lorna-lawless-radius.webp"
									alt=""> -->

									<img 
									class="img-fluid"
									src="<?= get_sub_field('photo') ?>"
									alt="">
								</div>
								<?php endwhile; 
									endif;
								?>

								<!-- <div class="channel--model-2-box-img">
									<img 
									class="img-fluid"
									src="<?= get_template_directory_uri()?>/assets/public/images/img-jaqueline-almeida-radius.webp"
									alt="">
								</div> -->
							</div>


							<div class="card-body pt-4 pt-md-7">
								<p class="training--phrase font-weight--regular">
									<!-- Consectetuer adipiscing elit, sed diam
									nibh euismod tincidunt ut laoreet dolore
									magna aliquam erat volutpat. Ut wisi enim
									ad minim veniam, quis nostrud.  -->

									<?= get_sub_field('content') ?> 
								</p>
							</div>

							<div class="card-footer border-top-0 bg-folk--none mt-6 mb-9 px-1 px-lg-4">
								<a
								class="btn btn--pattern icon-folk icon-folk--arrow-right icon-folk--invert font-weight--black text-white bg-folk--black"
								href="<?= get_sub_field('learn') ?>">
									learn more

									<span class="btn--line-bottom"></span>
								</a>
							</div>
						</div>
					</div>
					<?php endwhile; 
						endif;
					?>
					<!-- end model 2 -->

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
					<div 
					class="channel--item channel--model-4"
					style="background-image: url(<?= get_template_directory_uri()?>/assets/public/images/img-4-channel.webp);">
					</div>
					<!-- model 4 -->

					<!-- model 5 -->
					<div class="channel--item channel--model-5">

						<span 
						class="channel--model-5--overlay-video"
						style="background-image: url(<?= get_template_directory_uri()?>/assets/public/images/img-5-channel.webp)"></span>

		                <!-- <iframe class="channel--model-5--video" src="https://www.youtube.com/embed/Utx7u5ygSbo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->

		                <?= get_sub_field('video') ?>
					</div>
					<!-- end model 5 -->
				</div>
			</div>
			<?php endwhile; 
				endif; 
			?>
		</div>
	</div>
</section>
<!-- end channel -->

<!-- blog -->

<?php echo get_template_part('template-parts/content', 'blog-call-to-action')  ?>

<!-- end-blog -->

<!-- history -->
<section class="history my-6 d-none">

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

			<?php $args = array(
					'posts_per_page' => 2,
					'post_type'      => 'story',
					'order'        => 'DESC',
				);

				$stories = new WP_Query( $args );

				if( $stories->have_posts() ) : 
                    while( $stories->have_posts() ): $stories->the_post();
			?>
					<div 
					class="history--col my-4" 
					data-aos="zoom-out"
					data-aos-duration="500"
					data-aos-delay="300">

						<a 
						class="card border-0 rounded-0 box-shadow-folk px-0 px-md-3"
						href="<?= get_permalink($story->ID) ?>">

							<div class="card-body py-5">

								<h4 class="history--title mb-3">
									<?= the_title() ?>
								</h4>

								<span class="history--text d-block">
									<?= the_excerpt() ?>
								</span>

								<p class="history--by font-weight--medium">
									<?= get_field('by') ?>
								</p>
							</div>
						</a>
					</div>
			<?php endwhile; 
				endif;
			?>
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

<!-- SELF DEFENCE WATCH NOW -->
<section class="watch-now my-6 py-4 bg-folk--light-purple">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="font-size-84 color-folk--purple text-uppercase u-font-family-bronkz">Free Self Defence Tutorials</h2>
				<p class="lg:u-font-size-30 md:u-font-size-22 text-white">
					Head over to my Youtube channel where you will find a variety of <br> 
					tutorials to help you learn self defence techniques quickly and  <br>
					efficiently, today.
				</p>
			</div>
		</div>
	</div>

	<div class="col-12">
		<div class="swiper-container swiper-defence-videos">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<iframe class="w-100 rounded-lg' rounded-lg" height="315" src="https://www.youtube.com/embed/OpRo0IHZi7w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
				<div class="swiper-slide">
					<iframe class="w-100 rounded-lg'" height="315" src="https://www.youtube.com/embed/OpRo0IHZi7w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
				<div class="swiper-slide">
					<iframe class="w-100 rounded-lg'" height="315" src="https://www.youtube.com/embed/OpRo0IHZi7w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
				<div class="swiper-slide">
					<iframe class="w-100 rounded-lg'" height="315" src="https://www.youtube.com/embed/OpRo0IHZi7w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
				<div class="swiper-slide">
					<iframe class="w-100 rounded-lg'" height="315" src="https://www.youtube.com/embed/OpRo0IHZi7w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
				<div class="swiper-slide">
					<iframe class="w-100 rounded-lg'" height="315" src="https://www.youtube.com/embed/OpRo0IHZi7w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
			</div>
			<div class="swiper-button-prev swiper-button-prev-defence-videos"></div>
			<div class="swiper-button-next swiper-button-next-defence-videos"></div>
		</div>
	</div>

	<div class="w-100 d-flex justify-content-center">
		<div class="col-4">
			<a href="#" class="button-cta button-cta--watch-now py-3 px-2 d-block mt-11 font-size-22  text-center">Watch Now</a>
		</div>
	</div>
</section>



<!-- END SELF DEFENCE WATCH NOW -->

<!-- survey -->
<section class="survey mb-5 d-none">

	<div class="container">
		
		<div class="row">
			
			<div class="col-12 bg-folk--yellow py-4 py-lg-5 px-sm-4">

				<div class="row">

					<div class="col-lg-5 d-lg-flex justify-content-center align-items-center">
						<picture>
                            <source 
                            srcset="<?= get_template_directory_uri() ?>/assets/public/images/img-women-survey.webp" 
                            type="image/webp">
                            
                            <source 
                            srcset="<?= get_template_directory_uri() ?>/assets/public/images/img-women-survey.png" 
                            type="image/png">
                            
                            <img 
                            class="img-fluid w-100"
                            src="<?= get_template_directory_uri() ?>/assets/public/images/img-women-survey.png" 
                            alt="Women Survey">
                        </picture>
					</div>

					<div class="col-lg-6">

						<h3 class="survey--featured line-height-100 font-weight--black text-capitalize text-white mb-4">
							<p class="survey--subtitle d-block font-weight--black text-capitalize color-folk--strong-black mb-0">
								women
							</p>

							survey
						</h3>

						<p class="survey--text font-weight--regular mt-5 mt-lg-0">
							The best report for you to know <br>
							more about women audience
						</p>

						<p class="survey--dollar font-weight--regular">
							€10
						</p>

						<a
						class="btn btn--pattern icon-folk icon-folk--arrow-right icon-folk--invert font-weight--black text-white bg-folk--black mt-5 ml-md-3"
						href="#">
							learn more

							<span class="btn--line-bottom"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end survey -->

<!-- training -->
<section class="training my-6 d-none">
	
	<div class="container">
		
		<div class="row">
			
			<div class="col-12">

				<h2 class="section-title font-weight--black">
					Add different things <br>
					to your life
				</h2>
			</div>
		</div>

		<div class="row">

			<div class="col-12 mt-0 mt-lg-5">

				<div class="row justify-content-lg-between">

					<!-- loop -->
					<div 
					class="training--col my-3 my-md-5 my-lg-0"
					data-aos="zoom-out"
					data-aos-duration="500"
					data-aos-delay="300">

						<div class="card border-0 box-shadow-folk pt-3 px-3 pb-5">
							
							<div class="card-img">
								<img 
								class="img-fluid"
								src="<?= get_template_directory_uri()?>/assets/public/images/img-jiu-jitsu-mobility.webp"
								alt="Jiu Jitsu Mobility">
							</div>

							<div class="card-body p-xl-0">

								<h4 class="training--title mt-5">
									Jiu Jitsu mobility for women
								</h4>

								<p class="training--phrase">
									The best way to learn bjj 
								</p>

								<p class="training--value font-weight--regular mb-0">
									€10
								</p>
							</div>

							<div class="card-footer border-top-0 bg-folk--white mt-4 px-0 pr-lg-4">
								<a
								class="btn btn--pattern icon-folk icon-folk--arrow-right font-weight--black bg-folk--yellow"
								href="#">
									learn more

									<span class="btn--line-bottom"></span>
								</a>
							</div>
						</div>
					</div>
					<!-- end loop -->

					<div 
					class="training--col col-lg-5 my-3 my-md-5 my-lg-0"
					data-aos="zoom-out"
					data-aos-duration="500"
					data-aos-delay="300">

						<div class="card border-0 box-shadow-folk pt-3 px-3 pb-5">
							
							<div class="card-img">
								<img 
								class="img-fluid"
								src="<?= get_template_directory_uri()?>/assets/public/images/img-rashguard.webp"
								alt="Rashgaurd">
							</div>

							<div class="card-body p-xl-0">

								<h4 class="training--title mt-5">
									Rashguard 
								</h4>

								<p class="training--phrase">
									The best way to learn bjj 
								</p>

								<p class="training--value font-weight--regular mb-0">
									€30
								</p>
							</div>

							<div class="card-footer border-top-0 bg-folk--white mt-4 px-0 pr-lg-4">
								<a
								class="btn btn--pattern icon-folk icon-folk--arrow-right font-weight--black bg-folk--yellow"
								href="#">
									learn more

									<span class="btn--line-bottom"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end training -->

<?php endwhile; endif; ?>
</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();

