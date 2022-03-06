<?php
/*
    Template Name: gallery
*/
?>
<?
get_header();
?>

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

<?
get_footer();
wp_footer();
?>