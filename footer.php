<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */
$cookie_info = get_field('cookie_info', get_option( 'page_on_front' ));
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
								<!-- The Modal -->	
								<div id="formModal" class="modal">
									
										<!-- Modal content -->
										<div class="modal-content">
										<span id='closeFormModal' class="close-modal">
												<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
												<path fill="#fd6424" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
												</svg>
											</span>
										<div id="formPopUp">
											<p class="form-pop-up__upperheader text-light text-centered">APPLY FOR YOUR</p>
											<p class="form-pop-up__header text-darkest text-centered">FREE AUDIT</p>
											<p class="form-pop-up__bottomheader text-light text-centered">Simply fill in the form below to apply.
											We'll review your information and get back to you ASAP</p>
											<?php echo do_shortcode( '[contact-form-7 id="202"]' ); ?>
										</div>
											
										</div>
								</div>


		<div class="site-info footer-upper">
		
			<div class="site-branding">
				<?php
				the_custom_logo();
			?>
			</div><!-- .site-branding -->

			<div>
			<nav id="site-navigation" class="main-navigation footer-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer-menu',
						'menu_id' => 'footer'
					)
				);
				?>
				<div class="flex-wrapper flex-between footer-contact-wrapper">
				<a class="orange-oval-button">Contact</a>
					<div class="flex-wrapper flex-between">
						<a href="tel:01727298040" alt="Call YBA Now" class="white-oval-button call-us"><svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="20">
							<path d="M0 0h24v24H0z" fill="none"></path><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56-.35-.12-.74-.03-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"></path></svg>
							01727 298040
						</a>
						<div class="flex-wrapper social-buttons__wrapper">
									<a href="https://fb.me/ybappc" target="_blank" rel="nofollow"><svg class="svg-inline--fa fa-facebook-f fa-w-9" aria-hidden="true" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 264 512" data-fa-i2svg=""><path fill="currentColor" d="M76.7 512V283H0v-91h76.7v-71.7C76.7 42.4 124.3 0 193.8 0c33.3 0 61.9 2.5 70.2 3.6V85h-48.2c-37.8 0-45.1 18-45.1 44.3V192H256l-11.7 91h-73.6v229"></path></svg><!-- <i class="fab fa-facebook-f"></i> --></a>
									<a href="https://twitter.com/ybappc" target="_blank" rel="nofollow"><svg class="svg-inline--fa fa-twitter fa-w-16" aria-hidden="true" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg><!-- <i class="fab fa-twitter"></i> --></a>
									<a href="https://www.linkedin.com/company/yba-ppc/" target="_blank" rel="nofollow"><svg class="svg-inline--fa fa-linkedin-in fa-w-14" aria-hidden="true" data-prefix="fab" data-icon="linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M100.3 480H7.4V180.9h92.9V480zM53.8 140.1C24.1 140.1 0 115.5 0 85.8 0 56.1 24.1 32 53.8 32c29.7 0 53.8 24.1 53.8 53.8 0 29.7-24.1 54.3-53.8 54.3zM448 480h-92.7V334.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V480h-92.8V180.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V480z"></path></svg><!-- <i class="fab fa-linkedin-in"></i> --></a>
						</div>
					</div>
				</div>
			</nav><!-- #site-navigation -->
			</div>

		</div><!-- .site-info -->
		<p class="text-light copyright">© 2021 YBA PPC <span>|</span>
            	<a class="text-light" href="/privacy-policy/">Privacy Policy</a>
		</p>
		<p class="text-light">Unit 5, 40 Coldharbour Lane, Harpenden, Herts, AL5 4UN</p>
			<div id="cookie-text">
			<p><?php echo $cookie_info ?></p>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
