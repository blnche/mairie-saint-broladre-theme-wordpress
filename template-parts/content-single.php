<?php get_header(); ?>

<article>
    <p>SINGLE Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate eius tenetur perspiciatis quasi mollitia! Reiciendis.</p>
    <?php
    if(has_block('core/image', get_the_ID())){
        echo 'OK';

        $content = parse_blocks(get_the_content());

        foreach ($content as $data) {
            $imgURL = wp_get_attachment_image_url($data['attrs']['id'], $size = 'full');

     ?>
        <img src=" <?php echo $imgURL ?> ">
    <?php
        }
    } else {
        echo 'NOT';
    }
    //var_dump(get_attached_file());
    if ('has image') {
        //<img src="/assets/images/Elus-de-la-majorite-724x1024.jpg">

    } else if ('has pdf') {
        //<embed src="/assets/images/R03064_38.pdf" type="application/pdf" width="100%" height="250rem">
    }
    ?>
</article>

<?php get_footer(); ?>
