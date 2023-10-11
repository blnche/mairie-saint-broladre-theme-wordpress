<?php get_header(); ?>

    <section class="main-container">
        <h1> <?php the_title(); ?></h1>
        <article class="single">
            <section class="text">
                <?php the_content(); ?>
            </section>
            <section class="img">
                
            </section>
        </article>
    </section>

<?php get_footer(); ?>