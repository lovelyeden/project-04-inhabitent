<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<!--Contact Info-->
			<footer id="colophon" class="site-footer" role="contentinfo">

			<div class="first-container">
			<div class="contact-container">
			<h3>Contact Info</h3>
			<p>
			<span><i class="fa fa-envelope"></i></span>
			<a href="mailto:info@inhabitent.com">info@inhabitent.com</a>
			</p>

			<p>
			<span><i class="fa fa-phone"></i></span>
			<a href="tel:7784567891">778-456-7891</a>
			</p>

			<p>
			<span><i class="fab fa-facebook-square"></i></span>
			<span><i class="fab fa-twitter-square"></i></span>
			<span><i class="fab fa-google-plus-square"></i></span>

			</p>
			</div>

			<!--Business Hours-->
			<div class="business-container">
			<h3>Business Hours</h3>
			<p><span>Monday-Friday:</span>9am to 5pm</p>
			<p><span>Saturday:10am to 2pm</span></p>
			<p><span>Sunday:Closed</span></p>
			</div>

			<div class="footer-logo">
			<img src="/assets/images/logos/inhabitent-logo-text-dark.svg" alt="Inhabitent Logo">
			</div>

			<div class="copyright">
			<h2>Copyright &copy; 2019 Inhabitent</h2>
			</div>


				<div class="site-info">
					<a href="<?php echo esc_url('https://wordpress.org/'); ?>"><?php printf(esc_html('Proudly powered by %s'), 'WordPress');?></a>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer();?>

	</body>
</html>
