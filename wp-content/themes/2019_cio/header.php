<!DOCTYPE html>

<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />

        <meta name="viewport" content="width=device-width" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700&display=swap" rel="stylesheet">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <header id="header" class="header">
            <section class="header__logos">
                <a class="header__logos__uoft" href="<?php echo get_site_url(); ?>" title="<?php echo get_bloginfo( 'name' ); ?>"><img class="header__logo" src="https://cio.utoronto.ca/wp-content/themes/ITS_uoft_bootstrap3_v203_sp/_inc/img/U-of-T-logo.svg" /></a>

                <a class="header__logos__its" href="" title="">
                    <span class="header__logos__its__top">ITS</span>

                    <span class="header__logos__its__bottom">Information Technology Services</span>
                </a>

                <a href="#menu-main" data-href="#menu-main" id="menu-main-toggle" class="menu-toggle" aria-label="Open main menu" aria-expanded="false" aria-controls="menu-main">
                    <span class="sr-only">Open main menu</span>

                    <span class="fa fa-bars" aria-hidden="true"></span>
                </a>
            </section>

            <?php get_template_part( 'nav' ); ?>
        </header>