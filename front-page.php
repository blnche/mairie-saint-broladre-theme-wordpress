<?php get_header() ?>
<h1><?php esc_attr(the_title()); ?></h1>
<?php $menuItems = getNavigationMenu();?>
<section class="mairie-menu-container">
    <nav class="mairie-menu">
        <?php foreach($menuItems as $item) {?>
        <a href=" <?= $item->url; ?> ">
            <div class="borders"></div>
            <div class="svg-container">
                <img src="
                    <?php
                        if ($item->title === 'Conseil Municipal') {
                            echo get_parent_theme_file_uri('assets/images/icons8-key.svg');
                        } else if ($item->title === 'Location de salles') {
                            echo get_parent_theme_file_uri('assets/images/keys.png');
                        } else {
                            echo get_parent_theme_file_uri('assets/images/key.png');
                        }
                    ?>
                ">
            </div>
            <span class="label"> <?= $item->title; ?></span>
        </a>
        <?php }?>
    </nav>
</section>
<?php
    //wp_nav_menu(
      //  array(
        //    'theme_location' => 'home',
          //  'items_wrap' => '<ul id="" class="">%3$s</ul>'
        //)
    //);
?>
<?php get_footer(); ?>

