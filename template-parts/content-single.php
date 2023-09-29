<?php get_header(); ?>

<article class="association">
<?php if (get_field('association_true_false', get_the_ID() === true )) {

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

    //IMG
    ?><section class="img"><?php
    foreach ($content as $data) {
        if ($data['blockName'] === 'core/image') {
            echo $data['innerHTML'];
        }
    }
    ?></section><?php

    ?>
    <address>
            <?php
            $address = get_field('adresse_postale', get_the_ID());
            $email = get_field('adresse_email', get_the_ID());
            $phone = get_field('numero_de_telephone', get_the_ID());
            ?>
        <p>
            Adresse : <?php echo $address ?>
        </p>
        <?php if(!empty($email)) { ?>
            <a href="mailto:<?php echo $email ?>"> <?php echo $email ?> </a> <?php
        }?>
        <?php if(!empty($phone)) { ?>
            <a href="tel:+33<?php echo $phone ?>"> <?php echo '0'.$phone ?> </a> <?php
        }
        ?>
    </address>
    <?php
} else {
    ?>
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

<?php
}?>
