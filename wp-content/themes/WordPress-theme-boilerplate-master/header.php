<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/jgthms/minireset.css@master/minireset.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">

    <?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>
    <header class="nav-header" style="background-image: <?php the_field('header__wallpaper'); ?>;">

        <div class="nav-header__overlay">

            <div class="nav-header__overlay_container">
                <div class="nav-header__overlay_container_logo">
                    <div id="logo"><?php afficher_logo(); ?></div>

                    <nav>

                        <?php

                        wp_nav_menu(
                            array(
                                'theme_location' => 'main-navigation',
                                'container' => 'nav',
                                'container_class' => 'nav',
                                'menu_class' => 'ul'
                            )
                        );

                        ?>
                    </nav>
                </div>

            </div>

        </div>

    </header>