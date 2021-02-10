<?php


function elevated_menus() {
    $locations = array(
        "primary" => "Desktop Primary Left Sidebar",
        "footer" => "Footer Menu"
    );

    register_nav_menus($locations);
}

add_action('init', 'elevated_menus');

function elevated_theme_support() {
    // Adds dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme','elevated_theme_support');

function elevated_register_styles() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('elevated_style', get_stylesheet_directory_uri(). "/style.css", array('elevated_bootstrap'), $version, "all");
    wp_enqueue_style('elevated_bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css", array(), '5.0.0', "all");    
}

add_action('wp_enqueue_scripts', 'elevated_register_styles');

function elevated_register_scripts() {
    wp_enqueue_script('elevated_main', get_stylesheet_directory_uri(). "/assets/js/main.js", array('elevated_jquery'), '1.0.0', true);
    wp_enqueue_script('elevated_jquery', get_stylesheet_directory_uri(). "/assets/js/jquery/jquery.min.js", array(), '3.5.1', true);
    wp_enqueue_script('elevated_bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js", array(), '5.0.0', true);
    wp_enqueue_script('elevated_pillboxes', get_stylesheet_directory_uri(). "/assets/js/pillboxes.js", array('elevated_jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'elevated_register_scripts');

?>