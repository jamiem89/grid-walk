<?php get_template_part('parts/global/header');
get_template_part('parts/component/hero');
?>

<?php
$latestLiveries = new WP_Query(array(
    'post_type' => 'livery',
    'posts_per_page' => 6,
));

if ($latestLiveries) { ?>

    <section class="container card-grid section-spacer">

        <div class="card-grid__header card-grid__header-bg card-grid__header-bg--clock">
            <h3 class="h2">Latest liveries</h3>
            <!-- To add - days since last post -->
            <!-- <p class="text-small">– Last updated:  days ago.</p> -->
        </div>
        <div class="card-grid__grid">

        <?php  while ($latestLiveries->have_posts()) {
            $latestLiveries->the_post();

            get_template_part('parts/component/livery-card');
            wp_reset_postdata();

        } ?>

        </div>

        <div class="card-grid__footer card-grid__header-bg card-grid__header-bg--clock">
            <a href="<?php echo get_post_type_archive_link('livery'); ?>" class="btn">View all</a>
            <?php

            $count = wp_count_posts( 'livery' )->publish;

            if($count) { ?>
                <p class="text-small">– Total liveries: <?php echo $count;?>.</p>
            <?php } ?>


        </div>

    </section>

<?php }
wp_reset_postdata();
?>

<?php
$latestNews = new WP_Query(array(
    'posts_per_page' => 4,
));

if ($latestNews) { ?>

    <section class="latest-news bg-light">
        <div class="container">
            <div class="latest-news__header">
                <h3 class="h2">Latest news</h3>
                <p class="text-small">– Last update: 32 days ago.</p>
            </div>
            <div class="latest-news__grid">

                <?php while($latestNews->have_posts()) {
                    $latestNews->the_post();
                    get_template_part('parts/component/news-card');
                    wp_reset_postdata();
                } ?>
            </div>

            <div class="latest-news__footer">
                <?php
                $count = wp_count_posts( 'post' )->publish;
                ?>
                <a href="<?php echo get_post_type_archive_link('post'); ?>" class="btn btn--dark">View all</a>
                <p class="text-small">– Total articles: <?php echo $count;?>.</p>
            </div>
        </div>
    </section>
<?php } ?>


<?php get_template_part('parts/global/footer'); ?>