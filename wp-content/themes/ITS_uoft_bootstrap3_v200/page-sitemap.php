<?php

get_header(); ?>

<div id="content" class="site-content container">
<div class="row">
    <div class="col-md-12">
        <?php while ( have_posts() ) : the_post(); ?>
	    <h1 class="page-heading"><?php the_title(); ?></h1>
            <main id="main" class="body" role="main">
            	<?php the_content(); ?>
               <?php wp_list_pages('title_li=&exclude=2,98'); ?>
            </main><!-- #main -->
                <?php endwhile; // end of the loop. ?>
    </div><!-- .span -->
</div><!-- .row -->
</div><!-- .container -->
<?php get_footer(); ?>
