<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Tommy_D\'s_Home_Improvement_Center
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section class="inner-banner">
			<div class="container">
				<div class="sec-wp">
					<div class="row">
						<div class="col-lg-12">
							<div class="inner-banner-content white-text text-center">
								<h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">OOPS! THAT PAGE CAN’T BE FOUND.</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="error-404 not-found">
			<div class="container">
				<img src="<?php echo home_url() ?>/wp-content/themes/tommy-ds-home-improvement-center/assets/images/404.svg" alt="Error 404 Image">
			</div>
		</div><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
