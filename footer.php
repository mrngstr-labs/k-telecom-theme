<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package K-Telecom_Theme
 */

?>

	<footer class="site-footer container">
		<div class="site-info border-top border-bottom">
			<div class="row">
				<div class="col-6 col-md-9">
					<div class="row">
						<div class="col-6 col-md-4">
							<a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo.svg" alt="logo" class="logo"></a>
						</div>
						<div class="col-12 col-md-8 d-flex">
							<span class="copyright my-auto">© 2018–2022 ООО «К-Телеком»</span>
						</div>
					</div>
				</div>
				<div class="col-6 col-md-3 d-flex justify-content-end">
					<a id="instagram-link" href="#" class="my-auto">
						<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/instagram.svg">
					</a>
					<a id="youtube-link" href="#" class="my-auto">
						<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/youtube.svg">
					</a>
					<a id="vk-link" href="#" class="my-auto">
						<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/vk.svg">
					</a>
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
