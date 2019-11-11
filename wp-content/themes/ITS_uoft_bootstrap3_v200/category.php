<?php
/**
 * The template for displaying Category pages.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 * @package WordPress
 * @subpackage uoft_bootstrap3
 */

get_header(); ?>

<div class="container">
      <div class="row">
      <div class="col-md-12">

        </div> <!-- .span -->
    </div><!-- .row -->
    <div class="row">
        <div class="col-md-9">

		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( '%s', 'uoft_bootstrap3' ), single_cat_title( '', false ) ); ?></h1>

				<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
				<?php endif; ?>
			</header><!-- .archive-header -->

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
                <div class="category-item">
                    <a href='<?php the_permalink() ?>'
                       rel='bookmark' title='<?php the_title(); ?>'>
                        <h2 class="h3"><?php the_title(); ?></h2></a>
                    <?php the_excerpt(); ?>
                </div>
			<?php endwhile; ?>


			<?php uoft_bootstrap3_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
        </div><!-- .span -->
		<div role="navigation" id="sidebar" class="col-md-3">
        <?php dynamic_sidebar( 'sidebar-global' ); ?>
        <?php dynamic_sidebar( 'sidebar-subpage' ); ?>
    </div><!-- .col -->
    </div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
