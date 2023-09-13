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
                            echo get_parent_theme_file_uri('assets/images/icons8-placeholder-96.png');
                        } else if ($item->title === 'Location de salles') {
                            echo get_parent_theme_file_uri('assets/images/icons8-placeholder-96.png');
                        } else {
                            echo get_parent_theme_file_uri('assets/images/icons8-placeholder-96.png');
                        }
                    ?>
                ">
            </div>
            <span class="label"> <?= $item->title; ?></span>
        </a>
        <?php }?>
    </nav>
</section>
<section>
    <section>
        <h2>Actualités</h2>
        <?php
            $latest_posts = get_posts(array(
                    'post_type' => 'post',
                'posts_per_page' => 1,
            ));
            if ($latest_posts) {
                foreach ($latest_posts as $post) {
                    setup_postdata($post); ?>
        <article>
            <header>
                <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('custom-size', 200, 100, true);
                    }
                ?>
            </header>
            <section>
                <h3><?php the_title(); ?></h3>
                <p><?php the_excerpt(); ?></p>
            </section>
            <footer>
                <a href="<?php the_permalink(); ?>">Lire la suite</a>
            </footer>
        </article>
               <?php }
                wp_reset_postdata();
            }

        ?>
    </section>
    <section>
        <h2>Agenda</h2>
        <?php $events = get_em_events();
        var_dump($events);?>
        <ul>
            <li>Event</li>
        </ul>
    </section>
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

