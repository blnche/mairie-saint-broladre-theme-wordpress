<?php get_header(); ?>

    <section class="main-container">
        <h1> <?php the_title(); ?></h1>

        <article class="single flex">
            <?php
            $content = parse_blocks(get_the_content(get_the_ID()));

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
                if ($data['blockName'] === 'core/heading') {
                    echo $data['innerHTML'];
                }
                if ($data['blockName'] === 'core/paragraph') {
                    echo $data['innerHTML'];
                }
                if($data['blockName'] === 'core/image'){
                    echo $data['innerHTML'];
                }
                if($data['blockName'] === 'core/file') {
                    echo $data['innerHTML'];
                }
            }
            ?>
        </article>
    </section>

<?php get_footer(); ?>