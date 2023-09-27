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
<body id="page_start">
<menu id="interactive_menu" class="menu-container">
    <li>
        <a href="#" id="themeBtn">
            <img width="32" height="32" src="https://img.icons8.com/FFFFFF/material-rounded/48/contrast.png" alt="contrast"/>
        </a>
    </li>
    <li>
        <a href="#page-start" id="ArrowUpBtn">
            <img width="32" height="32" src="https://img.icons8.com/FFFFFF/fluency-systems-regular/48/up--v1.png" alt="up--v1"/>
        </a>
    </li>
</menu>
<header class="header">
    <section class="container header-container">
        <section class="header-title">
            <h1><a href="<?php echo get_home_url() ?>"><?php echo esc_attr(get_bloginfo( 'name' ));?></a></h1>
            <p>Commune de la baie du Mont Saint Michel</p>
        </section>
        <nav id="mainMenu">
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'header',
                    'items_wrap' => '<ul class="site-links">%3$s</ul>'
                )
            );
        ?>
        <ul class="contact-links">
            <li><a href="/contact-page-layout.html" class="contact-link">Nous contacter</a></li>
            <li><a href="tel:+33" class="contact-phone">02 01 03 04 05</a></li>
        </ul>
        <?php get_search_form(); ?>
        </nav>
        <section class="header-menu-button-container">
            <img width="48" height="48" src="https://img.icons8.com/FFFFFF/fluency-systems-filled/48/menu.png" alt="menu" id="burgerMenuBtn"/>
        </section>
    </section>
</header>
<main>
    <section class="main container">

