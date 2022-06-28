<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tommy_D\'s_Home_Improvement_Center
 */

?>

<footer id="colophon" class="site-footer">
	<div class="top-footer sec-1920 bg-img" style="background-image: url('<?php the_field('footer_back_image','option'); ?>');">
		<div class="container">
			<div class="main-contact-wp">
				<div class="row">
					<div class="col-lg-6">
						<div class="footer-map">
							<iframe src="<?php the_field('iframe_link','option'); ?>" style="border:0;" width="585" height="360" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
						<div class="contact-link">
							<div class="row">
								<div class="col-lg-6">
									<div class="contact-link-box">
										<div class="icon">
											<img width="15" height="15" src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/phone.png" alt="Phone Icon">
										</div>
										<div class="text">
											<?php
											$phone = get_field('phone', 'option');
											$val = array("(", ")", " ", "-", ".");
											$replace = array("", "", "", "", "");
											$phone_link = str_replace($val, $replace, $phone);
											?>
											<span class="title">Phone</span>
											<a href="tel:<?php echo $phone_link; ?>" title="Call <?php echo $phone; ?>"><span class="callus"><?php echo $phone; ?></span></a>
										</div>
									</div>
									<div class="contact-link-box">
										<div class="icon">
											<img width="15" height="15" src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/paper-plane.png" alt="Mail Icon">
										</div>
										<div class="text">
											<span class="title">Email</span>
											<a href="mailto:<?php the_field('email','option'); ?>" title="Mail <?php the_field('email','option'); ?>"><?php the_field('email','option'); ?></a>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="contact-link-box address-box">
										<div class="icon">
											<img width="13" height="17" src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/map-marker-alt.png" alt="Map Icon">
										</div>
										<div class="text">
											<span class="title">Address</span>
											<a href="<?php the_field('address_link','option'); ?>" target="_blank" title="<?php echo strip_tags(get_field('address','option')); ?>"><?php the_field('address','option'); ?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="contact-form">
							<h2 class="h2-title">Contact Us</h2>
							<?php echo do_shortcode('[contact-form-7 id="35" title="Footer Contact Form"]'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom-footer sec-1920">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="footer-logo">
						<a href="<?php echo home_url(); ?>" title="Tommy D's Home Improvement Center">
							<img width="259" height="199" src="<?php the_field('footer_logo','option'); ?>" alt="Logo">
						</a>
					</div>
					<div class="footer-text">
						<?php the_field('footer_content','option'); ?>
					</div>
					<div class="footer-link">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-2',
							)
						);
						?>
					</div>
					<div class="footer-social">
						<ul>
							<li><a href="<?php the_field('facebook_link','option'); ?>" target="_blank" title="Follow on Facebook"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="<?php the_field('twitter_link','option'); ?>" target="_blank" title="Follow on Twitter"><i class="fab fa-twitter"></i></a></li>
							<li><a href="<?php the_field('instagram_link','option'); ?>" target="_blank" title="Follow on Instagram"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copyright">
				<div class="row">
					<div class="col-lg-4">
						<p>&copy;<?php echo date('Y'); ?>  Tommy D's Home Improvement Center</p>
					</div>
					<div class="col-lg-4">
						<div class="copyright-link">
							<ul>
								<li><a href="<?php echo home_url(); ?>/privacy-policy" title="Privacy Policy">Privacy Policy</a></li>
								<li><a href="<?php echo home_url(); ?>/terms-of-use" title="Terms Of Use">Terms Of Use</a></li>
								<li><a href="<?php echo home_url(); ?>/cookie-policy" title="Cookie Policy">Cookie Policy</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 text-lg-right text-center">
						<p>Web Design & Digital Marketing with <span><i class="fa fa-heart" aria-hidden="true"></i></span> by <a href="https://www.dotcomdesign.com" target="_blank" title="Dotcom Design">Dotcom Design</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->

<!-- CTA Button -->
<div class="cta-btn"> 
	<a href="tel:<?php echo $phone_link; ?>" title="Call <?php echo $phone; ?>" class="sec-btn"><span>CALL <span class="callus"><?php echo $phone; ?></span></span></a>
</div>
<!-- CTA Button -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>