<div class="col-12 col-md-6 col-lg-4">
    <div class="card shadow">
        <div class="card-body">
            <h4 class="tariff-name"><?php echo get_the_title();?></h4>
            <span class="text-muted fs-14">Скорость интернета</span>
            <p class="h3 text-primary"><?php the_field('net-speed');?></p>
            <div class="tariff-desc">
                <?php the_content(); ?>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="TV" id="" checked>
              <label class="form-check-label mb-20" for="">
                ТВ + 100 ₽<br>(пакет “Базовый”)
              </label>
            </div>
            <div class="price d-flex">
                <p class="h1"><?php the_field('tariff-price');?> ₽</p>
                <span class="text-muted mx-10 my-auto">в месяц</span>
            </div>
            <p class="text-muted fs-12 mb-20">* итоговая цена зависит от варианта оплаты и пакета ТВ при необходимости</p>
            <button class="btn btn-primary w-100">Выбрать тариф</button>
        </div>
    </div>
</div>