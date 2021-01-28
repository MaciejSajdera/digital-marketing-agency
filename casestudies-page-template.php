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
	<section class="case-studies__welcome">
		<p class="small-header"><?php echo get_the_title() ?></p>
		<h2 class="text-dark"><?php echo get_field("case_studies_header") ?></h2>
		<p class="text-dark"><?php echo get_field("case_studies_paragraph") ?></p>
	</section>
	<section class="case-studies__grid">
	<?php

$reviews = array(
	'post_type'=> 'case_studies',
	'orderby'        => 'DESC',
);    

		$your_query = new WP_Query( $reviews );
		$i = 1;

		// "loop" through query (even though it's just one page) 
		while ( $your_query->have_posts() ) :
			$your_query->post_title(); $your_query->the_post();

			if ($i % 7 === 0) :

				echo '<a href="'. get_permalink() .'" class="single-case-study-tile single-case-study-tile--big">';

			else :

				echo '<a href="'. get_permalink() .'" class="single-case-study-tile">';

			endif;

			echo '<div class="single-case-study-tile__thumbnail" style="background-image: url(' .get_the_post_thumbnail_url(). '); background-repeat: no-repeat;"><div class="animated-border-overlay"></div><div class="readmore-casestudy">Read More</div></div>';
			echo '<div class="single-case-study-tile__text">';

				echo '<h3>' . get_the_title() . '</h3>'; 

				echo '<p>' . wp_trim_words(get_field('case_study_header_title'), 20, '...') . '</p>';

			echo '</div>';

			echo '</a>';

			$i++;

		endwhile;


		// reset post data (important!)
		wp_reset_postdata();

		

		?>

		

	</main>
	</section>
	
<?php
get_footer();