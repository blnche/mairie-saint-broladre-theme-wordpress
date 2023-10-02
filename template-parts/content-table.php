
<?php
$content = parse_blocks(get_the_content(get_the_ID()));

foreach ($content as $data) {

    if ($data['blockName'] === 'core/paragraph') {
        ?>
        <article>
            <?php echo $data['innerHTML']; ?>
        </article> <?php
    }
}
?>
<section class="professionals-list">
    <h2>Professionnels Santé</h2>
    <?php
    $pageID = get_the_ID();
    $pages = get_pages(
        array (
            'parent' => $pageID,
        )
    );
    foreach ($pages as $pageChild) {
        $healthProfessional = get_field('professionnel_de_la_sante_true_false', $pageChild->ID);

        if ($healthProfessional === true) {
        ?>
        <article>
            <h3> <?php echo $pageChild->post_title; ?> </h3>
            <address>
                    <?php
                    $address = get_field('adresse_postale', $pageChild->ID);
                    $email = get_field('adresse_email', $pageChild->ID);
                    $phone = get_field('numero_de_telephone', $pageChild->ID);
                    $ordre = get_field('ordre', $pageChild->ID);
                    ?>
                <p>
                    <?php echo $address ?>
                </p>
                <?php if(!empty($email)) { ?>
                <a href="mailto:<?php echo $email ?>"> <?php echo $email ?> </a> <?php
                }?>
                <?php if(!empty($phone)) { ?>
                <a href="tel:+33<?php echo $phone ?>"> <?php echo '0'.$phone ?> </a> <?php
                }
                ?>
            </address>
            <img
            <?php
            if ($ordre === 'pharmacien') { ?>
                    src=" <?php echo get_parent_theme_file_uri('assets/images/health-professionals-icons/ordre-pharmacien.svg') ?>" alt="logo-ordre-infirmiers" <?php
            } else if ($ordre === 'medecin') { ?>
                src=" <?php echo get_parent_theme_file_uri('assets/images/health-professionals-icons/ordre-medecins.jpg') ?>" alt="logo-ordre-medecins" <?php
            } else if ($ordre === 'infirmier') { ?>
                src=" <?php echo get_parent_theme_file_uri('assets/images/health-professionals-icons/ordre-infirmier.png') ?>" alt="logo-ordre-infirmiers" <?php
            } else if ($ordre === 'masseur_kinesitherapeute') { ?>
                src=" <?php echo get_parent_theme_file_uri('assets/images/health-professionals-icons/ordre-masseurs-kinesitherapeutes.jpg') ?>" alt="logo-ordre-masseurs-kinesitherapeutes" <?php
            }
            ?>
            >
        </article>
        <?php
        }
    }
    ?>
</section>
<section class="professionals-list">
    <h2>Professionnels Locaux</h2>
    <?php
    foreach ($pages as $pageChild) {
    $healthProfessional = get_field('professionnel_de_la_sante_true_false', $pageChild->ID);

        if ($healthProfessional === false) {
        ?>
        <article>
            <h3><?php echo $pageChild->post_title; ?></h3>
            <address>
                <?php
                $address = get_field('adresse_postale', $pageChild->ID);
                $email = get_field('adresse_email', $pageChild->ID);
                $phone = get_field('numero_de_telephone', $pageChild->ID);
                ?>
                <p>
                    <?php echo $address ?>
                </p>
                <?php if(!empty($email)) { ?>
                    <a href="mailto:<?php echo $email ?>"> <?php echo $email ?> </a> <?php
                }?>
                <?php if(!empty($phone)) { ?>
                    <a href="tel:+33<?php echo $phone ?>"> <?php echo '0'.$phone ?> </a> <?php
                }
                ?>
            </address>
        </article>
        <?php
        }
    }
    ?>
</section>