<?php get_header(); ?>

<section class="main-container">
    <h1> <?php the_title(); ?></h1>

    <?php
    // var_dump(get_the_title());

        if (get_the_title() === 'Nous contacter') {
            get_template_part('template-parts/content', 'contact-form');
        } else if (get_the_title() === 'Projets en cours') {
            get_template_part('template-parts/content', 'project');
        } else if (get_the_title() === 'Professionnels Locaux') {
            get_template_part('template-parts/content', 'table');
        } else {
            if(have_posts()) {
                while(have_posts()) {
                    the_post();
                    get_template_part('template-parts/content', 'page');
                }
            } else {
                echo 'Cette section est en cours de construction';
            }
        } ?>
</section>

<?php get_footer(); ?>
