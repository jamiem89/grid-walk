<footer class="container site-footer">
    <div class="site-footer__grid">
        <h5 class="site-logo"><a href="/">Grid Walk</a></h5>
        <?php wp_nav_menu(array(
            'theme_location' => 'footerMenu',
            'menu_class' => 'site-footer__menu',
            'container' => ''
        )); ?>
        <!-- <li><a href="#">List item one</a></li>
        <li><a href="#">List item two</a></li>
        <li><a href="#">List item three</a></li> -->
        <?php wp_nav_menu(array(
            'theme_location' => 'footerMenuLegal',
            'menu_class' => 'site-footer__menu',
            'container' => ''
        )); ?>
        <div class="site-footer__legal">
            <p class="text-small">&copy; <?php echo date('Y'); ?> Grid Walk.</p>
        </div>
    </div>

</footer>
<?php wp_footer(); ?>
</div>
</body>

</html>