<?php
/**
 * Plugin Name: Elementor Custom Widgets
 * Description: Elementor custom widgets 
 * Version:     1.0.0
 * Author:      Dheeraj
 */
if (!defined('ABSPATH')) {
    exit;
}
function add_elementor_widget_categories($elements_manager)
{
    $elements_manager->add_category(
        'custom-category',
        [
            'title' => esc_html__('Custom Category', 'textdomain'),
        ]
    );
}
add_action('elementor/elements/categories_registered', 'add_elementor_widget_categories');

function register_elementor_custom_widgets($widgets_manager)
{
    require_once(__DIR__ . '/widgets/card-widget.php');
    $widgets_manager->register(new \Card_Widget());

    require_once(__DIR__ . '/widgets/login-widget.php');
    $widgets_manager->register(new \Login_Widget());
}
add_action('elementor/widgets/register', 'register_elementor_custom_widgets');