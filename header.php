<!DOCTYPE html>
<html lang="fr" data-theme="light">
<head>
    <meta charset="utf-8" />
    <?php wp_head(); ?>
    <meta content="<?php echo esc_attr(get_bloginfo( 'name' ));?>" name="title">
    <meta content="<?php echo esc_attr(get_bloginfo( 'description' ));?>" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    <title><?php echo get_bloginfo( 'name' );?></title>
</head>
<body>
<header>
    <section class="container header">
        <section>
            <img src="<?php header_image(); ?>" width="<?php echo absint(get_custom_header()->width); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name') ); ?>">
            <h1>Mairie de <?php echo esc_attr(get_bloginfo( 'name' ));?></h1>
        </section>
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'header',
                    'items_wrap' => '<ul id="" class="">%3$s</ul>'
                )
            );
            get_search_form();
        ?>
    </section>
</header>
<menu id="interactive_menu">
    <li>
        <a id="themeBtn">
            <i class="fa-solid fa-2xl fa-circle-half-stroke"></i>
        </a>
    </li>
    <li>
        <a href="#page_start" id="arrowUpBtn">
            <i class="fa-solid fa-arrow-up fa-2xl"></i>
        </a>
    </li>
</menu>
<main>