<?php
/*
Template Name: ЭДО
*/
?>

<?php get_header(); ?>

<main>
    <?php echo breadcrumb(' / '); ?>
    <section class="edo-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 edo-info__left wow fadeInLeft" data-wow-delay="0.5s">
                    <img src="/wp-content/uploads/2022/08/edo-carousel.png" alt="edo-info">
                </div>
                <div class="col-lg-6 col-12 edo-info__right wow fadeInRight" data-wow-delay="0.5s">
                    <div class="edo-info__title">
                        <h2>Сервисы для ЭДО – экономьте не только время на документообороте с контрагентами</h2>
                    </div>
                    <div class="edo-info__desc">Освойте электронный документооборот до того, как он станет обязательным</div>
                    <div class="edo-info__button">
                        <button class="btn main__btn modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-buttonid="Подобрать оптимальное решение">Подобрать оптимальное решение</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="edo-quote wow fadeIn" data-wow-delay="0.2s">
        <div class="container">
            <div class="edo-quote__wrapper">
                <ul>
                    <li class="wow fadeInUp" data-wow-delay="0.5s"><i class="fa fa-check-square-o" aria-hidden="true"></i>ЭДО - документооборот с контрагентами, где документы передаются в виде электронных файлов, осуществляется через Оператора ЭДО с подключением к его системе.</li>
                    <li class="wow fadeInUp" data-wow-delay="1.0s"><i class="fa fa-check-square-o" aria-hidden="true"></i>Это могут быть как онлайн-сервисы, использующие облачное хранение данных, так и ПО, работающее локально на ПК.</li>
                    <li class="wow fadeInUp" data-wow-delay="1.5s"><i class="fa fa-check-square-o" aria-hidden="true"></i>Юридическую значимость передаваемым документам придает подписание их с помощью <b><a href="/kep-tokeny-i-skzi">КЭП</a></b></li>
                    <li class="wow fadeInUp" data-wow-delay="2.0s"><i class="fa fa-check-square-o" aria-hidden="true"></i>Использование ЭДО позволяет экономить ресурсы и упрощает процессы совместного создания, редактирования, подписания документов, разграничения прав доступа к ним, снижает риск совершения ошибок, потери и порчи данных.</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="edo-services wow fadeIn" data-wow-delay="0.2s" id="edoGroup">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center edo-services__title">
                    <h2>Как удобнее обмениваться с партнерами формализованными и неформализованными документами?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-6 edo-services__item collapse-button" data-bs-toggle="collapse" data-bs-target="#collapseEdoOne" aria-expanded="true" aria-controls="collapseEdoOne">
                    в лицензионной ПП «1С»
                </div>
                <div class="col-6 edo-services__item collapse-button" data-bs-toggle="collapse" data-bs-target="#collapseEdoTwo" aria-expanded="false" aria-controls="collapseEdoTwo">
                    без привязки к «1С»
                </div>
            </div>
            <div class="row">
                <div class="col-12 edo-services__collapse">
                    <div class="collapse show" id="collapseEdoOne" data-bs-parent="#edoGroup">
                        <div class="col-12 edo-services__card">
                            <div class="edo-services__card-desc">
                                <p>В «1С» уже есть встроенное решение для документооборота - сервис "1С-ЭДО". И никаких выгрузок в сторонние ПО!</p>
                                <p>Преимущества «1С-ЭДО»:</p>
                                <ul>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>на основании входящих электронных документов (ЭД) учетные документы в «1С» создаются по 1 кнопке (например, поступление товаров); </li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>отправка ЭД происходит сразу из первичного документа также по 1 кнопке; </li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>функционал сервиса своевременно и автоматически обновляется вместе с «1С»; </li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>архив ЭД хранится прямо в «1С». Интернет нужен для обмена и обновления статусов ЭД. </li>
                                </ul>
                                <p>А еще у "1С-ЭДО" есть <b>бесплатные отправки</b></p>
                            </div>
                            <div class="edo-services__card-price">
                                <h4 class="text-center">Стоимость: от 2,5 до 12,5 ₽ за комплект/от 3 000 ₽ в год</h4>
                            </div>
                            <div class="edo-services__card-button">
                                <button class="btn main__btn modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-buttonid="Обмен документами в лицензионной ПП «1С»">Узнать больше</button>
                            </div>
                        </div>
                    </div>
                    <div class="collapse" id="collapseEdoTwo" data-bs-parent="#edoGroup">
                        <div class="col-12 edo-services__card">
                            <div class="edo-services__card-desc">
                                <p>Оптимальное решение - онлайн-сервис «Астрал. ЭДО» - для тех, кто ценит быструю загрузку документов и удобство работы.</p>
                                <p>«Астрал. ЭДО» — это:</p>
                                <ul>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>работа с данными нескольких фирм под 1 учетной записью;</li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>загрузка и отправка файлов в 2 клика;</li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>высокая скорость документооборота;</li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>бесплатный роуминг с пользователями других ПО без доп. настроек;</li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>работа с маркировкой без доплаты;</li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>перенос неизрасходованных отправок;</li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>встроенные подсказки;</li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i>блокировка нежелательных контрагентов</li>
                                </ul>
                            </div>
                            <div class="edo-services__card-price">
                                <h4 class="text-center">Месяц работы без ограничения функционала в подарок. <br>
                                    Далее – от 500 ₽/год</h4>
                            </div>
                            <div class="edo-services__card-button">
                                <button class="btn main__btn modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-buttonid="Обмен документами без привязки к «1С»">Подключиться</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="edo-actions wow fadeIn" data-wow-delay="0.2s">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center edo-actions__title">
                    <h2>Акции</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php
                global $post;

                $myposts = get_posts([
                    'numberposts' => 6,
                    'category'    => 8
                ]);

                if ($myposts) {
                    foreach ($myposts as $post) {
                        setup_postdata($post);
                ?>
                        <div class="col-12 edo-actions__item">
                            <div class="edo-actions__body">
                                <div class="edo-actions__body-date">
                                    <i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_the_date(); ?> <?php the_time(); ?> / <?php the_field('edo-stock-meta'); ?>
                                </div>
                                <div class="edo-actions__body-title"><?php the_title(); ?></div>
                                <div class="edo-actions__body-desc"><?php the_content(); ?></div>
                                <div class="edo-actions__body-button">
                                    <button class="btn main__btn modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-buttonid="<?php the_field('edo-stock-bitrix'); ?>">Подробнее</button>
                                </div>
                            </div>
                        </div>
                <?php }
                } else {
                    echo "Пока ничего нет :(";
                } wp_reset_postdata(); ?>


            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>