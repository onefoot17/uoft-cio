<?php
/**
 * The main template file.
 * @package uoft_bootstrap3
 */

get_header(); ?>

    <div id="content" class="container">
            <div class="row">
                <div class="col-md-9">
                    <main id="main" class="site-main" role="main">
                    <?php if ( have_posts() ) : ?>

                        <?php /* Start the Loop */ ?>
                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php
                                /* Include the Post-Format-specific template for the content.
                                 * If you want to override this in a child theme then include a file
                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                 */
                                get_template_part( 'content', get_post_format() );
                            ?>

                        <?php endwhile; ?>

                        <?php uoft_bootstrap3_content_nav( 'nav-below' ); ?>

                    <?php else : ?>
                        <?php get_template_part( 'no-results', 'index' ); ?>
                    <?php endif; ?>

                    </main><!-- #main -->
                </div><!-- .span -->
                <div class="col-md-3">
                    <?php dynamic_sidebar( 'sidebar-global' ); ?>
                </div><!-- .span -->
            </div><!-- .row -->
</div><!-- .container -->
<?php get_footer(); ?>

