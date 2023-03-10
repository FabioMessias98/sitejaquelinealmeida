<section class="l-testimonials py-5">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12 mt-md-5 mb-5 px-0">
                
                <div class="row">

                    <div class="col-lg-4 px-5">
                        
                        <h3 class="l-testimonials__title mb-5 mb-md-1">
                            Testimonials
                        </h3>

                        <div class="d-none d-lg-flex justify-content-around mt-5 pt-5 px-5 px-xxl-9">
                            <!-- arrows -->
                            <div class="swiper-button-prev l-testimonials__button-pattern l-testimonials__button-prev js-swiper-button-prev-testimonials"></div>
                            <div class="swiper-button-next l-testimonials__button-pattern l-testimonials__button-next js-swiper-button-next-testimonials"></div>
                        </div>
                    </div>

                    <div class="col-lg-8">

                        <!-- swiper -->
                        <div class="l-testimonials__swiper swiper-container js-swiper-testimonials">

                            <div class="swiper-wrapper">

                                <!-- slide -->
                                <?php 
                                    $args = array(
                                        'posts_per_page' => -1,
                                        'post_type'      => 'testimonials',
                                        'order'          => 'DESC'
                                    );

                                    $testimonials = new WP_Query( $args );

                                    if( $testimonials->have_posts() ) :
                                        while( $testimonials->have_posts() ) : $testimonials->the_post();
                                ?>
                                            <div class="swiper-slide">

                                                <div class="l-testimonials__item py-5 px-4">

                                                    <div class="l-testimonials__item__header">

                                                        <div class="col-md-4 pl-0 pl-md-3">
                                                            <div class="l-testimonials__item__thumbnail">
                                                                <?php if( get_the_post_thumbnail() ) : ?>
                                                                    <?php
                                                                        the_post_thumbnail( 'post-thumbnail', 
                                                                            array(
                                                                                'alt'   => get_the_title()
                                                                            ));
                                                                    ?>
                                                                <?php else : ?>                                                       
                                                                    <img 
                                                                    class="img-fluid w-100"
                                                                    src="<?php echo get_template_directory_uri()?>/assets/public/images/testimonials-photo.webp" 
                                                                    alt="Photo" />
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-8 d-flex flex-column justify-content-center mt-3 mt-md-0 pl-0 pl-xxl-3">
                                                            <h5 class="l-testimonials__item__name mb-0">
                                                                <?php the_title() ?>
                                                            </h5>

                                                            <p class="l-testimonials__item__occupation mb-0">
                                                                <?php echo get_field( 'occupation' ) ?>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="l-testimonials__item__body pt-4 px-xxl-3">
                                                        <span class="l-testimonials__item__description d-block mb-4">
                                                            <?php echo limit_words( get_field( 'testimony' ), 20) ?>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                <?php   
                                        endwhile;
                                    endif;

                                    wp_reset_query();
                                ?>
                                <!-- end slide -->
                            </div>
                        </div>
                        <!-- end swiper -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>