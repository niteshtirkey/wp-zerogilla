<?php
function zerogilla_child_enqueue_styles() {
    wp_enqueue_style('child-main-style', get_stylesheet_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script('child-main-js', get_stylesheet_directory_uri() . '/assets/js/all.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'zerogilla_child_enqueue_styles');
?>
