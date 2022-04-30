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
            $args = array('post_type' => 'benefits', 'posts_per_page' => 4);
            $the_query = new WP_Query($args)
            ?>
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
                    <?php wp_reset_postdata(); ?>
                <?php endwhile;
            else : ?>
                <p><?php _e('Услуги не найдены'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <h2 class="title">Выберите игру для себя</h2>
        <div class="services__content">
            <?php
            $args = array('post_type' => 'services', 'posts_per_page' => 3);
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="services__item" style="background-image: url(<? echo get_the_post_thumbnail_url( '' ,'thumbnail' ); ?>)">
                        <h4 class="services__item-title"><?php the_title(); ?></h4>
                        <p class="services__item-description"><?php the_content(); ?></p>
                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php endwhile;
            else : ?>
                <p><?php _e('Услуги не найдены'); ?></p>
            <?php endif; ?>
        </div>
        <div class="services__tactical">
            <div class="services__tactical-inner">
                <div class="services__tactical-title">Тактические игры</div>
                <div class="services__tactical-text">это отличный способ провести время, день рождения, корпоратив,
                    выпускной, мальчишник, девичник и любой праздник. Приходите и убедитесь в этом! девичник и любой
                    праздник. Приходите и убедитесь в этом!</div>
            </div>
            <a class="btn-link" href="">Наши площадки</a>
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

        <?php
        global $post;
        $query = new WP_Query([
            'posts_per_page' => 1,
            'category_name' => 'gallery',
        ]);
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
        ?>
                <h2 class="title"> <?php the_title(); ?></h2>
                <?php the_content(); ?>

        <?php
            }
        }
        wp_reset_postdata();
        ?>
    </div>
</section>

<section class="news">
    <div class="container">
        <p class="pre-title">ПРЕСС-ЦЕНТР</p>
        <h2 class="title">Новости лазертаг-индустрии</h2>
        <?php
        global $post;
        $query = new WP_Query([
            'posts_per_page' => 2,
            'category_name' => 'news',
        ]);
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
        ?>
                <a href="<?php the_permalink(); ?>" class="news__item">
                    <div class="news__content">
                        <div class="news__data"><?php the_date('n F Y'); ?></div>
                        <p class="news__title">
                            <span><?php the_title(); ?></span>
                        </p>
                        <div class="news__description">
                            <?php echo wp_strip_all_tags(get_the_excerpt(), true);;  ?>
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
                        <?php the_post_thumbnail(
                            array(540, 540),
                            array(
                                'class' => "news__images"
                            )
                        ); ?>
                    </div>
                </a>
        <?php
            }
        }
        wp_reset_postdata();
        ?>
        <a class="btn-link news__btn" href="<?php echo get_page_link(128); ?>">Все новости</a>
    </div>
</section>
<?
get_footer();
wp_footer();
?>