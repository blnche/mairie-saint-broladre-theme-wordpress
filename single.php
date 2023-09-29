<?php get_header(); ?>

    <section class="main-container">
        <h1> <?php the_title(); ?></h1>
        <article class="single">
            <?php
            $content = parse_blocks(get_the_content(get_the_ID()));

            // TEXT
            ?><section class="text"><?php
            foreach ($content as $data) {
                if ($data['blockName'] === 'core/paragraph') {
                    echo $data['innerHTML'];
                }
                if ($data['blockName'] === 'core/table') {
                    echo  $data['innerHTML'];
                }
                if ($data['blockName'] === 'core/group') {
                    foreach ($data['innerBlocks'] as $blocks) {
                        echo $blocks['innerHTML'];
                    }
                }
            }
            ?></section><?php

            //IMG & FILE
            ?><section class="img"><?php
            foreach ($content as $data) {
                if ($data['blockName'] === 'core/image') {
                    echo $data['innerHTML'];
                }
                if ($data['blockName'] === 'core/file') {
                    echo $data['innerHTML'];
                }
            }
            ?></section>
        </article>
    </section>

<?php get_footer(); ?>