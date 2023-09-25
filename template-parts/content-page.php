<section class="sub-pages-list">
    <nav>
    <?php
    $pages = get_pages();
    $pageID = get_the_ID();
    $pageChildren = get_page_children($pageID, $pages);

    foreach ($pageChildren as $pageChild) {
        ?>
        <a href="<?php echo $pageChild->guid; ?>">
            <span class="label"> <?php echo $pageChild->post_title; ?> </span>
        </a>
    <?php
    }
    ?>
    </nav>
</section>
