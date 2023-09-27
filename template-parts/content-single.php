<?php get_header(); ?>

    <?php echo 'SINGLE' ?>
<article>
    <?php
    $content = parse_blocks(get_the_content(get_the_ID()));

    foreach ($content as $data) {

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

<?php get_footer(); ?>
