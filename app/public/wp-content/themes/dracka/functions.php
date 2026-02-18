<?php

function dracka_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
}

add_action('after_setup_theme', 'dracka_setup');


function dracka_enqueue_assets() {
    wp_enqueue_style(
        'dracka-style',
        get_stylesheet_uri(),
        [],
        '1.0'
    );
}

add_action('wp_enqueue_scripts', 'dracka_enqueue_assets');
