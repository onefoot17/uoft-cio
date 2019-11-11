<?php
/*
Template Name: Page/Right Sidebar
 */

get_header(); ?>

<div id="content" class="site-content container">
<div class="row">
	<div class="col-md-9">
        <?php while ( have_posts() ) : the_post(); ?>
	    <h1 class="page-heading"><?php the_title(); ?></h1>
            <main id="main" class="body" role="main">

					<?php get_template_part( 'content', 'page' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || '0' != get_comments_number() )
								comments_template();
					?>
					<?php the_field('page_notes'); ?>
			</main><!-- #main -->
                <?php if (get_field('page_notes')) { ?>
                <div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title"><?php the_field('page_note_title'); ?></h3>
					</div>
					<div class="panel-body notes">
						<?php the_field('page_notes'); ?>
					</div>
				</div>
				<?php } ?>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .span -->
  <div role="navigation" id="sidebar-right" class="col-md-3 sidebar-right">
      <?php dynamic_sidebar( 'sidebar-global' ); ?>
      <?php if (get_field('sidebar')) { the_field('sidebar'); dynamic_sidebar( get_field('sidebar') ); } else  { dynamic_sidebar( 'sidebar-subpage' ); } ?>
  </div><!-- .span -->
</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
