<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

$infographics = get_field('case_study_infographics');

$infographics_are_empty = true;

if (strlen($infographics['case_data_header_1']) > 0) {
	$infographics_are_empty = false;
}

?>

<section class="single-case-study__welcome <?php if (!$infographics_are_empty) : echo 'has-infographics'; endif; ?>">
	<header class="entry-header">
		<div class="single-case-study__header">

			<h1 class="entry-title">
			<?php
				echo '<p>' . get_field('case_study_header_title') . '</p>';
			?>
			</h1>

			<?php

			if (!$infographics_are_empty) :

			?>

			<div class="infographics__container">

					<div class="infographics__wrapper">
						<img src="<?php echo esc_url( $infographics['case_logo'] ); ?>" alt="" />
					</div>

					<div class="infographics__wrapper">
						<div class="case-data__header"><?php echo $infographics['case_data_header_1'] ?></div>
						<div class="case-data__info"><?php echo $infographics['case_data_info_1'] ?></div>
					</div>

					<div class="infographics__wrapper">
						<div class="case-data__header"><?php echo $infographics['case_data_header_2'] ?></div>
						<div class="case-data__info"><?php echo $infographics['case_data_info_2'] ?></div>
					</div>

					<div class="infographics__wrapper">
						<div class="case-data__header"><?php echo $infographics['case_data_header_3'] ?></div>
						<div class="case-data__info"><?php echo $infographics['case_data_info_3'] ?></div>
					</div>

			</div>

			<?php
			endif;
			?>

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
