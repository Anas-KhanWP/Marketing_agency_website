<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blocksy
 */

blocksy_after_current_template();
do_action('blocksy:content:bottom');

?>
</main>

<footer id="footer">
	<div class="partitions">
		<div class="logo-slogan">
			<img src="https://growwitheuan.com/wp-content/uploads/2024/09/EC-logo-white-e1726989728994.png" alt="Logo" class="logo">
			<p class="slogan">Don't Wait - Contact Us to Learn More About Our Services</p>
		</div>
		<div class="contact-part">
			<h3 class="contact-sub">Contact</h3>
			<a href="mailto:ecgroweuan@gmail.com" class="c-email">ecgroweuan@gmail.com</a>
		</div>
		<div class="tpr">
			<a href="#">Terms & Conditions</a>
			<a href="#">Privacy Policy</a>
		</div>
		<div class="socials">
			<div class="social-links">
				<a href="#"><i class="fa-brands fa-linkedin"></i></a>
				<a href="#"><i class="fa-brands fa-instagram"></i></a>
				<a href="#"><i class="fa-brands fa-twitter"></i></a>
				<a href="#"><i class="fa-brands fa-facebook"></i></a>
			</div>
			<div class="copyright"><i class="fa-solid fa-copyright"></i>2024. All Rights Reserved</div>
		</div>
	</div>
</footer>

<script>
	document.querySelector('#site-header .mobile-menu').addEventListener('click', function() {
		// Toggle the 'open' class on the nav-bar when mobile menu is clicked
		document.querySelector('#nav-bar').classList.toggle('open');
	});
</script>

<script>
	document.addEventListener('DOMContentLoaded', function() {
		const header = document.querySelector('#site-header');
		let lastScrollY = window.scrollY;

		// Function to handle header class management
		function manageHeaderClass() {
			const isWideScreen = window.innerWidth > 1024;

			if (isWideScreen) {
				// 1. Add the .scrolled class when content is loaded
				header.classList.add('scrolled');

				// 2. Remove the .scrolled class when hovering over #site-header
				header.addEventListener('mouseenter', function() {
					header.classList.remove('scrolled');
				});

				// 3. Add back the .scrolled class when mouse leaves #site-header
				header.addEventListener('mouseleave', function() {
					header.classList.add('scrolled');
				});

				// 4. Remove .scrolled when scrolling up, add when scrolling down
				window.addEventListener('scroll', function() {
					const currentScrollY = window.scrollY;

					if (currentScrollY > lastScrollY) {
						// Scrolling down: add .scrolled class if it's not already added
						if (!header.classList.contains('scrolled')) {
							header.classList.add('scrolled');
						}
					} else {
						// Scrolling up: remove .scrolled class if it's currently added
						if (header.classList.contains('scrolled')) {
							header.classList.remove('scrolled');
						}
					}

					// Update lastScrollY to current scroll position
					lastScrollY = currentScrollY;
				});
			} else {
				// Clean up event listeners if screen size is less than or equal to 1024px
				header.classList.remove('scrolled');
				header.removeEventListener('mouseenter', () => {});
				header.removeEventListener('mouseleave', () => {});
				window.removeEventListener('scroll', () => {});
			}
		}

		// Initial setup
		manageHeaderClass();

		// Check on window resize
		window.addEventListener('resize', manageHeaderClass);
	});
</script>

</div>

<?php wp_footer(); ?>

</body>

</html>