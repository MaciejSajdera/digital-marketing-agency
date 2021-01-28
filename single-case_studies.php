<?php

/*
Template Name: Single Case Study Simple
Template Post Type: post, page, case_studies
*/

get_header('single-review');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main single-case-study case-study-simple">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-single-case-study-simple', get_post_type() );

			get_template_part( 'template-parts/post-navigation', get_post_type() );


		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
