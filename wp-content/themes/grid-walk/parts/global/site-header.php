<header>
    <h1 class="site-logo">
        <a href="<?php echo site_url(); ?>">Grid Walk</a>
    </h1>

    <div class="header-menu">
        <button class="header-menu__trigger">Open</button>

        <div class="header-menu__container">
            <?php wp_nav_menu(array(
                'theme_location' => 'headerMenu'
            )); ?>
            <a href="#" class="header-menu__btn">Log in</a>
        </div>
    </div>


</header>