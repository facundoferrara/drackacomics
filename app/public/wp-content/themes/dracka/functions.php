<?php

function dracka_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
    register_nav_menus([
        'primary' => 'Primary Menu',
    ]);
}

add_action('after_setup_theme', 'dracka_setup');

function dracka_enqueue_assets()
{
    wp_enqueue_style(
        'dracka-style',
        get_stylesheet_uri(),
        [],
        '0.1'
    );

    wp_enqueue_script(
        'dracka-main',
        get_template_directory_uri() . '/js/main.js',
        [],
        '0.1',
        true
    );
}
add_action('wp_enqueue_scripts', 'dracka_enqueue_assets');

function dracka_register_menus()
{
    register_nav_menus([
        'primary' => 'Primary Menu',
        'social'  => 'Social Menu',
    ]);
}
add_action('after_setup_theme', 'dracka_register_menus');

function dracka_social_icons($item_output, $item, $depth, $args)
{
    if ($args->theme_location !== 'social') return $item_output;

    $url = $item->url;
    $icon = '';

    // Map domain patterns to icon names
    $social_platforms = [
        'instagram.com' => 'instagram',
        'x.com'         => 'x',
        'twitter.com'   => 'x',
        'youtube.com'   => 'youtube',
        'patreon.com'   => 'patreon',
    ];

    foreach ($social_platforms as $domain => $icon_name) {
        if (strpos($url, $domain) !== false) {
            $icon = dracka_get_svg($icon_name);
            break;
        }
    }

    // Reemplaza todo el contenido del link con el SVG
    return '<a href="' . esc_url($url) . '" target="_blank" rel="noopener noreferrer" class="menu-link">' . $icon . '</a>';
}
add_filter('walker_nav_menu_start_el', 'dracka_social_icons', 10, 4);

require get_template_directory() . '/inc/svg-icons.php';
