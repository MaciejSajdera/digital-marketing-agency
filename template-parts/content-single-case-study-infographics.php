<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>

<section class="single-case-study__welcome">
	<header class="entry-header">
		<div class="single-case-study__header">

			<h1 class="entry-title">
			<?php
				the_excerpt()
			?>
			</h1>
		
		</div>

		
	</header><!-- .entry-header -->
</section>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="entry-content">
		<div class="single-case-study__content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', '_s' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		?>
		<div class="post-thumbnail" style="background-image: url(<?php
	 if (get_the_post_thumbnail_url()) : echo get_the_post_thumbnail_url(); endif;
	?>); background-repeat: no-repeat">
		
		</div>
		<?php

		echo get_field("case_study_simple_content");

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
				'after'  => '</div>',
			)
		);
		?>
		</div>

		<div class="single-case-study__recent-posts">

		</div>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
