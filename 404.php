<?php get_header(); ?>

<section class="error">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="error__title">
                    <h2>Ошибка 404</h2>
                </div>
                <div class="error__img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/404.jpg" alt="404">
                </div>
                <div class="error__desc">
                    <p>Запрошенная страница недоступна.</p>
                    <p>Возможно, она была удалена или её адрес был указан неверно.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>