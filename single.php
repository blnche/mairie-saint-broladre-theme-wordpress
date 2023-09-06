//The single post template is used when a visitor requests a single post.
<?php get_header(); ?>
<article>
    <?php
    if(have_posts()) {
        while(have_posts()) {
            the_post();
            get_template_part('template-parts/content', 'project');
        }
    }
    ?>
</article>
<?php get_footer(); ?>
