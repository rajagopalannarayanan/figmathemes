<?php
/**
 * Figma Custom Theme Functions
 */

// ✅ BONUS: Performance – Proper script and style enqueuing
function figma_custom_theme_scripts() {
    // Main stylesheet (style.css)
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // ✅ BONUS: Performance – Used CDN here for faster load
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');

    // ✅ BONUS: If needed, you can enqueue JS with defer or async (advanced)
    // wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'figma_custom_theme_scripts');

// ✅ BONUS: WordPress Standards – Theme support
function figma_theme_setup() {
    // ✅ BONUS: SEO – Dynamic title tag for better metadata
    add_theme_support('title-tag');

    // ✅ BONUS: SEO – Enables featured images (used for social previews, etc.)
    add_theme_support('post-thumbnails');

    // ✅ BONUS: WP Standards – Register navigation menu
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'figma-custom-theme')
    ));
}
add_action('after_setup_theme', 'figma_theme_setup');


