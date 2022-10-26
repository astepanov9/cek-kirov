<?php
/*
Template Name: Главная страница
*/
?>

<?php get_header(); ?>

<main>
    <section class="products wow fadeIn" data-wow-delay="0.2s">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center products__title">
                    <h2>Выбирайте только нужное, мы поможем</h2>
                </div>
            </div>
            <div class="row justify-content-around">
                <div class="col-xl-2 col-md-4 col-sm-6 col-12 products__item">
                    <a href="/otchetnost/">
                        <div class="products__logo">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/eo.png" alt="products-1">
                        </div>
                        <div class="products__item-title">Электронная отчетность</div>
                        <div class="products__desc">ПО для подготовки и сдачи отчетности в контролирующие органы с ПК, онлайн или из «1С»</div>
                    </a>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6 col-12 products__item">
                    <a href="/kep-tokeny-i-skzi/">
                        <div class="products__logo">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/kep.png" alt="products-2">
                        </div>
                        <div class="products__item-title">КЭП, токены и криптопровайдер</div>
                        <div class="products__desc">Электронные подписи под любые задачи, защищенные носители для них и СКЗИ</div>
                    </a>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6 col-12 products__item">
                    <a href="/edo/">
                        <div class="products__logo">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/edo.png" alt="products-3">
                        </div>
                        <div class="products__item-title">Электронный документооборот</div>
                        <div class="products__desc">ПО для обмена юридически значимыми электронными документами с контрагентами</div>
                    </a>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6 col-12 products__item">
                    <a href="/onlajn-kassy/">
                        <div class="products__logo">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/kkt.png" alt="products-4">
                        </div>
                        <div class="products__item-title">Контрольно-кассовая техника</div>
                        <div class="products__desc">Онлайн-кассы и торговое оборудование, ПО для него и помощь квалифицированных специалистов</div>
                    </a>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6 col-12 products__item">
                    <a href="/1s/">
                        <div class="products__logo">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/1c.png" alt="products-1">
                        </div>
                        <div class="products__item-title">Программы и сервисы "1С"</div>
                        <div class="products__desc">Учетное ПО и сопутствующие полезные приложения вкупе с грамотным сопровождением</div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 products__button text-center">
                    <button class="btn main__btn modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-buttonid="Проконсультироваться">Проконсультироваться</button>
                </div>
            </div>
        </div>
    </section>
    <section class="arguments wow fadeIn" data-wow-delay="0.2s">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 arguments__left">
                    <img src="/wp-content/uploads/2022/09/argument.png" alt="arguments">
                </div>
                <div class="col-lg-6 col-12 arguments__right">
                    <div class="arguments__title">
                        <h2>Почему выбирают нас</h2>
                    </div>
                    <div class="arguments__items">
                        <div class="arguments__item wow fadeInUp" data-wow-delay="1s">
                            <div class="arguments__item-logo">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/icons01.png" alt="icon01">
                            </div>
                            <div class="arguments__item-body">
                                <div class="arguments__item-title">Комплексное оказание услуги</div>
                                <div class="arguments__item-desc">
                                от продажи до техподдержки пользователя
                                </div>
                            </div>
                        </div>
                        <div class="arguments__item wow fadeInUp" data-wow-delay="2s">
                            <div class="arguments__item-logo">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/icons02.png" alt="icon02">
                            </div>
                            <div class="arguments__item-body">
                                <div class="arguments__item-title">Мы ценим своим клиентов</div>
                                <div class="arguments__item-desc">
                                и предлагаем только проверенные решения
                                </div>
                            </div>
                        </div>
                        <div class="arguments__item wow fadeInUp" data-wow-delay="3s">
                            <div class="arguments__item-logo">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/icons03.png" alt="icon03">
                            </div>
                            <div class="arguments__item-body">
                                <div class="arguments__item-title">30+ лет опыта в сфере</div>
                                <div class="arguments__item-desc">
                                мы помним, как все начиналось, и знаем, что, почему и к чему
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="news wow fadeIn" data-wow-delay="0.2s">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center news__title">
                    <h2>Новости и акции</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 news__desc">
                    Топ главных событий
                </div>
            </div>
            <div class="row justify-content-center">
                <?php
                global $post;

                $myposts = get_posts([
                    'numberposts' => 2,
                    'category'    => 5
                ]);

                if ($myposts) {
                    foreach ($myposts as $post) {
                        setup_postdata($post);
                ?>
                        <div class="col-lg-6 col-12 news__item">
                            <div class="news__body">
                                <div class="news__item-date">
                                    <i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_the_date(); ?> <?php the_time(); ?>
									<span class="separator">/</span>
									<i class="fa fa-eye" aria-hidden="true"></i><span class="view__number"> <?php echo get_post_views(get_the_ID()); ?></span>
                                </div>
                                <div class="news__item-title">
                                    <?php the_title(); ?>
                                </div>
                                <div class="news__item-desc">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="news__item-button">
                                    <a href="<?php echo get_permalink(); ?>" class="btn main__btn">Читать полностью</a>
                                </div>
                            </div>
                        </div>

                <?php }
                }
                wp_reset_postdata(); ?>
            </div>
            <div class="row">
                <div class="col-12 news__all">
                    <a href="/news">Все новости →</a>
                </div>
            </div>
        </div>
    </section>
    <section class="feedback wow fadeIn" data-wow-delay="0.2s">
        <div class="container">
            <div class="row feedback__container">
                <div class="col-lg-6 col-12 feedback__left">
                    <div class="feedback__title">
                        <h2>Трудно сделать выбор?</h2>
                    </div>
                    <div class="feedback__desc">
                        Разберемся вместе! 
                    </div>
                    <div class="feedback__button">
                        <button class="btn main__btn modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-buttonid="Нужна консультация">Нужна консультация</button>
                    </div>
                </div>
                <div class="col-lg-6 col-12 feedback__right">
                    <img src="/wp-content/uploads/2022/09/photo-09-e1664268129161.png" alt="hero" class="wow fadeInRight">
					<p class="feedback__right-desc">
						Александр, <br> директор <span>«ЦЭК.Киров»</span>
					</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>