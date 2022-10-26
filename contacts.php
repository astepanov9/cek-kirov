<?php
/*
Template Name: Контакты
*/
?>

<?php get_header(); ?>

<main>
    <?php echo breadcrumb(' / '); ?>
    <section class="page-contacts wow fadeIn" data-wow-delay="0.2s" id="contacts">
        <h2 class="page-contacts__title"><?php single_post_title(); ?></h2>
        <div class="contacts__info">
            <div class="container">
                <div class="row contacts__body">
                    <div class="col-lg-6 col-12 contacts__left">
                        <div class="contacts__title">
                            <h2>Как нас найти</h2>
                        </div>
                        <div class="contacts__us">
                            <p><b>Адрес:</b> <a href="https://yandex.ru/maps/-/CCUJFMXK8A">610017, г.Киров, Октябрьский проспект, д.104, оф.705</a> </p>
                            <p><b>Режим работы:</b> пн-чт - 09:00-18:00, пт - 09:00-17:00, сб-вс - выходные дни</p>
                            <p><b>Email:</b> <a href="mailto:kirov@cek.ru">kirov@cek.ru</a></p>
                            <p><b>Телефон:</b> <a href="tel:+78332203705">(8332) 20-37-05</a></p>
                        </div>
                        <div class="contacts__social">
                            <a href="tel:+78332203705"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            <a href="https://t.me/+79229955159"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                            <a href="https://vk.com/cek43"><i class="fa fa-vk" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 contacts__right">
                        <div class="contacts__title">
                            <h2>Заказать обратный звонок</h2>
                        </div>
                        <div class="contacts__form" id="feedbackForm">
                            <?php echo do_shortcode('[contact-form-7 id="86" title="Форма обратной связи"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contacts__map wow fadeIn" data-wow-delay="0.2s">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A224e7eb830273e7e905d5099b542ff36514bf7999f8c88f3f7ead30c9377fce4&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
        </div>
    </section>
</main>

<?php get_footer(); ?>