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
    <div class="site-info">
		<!-- footer menu -->
        <?php
		// wp_nav_menu(
		// 	array(
		// 			'theme_location' => 'menu-2',
		// 		)
		// );
		?>
		<!-- Contact Form -->
		<?php #echo do_shortcode('[contact-form-7 id="35" title="Footer Contact Form"]'); ?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>