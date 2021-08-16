<div class="news-card">
    <div class="news-card__img">
        <a href="<?php the_permalink();?>" class="block-link">
            <?php if(get_the_post_thumbnail()) { ?>

                <?php the_post_thumbnail('news-thumb'); ?>

            <?php } else { ?>

                <img src="<?php echo get_template_directory_uri('');?>/img/news-placeholder.jpg" alt="">

           <?php } ?>
        </a>
    </div>
    <div class="news-card__content">
        <span class="text-small"><?php the_time('d/m/Y'); ?></span>
        <h4 class="h3"><a href="#<?php the_permalink(); ?>"><?php the_title();?></a></h4>
        <p>
            <?php if(has_excerpt()) {
                echo get_the_excerpt();
            } else {
                echo wp_trim_words(get_the_content(), 20);
            }?>
        </p>
    </div>
    <a href="<?php the_permalink();?>" class="btn btn--fill btn--fill-light">Read article</a>
</div>