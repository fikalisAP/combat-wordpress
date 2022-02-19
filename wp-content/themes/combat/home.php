<?php
/*
Template Name: home
*/
?>

<?
get_header();
?>

<div class="header__content">
    <div class="container">
        <h1 class="header__title"><span><? the_field('header-title-blue'); ?></span> <? the_field('header-title-black'); ?></h1>
        <p class="header__description"><? the_field('header-text'); ?></p>
        <a href="" class="btn-link">НАШИ ПЛОЩАДКИ</a>
    </div>
</div>
<section class="benefits">
    <div class="container">
        <div class="benefits__inner">
            <?php
            global $post;
            $query = new WP_Query([
                'posts_per_page' => 5,
                'category_name' => 'benefits',
            ]);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
            ?>
                    <div class="benefits__item">
                        <?php the_post_thumbnail(
                            array(40, 40),
                            array(
                                'class' => "benefits__item-images"
                            )
                        ); ?>
                        <h3 class="benefits__item-title"><?php the_title(); ?></h3>
                        <p class="benefits__item-text"><?php the_content(); ?></p>
                    </div>
            <?php
                }
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <h2 class="title">Выберите игру для себя</h2>
        <div class="services__content">
            <?php
            global $post;
            $query = new WP_Query([
                'posts_per_page' => 3,
                'category_name' => 'services',
            ]);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
            ?>
                    <div class="services__item">
                        <h4 class="services__item-title"><?php the_title(); ?></h4>
                        <p class="services__item-description"><?php the_content(); ?></p>
                        <a class="services__item-button" href="#">Узнать подробнее</a>
                    </div>
            <?php
                }
            }
            wp_reset_postdata();
            ?>
        </div>
</section>
<section class="reviews">
    <div class="container">
        <div class="reviews__title">
            Отзывы о lasertag
        </div>
        <div class="reviews__slider">
            <div class="reviews__slider-item">
                Хочу выразить благодарность администратору Екатерине. Очень внимательный сотрудник, ответственно
                выполняет свою работу. Смогла организовать моих шумных детей, что сделать сложно. Остались довольны
                проведенным праздником. Спасибо, развлекательный центр Cosmozar.
            </div>
            <div class="reviews__slider-item">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, numquam consequuntur impedit,
                laborum autem totam pariatur delectus quod saepe, enim voluptates culpa cum eveniet incidunt iure
                nobis quasi fugiat? Quam.
            </div>
            <div class="reviews__slider-item">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta aspernatur temporibus nihil
                consequatur repellendus. Placeat molestias alias, ex error odit fugit nam accusantium autem quis
                iste animi ab provident expedita voluptatibus id? Quam fugit et tempore laudantium? Quaerat, nisi?
                Aliquid?
            </div>
            <div class="reviews__slider-item">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis minima tempora perspiciatis
                dolorum est cumque voluptate, nostrum, veritatis eos dolores beatae possimus fugit nisi adipisci
                necessitatibus atque. Ullam inventore qui quis esse ipsa libero, dignissimos beatae alias quisquam
                necessitatibus quae fuga repellat provident cumque illo eveniet illum tempora reprehenderit quidem.
            </div>
        </div>
    </div>
</section>

