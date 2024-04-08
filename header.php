<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.svg" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
    <!-- Header WordPress -->
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav class="container">
            <a href="<?php echo bloginfo('url'); ?>">
                <img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" alt="Logo Código com café">
            </a>
            <span class="material-icons-round menu-mobile">menu</span>
            <?php wp_nav_menu(array('theme_location' => 'header')); ?>
            <?php get_search_form(); ?>
        </nav>
    </header>