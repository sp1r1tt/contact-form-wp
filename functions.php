<?php
function test_page_scripts() {
    wp_enqueue_style('test-page-style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_script('test-page-script', get_template_directory_uri() . '/js/script.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'test_page_scripts');

function register_test_page_menu() {
    register_nav_menu('landing-menu', __('Landing Page Menu', 'test-page'));
}
add_action('after_setup_theme', 'register_test_page_menu');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Настройки лендинга',
        'menu_title' => 'Настройки лендинга',
        'menu_slug'  => 'test-page-settings',
        'capability' => 'edit_posts',
        'redirect'   => false
    ]);
}
?>
