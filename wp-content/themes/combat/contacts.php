<?php
/*
    Template Name: contacts
*/
?>
<?
get_header();
?>
<section class="contacts__page">
    <div class="container">
        <h1 class="title">Наши контакты</h1>
        <div class="block__contacts">
            <div class="contacts__phone">
                <h2>Телефоны:</h2>
                <a href="tel:79323357702" class="contacts__number">Юрий +79323357702 </a>
                <a href="tel:79223406231" class="contacts__number">Андрей +79223406231 </a>
                <h2 class="social__title">Социальные сети</h2>
                <a href="" class="social__item"><img src="<?php bloginfo('template_url'); ?>/assets/images/social_VK.svg" alt=""></a>
                <a href="" class="social__item"><img src="<?php bloginfo('template_url'); ?>/assets/images/instagram.svg" alt=""></a>
                <a href="" class="social__item"><img src="<?php bloginfo('template_url'); ?>/assets/images/telegram.svg" alt=""></a>
                <a href="" class="social__item"><img src="<?php bloginfo('template_url'); ?>/assets/images/whatsapp.svg" alt=""></a>
            </div>
            <div class="contacts__social">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A61de24b7aef2dbb32e51cd6eb53b9de4a92df0cce7ee7863fa57a61dfedfe0de&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
    </div>
</section>
<?
get_footer();
wp_footer();
?>