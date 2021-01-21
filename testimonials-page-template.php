<?php

/*
 * Template Name: Testimonials Template
 * description: >-
  Page template without sidebar
 */

global $post;

get_header();
?>
	<main id="primary" class="home-main clients-reviews-feed">
	<section>
	<?php

$reviews = array(
	'post_type'=> 'reviews',
	'orderby'        => 'DESC',
);    

		$your_query = new WP_Query( $reviews );

		// "loop" through query (even though it's just one page) 
		while ( $your_query->have_posts() ) :
			$your_query->post_title(); $your_query->the_post();
			echo '<div class="single-review">';

				
				echo '<div class="client-avatar"><a class="client-img" href="'. get_permalink() .'" style="background-image: url(' .get_the_post_thumbnail_url(). '); background-repeat: no-repeat;"></a></div>';

				echo '<div class="review-text-wrapper">';

					echo '<div class="client-signature">';
						echo '<a href="'. get_permalink() .'"">' . get_the_title() . '</a>'; 
						echo '<p>'. get_field("official_title") .'</p>';
					echo '</div>';

					echo '<div class="blog-post-caption client-review">';
						the_content();
					echo '</div>';

				echo '</div>';

			echo '</div>';

			the_posts_navigation();

		endwhile;
		


		// reset post data (important!)
		wp_reset_postdata();

		

		?>

		

	</main>
	</section>
	
<?php
get_footer();