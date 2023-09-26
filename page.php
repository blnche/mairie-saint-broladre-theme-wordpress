<?php get_header(); ?>

<section class="main-container">
    <h1> <?php the_title(); ?></h1>

    <?php
        if (get_the_title() === 'Nous contacter') {
            get_template_part('template-parts/content', 'contact-form');
        } else if (get_the_title() === 'Projets en cours') {
            get_template_part('template-parts/content', 'project');
        } else if (get_the_title() === 'Professionnels Locaux') {
            get_template_part('template-parts/content', 'table');
        } else {
            $pageID = get_the_ID();
            $pages = get_pages(
                    array (
                        'parent' => $pageID,
                    )
            );
            if (empty($pages)) {
                get_template_part('template-parts/content', 'single');
            } else {
                get_template_part('template-parts/content', 'page');
            }
        } ?>
</section>

<?php get_footer(); ?>
