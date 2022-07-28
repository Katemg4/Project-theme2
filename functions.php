<?php
/**
 * Theme functions and definitions.
 *
 *
 * @link URL
 *
 * @package WordPress
 * @subpackage happyhealthylife
 * @since happyhealthylife v1.0
 */

// ob_end_flush
remove_action('shutdown', 'wp_ob_end_flush_all', 1);
add_action('shutdown', function () {
    while (@ob_end_flush());
});

// customizer
include_once get_stylesheet_directory() . '/inc/customizer-reg.php';
add_action('customize_register', 'hhl_customizer_registration_all');

// featured img
add_theme_support('post-thumbnails');

// menu
function hhl_menus_init()
{
    register_nav_menus([
        'navbar-menu' => __('Navbar Menu', 'hhl'),
        'footer-menu' => __('Footer Menu', 'hhl'),
    ]);
}

add_action('init', 'hhl_menus_init');

function add_menu_item_classes($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        if (in_array('current-menu-item', $classes)) {
            $classes[] = 'active ' . $args->add_li_class;
        } else {
            $classes[] = $args->add_li_class;
        }
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'add_menu_item_classes', 1, 3);

function add_class_to_all_menu_anchors($atts, $item, $args)
{
    $atts['class'] = $args->add_link_class;
    return $atts;
}

add_filter('nav_menu_link_attributes', 'add_class_to_all_menu_anchors', 10, 3);

// widgets
function hhl_widgets_init()
{
    $shared_args = [
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        'before_widget' => '<div class="widget-copy">',
        'after_widget' => '</div>',
    ];

    register_sidebar(
        array_merge($shared_args, [
            'name' => __('Footer Left', 'hhl'),
            'id' => 'left-foot-sidebar',
            'description' => __(
                'Widgets in this area will be displayed in the left column in the footer.',
                'hhl'
            ),
        ])
    );
    register_sidebar(
        array_merge($shared_args, [
            'name' => __('Footer Right', 'hhl'),
            'id' => 'right-foot-sidebar',
            'description' => __(
                'Widgets in this area will be displayed in the right column in the footer.',
                'hhl'
            ),
        ])
    );
}
add_action('widgets_init', 'hhl_widgets_init');

// function and hook for header files
function hhl_set_external_files()
{
    wp_enqueue_style(
        'assets-common',
        get_stylesheet_directory_uri() . '/css/custom.css',
        [],
        null
    );

    wp_enqueue_style(
        'template-root',
        get_stylesheet_directory_uri() . '/style.css',
        [],
        null
    );

    wp_enqueue_script(
        'assets-bootstrap',
        get_stylesheet_directory_uri() . '/js/bootstrap.bundle.min.js',
        ['assets-jquery'],
        '3.3.6',
        true
    );
    wp_enqueue_script(
        'assets-jquery',
        get_stylesheet_directory_uri() . '/js/jquery-3.6.0.slim.min.js',
        null,
        '3.6.0',
        true
    );
}

add_action('wp_head', 'hhl_set_external_files', 1);

function hhl_get_customizer_css()
{
    ob_start();
    if (get_theme_mod('content_background_color', '') != '') {
        echo 'body {background-color: ' .
            get_theme_mod('content_background_color') .
            '}' .
            "\n\n";
    }
    if (get_theme_mod('sidebar_background_color', '') != '') {
        echo '.sidebar-container {background-color: ' .
            get_theme_mod('sidebar_background_color') .
            '}' .
            "\n\n";
    }
    if (get_theme_mod('footer_background_color', '') != '') {
        echo '.footer-container {background-color: ' .
            get_theme_mod('footer_background_color') .
            '}' .
            "\n\n";
    }

    $css = ob_get_clean();
    return $css;
}
