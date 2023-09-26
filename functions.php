<?php

        /**
         * Make theme available for translation.
         * Translations can be placed in the /languages/ directory.
         */
        load_theme_textdomain( 'mairie', get_template_directory() . '/languages' );

        /**
         * Add default posts and comments RSS feed links to <head>.
         */
        add_theme_support( 'automatic-feed-links' );

        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'post-formats',
            array(
                'link',
                'aside',
                'gallery',
                'image',
                'quote',
                'status',
                'video',
                'audio',
                'chat',
            )
        );
        add_theme_support( 'html5',
            array(
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
                'navigation-widgets',
            )
        );
        add_theme_support( 'editor-styles' );
        add_theme_support( 'responsive-embeds' );
        add_theme_support('custom-logo');

function register_my_menus()
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

function register_pages_settings() {

}
add_action('init', 'register_pages_settings');

/*function mairie_custom_header_setup() {
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
add_action('after_setup_theme', 'mairie_custom_header_setup', 1);*/

// Register a custom setting in the Theme Customizer
/*function theme_customizer_register($wp_customize) {
    $wp_customize->add_setting('display_header_text', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('display_header_text', array(
        'label' => __('Custom Header Text', 'your-theme-text-domain'),
        'section' => 'title_tagline',
        'type' => 'text',
    ));
}
add_action('customize_register', 'theme_customizer_register');*/
function getNavigationMenu()
{
    $items = wp_get_nav_menu_items('Menu de la page d\'accueil');
    return $items;
}

function add_theme_scripts() {
    wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js');
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');

/*function theme_name_widgets_init() {
    register_sidebar(array(
        'name' => __('Sidebar Name', 'text-domain'),
        'id' => 'sidebar-id',
        'description' => __('Description of the sidebar', 'text-domain'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'theme_name_widgets_init');*/

?>