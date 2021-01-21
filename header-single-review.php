<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */
global $wp_query;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

	<div class="top-banner">
		<a href="" class="white-oval-button apply-button">Apply for the UK’s Best Free Audit Today Click Here</a>
		<a href="" class="white-oval-button apply-button-short">FREE AUDIT</a>
		<span class="call-us-on">OR CALL US ON </span>
		<a href="tel:01727298040" alt="Call YBA Now" class="white-oval-button call-us"><svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="20">
		<path d="M0 0h24v24H0z" fill="none"/><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56-.35-.12-.74-.03-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/></svg>
		 01727 298040</a>
	</div>

	<header id="masthead" class="site-header" style="background-image: url(<?php
	 if (get_the_post_thumbnail_url(8)) : echo get_the_post_thumbnail_url(8); endif;
	?>)";
	>
	
		<div class="site-branding">
			<?php
			the_custom_logo();
		 ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', '_s' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
