//The archive template is used when visitors request posts by category, author, or date. Note: this template will be overridden if more specific templates are present like category.php, author.php, and date.php.
<?php get_header(); ?>
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

