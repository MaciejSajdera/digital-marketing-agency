<?php

/*
 * Template Name: Contact Page Template
 * description: >-
  Page template without sidebar
 */

global $post;

get_header();
?>
	<main id="primary" class="contact-main">

		<section class="section-contact">

			<div class="flex-wrapper flex-between">

				<div class="contact-content-wrapper">
					<h2 class="text-dark">
						<?php echo get_field("contact_header")?>
					</h2>

					<p class="contact-text text-dark">
					<?php echo get_field("contact_text")?>
					</p>
				</div>

				<div class="contact-image">
				<img src="<?php echo get_field("contact_image")?>">
					<span class="text-light">Laura Moxham, MD & Founder</span>
				</div>

			</div>
		</section>

		<?php
			get_template_part( 'template-parts/contact-apply-form', 'page' );
		?>

	</main>

	
<?php
get_footer();