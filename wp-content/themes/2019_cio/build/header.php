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
                <section>
                    <section class="section--header__logos">
                        <a class="section--header__logos__uoft" href="<?php echo get_site_url(); ?>" title="<?php echo get_bloginfo( 'name' ); ?>"><img class="section--header__logo" src="https://cio.utoronto.ca/wp-content/themes/ITS_uoft_bootstrap3_v203_sp/_inc/img/U-of-T-logo.svg" /></a>

                        <a class="section--header__logos__cio" href="" title="">
                            <span class="section--header__logos__cio__top">Office of the</span>

                            <span class="section--header__logos__cio__bottom">Chief<br />Information<br />Officer</span>
                        </a>

                        <?php get_template_part( 'nav' ); ?>
                    </section>

                    <section class="section--header__text">
                        <img class="section--header__sign" src="https://cio.utoronto.ca/wp-content/uploads/2019/11/signature5dd304a0b575f.png" />

                        <p>Bo Wandschneider, CIO</p>

                        <p>University of Toronto</p>
                    </section>
                </section>

                <section>
                    <img class="section--header__photo" src="http://cio.local/wp-content/uploads/2019/11/imgpsh_mobile_save.jpg" />
                </section>
            </section>
        </header>
