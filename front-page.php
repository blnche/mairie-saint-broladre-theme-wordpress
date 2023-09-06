<?php get_header() ?>
<?php
    wp_nav_menu(
        array(
            'theme_location' => 'home',
            'items_wrap' => '<ul id="" class="">%3$s</ul>'
        )
    );
?>
<?php get_footer(); ?>

