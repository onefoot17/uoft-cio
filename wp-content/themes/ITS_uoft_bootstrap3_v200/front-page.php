<?php
/*
Template Name: Front Page
 */

get_header(); ?>

<section id="content" class="site-content container">
	<div class="row">
		<div class="col-md-12">
			<?php echo do_shortcode( get_post_meta( get_the_id(), 'homepage_meta_slider_shortcode', true ) ); ?>
		</div>

		<div class="col-md-9">
            <main id="main" class="body" role="main">    

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'content', 'page' ); ?>

                <?php endwhile; // end of the loop. ?>
            </main><!-- #main -->
		</div>
		<div class="col-md-3 sidebar-global">
            <?php dynamic_sidebar( 'sidebar-global' ); ?>
		</div><!-- .span -->
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
