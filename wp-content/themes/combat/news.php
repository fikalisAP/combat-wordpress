<?php
/*
    Template Name: news
*/
?>
<?
get_header();
?>

<section class="news">
    <div class="container">
        <div class="block__news">
            <p class="pre-title">ПРЕСС-ЦЕНТР</p>
            <h2 class="title">Новости лазертаг-индустрии</h2>
            <?php
            global $post;
            $query = new WP_Query([
                'posts_per_page' => 50,
                'category_name' => 'news',
            ]);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
            ?>
                    <a href="<?php the_permalink();?>" class="news__item">
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
        </div>
    </div>
</section>
<?
get_footer();
wp_footer();
?>