<?php
/*
Template Name: Page/Full Width
 */

get_header(); ?>

<div id="content" class="site-content container">
<div class="row">
    <div class="col-md-12">
        <?php while ( have_posts() ) : the_post(); ?>
	    <h1 class="page-heading"><?php the_title(); ?></h1>
            <main id="main" class="body" role="main">
                    <?php get_template_part( 'content', 'page' ); ?>
                <?php if (function_exists('get_field')) { ?>
                <div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title"><?php if (function_exists('the_field')) { the_field('page_note_title'); } ?></h3>
					</div>
					<div class="panel-body notes">
						<?php if (function_exists('the_field')) { the_field('page_notes'); }?>
					</div>
				</div>
				<?php } ?>
                <?php if (function_exists('get_field')) { ?>
                <div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title"><?php if (function_exists('the_field')) { the_field('note_2_title'); } ?></h3>
					</div>
					<div class="panel-body notes">
						<?php if (function_exists('the_field')) { the_field('notes_2'); } ?>
					</div>
				</div>
				<?php } ?>
                    <?php
                        // If comments are open or we have at least one comment, load up the comment template
                            if ( comments_open() || '0' != get_comments_number() )
                                comments_template();
                    ?>
            </main><!-- #main -->
                <?php endwhile; // end of the loop. ?>
    </div><!-- .span -->
</div><!-- .row -->
</div><!-- .container -->
<?php get_footer(); ?>
