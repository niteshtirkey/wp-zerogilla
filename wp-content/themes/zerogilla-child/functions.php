<?php
// Zerogilla Child Theme Functions

// Enqueue styles and scripts
function zerogilla_child_enqueue_assets() {
    // Main stylesheet
    wp_enqueue_style('zerogilla-child-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');
    
    // Main JavaScript
    wp_enqueue_script('zerogilla-child-js', get_template_directory_uri() . '/assets/js/all.js', array('jquery'), '1.0.0', true);
    
    // Test jQuery
    wp_enqueue_script('test-jquery', get_template_directory_uri() . '/test-jquery.js', array('jquery'), '1.0.0', true);
    
    // WordPress default styles
    wp_enqueue_style('zerogilla-child-wp-style', get_stylesheet_uri(), array('zerogilla-child-style'), '1.0.0');
}
add_action('wp_enqueue_scripts', 'zerogilla_child_enqueue_assets');

// Theme support
function zerogilla_child_theme_support() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'zerogilla_child_theme_support');

// Register menus
function zerogilla_child_menus() {
    register_nav_menus(array(
        'primary' => 'Primary Menu',
        'footer' => 'Footer Menu'
    ));
}
add_action('init', 'zerogilla_child_menus');

// Enable WordPress admin bar
add_action('after_setup_theme', 'show_admin_bar');
?>
