<?php get_header() ?>

<section class="homepage-image-container">
    <img src="<?php header_image(); ?>" width="<?php echo absint(get_custom_header()->width); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name') ); ?>">
</section>
<section class="main-container">
    <section class="menu-homepage-container">
        <?php $menuItems = getNavigationMenu();
        ?>

        <nav class="mairie-menu">
            <?php foreach($menuItems as $item) {
                ?>
                <a href=" <?= $item->url; ?> ">
                    <div class="svg-container">
                        <img src="
                    <?php
                        if ($item->title === 'Restaurant Scolaire') {
                            echo get_parent_theme_file_uri('assets/images/homepage-icons/icons8-cutlery-40.png');
                        } else if ($item->title === "Plan Local d’Urbanisme") {
                            echo get_parent_theme_file_uri('assets/images/homepage-icons/icons8-construction-40.png');
                        } else if ($item->title === "Démarches Administratives") {
                            echo get_parent_theme_file_uri('assets/images/homepage-icons/icons8-administrateur-homme-40.png');
                        } else if ($item->title === "Vivre à Saint-Broladre") {
                            echo get_parent_theme_file_uri('assets/images/homepage-icons/icons8-randonnée-40.png');
                        } else {
                            echo get_parent_theme_file_uri('assets/images/homepage-icons/icons8-full-image-40.png');
                        }
                        ?>
                ">
                    </div>
                    <span class="label"> <?= $item->title; ?></span>
                </a>
            <?php }?>
        </nav>
    </section>

    <section class="news-container">
        <section class="news">
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
                                //the_post_thumbnail();
                            }
                            ?>
                        </header>
                        <section>
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_excerpt(); ?></p>
                        </section>
                        <footer><a href="<?php the_permalink(); ?>">Lire la suite</a></footer>
                    </article>
                <?php }
                wp_reset_postdata();
            }
            ?>
        </section>
        <section class="agenda">
            <h2>Agenda</h2>
            <ul>
                <?php echo do_shortcode('[events_list limit="5"] <li>#_EVENTNAME, #_EVENTDATES {has_time} , de #_EVENTTIMES {/has_time}</li>[/events_list]'); ?>
            </ul>
        </section>
    </section>
</section>

<?php get_footer(); ?>

