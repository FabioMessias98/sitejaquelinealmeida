<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evolutap
 */

?>

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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="col-lg-2 d-flex align-items-center order-2 order-lg-1 pl-md-0">
		<p class="post--subtitle blog--date font-weight--black">
			<!-- 10/10/2020 -->
			<?= get_the_date('d/m/Y') ?>
		</p>
	</div>

	<header class="entry-header col-lg-10 order-1 order-lg-2">

		<h6 class="post--subtitle women-inspiration font-weight--regular text-uppercase">
			<a class="single__link-the-women" href="<?= get_home_url(null, 'blog') ?>">the women communit</a> / women <?= $cat->slug; ?>
    	</h6>
    </header>

    <div class="col offset-lg-2 order-2">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="post--title line-height-100 font-weight--black mb-4">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
	</div><!-- .entry-header -->


	<?php evolutap_post_thumbnail(); ?>

	<div class="entry-content entry-content-category col-md-10 order-4 mt-4">
		<?= get_the_excerpt($post); ?>

		<!--
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'evolutap' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'evolutap' ),
			'after'  => '</div>',
		) );
		-->
	</div><!-- .entry-content -->

	<div class="entry-content entry-content-single col-md-10 order-4 mt-4">
		<?= $post->post_content; ?>
	</div>

	<div class="col-12 entry-read-more order-4">

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

	<footer class="entry-footer d-none">
		<?php evolutap_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
