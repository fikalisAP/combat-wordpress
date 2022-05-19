<?php
/*
    Template Name: arsenal
*/
?>
<?
get_header();
?>
<section class="arsenal">
    <div class="container">
        <h2 class="title">Арсенал</h2>
        <?php
        $args = array('post_type' => 'arsenal', 'posts_per_page' => 50);
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="arsenal__block">
                    <div class="arsenal__image">
                        <div class="circle__arsenal"></div>
                        <div class="arsenal__photo"><img src="<? echo get_the_post_thumbnail_url(null,'full'); ?>" alt="ak-12" class="guns"></div>
                    </div>
                    <div class="arsenal__text">
                        <div class="rectangle__arsenal"></div>
                        <div class="arsenal__gun__title">
                            <h2 class="title"><?php the_title(); ?></h2>
                        </div>
                        <div class="arsenal__gun__text">
                            <p><?php the_content(); ?></p>
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