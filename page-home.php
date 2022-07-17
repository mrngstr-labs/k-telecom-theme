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
					<div class="col-12 col-md-6 col-lg-7">
						<h1 class="headline">Экономия нервов и денег — интернет К-Телеком</h1>
						<ul>
							<li>5 тарифов для многоквартирных и 4 для частных домов</li>
							<li>безлимит подключенных устройств</li>
							<li>комфортная поддержка 24/7</li>
						</ul> 
						<a href="#tariff" class="btn btn-primary">Подробнее</a>
					</div>
					<div class="col-12 col-md-6 col-lg-5">
						<img class="main-img" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/main-img.svg"></img>
					</div>
				</div>
			</div>
		</section>

		<section id="tariff" class="container">
			Тарифы
		</section>

		<section id="request">
			<div class="container">
				<div class="form-wrapper bg-light rounded">
					<h2>Подключиться просто!</h2>
					<form>
						<div>
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
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="" value="agree">
								<label class="form-check-label" for="">Я соглашаюсь на условия <a href="#">обработки данных</a></label>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();
