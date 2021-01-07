<section class="section-awards-carousel">

    <div class="section-header">
        <span class="text-colored up-title">some of</span>
        <h2>Our Awards</h2>
    </div>

            <!-- Slider main container -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php 

                $args = array(
                    'post_type'=> 'awards'
                );              

                $the_query = new WP_Query( $args );
                if($the_query->have_posts() ) : 
                    while ( $the_query->have_posts() ) : 
                    $the_query->the_post(); 
                    // content goes here
                    echo '<div class="swiper-slide"><img src="'.get_the_post_thumbnail_url().'"></div>';
                    endwhile; 
                    wp_reset_postdata(); 
                else: 
                endif;


                ?>
                
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>

</section>