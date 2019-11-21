<?php get_header(); ?>

<main class="content">
    <section class="section section--news">
        <section class="section__width">
            <header class="section__header">
                <h1 class="section__heading section--news__heading">Blog</h1>

                <a class="section__button section--news__button" href="/category/blog/">
                    <i class="fas fa-caret-right"></i>
                    
                    <span>More Posts</span>
                </a>
            </header>

            <ul class="section__posts section--news__posts">
                <?php
                    global $post;

                    $args = array(
                        'category_name' => 'Blog',
                        'posts_per_page' => 3
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
                        'posts_per_page' => 3,
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
                                <?php 
                                    if (get_field( 'alternative_image' ) ) {
                                        echo '<section class="section--highlights__post__left" style="background-image: url(' . wp_get_attachment_image_url( get_post_thumbnail_id(), 'large' ) . ');">' . wp_get_attachment_image(get_field( 'alternative_image' ), 'large', false, array('class' => 'section__post__image section--highlights__post__image') ) . '</section>';
                                    } elseif ( has_post_thumbnail() ) {
                                        echo '<section class="section--highlights__post__left" style="background-image: url(' . wp_get_attachment_image_url( get_post_thumbnail_id(), 'large' ) . ');"></section>';
                                    }
                                ?>

                            <section class="section--highlights__post__right">
                                <header class="section--highlights__post__header">
                                    <h2 class="section__heading section__post__title section--highlights__post__title"><?php if ( get_field( 'alternative_title' ) ) { the_field( 'alternative_title' ); } else { the_title(); } ?></h2>
                                </header>

                                <?php 
                                    $turn_off_excerpt = get_field( 'turn_off_excerpt' );

                                    if( ! $turn_off_excerpt ) {
                                        echo '<p class="section--highlights__post__excerpt">' . get_the_excerpt() . '</p>';
                                    }
                                    
                                    $read_more_button = get_field( 'read_more_button' );
                                    
                                    if( $read_more_button ) {
                                        echo '<button class="section--highlights__button section--highlights__post__button"><a class="section--highlights__post__button__link" href="' . get_the_permalink() . '" title="">';
                                        
                                        the_field( 'read_more_button' );
                                        
                                        echo '</a></button>';
                                    }
                                    
                                    $additional_links_1 = get_field( 'additional_links_1' );
                                    
                                    $additional_links_2 = get_field( 'additional_links_2' );
                                    
                                    $additional_links_3 = get_field( 'additional_links_3' );

                                    if( $additional_links_1 ) {
                                        $additional_links_1_url = $additional_links_1['url'];
                                        $additional_links_1_title = $additional_links_1['title'];
                                        $additional_links_1_target = $additional_links_1['target'] ? $additional_links_1['target'] : '_self';

                                        echo '<div class="section--highlights__post__additional_links">' . 
                                        '<a class="button" href="' . esc_url( $additional_links_1_url ) . '" target="' . esc_attr( $additional_links_1_target ) . '"><i class="fas fa-caret-right"></i>' . esc_html( $additional_links_1_title ) . '</a>';
                                    }

                                    if ( empty( $additional_links_2 ) ) {
                                        echo '</div><!-- additional_links_1 -->';
                                    }

                                    if( $additional_links_2 ) {
                                        $additional_links_2_url = $additional_links_2['url'];
                                        $additional_links_2_title = $additional_links_2['title'];
                                        $additional_links_2_target = $additional_links_2['target'] ? $additional_links_2['target'] : '_self';

                                        echo '<a class="button" href="' . esc_url( $additional_links_2_url ) . '" target="' . esc_attr( $additional_links_2_target ) . '"><i class="fas fa-caret-right"></i>' . esc_html( $additional_links_2_title ) . '</a>';
                                    }

                                    if ( empty( $additional_links_3 ) ) {
                                        echo '</div><!-- additional_links_2 -->';
                                    }

                                    if( $additional_links_3 ) {
                                        $additional_links_3_url = $additional_links_3['url'];
                                        $additional_links_3_title = $additional_links_3['title'];
                                        $additional_links_3_target = $additional_links_3['target'] ? $additional_links_3['target'] : '_self';

                                        echo '<a class="button" href="' . esc_url( $additional_links_3_url ) . '" target="' . esc_attr( $additional_links_3_target ) . '"><i class="fas fa-caret-right"></i>' . esc_html( $additional_links_3_title ) . '</a>';
                                        
                                        echo '</div><!-- additional_links_3 -->';
                                    }

                                ?>
                            </section>
                        </li>
                <?php
                    endforeach;

                    wp_reset_postdata();
                ?>

                <li class="section--highlights__post section--highlights__post--contact">
                    <?php dynamic_sidebar( 'sidebar-contact' ); ?>
                </li>
            </ul><!-- section--highlights__posts -->
        </section>
    </section>

    <section class="section section--follow">
        <section class="section__width section--follow__width">
            <header class="section__header section--follow__header">
                <h1 class="section__heading section--follow__heading">Follow Us</h1>
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
