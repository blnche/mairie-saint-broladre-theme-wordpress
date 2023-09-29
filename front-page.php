<?php get_header() ?>

<section class="homepage-image-container">
    <img src="<?php header_image(); ?>" width="<?php echo absint(get_custom_header()->width); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name') ); ?>">
</section>
<section class="main-container">
    <section class="menu-homepage-container">
        <?php $menuItems = getNavigationMenu();?>

        <nav class="mairie-menu">
            <?php foreach($menuItems as $item) {?>
                <a href=" <?= $item->url; ?> ">
                    <div class="svg-container">
                        <img src="
                    <?php
                        if ($item->title === 'Conseil Municipal') {
                            echo get_parent_theme_file_uri('assets/images/icons8-placeholder-96.png');
                        } else if ($item->title === 'Location de salles') {
                            echo get_parent_theme_file_uri('assets/images/icons8-placeholder-96.png');
                        } else if ($item->title === 'Restauration Scolaire') {
                            echo get_parent_theme_file_uri('assets/images/icons8-placeholder-96.png');
                        } else if ($item->title === 'Associations') {
                            echo get_parent_theme_file_uri('assets/images/icons8-placeholder-96.png');
                        } else if ($item->title === 'Annuaire de contacts') {
                            echo get_parent_theme_file_uri('assets/images/icons8-placeholder-96.png');
                        } else if ($item->title === 'Restauration Scolaire') {
                            echo get_parent_theme_file_uri('assets/images/icons8-placeholder-96.png');
                        } else if ($item->title === 'Agence Postale Communale') {
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
            <?php //$events = get_em_events();
            //var_dump($events );
            //echo do_shortcode("[events show_categories='false' show_tags='false show_event_types='false show_category_multiselect='false show_event_type_multiselect='false' show_more='false' show_pagination='false' layout_type='List' per_page='5' orderby='event_start_date' show_filters='false']"); ?>
            <ul>
                <?php echo do_shortcode('[events_list limit="5"] <li>#_EVENTNAME, #_EVENTDATES {has_time} , de #_EVENTTIMES {/has_time}</li>[/events_list]'); ?>
            </ul>
        </section>
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

