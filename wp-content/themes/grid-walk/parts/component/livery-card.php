<div class="card-grid__card">
    <?php
    $image = get_field('image');
    $img = $image['sizes']['livery-thumb'];

    $colors = get_field('livery_colours');

    $mainColour = $colors['main_color'];
    $accentOne = $colors['accent_color_1'];
    $enableAccentTwo = $colors['enable_color_2'];
    $accentTwo = $colors['accent_color_2'];
    $enableAccentThree = $colors['enable_color_3'];
    $accentThree = $colors['accent_color_3'];
    $enableAccentFour = $colors['enable_color_4'];
    $accentFour = $colors['accent_color_4'];
    ?>
    <?php if ($image) { ?>
        <picture class="card-grid__card-img">
            <a href="<?php the_permalink(); ?>" class="block-link">
                <img src="<?php echo esc_url($img); ?>" alt="<?php echo $image['alt'];?>">
            </a>
        </picture>
    <?php } ?>
    <div class="card-grid__color-strip">
        <span style="background-color: <?php echo $accentOne; ?>"></span>
        <?php if($enableAccentTwo){ ?>
            <span style="background-color: <?php echo $accentTwo; ?>"></span>
        <?php } ?>
        <?php if($enableAccentThree){ ?>
            <span style="background-color: <?php echo $accentThree; ?>"></span>
        <?php } ?>
        <?php if($enableAccentFour){ ?>
            <span style="background-color: <?php echo $accentFour; ?>"></span>
        <?php } ?>
    </div>
    <div class="card-grid__card-content" style="background-color:<?php echo $mainColour; ?>">
        <h4 class="h3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <ul class="card-grid__card-tags">
            <li><a href="" class="text-small">F1 – 2001</a></li>
        </ul>
        <a href="<?php the_permalink(); ?>" class="text-link">View livery</a>
    </div>
</div>