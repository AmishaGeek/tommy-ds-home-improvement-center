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
		<div class="top-footer bg-img" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2022/06/footer-img-back.jpg');">
			<div class="container">
				<div class="main-contact-wp">
					<div class="row">
						<div class="col-lg-6">
							<div class="footer-map">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d624.3357171551611!2d-75.09701048029613!3d39.98875642382555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6c9d7900efc4b%3A0x2032765460da7d38!2s2600%20E%20Tioga%20St!5e0!3m2!1sen!2sin!4v1655953324534!5m2!1sen!2sin" style="border:0;" width="585" height="360" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</div>
							<div class="contact-link">
								<div class="row">
									<div class="col-lg-6">
										<div class="contact-link-box">
											<div class="icon">
												<img width="15" height="15" src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/phone.png" alt="Phone">
											</div>
											<div class="text">
												<span class="title">Phone</span>
												<a href="tel:2157479000" title="(215)747-9000">(215)747-9000</a>
											</div>
										</div>
										<div class="contact-link-box">
											<div class="icon">
												<img width="15" height="15" src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/paper-plane.png" alt="Paper Plane">
											</div>
											<div class="text">
												<span class="title">Email</span>
												<a href="mailto:sales@tommydsonline.com" title="sales@tommydsonline.com">sales@tommydsonline.com</a>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="contact-link-box">
											<div class="icon">
												<img width="13" height="17" src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/map-marker-alt.png" alt="Map">
											</div>
											<div class="text">
												<span class="title">Address</span>
												<a href="javascript:void(0);" target="_blank" title="2600 E. Tioga St. Philadelphia, PA 19134">2600 E. Tioga St. <span> Philadelphia, PA </span>19134</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer menu -->
        <?php
		//wp_nav_menu(
		//	array(
		//			'theme_location' => 'menu-2',
		//		)
		//);
		?>
		<!-- Contact Form -->
		<?php #echo do_shortcode('[contact-form-7 id="35" title="Footer Contact Form"]'); ?>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>