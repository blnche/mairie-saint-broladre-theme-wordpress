//The page template is used when visitors request individual pages, which are a built-in template.
<?php get_header(); ?>
<h1> <?php the_title(); ?></h1>
<article>
    <?php
    if(have_posts()) {
        while(have_posts()) {
            the_post();
            get_template_part('template-parts/content', 'page');
        }
    }
    ?>
</article>
<?php get_footer(); ?>
