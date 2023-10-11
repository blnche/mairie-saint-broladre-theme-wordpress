<?php get_header(); ?>
<section>
    <?php
    $posts = get_posts(array(
        'post_type' => 'post'
    ));

    foreach($posts as $post) {
        ?>
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
            <footer>
                <a href="<?php the_permalink(); ?>">Lire la suite</a>
                <a href="https://www.saint-broladre.bzh/blog">Voir tous les articles</a>
            </footer>
        </article>
        <?php
    }
    ?>
</section>
<?php get_footer(); ?>

