<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */

?>

</div><!-- #content -->


			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="first-container">
					<!--Contact Info-->
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
							<span><i class="fab fa-facebook-square"> </i></span>
							<span><i class="fab fa-twitter-square"> </i></span>
							<span><i class="fab fa-google-plus-square"></i></span>
						</p>
					</div><!-- end of .contact-container -->

					<!--Business Hours-->
					<div class="business-container">
						<h3>Business Hours</h3>
						<p>
							<span><strong>Monday-Friday:</strong></span>9am to 5pm
						</p>
						<p>
							<span><strong>Saturday:</strong> 10am to 2pm</span>
						</p>
						<p>
							<span><strong>Sunday:</strong> Closed</strong></span>
						</p>
					</div><!-- end of .business-container -->

					<div class="footer-logo">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-text.svg" alt="Inhabitent Logo"/>
					</div>
				</div><!--End of first container -->
	
				<div class="copyright">
					Copyright &copy; 2019 Inhabitent
				</div>
		</footer><!-- #colophon -->
		<?php wp_footer();?>
	</body>
</html>
