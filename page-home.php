<?php
/**
 * 
 * Шаблон для отображения главной страницы
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package K-Telecom_Theme
 */

get_header();
?>

	<main class="site-main">

		<section id="hero" class="bg-light">
			<div class="container container-hero">
				<div class="row">
					<div class="col-12 col-md-6 col-lg-7 order-2 order-md-1">
						<h1 class="headline">Экономия нервов и денег — интернет К-Телеком</h1>
						<ul>
							<li>5 тарифов для многоквартирных и 4 для частных домов</li>
							<li>безлимит подключенных устройств</li>
							<li>комфортная поддержка 24/7</li>
						</ul> 
						<a id="more-button" href="#tariff" class="btn btn-primary btn-lg">Подробнее</a>
					</div>
					<div class="col-12 col-md-6 col-lg-5 order-1 order-md-2 d-flex">
						<img class="main-img mx-auto" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/main-img.svg"></img>
					</div>
				</div>
			</div>
		</section>

		<section id="tariff" class="container">
			<h2>Тарифные планы</h2>
			<div class="row">
				<?php
					$tariff_Query = new WP_Query( array(
						"post_type"      => "tariff",
						"post_status"    => "publish",
						"posts_per_page" => -1,
					) );

					if ( $tariff_Query->have_posts() ) {
						while ( $tariff_Query->have_posts() ) { $tariff_Query->the_post();
						get_template_part("/inc/tariff/loop-tariff");
						} wp_reset_postdata();
					} else { ?>
					<div class="col-12 d-flex">
						<p class="h3 mx-auto">Активные тарифы не найдены</p>
					</div>
				<?php } ?>
			</div>
		</section>

		<section id="request">
			<div class="container">
				<div class="form-wrapper bg-light rounded-20">
					<h2>Подключиться просто!</h2>
					<form id="request-connect">
						<div class="mb-20" role="group" aria-label="Basic checkbox toggle button group">
						  <input type="radio" class="btn-check" name="btnradio" id="btncheck1" autocomplete="off">
						  <label class="btn btn-radio" for="btncheck1">Интернет</label>
						
						  <input type="radio" class="btn-check" name="btnradio" id="btncheck2" autocomplete="off">
						  <label class="btn btn-radio" for="btncheck2">Интернет + ТВ</label>
						
						  <input type="radio" class="btn-check" name="btnradio" id="btncheck3" autocomplete="off">
						  <label class="btn btn-radio" for="btncheck3">Телефония</label>

						  <input type="radio" class="btn-check" name="btnradio" id="btncheck4" autocomplete="off">
						  <label class="btn btn-radio" for="btncheck4">Видеонаблюдение</label>
						</div>
						<div class="row">
							<div class="col-12 col-md-3">
								<input type="text" class="form-control mb-10" name="name" id="contact-name" placeholder="Имя">
							</div>
							<div class="col-12 col-md-6">
								<input type="tel" class="form-control w-100 mb-10" name="tel" id="contact-tel" placeholder="Номер телефона">
							</div>
							<div class="col-12 col-md-3">
								<button type="submit" class="btn btn-primary w-100">Отправить</button>
							</div>
						</div>
						<span class="agreement text-muted d-block d-md-none">Нажимая кнопку “Отправить” вы соглашаетесь на условия <a class="text-muted" href="#">обработки данных</a></span>
						<div class="form-check form-check-inline d-none d-md-block">
							<input class="form-check-input" type="checkbox" id="" value="agree">
							<label class="form-check-label" for="">Я соглашаюсь на условия <a href="#">обработки данных</a></label>
						</div>
					</form>
				</div>
			</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();
