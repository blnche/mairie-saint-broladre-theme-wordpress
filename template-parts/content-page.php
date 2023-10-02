
<section class="sub-pages-list">
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
