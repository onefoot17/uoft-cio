<?php get_header(); ?>

<main class="content">
    <section class="section section--news">
        <section class="section__width">
            <header class="section__header">
                <h1 class="section__heading section--news__heading">Blog</h1>

                <a class="section__button section--news__button" href="/category/news/">
                    <i class="fas fa-caret-right"></i>
                    <span>More Posts</span>
                </a>
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
            <ul class="section__posts section--highlights__posts">
                <?php
                    global $post;

                    $args = array (
                        'posts_per_page' => 4,
                        'meta_query' => array (
                            array (
                                'key' => 'include_on_home_page',
                                'value' => 'Highlights',
                                'compare' => 'LIKE',
                            )
                        )
                    );

                    $postslist = get_posts( $args );

                    foreach ( $postslist as $post ) :
                        setup_postdata( $post ); 
                ?>
                            
                        <li class="section--highlights__post">
                            <a class="section__link section--highlights__link" href="<?php the_permalink(); ?>" target="_blank">
                                <header class="section--highlights__link__top">
                                    <h2 class="section__link__title section--highlights__link__title"><?php if (get_field( 'alternative_title' ) ) { the_field( 'alternative_title' ); } else { the_title(); } ?></h2>

                                    <button class="section--highlights__button section--highlights__link__button"><?php the_field('read_more_button'); ?></button>
                                </header>

                                <section class="section--highlights__link__bottom">
                                    <?php 
                                        $turn_off_excerpt = get_field('turn_off_excerpt');

                                        if( ! $turn_off_excerpt ) {
                                            echo '<p class="section--highlights__link__excerpt">' . get_the_excerpt();
                                        }
                                        
                                        if (get_field( 'alternative_image' ) ) {
                                            echo '<section class="section--highlights__link__image-con">' . wp_get_attachment_image(get_field( 'alternative_image' ), 'large', false, array('class' => 'section__link__image section--highlights__link__image') ) . '</section>';
                                        } elseif ( has_post_thumbnail() ) {
                                            echo '<section class="section--highlights__link__image-con">' . wp_get_attachment_image(get_post_thumbnail_id(), 'large', false, array('class' => 'section__link__image section--highlights__link__image') ) . '</section>';
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
        </section>
    </section>

    <section class="section section--follow">
        <section class="section__width section--follow__width">
            <header class="section__header section--follow__header">
                <h1 class="section--follow__heading">Follow Us</h1>
            </header>

            <ul class="section__posts section--follow__posts">
                <?php
                    global $post;

                    $args = array (
                        'meta_query' => array (
                            array (
                                'key' => 'include_on_home_page',
                                'value' => 'Follow',
                                'compare' => 'LIKE',
                            )
                        )
                    );

                    $postslist = get_posts( $args );

                    foreach ( $postslist as $post ) :
                        setup_postdata( $post ); 
                ?>
                            
                        <li class="section--follow__post">
                            <a class="twitter-timeline" data-height="600" data-chrome="nofooter" <?php echo 'href="https://' . wp_filter_nohtml_kses( get_the_content() ) . '?ref_src=twsrc%5Etfw">'; ?>Tweets by <?php the_title(); ?></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </li>
                <?php
                    endforeach;

                    wp_reset_postdata();
                ?>
            </ul>
        </section>
    </section>
</main>

<?php get_footer(); ?>
