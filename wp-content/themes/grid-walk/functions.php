<?php

// Enqueue styles passes responsibility to WP to decide where to put the enqueued files
function gridwalk_files(){
    wp_enqueue_style('gridwalk_styles', get_theme_file_uri('/css/main.css'));
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&family=Space+Mono&display=swap');
}

// We use add action to tell WP when to do something. It's a 'hook'
add_action('wp_enqueue_scripts','gridwalk_files');

function gridwalk_features() {
    add_theme_support('title-tag');

    // Custom menus
    register_nav_menu('headerMenu', 'Header menu');
    register_nav_menu('footerMenu', 'Footer menu');

}

add_action('after_setup_theme', 'gridwalk_features');

?>