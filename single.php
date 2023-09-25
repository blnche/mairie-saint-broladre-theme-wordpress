<?php get_header(); ?>

<article>

    <h1> <?php the_title(); ?></h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate eius tenetur perspiciatis quasi mollitia! Reiciendis.</p>
    <?php
    if ('has image') {
        //<img src="/assets/images/Elus-de-la-majorite-724x1024.jpg">

    } else if ('has pdf') {
        //<embed src="/assets/images/R03064_38.pdf" type="application/pdf" width="100%" height="250rem">
    }
    ?>

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
