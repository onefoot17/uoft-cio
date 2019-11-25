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
        <header id="header" class="section--header">
            <section class="section__width section__width--header">
                <section class="section--header__logos">
                    <a class="section--header__logos__uoft" href="https://www.utoronto.ca/" title=""><img class="section--header__logo" src="https://cio.utoronto.ca/wp-content/themes/ITS_uoft_bootstrap3_v203_sp/_inc/img/U-of-T-logo.svg" /></a>

                    <a class="section--header__logos__cio" href="<?php echo get_site_url(); ?>" title="<?php echo get_bloginfo( 'name' ); ?>">
                        <span class="section--header__logos__cio__top">Office of the</span>

                        <span class="section--header__logos__cio__bottom">Chief <br />Information<br />Officer</span>
                    </a>

                    <section class="section--header__logos__text">
                        <img class="section--header__logos__text__sign" src="https://cio.utoronto.ca/wp-content/uploads/2019/11/signature5dd462e16f1d7.png" />

                        <p>Bo Wandschneider, CIO</p>

                        <p>University of Toronto</p>
                    </section>
                </section>

                <section class="section--header__photo" style="background-image: url(https://cio.utoronto.ca/wp-content/uploads/2019/11/imgpsh_mobile_save.jpg);"></section>
            </section>
        </header>
