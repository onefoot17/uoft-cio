<?php
/**
 * The Template for displaying all single posts.
 *
 * @package uoft_bootstrap3
 */

get_header(); ?>



<div class="container">
	<div class="row">
		<div class="col-md-9">

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
				<?php get_breadcrumb_navigation(); ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'single' ); ?>
					<?php uoft_bootstrap3_content_nav( 'nav-below' ); ?>
					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() )
							comments_template();
					?>
				<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->
			</div><!-- #primary -->

		</div><!-- .span -->
		<div role="navigation" id="sidebar" class="col-md-3">
	        <?php dynamic_sidebar( 'sidebar-global' ); ?>
	        <?php dynamic_sidebar( 'sidebar-subpage' ); ?>
	  </div><!-- .span -->
	</div><!-- .row -->


</div><!-- .container -->
<?php get_footer(); ?>
