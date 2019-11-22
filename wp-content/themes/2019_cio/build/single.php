<?php get_header(); ?>

<main class="content">
    <section class="section__width section--single__width">
        <?php if ( function_exists( 'breadcrumb_trail' ) ) breadcrumb_trail(); ?>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h2 class="section--single__title"><?php the_title(); ?></h2>

            <p class="section--single__date">Posted on <?php the_date(); ?> by <?php the_author_posts_link(); ?></p>

            <section class="section--single__entry"><?php the_content(); ?></section>
        <?php endwhile; else : ?>
            <h2>Not Found</h2>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>
