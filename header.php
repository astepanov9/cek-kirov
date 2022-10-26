<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
    <meta name="yandex-verification" content="3bdfe5a2e65e7cca" />
</head>
<body>
    <header>
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-1 col-lg-2 col-6 header__logo">
                        <div class="header__logo-body">
                        <?php
                        if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                            }
                        ?>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-2 header__menu">
                        <div class="header__menu-body">
                            <?php
	                            wp_nav_menu("menu=Header");
                            ?>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-5 header__contacts">
                        <a href="tel:+78332203705" class="btn"><i class="fa fa-phone" aria-hidden="true"></i> (8332) 20-37-05</a>
                    </div>
                    <div class="col-6 header__mobile">
                        <div class="header__mobile-body">
                            <a href="#" class="header__mobile-burger">
                                <span class="header__btn-line"></span>
                            </a>
                            <nav>
                                <?php
	                                wp_nav_menu("menu=Mobile menu");
                                ?>
                                <div class="header__mobile-contacts">
                                    <a href="tel:+78332203705"><i class="fa fa-phone" aria-hidden="true"></i></a>
                                    <a href="https://t.me/+79229955159"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                                    <a href="https://vk.com/cek43"><i class="fa fa-vk" aria-hidden="true"></i></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
        <div class="header__bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 header__bottom-left wow fadeIn" data-wow-delay="0.2s">
                        <div class="header__left-body">
                            <div class="header__subtitle">30 лет опыта и доверия</div>
                            <div class="header__title">Услуги для бизнеса и предпринимателей</div>
                            <div class="header__line"></div>
                            <div class="header__desc">От электронной отчетности, подписей и ЭДО до комплексной автоматизации торговли</div>
                            <div class="header__buttons">
                                <button class="btn header__btn modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-buttonid="Проконсультироваться">Проконсультироваться</button>
                                <button class="btn header__btn border-btn modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-buttonid="Заказать выезд">Заказать выезд</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 header__bottom-right wow fadeIn" data-wow-delay="0.2s">
                        <div class="header__right-body">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/pixel.png" alt="pixel">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>