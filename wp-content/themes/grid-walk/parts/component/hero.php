<section class="container homepage-hero section-spacer">
    <picture class="homepage-hero__img">
        <?php
            $image = get_field('hero_image');

            $mob = $image['sizes'][ 'home-hero-image--mob' ];
            $desktop = $image['sizes'][ 'home-hero-image' ];
        ?>
        <source srcset="<?php echo esc_url($mob); ?>" media="(max-width: 640px)" />
        <img src="<?php echo esc_url($desktop); ?>" alt="<?php echo $image['alt'];?>">
    </picture>
    <div class="homepage-hero__content">
        <h2 class="homepage-hero__title h1"><?php the_field('hero_title');?></h2>
        <p><?php the_field('hero_text'); ?></p>
        <?php if(get_field('enable_button')) { ?>
            <div class="homepage-hero__btn-contain">
                <a href="<?php the_field('hero_button_location');?>" class="btn btn--fill"><?php the_field('hero_button_text');?></a>
            </div>
        <?php } ?>
    </div>
</section>