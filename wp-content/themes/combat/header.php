<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <? wp_head(); ?>
    <title>COMBAT</title>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__top">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/logo-header.svg" alt="Логотип 'Комбат' ">
                    <nav class="menu">
                        <ul class="menu__items">
                            <li class="menu__item"><a href="#" class="menu__link">Услуги</a></li>
                            <li class="menu__item"><a href="#" class="menu__link">Арсенал</a></li>
                            <li class="menu__item"><a href="#" class="menu__link">Контакты</a></li>
                            <li class="menu__item"><a href="#" class="menu__link">Галерея</a></li>
                            <li class="menu__item"><a href="#" class="menu__link">Новости</a></li>
                        </ul>
                    </nav>
                    <div class="menu__contacts">
                        <a class="menu__phone" href="tel:<? the_field('phone-inner'); ?>"><? the_field('phone'); ?></a>
                        <a class="menu__email" href="<? the_field('email'); ?>"><? the_field('email'); ?></a>
                    </div>
                    <button class="menu__btn">
                        <span></span>
                    </button>
                </div>
                <div class="header__content">
                    <h1 class="header__title"><span><? the_field('header-title-blue'); ?></span> <? the_field('header-title-black'); ?></h1>
                    <p class="header__description"><? the_field('header-text'); ?></p>
                    <a href="" class="btn-link">НАШИ ПЛОЩАДКИ</a>
                </div>
            </div>
        </div>
    </header>