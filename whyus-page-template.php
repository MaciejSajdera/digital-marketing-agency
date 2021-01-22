<?php

/*
 * Template Name: Why Us Page Template
 * description: >-
  Page template without sidebar
 */

global $post;

get_header();
?>
	<main id="primary" class="home-main">

		<?php
			get_template_part( 'template-parts/whyus-welcome', 'page' );
		?>

		<?php
			get_template_part( 'template-parts/whyus-ingriedients', 'page' );
		?>

	</main>

	
<?php
get_footer();