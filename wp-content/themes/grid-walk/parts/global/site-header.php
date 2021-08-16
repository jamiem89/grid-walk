<div class="wrapper">
<div class="container">

    <header class="site-header">
        <h1 class="site-logo"><a href="<?php echo site_url(); ?>">Grid Walk</a></h1>

        <nav class="site-header__menu" id="menuBlock">
            <button class="site-header__trigger" id="menuTrigger">Open menu</button>
            <?php wp_nav_menu(array(
                'theme_location' => 'headerMenu',
                'menu_class' => 'site-header__menu-items',
                'menu_id' => 'menuBlock',
                'container' => ''
            )); ?>
        </nav>
    </header>

</div>