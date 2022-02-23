<?php get_header(); ?>
    <!-- Content Section -->
    <section class="center-align">

        <!-- Caption -->
        <div class="title-page">
            <h2><?php wp_title("", true); ?></h2>

        </div>

        <!-- -->
        <div class="dotted-line"></div>

        <!-- Blog Single -->
        <article class="blog-single">
            <?php  if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php if(get_the_post_thumbnail($post->ID,'post-medium-thumba')) : ?>
            <div class="img">
                <div class="img-bord">
                    <?php echo get_the_post_thumbnail($post->ID,'post-medium-thumba');?>
                </div>
                <div class="info cf">
                    <span class="time"><?php the_time('j M Y');?></span>
                    <span class="comments"><?php $comments_count = wp_count_comments($post->ID); echo $comments_count->total_comments; ?></span>
                    <span class="by"><?php the_author(); ?></span>
                </div>
                <div class="wave"></div>
            </div>
            <?php endif; ?>
            <div class="story">
                <?php the_content();?>
                <?php wp_link_pages(); ?>
            </div>

            <!-- -->
            <div class="dotted-line first"></div>

            <?php endwhile;  endif; ?>

            <?php comments_template();?>

        </article>

    </section>
<?php get_footer(); ?>