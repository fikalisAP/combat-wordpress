<?php get_header(); ?>
<!-- Content Section -->
<section class="piece__of__news">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php if (get_the_post_thumbnail($post->ID, 'post-medium-thumba')) : ?>

                <?php endif; ?>
                <p class="news__title">
                    <span><?php wp_title("", true); ?></span>
                </p>
                <div class="news__data"><?php the_date('n F Y'); ?></div>
                <div class="news__photo">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="news__description text__news">
                    <?php the_content(); ?>
                </div>
        <?php endwhile;
        endif; ?>
    </div>
</section>
<?php get_footer(); ?>