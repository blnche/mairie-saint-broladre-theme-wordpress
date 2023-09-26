<section class="last-project">
    <article>
        <h2>Project Title</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate eius tenetur perspiciatis quasi mollitia! Reiciendis.</p>
        <img src="/assets/images/icons8-placeholder-96.png">
    </article>
</section>
<section class="sub-pages-list">
    <h2>Autres projets</h2>
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
            <a href="<?php echo $pageChild->guid; ?>">
                <span class="label"> <?php echo $pageChild->post_title; ?> </span>
            </a>
            <?php
        }
        ?>
    </nav>
</section>