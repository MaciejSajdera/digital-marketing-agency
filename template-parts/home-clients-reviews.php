<section class="blog-posts home-clients-reviews">

		<div class="section-header">
            <span class="text-light up-title">WHAT OUR</span>
            <h2 class="text-light">CLIENTS SAY</h2>
		</div>
        
		<div class="wrapper-flex">
					<?php

                        $reviews = array(
                            'post_type'=> 'reviews'
                        );    
                        
                        $your_query = new WP_Query( $reviews );
                        
						// "loop" through query (even though it's just one page) 
						while ( $your_query->have_posts() ) :
							$your_query->post_title(); $your_query->the_post();
                            echo '<div class="single-review">';
                                echo '<a class="blog-post client-img" href="'. get_permalink() .'" style="background-image: url(' .get_the_post_thumbnail_url(). '); background-repeat: no-repeat;"></a>';

                                echo '<div class="blog-post-caption client-review">';
                                    the_excerpt();
                                    echo '<a class="text-light" href="'. get_permalink() .'">Read more</a>';
                                echo '</div>';

                                echo '<div class="client-signature">';
                                    echo '<p class="text-colored"><strong>' . get_the_title() . '</strong><br />' . get_field("official_title") .'</p>';
                                echo '</div>';

                            echo '</div>';
				
                        endwhile;
                        // reset post data (important!)
                        wp_reset_postdata();
                        ?>

		</div>

		<!-- <div class="txt-centered">
		<a class="read-more" href=<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>>Check out all reviews</a>
		</div> -->
	</section>