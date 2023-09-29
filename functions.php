<?php
// =================
// = THEME SUPPORT =
// =================
/**
 * Make theme available for translation.
 * Translations can be placed in the /languages/ directory.
 */
load_theme_textdomain( 'mairie', get_template_directory() . '/languages' );

add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', array('link', 'aside', 'gallery', 'image', 'quote', 'status', 'video', 'audio', 'chat',));
add_theme_support( 'html5', array('comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script', 'navigation-widgets'));
add_theme_support( 'editor-styles' );
add_theme_support( 'responsive-embeds' );

// ===============
// == FUNCTIONS ==
// ===============

function register_my_menus() : void
{
    register_nav_menus(
        array(
            'header' => __('Menu du haut de page', 'mairie'),
            'footer' => __('Menu de bas de page', 'mairie'),
            'home' => __('Menu de la page d\'accueil', 'mairie')
        )
    );
};
add_action('init', 'register_my_menus');

function getNavigationMenu()
{
    return wp_get_nav_menu_items('Menu de la page d\'accueil');
}

function theme_mairie_scripts() : void
{
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');
    wp_enqueue_script('light-dark-mode', get_template_directory_uri() . '/assets/js/light-dark-mode.js');
    wp_enqueue_script('menus', get_template_directory_uri() . '/assets/js/menus.js');
}
add_action('wp_enqueue_scripts', 'theme_mairie_scripts');

function mairie_custom_header_setup() : void {
    $args = array(
        'default-text-color' => 'fff',
        'header-text' => true,
        'width' => 900,
        'height' => 250,
        'flex-width' => true,
        'flex-height' => true,
    );
    add_theme_support('custom-header', $args);
}
add_action('after_setup_theme', 'mairie_custom_header_setup', 1);
?>