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
    register_nav_menu('footerMenu', 'Footer primary menu');
    register_nav_menu('footerMenuLegal', 'Footer legal menu');

    // Add image sizes
    add_image_size( 'home-hero-image', 1600, 1200, true );
    add_image_size( 'home-hero-image--mob', 1400, 800, true );
    add_image_size( 'livery-thumb', 930, 550, true );
    add_image_size( 'news-thumb', 700, 400, true);

    // Add post thumbnails
    add_theme_support( 'post-thumbnails' );

}

add_action('after_setup_theme', 'gridwalk_features');

// Register custom post types
function gridwalk_post_types() {

    register_post_type('livery', array(
        'has_archive' => true,
        // By default, a CPT only supports title & editor.
        // We can add items, but make sure we include the title and editor.
        'supports' => array(
            'title',
            'editor',
            'excerpt'
        ),
        'rewrite' => array(
            'slug' => 'liveries'
        ),
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Liveries',
            'add_new_item' => 'Add new livery',
            'edit_item' => 'Edit livery',
            'all_items' => 'All liveries',
            'singluar_name' => 'Livery'
        ),
        'menu_icon' => 'dashicons-admin-customizer',
    ));

}

add_action('init','gridwalk_post_types');

?>