<article class="single">
    <?php
    $content = parse_blocks(get_the_content(get_the_ID()));

    // TEXT
    ?>    <section class="text"><?php
        foreach ($content as $data) {
            if ($data['blockName'] === 'core/group') {
                foreach ($data['innerBlocks'] as $blocks) {
                    if ($blocks['blockName'] === 'core/heading') {
                        echo $blocks['innerHTML'];
                    }
                    if ($blocks['blockName'] === 'core/paragraph') {
                        echo $blocks['innerHTML'];
                    }
                    if ($blocks['blockName'] === 'core/table') {
                        echo  $blocks['innerHTML'];
                    }
                }
            }
            if ($data['blockName'] === 'core/paragraph') {
                echo $data['innerHTML'];
            }
            if ($data['blockName'] === 'core/table') {
                echo  $data['innerHTML'];
            }
        }
        ?></section><?php

    //IMG
    ?><section class="img"><?php
        foreach ($content as $data) {
            if ($data['blockName'] === 'core/image') {
                echo $data['innerHTML'];
            }
        }
        ?></section>
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
