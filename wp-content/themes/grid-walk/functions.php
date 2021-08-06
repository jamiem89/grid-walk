<?php

// Enqueue styles passes responsibility to WP to decide where to put the enqueued files
function gridwalk_files(){
    wp_enqueue_style('gridwalk_styles', get_stylesheet_uri());
}

// We use add action to tell WP when to do something. It's a 'hook'
add_action('wp_enqueue_scripts','gridwalk_files');

?>