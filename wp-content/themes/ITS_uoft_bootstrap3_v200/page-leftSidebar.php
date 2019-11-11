<?php
/*
Template Name: Page/Left Sidebar
 */

get_header(); ?>
<div id="content" class="site-content container">
<div class="row">
  <div role="navigation" id="sidebar" class="col-md-3">
      <?php dynamic_sidebar( 'sidebar-global' ); ?>
      <?php dynamic_sidebar( 'sidebar-subpage' ); ?>
  </div><!-- .span -->
	<div class="col-md-9">
        <?php while ( have_posts() ) : the_post(); ?>
	    <h1 class="page-heading"><?php the_title(); ?></h1>
            <main id="main" class="body" role="main">
				<?php
				// check if the post has a Post Thumbnail assigned to it.
				if ( has_post_thumbnail() ) {
					echo '<div class="featured-image">';
					echo get_the_post_thumbnail( $post->ID, 'full', '' );
					echo '</div>';
				}
				?>
					<?php get_template_part( 'content', 'page' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() )
							comments_template();
					?>
				<?php endwhile; // end of the loop. ?>
			</main><!-- #main -->
	</div><!-- .span -->
</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
