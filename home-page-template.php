<?php

/*
 * Template Name: Home Page Template
 * description: >-
  Page template without sidebar
 */

global $post;

get_header();
?>
	<main id="primary" class="home-main">

		<?php
			get_template_part( 'template-parts/home-welcome', 'page' );
		?>

		<?php
			get_template_part( 'template-parts/home-chat-section', 'page' );
		?>
		
		<?php
			get_template_part( 'template-parts/home-awards-carousel', 'page' );
		?>

		<?php
			get_template_part( 'template-parts/home-clients-reviews', 'page' );
		?>

		<?php
			get_template_part( 'template-parts/home-recognized', 'page' );
		?>

		<?php
			get_template_part( 'template-parts/home-why-us', 'page' );
		?> 

		<?php
			get_template_part( 'template-parts/book-in-banner', 'page' );
		?> 

	</main>

	
<?php
get_footer();