<article class="single">   
    <section class="text">
        <?php the_content(); ?>
    </section>

    <section class="img">
    </section>
</article>
<section class="sub-pages-list cantine">
    <nav>
        <?php
        $pageID = get_the_ID();
        $pages = get_pages(
            array (
                'parent' => $pageID,
            )
        );

        foreach ($pages as $pageChild) {
            ?>
            <a class="<?php if($pageChild->post_title === 'Désinscription à la cantine') {echo 'red';} else if($pageChild->post_title === 'Inscription à la cantine') {echo 'blue';}; ?>" href="<?php echo $pageChild->guid; ?>">
                <span class="label"> <?php echo $pageChild->post_title; ?> </span>
            </a>
            <?php
        }
        ?>
    </nav>
</section>