<section class="gallery">
    <div class="container">
        <h2 class="title">Яркие моменты</h2>
        <div class="gallery__inner">
            <a href="<?php bloginfo('template_url'); ?>/assets/images/photo1.jpg" class="gallert__inner-item" data-fancybox="images">
                <img class="gallert__inner-img" src="<?php bloginfo('template_url'); ?>/assets/images/photo1.jpg" alt="">
            </a>
            <a href="<?php bloginfo('template_url'); ?>/assets/images/photo2.jpg" class="gallert__inner-item" data-fancybox="images">
                <img class="gallert__inner-img" src="<?php bloginfo('template_url'); ?>/assets/images/photo2.jpg" alt="">
            </a>
            <a href="<?php bloginfo('template_url'); ?>/assets/images/photo3.jpg" class="gallert__inner-item" data-fancybox="images">
                <img class="gallert__inner-img" src="<?php bloginfo('template_url'); ?>/assets/images/photo3.jpg" alt="">
            </a>
            <a href="<?php bloginfo('template_url'); ?>/assets/images/photo4.jpg" class="gallert__inner-item" data-fancybox="images">
                <img class="gallert__inner-img" src="<?php bloginfo('template_url'); ?>/assets/images/photo4.jpg" alt="">
            </a>
            <a href="<?php bloginfo('template_url'); ?>/assets/images/photo5.jpg" class="gallert__inner-item" data-fancybox="images">
                <img class="gallert__inner-img" src="<?php bloginfo('template_url'); ?>/assets/images/photo5.jpg" alt="">
            </a>
            <a href="<?php bloginfo('template_url'); ?>/assets/images/photo6.jpg" class="gallert__inner-item" data-fancybox="images">
                <img class="gallert__inner-img" src="<?php bloginfo('template_url'); ?>/assets/images/photo6.jpg" alt="">
            </a>
            <a href="<?php bloginfo('template_url'); ?>/assets/images/photo7.jpg" class="gallert__inner-item" data-fancybox="images">
                <img class="gallert__inner-img" src="<?php bloginfo('template_url'); ?>/assets/images/photo7.jpg" alt="">
            </a>
            <a href="<?php bloginfo('template_url'); ?>/assets/images/photo8.jpg" class="gallert__inner-item" data-fancybox="images">
                <img class="gallert__inner-img" src="<?php bloginfo('template_url'); ?>/assets/images/photo8.jpg" alt="">
            </a>
            <a href="<?php bloginfo('template_url'); ?>/assets/images/photo9.jpg" class="gallert__inner-item" data-fancybox="images">
                <img class="gallert__inner-img" src="<?php bloginfo('template_url'); ?>/assets/images/photo9.jpg" alt="">
            </a>
            <a href="<?php bloginfo('template_url'); ?>/assets/images/photo10.jpg" class="gallert__inner-item" data-fancybox="images">
                <img class="gallert__inner-img" src="<?php bloginfo('template_url'); ?>/assets/images/photo10.jpg" alt="">
            </a>
            <a href="<?php bloginfo('template_url'); ?>/assets/images/photo11.jpg" class="gallert__inner-item" data-fancybox="images">
                <img class="gallert__inner-img" src="<?php bloginfo('template_url'); ?>/assets/images/photo11.jpg" alt="">
            </a>
        </div>
    </div>
</section>

<section class="news">
    <div class="container">
        <p class="pre-title">ПРЕСС-ЦЕНТР</p>
        <h2 class="title">Новости лазертаг-индустрии</h2>
        <a href="" class="news__item">
            <div class="news__content">
                <div class="news__data">10 декабря 2021</div>
                <p class="news__title">
                    <span>Будущее лазертага уже здесь: встречайте – «Пульсар»!</span>
                </p>
                <div class="news__description">Недавно мы сообщили, что готовы показать миру новинку – тагер под
                    названием «Пульсар». Сегодня вы, наконец, увидите его в коротком тизере.
                </div>
                <div class="news__bottom">
                    <div class="news__reviews">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/eye.svg" alt="">
                        <span>Просмотров 0</span>
                    </div>
                    <img class="news__link" src="<?php bloginfo('template_url'); ?>/assets/images/arrow-news.svg" alt="">
                </div>
            </div>
            <div class="news__wrapper-img">
                <img class="news__images" src="<?php bloginfo('template_url'); ?>/assets/images/photo1.jpg" alt="">
            </div>
        </a>
        <a href="" class="news__item">
            <div class="news__content">
                <div class="news__data">10 декабря 2021</div>
                <p class="news__title">
                    <span>Будущее лазертага уже здесь: встречайте – «Пульсар»!</span>
                </p>
                <div class="news__description">Недавно мы сообщили, что готовы показать миру новинку – тагер под
                    названием «Пульсар». Сегодня вы, наконец, увидите его в коротком тизере.
                </div>
                <div class="news__bottom">
                    <div class="news__reviews">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/eye.svg" alt="">
                        <span>Просмотров 0</span>
                    </div>
                    <img class="news__link" src="<?php bloginfo('template_url'); ?>/assets/images/arrow-news.svg" alt="">
                </div>
            </div>
            <div class="news__wrapper-img">
                <img class="news__images" src="<?php bloginfo('template_url'); ?>/assets/images/news.jpg" alt="">
            </div>
        </a>
        <a class="btn-link news__btn" href="">Все новости</a>
    </div>
</section>
<?
get_footer();
wp_footer();
?>