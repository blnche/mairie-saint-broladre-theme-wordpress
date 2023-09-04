<?php
/**
 * MairieSaintBroladreTheme's functions and definitions
 *
 * @package MairieSaintBroladreTheme
 * @since MairieSaintBroladreTheme 1.0
 */

/**
 * First, let's set the maximum content width based on the theme's
 * design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if ( ! isset( $content_width ) ) {
    $content_width = 800; /* pixels */
}

if ( !function_exists('mairiesaintbroladretheme_setup')) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * @since Twenty Twenty-One 1.0
     *
     * @return void
     */
    function mairiesaintbroladretheme_setup() {
        /**
         * Make theme available for translation.
         * Translations can be placed in the /languages/ directory.
         */
        load_theme_textdomain( 'mairiesaintbroladretheme', get_template_directory() . '/languages' );

        /**
         * Add default posts and comments RSS feed links to <head>.
         */
        add_theme_support( 'automatic-feed-links' );

        /**
         * Enable support for post thumbnails and featured images.
         */
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 1568, 9999 );

        /**
         * Add support for two custom navigation menus.
         */
        register_nav_menus( array(
            'primary'   => __( 'Primary Menu', 'mairiesaintbroladretheme' ),
            'secondary' => __( 'Secondary Menu', 'mairiesaintbroladretheme' )
        ) );

        /**
         * Enable support for the following post formats:
         * link, aside, gallery, image, quote, status, video, audio and chat
         */
        add_theme_support(
            'post-formats',
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

        add_theme_support(
            'html5',
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
    }
}
add_action('after_setup_theme', 'mairiesaintbroladretheme_setup');

function register_my_menus()
{
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'mairiesaintbroladretheme'),
            'secondary' => __('Secondary Menu', 'mairiesaintbroladretheme')
        )
    );
};
add_action('init', 'register_my_menus');
?>