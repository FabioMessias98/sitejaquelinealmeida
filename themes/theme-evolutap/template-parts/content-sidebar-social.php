<?php $args = array(
        'posts_per_page' => 1,
        'post_type'      => 'social_media',
        'order'        => 'DESC',
    );

    $socials = get_posts($args);

    foreach ($socials as $social) :
        setup_postdata($social);

        if(have_rows('social_media', $social->ID)) : 
            while(have_rows('social_media', $social->ID)) : the_row();
?>
                <div class="sidebar-social order-2 order-md-1 d-none d-sm-flex flex-column justify-content-between align-items-center">
                    
                    <span class="sidebar-social__line-vertical"></span>

                    <ul class="d-flex d-md-block justify-content-center mt-6 mt-sm-0 mb-0">
                        <li class="justify-content-center list-style-none my-3 mx-3 mx-sm-0 d-none">
                            <div class="sidebar-social--icons mb-0" data-social="instagram">
                                <li class="u-list-style-none mx-2">
                                    <a href="#" target="_blank" rel="noopener noreferrer"  class="u-icon__brands u-icon__instagram-square font-size-0 before::u-font-size-45 color-folk--purple text-decoration-none hover:u-color-folk-black">Link facebook</a>
                                </li>
                                <li class="u-list-style-none mx-2">
                                    <a href="#" target="_blank" rel="noopener noreferrer"  class="u-icon__brands u-icon__linkedin font-size-0 before::u-font-size-45 color-folk--purple text-decoration-none hover:u-color-folk-black">Link facebook</a>
                                </li>
                            </div>
                        </li>
                    </ul>
                </div><!-- col -->
<?php   endwhile; 
    endif; 
endforeach; 
?>