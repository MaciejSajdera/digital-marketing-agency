<?php

/*
 * Template Name: About Page Template
 * description: >-
  Page template without sidebar
 */

global $post;

get_header();
?>
	<main id="primary" class="page-about">

		<?php
			get_template_part( 'template-parts/about-welcome', 'page' );
		?>

		<?php
			get_template_part( 'template-parts/about-content', 'page' );
		?>
		
		<?php
			get_template_part( 'template-parts/about-bottom-banner', 'page' );
		?>


	</main>

	
<?php
get_footer();