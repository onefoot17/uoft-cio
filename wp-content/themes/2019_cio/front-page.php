<?php get_header(); ?>

<main class="content">
    <section class="section section--news">
        <section class="section__width">
            <header class="section__header">
                <h1 class="section--news__heading">Latest News & Announcements</h1>

                <a class="section__button section--news__button" href="/category/news/">More ITS News</a>
            </header>

            <ul class="section__posts section--news__posts">
                <?php
                    global $post;

                    $args = array(
                        'category_name' => 'Blog',
                        'posts_per_page' => 4
                    );

                    $postslist = get_posts( $args );

                    foreach ( $postslist as $post ) :
                        setup_postdata( $post ); 
                ?>
                            
                        <li class="section--news__post">
                            <a class="section__link section--news__link" href="<?php the_permalink(); ?>">
                                <?php
                                    if ( has_post_thumbnail() ) {
                                        echo '<section class="section--news__link__image-con">' . wp_get_attachment_image(get_post_thumbnail_id(), 'medium', false, array('class' => 'section__link__image section--news__link__image') ) . '</section>';
                                    }
                                ?>

                                <h2 class="section__link__title section--news__link__title"><?php the_title(); ?></h2>
                            </a>
                        </li>
                <?php
                    endforeach;

                    wp_reset_postdata();
                ?>
            </ul>
        </section>
    </section>

    <section class="section section--highlights">
        <section class="section__width section--highlights__width">
            <header class="section__header section--highlights__header">
                <h1 class="section--highlights__heading">Follow Us</h1>
            </header>

            <section class="section--highlights__postsCon">
                <ul class="section__posts section--highlights__posts">
                    <?php
                        global $post;

                        $args = array(
                            'category_name' => 'Highlights',
                            'posts_per_page' => 4
                        );

                        $postslist = get_posts( $args );

                        foreach ( $postslist as $post ) :
                            setup_postdata( $post ); 
                    ?>
                                
                            <li class="section--highlights__post">
                                <a class="section__link section--highlights__link" href="<?php the_permalink(); ?>" target="_blank">
                                    <header class="section--highlights__link__top">
                                        <h2 class="section__link__title section--highlights__link__title"><?php the_title(); ?></h2>

                                        <button class="section--highlights__button section--highlights__link__button"><?php the_field('read_more_button'); ?></button>
                                    </header>

                                    <section class="section--highlights__link__bottom">
                                        <?php 
                                            $turn_off_excerpt = get_field('turn_off_excerpt');

                                            if( ! $turn_off_excerpt ) {
                                                echo '<p class="section--highlights__link__excerpt">' . get_the_excerpt();
                                            }
                                            
                                            if ( has_post_thumbnail() ) {
                                                echo '<section class="section--highlights__link__image-con">' . wp_get_attachment_image(get_post_thumbnail_id(), 'medium', false, array('class' => 'section__link__image section--highlights__link__image') ) . '</section>';
                                            }
                                        ?>
                                    </section>
                                </a>
                            </li>
                    <?php
                        endforeach;

                        wp_reset_postdata();
                    ?>
                </ul>

                <section class="section section--highlights__follow">
                    <ul class="section__posts section--highlights__follow__posts">
                        <li class="section--highlights__follow__post"><a class="twitter-timeline" data-height="300" href="https://twitter.com/bjuul?ref_src=twsrc%5Etfw">Tweets by bjuul</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></li>

                        <li class="section--highlights__follow__post"><a class="twitter-timeline" data-height="300" href="https://twitter.com/bjuul?ref_src=twsrc%5Etfw">Tweets by bjuul</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></li>  <li class="section--highlights__follow__post"><a class="twitter-timeline" data-height="300" href="https://twitter.com/ITSUofT?ref_src=twsrc%5Etfw">Tweets by ITSUofT</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></li>
                    </ul>
                </section>
            </section>
        </section>
    </section>
</main>

<?php get_footer(); ?>
