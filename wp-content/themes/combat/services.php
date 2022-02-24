<?php
/*
    Template Name: services
*/
?>
<?
get_header();
?>
<section class="services-pages">
    <div class="container">
        <h2 class="title">Услуги</h2>
        <?php
        $args = array('post_type' => 'services', 'posts_per_page' => 10);
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="services-pages__item">
                    <div class="services-pages__images">
                        <?php the_post_thumbnail(
                            array(40, 40),
                            array(
                                'class' => "benefits__item-images"
                            )
                        ); ?>
                    </div>
                    <div class="services-pages__content">
                        <p class="services-pages__pretitle">Абобус</p>
                        <h3 class="services-pages__title"><?php the_title(); ?></h3>
                        <div class="services-pages__benefits">
                            <div class="services-pages__benefits-box">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/smile.svg" alt="">
                                <p>хорошие эмоции</p>
                            </div>
                            <div class="services-pages__benefits-box">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/clock.svg" alt="">
                                <p>скорость</p>
                            </div>
                            <div class="services-pages__benefits-box">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/people.svg" alt="">
                                <p>8-10 человек</p>
                            </div>
                        </div>
                        <p class="services-pages__description">
                            <?php echo wp_strip_all_tags(get_the_excerpt(), true);;  ?> aa
                        </p>
                        <div class="services-pages__buttons">
                            <button class="services-pages__btn-book">Забронировать</button>
                            <a class="services-pages__btn-link" href="">Посмотреть площадки</a>
                        </div>
                    </div>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php endwhile;
        else : ?>
            <p><?php _e('Услуги не найдены'); ?></p>
        <?php endif; ?>

    </div>
</section>
<?
get_footer();
wp_footer();
?>