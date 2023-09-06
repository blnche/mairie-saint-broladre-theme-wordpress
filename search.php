//The search results template is used to display a visitor’s search results.
<?php get_header(); ?>
<h1>Résultats de la recherche</h1>
<article>
    <?php
    if(have_posts()) {
        while(have_posts()) {
            the_post();
            get_template_part('template-parts/content', 'archive');
        }
    }
    ?>
</article>
<?php get_footer(); ?>