<?php
/*
Template Name: Онлайн-кассы
*/
?>

<?php get_header(); ?>

<main class="kassy-page">
    <?php echo breadcrumb(' / '); ?>
    <section class="kassy-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 kassy-info__left wow fadeInLeft" data-wow-delay="0.5s">
                    <div class="kassy-info__title">
                        <h2>Онлайн-кассы и торговое оборудование, решения для маркировки и необходимое ПО</h2>
                    </div>
                    <div class="kassy-info__desc">Подберем решение под Ваши задачи</div>
                    <div class="kassy-info__button">
                        <button class="btn main__btn modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-buttonid="Проконсультироваться">Проконсультироваться</button>
                    </div>
                </div>
                <div class="col-lg-6 col-12 kassy-info__right wow fadeInRight" data-wow-delay="0.5s">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/kassy-info.png" alt="kassy-info">

                </div>
            </div>
        </div>
    </section>
    <section class="kassy-products wow fadeIn" data-wow-delay="0.2s" id="kassyGroup">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center kassy-products__title">
                    <h2>Наши продукты</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-4 kassy-products__item collapse-button" data-bs-toggle="collapse" data-bs-target="#collapseKassyOne" aria-expanded="true" aria-controls="collapseKassyOne">
                    Смарт-терминалы
                </div>
                <div class="col-md-2 col-4 kassy-products__item collapse-button" data-bs-toggle="collapse" data-bs-target="#collapseKassyTwo" aria-expanded="false" aria-controls="collapseKassyTwo">
                    Автономные кассы
                </div>
                <div class="col-md-2 col-4 kassy-products__item collapse-button" data-bs-toggle="collapse" data-bs-target="#collapseKassyThree" aria-expanded="false" aria-controls="collapseKassyThree">
                    Фискальные регистраторы
                </div>
                <div class="col-md-2 col-4 kassy-products__item collapse-button" data-bs-toggle="collapse" data-bs-target="#collapseKassyFour" aria-expanded="false" aria-controls="collapseKassyFour">
                    Фискальные накопители
                </div>
                <div class="col-md-2 col-4 kassy-products__item collapse-button" data-bs-toggle="collapse" data-bs-target="#collapseKassyFive" aria-expanded="false" aria-controls="collapseKassyFive">
                    Оборудование для штрихкодирования
                </div>
                <div class="col-md-2 col-4 kassy-products__item collapse-button" data-bs-toggle="collapse" data-bs-target="#collapseKassySix" aria-expanded="false" aria-controls="collapseKassySix">
                    Договор с ОФД
                </div>
            </div>
            <?php

            $products = get_field('nashi_produkty');

            if ($products) : ?>
                <div class="row">
                    <div class="col-12 kassy-products__collapse">
                        <div class="collapse show" id="collapseKassyOne" data-bs-parent="#kassyGroup">
                            <div class="kassy-products__inner">
                                <div class="col-lg-6 col-12 kassy-products__card">
                                    <div class="kassy-products__card-img">
                                        <img src="<?php echo $products['foto_tovara_1']; ?>" alt="">
                                    </div>
                                    <div class="kassy-products__card-title">
                                        <?php echo $products['imya_tovara_1']; ?>
                                    </div>
                                    <div class="kassy-products__card-desc">
                                        <?php echo $products['opisanie_tovara_1']; ?>
                                    </div>
                                    <div class="kassy-products__card-price">
                                        Стоимость: <?php echo $products['stoimost_tovara_1']; ?> <span>₽</span>
                                    </div>
                                    <div class="kassy-products__card-button">
                                        <button class="btn main__btn modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-buttonid="Заказать <?php echo $products['imya_tovara_1']; ?>">Заказать</button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12 kassy-products__card">
                                    <div class="kassy-products__card-img">
                                        <img src="<?php echo $products['foto_tovara_2']; ?>" alt="">
                                    </div>
                                    <div class="kassy-products__card-title">
                                        <?php echo $products['imya_tovara_2']; ?>
                                    </div>
                                    <div class="kassy-products__card-desc">
                                        <?php echo $products['opisanie_tovara_2']; ?>
                                    </div>
                                    <div class="kassy-products__card-price">
                                        Стоимость: <?php echo $products['stoimost_tovara_2']; ?> <span>₽</span>
                                    </div>
                                    <div class="kassy-products__card-button">
                                        <button class="btn main__btn modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-buttonid="Заказать <?php echo $products['imya_tovara_2']; ?>">Заказать</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseKassyTwo" data-bs-parent="#kassyGroup">
                            <div class="kassy-products__inner">
                                <div class="col-lg-6 col-12 kassy-products__card">
                                    <div class="kassy-products__card-img">
                                        <img src="<?php echo $products['foto_tovara_3']; ?>" alt="">
                                    </div>
                                    <div class="kassy-products__card-title">
                                        <?php echo $products['imya_tovara_3']; ?>
                                    </div>
                                    <div class="kassy-products__card-desc">
                                        <?php echo $products['opisanie_tovara_3']; ?>
                                    </div>
                                    <div class="kassy-products__card-price">
                                        Стоимость: <?php echo $products['stoimost_tovara_3']; ?> <span>₽</span>
                                    </div>
                                    <div class="kassy-products__card-button">
                                        <button class="btn main__btn modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-buttonid="Заказать <?php echo $products['imya_tovara_3']; ?>">Заказать</button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12 kassy-products__card">
                                    <div class="kassy-products__card-img">
                                        <img src="<?php echo $products['foto_tovara_4']; ?>" alt="">
                                    </div>
                                    <div class="kassy-products__card-title">
                                        <?php echo $products['imya_tovara_4']; ?>
                                    </div>
                                    <div class="kassy-products__card-desc">
                                        <?php echo $products['opisanie_tovara_4']; ?>
                                    </div>
                                    <div class="kassy-products__card-price">
                                        Стоимость: <?php echo $products['stoimost_tovara_4']; ?> <span>₽</span>
                                    </div>
                                    <div class="kassy-products__card-button">
                                        <button class="btn main__btn modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-buttonid="Заказать <?php echo $products['imya_tovara_4']; ?>">Заказать</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseKassyThree" data-bs-parent="#kassyGroup">
                            <div class="kassy-products__inner">
                                <div class="col-lg-6 col-12 kassy-products__card">
                                    <div class="kassy-products__card-img">
                                        <img src="<?php echo $products['foto_tovara_5']; ?>" alt="">
                                    </div>
                                    <div class="kassy-products__card-title">
                                        <?php echo $products['imya_tovara_5']; ?>
                                    </div>
                                    <div class="kassy-products__card-desc">
                                        <?php echo $products['opisanie_tovara_5']; ?>
                                    </div>
                                    <div class="kassy-products__card-price">
                                        Стоимость: <?php echo $products['stoimost_tovara_5']; ?> <span>₽</span>
                                    </div>
                                    <div class="kassy-products__card-button">
                                        <button class="btn main__btn modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-buttonid="Заказать <?php echo $products['imya_tovara_5']; ?>">Заказать</button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12 kassy-products__card">
                                    <div class="kassy-products__card-img">
                                        <img src="<?php echo $products['foto_tovara_6']; ?>" alt="">
                                    </div>
                                    <div class="kassy-products__card-title">
                                        <?php echo $products['imya_tovara_6']; ?>
                                    </div>
                                    <div class="kassy-products__card-desc">
                                        <?php echo $products['opisanie_tovara_6']; ?>
                                    </div>
                                    <div class="kassy-products__card-price">
                                        Стоимость: <?php echo $products['stoimost_tovara_6']; ?> <span>₽</span>
                                    </div>
                                    <div class="kassy-products__card-button">
                                        <button class="btn main__btn modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-buttonid="Заказать <?php echo $products['imya_tovara_6']; ?>">Заказать</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseKassyFour" data-bs-parent="#kassyGroup">
                            <div class="kassy-products__inner">
                                <div class="col-lg-6 col-12 kassy-products__card">
                                    <div class="kassy-products__card-img">
                                        <img src="<?php echo $products['foto_tovara_7']; ?>" alt="">
                                    </div>
                                    <div class="kassy-products__card-title">
                                        <?php echo $products['imya_tovara_7']; ?>
                                    </div>
                                    <div class="kassy-products__card-desc">
                                        <?php echo $products['opisanie_tovara_7']; ?>
                                    </div>
                                    <div class="kassy-products__card-price">
                                        Стоимость: <?php echo $products['stoimost_tovara_7']; ?> <span>₽</span>
                                    </div>
                                    <div class="kassy-products__card-button">
                                        <button class="btn main__btn modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-buttonid="Заказать <?php echo $products['imya_tovara_7']; ?>">Заказать</button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12 kassy-products__card">
                                    <div class="kassy-products__card-img">
                                        <img src="<?php echo $products['foto_tovara_8']; ?>" alt="">
                                    </div>
                                    <div class="kassy-products__card-title">
                                        <?php echo $products['imya_tovara_8']; ?>
                                    </div>
                                    <div class="kassy-products__card-desc">
                                        <?php echo $products['opisanie_tovara_8']; ?>
                                    </div>
                                    <div class="kassy-products__card-price">
                                        Стоимость: <?php echo $products['stoimost_tovara_8']; ?> <span>₽</span>
                                    </div>
                                    <div class="kassy-products__card-button">
                                        <button class="btn main__btn modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-buttonid="Заказать <?php echo $products['imya_tovara_8']; ?>">Заказать</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseKassyFive" data-bs-parent="#kassyGroup">
                            <div class="kassy-products__inner">
                                <div class="col-lg-6 col-12 kassy-products__card">
                                    <div class="kassy-products__card-img">
                                        <img src="<?php echo $products['foto_tovara_9']; ?>" alt="">
                                    </div>
                                    <div class="kassy-products__card-title">
                                        <?php echo $products['imya_tovara_9']; ?>
                                    </div>
                                    <div class="kassy-products__card-desc">
                                        <?php echo $products['opisanie_tovara_9']; ?>
                                    </div>
                                    <div class="kassy-products__card-price">
                                        Стоимость: <?php echo $products['stoimost_tovara_9']; ?> <span>₽</span>
                                    </div>
                                    <div class="kassy-products__card-button">
                                        <button class="btn main__btn modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-buttonid="Заказать <?php echo $products['imya_tovara_9']; ?>">Заказать</button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12 kassy-products__card">
                                    <div class="kassy-products__card-img">
                                        <img src="<?php echo $products['foto_tovara_10']; ?>" alt="">
                                    </div>
                                    <div class="kassy-products__card-title">
                                        <?php echo $products['imya_tovara_10']; ?>
                                    </div>
                                    <div class="kassy-products__card-desc">
                                        <?php echo $products['opisanie_tovara_10']; ?>
                                    </div>
                                    <div class="kassy-products__card-price">
                                        Стоимость: <?php echo $products['stoimost_tovara_10']; ?> <span>₽</span>
                                    </div>
                                    <div class="kassy-products__card-button">
                                        <button class="btn main__btn modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-buttonid="Заказать <?php echo $products['imya_tovara_10']; ?>">Заказать</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseKassySix" data-bs-parent="#kassyGroup">
                            <div class="kassy-products__inner">
                                <div class="col-lg-6 col-12 kassy-products__card">
                                    <div class="kassy-products__card-img">
                                        <img src="<?php echo $products['foto_tovara_11']; ?>" alt="">
                                    </div>
                                    <div class="kassy-products__card-title">
                                        <?php echo $products['imya_tovara_11']; ?>
                                    </div>
                                    <div class="kassy-products__card-desc">
                                        <?php echo $products['opisanie_tovara_11']; ?>
                                    </div>
                                    <div class="kassy-products__card-price">
                                        Стоимость: <?php echo $products['stoimost_tovara_11']; ?> <span>₽</span>
                                    </div>
                                    <div class="kassy-products__card-button">
                                        <button class="btn main__btn modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-buttonid="Заказать <?php echo $products['imya_tovara_11']; ?>">Заказать</button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12 kassy-products__card">
                                    <div class="kassy-products__card-img">
                                        <img src="<?php echo $products['foto_tovara_12']; ?>" alt="">
                                    </div>
                                    <div class="kassy-products__card-title">
                                        <?php echo $products['imya_tovara_12']; ?>
                                    </div>
                                    <div class="kassy-products__card-desc">
                                        <?php echo $products['opisanie_tovara_12']; ?>
                                    </div>
                                    <div class="kassy-products__card-price">
                                        Стоимость: <?php echo $products['stoimost_tovara_12']; ?> <span>₽</span>
                                    </div>
                                    <div class="kassy-products__card-button">
                                        <button class="btn main__btn modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-buttonid="Заказать <?php echo $products['imya_tovara_12']; ?>">Заказать</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <section class="kassy-services wow fadeIn" data-wow-delay="0.2s">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center kassy-services__title">
                    <h2>Услуги</h2>
                </div>
            </div>
            <div class="row kassy-services__items">
                <div class="col-lg-3 col-sm-6 col-12 kassy-services__item">
                    <a href="#" class="modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-buttonid="Обновление онлайн-кассы">
                        <img src="/wp-content/uploads/2022/07/services-1.png" alt="kassy-services">
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 kassy-services__item">
                    <a href="#" class="modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-buttonid="Регистрация онлайн-кассы">
                        <img src="/wp-content/uploads/2022/07/services-2.png" alt="kassy-services">
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 kassy-services__item">
                    <a href="#" class="modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-buttonid="Сервисное обслуживание онлайн-кассы">
                        <img src="/wp-content/uploads/2022/07/services-3.png" alt="kassy-services">
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 kassy-services__item">
                    <a href="#" class="modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-buttonid="Ремонт онлайн-кассы">
                        <img src="/wp-content/uploads/2022/07/services-4.png" alt="kassy-services">
                    </a>
                </div>
            </div>
    </section>
    <section class="kassy-feedback">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 kassy-feedback__right wow fadeInRight" data-wow-delay="0.5s">
                    <img src="/wp-content/uploads/2022/07/scale_1200.webp" alt="kassy-info">
                </div>
                <div class="col-lg-6 col-12 kassy-feedback__left wow fadeInLeft" data-wow-delay="0.5s">
                    <div class="kassy-feedback__title">
                        <h2>Интересно, но непонятно?</h2>
                    </div>
                    <div class="kassy-feedback__desc">Бесплатно подберем решение под Ваши потребности:</div>
                    <div class="kassy-feedback__button">
                        <button class="btn main__btn modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-buttonid="Онлайн-кассы: заказать подбор">Заказать подбор</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>