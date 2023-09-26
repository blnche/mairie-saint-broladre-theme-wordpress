<?php
        $pageID = get_the_ID();
        $pages = get_pages(
            array (
                'parent' => $pageID,
            )
        );

    ?>
<section class="last-project">
    <article>
        <?php
        foreach ($pages as $page) {
            $headline = get_field('projet_a_laffiche', $page->ID);

            if ($headline === true) {
            ?>
            <h2> <?php echo $page->post_title; ?> </h2>
            <?php
            if(has_block('core/image', $page->ID)){
                $content = parse_blocks(get_the_content($post = $page->ID));

                foreach ($content as $data) {
                    $imgURL = wp_get_attachment_image_url($data['attrs']['id'], $size = 'full');

                    ?>
                    <img src=" <?php echo $imgURL ?> ">
                    <?php
                }
             }
            ?>
            <section class="text-section">
                <p> <?php echo get_field('description_courte_du_projet', $page->ID) ?> </p>
                <a href="<?php echo $page->guid; ?>"> En savoir plus </a>
            </section>
            <?php
            }
        }?>
    </article>
</section>
<section class="sub-pages-list">
    <h2>Autres projets</h2>
    <nav>
        <?php
        foreach ($pages as $page) {
            $headline = get_field('projet_a_laffiche', $page->ID);
            //var_dump($headline);

            if ($headline === false) {
            //var_dump($page->ID);
            //var_dump($page->post_date);
            ?>
            <a href="<?php echo $page->guid; ?>">
                <span class="label"> <?php echo $page->post_title; ?> </span>
            </a>
            <?php
            }
        }
        ?>
    </nav>
</section>