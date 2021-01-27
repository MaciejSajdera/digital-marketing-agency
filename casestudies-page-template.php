<?php

/*
 * Template Name: Case Studies Template
 * description: >-
  Page template without sidebar
 */

global $post;

get_header();
?>
	<main id="primary" class="home-main case-studies-feed">
	<section class="case-studies-grid">
	<?php

$reviews = array(
	'post_type'=> 'case_studies',
	'orderby'        => 'DESC',
);    

		$your_query = new WP_Query( $reviews );

		// "loop" through query (even though it's just one page) 
		while ( $your_query->have_posts() ) :
			$your_query->post_title(); $your_query->the_post();
			echo '<a href="'. get_permalink() .'" class="single-case-study">';

			echo '<div class="single-case-study__thumbnail" style="background-image: url(' .get_the_post_thumbnail_url(). '); background-repeat: no-repeat;"><div class="animated-border-overlay"></div></div>';

			echo '<div class="single-case-study__text">';

				echo '<h3>' . get_the_title() . '</h3>'; 

				echo '<p>' . get_excerpt(235, 'content') . '</p>';

			echo '</div>';

			echo '</a>';

		endwhile;
		


		// reset post data (important!)
		wp_reset_postdata();

		

		?>

		

	</main>
	</section>
	
<?php
get_footer();