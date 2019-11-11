<?php
/*
Template Name: Front Page
 */

get_header(); ?>

<section id="content" class="site-content container">
	<div class="row">
		<div class="col-md-12">
            <main id="main" class="body" role="main">    

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'content', 'page' ); ?>

                <?php endwhile; // end of the loop. ?>
            </main><!-- #main -->
		</div>
	</div><!-- .row -->
</section><!-- .container -->
<section id="home-widgets">
	<div class="container">
		<div class="row">
			<?php dynamic_sidebar( 'sidebar-features' ); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
