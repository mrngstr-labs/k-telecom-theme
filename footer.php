<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package K-Telecom_Theme
 */

?>

	<footer class="site-footer">
		<div class="site-info container">
			<div class="site-branding col-50">
				<a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo.svg" alt="logo" class="logo"></a>
				<span class="copyright">© 2018–2022 ООО «К-Телеком»</span>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
