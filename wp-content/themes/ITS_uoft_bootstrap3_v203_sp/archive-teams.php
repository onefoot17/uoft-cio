<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package uoft_bootstrap3
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
				<main id="main" class="body" role="main">
				
					<header class="page-header">
						<h1 class="page-title">
							Teams
						</h1>
						
					</header><!-- .page-header -->

					<?php
						
						$args = array(
							'post_type'              => array( 'teams' ),
							'post_status'            => array( 'Publish' ),
							'orderby'                => 'menu_order',
							'order'                  => 'ASC',
							
						);

						// The Query
						$query = new WP_Query( $args );

						// The Loop
						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post(); ?>

						<div class="col-md-6"><h2 class="text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<?php // check if the post has a Post Thumbnail assigned to it.
if ( has_post_thumbnail() ) {
	the_post_thumbnail('medium', array('class' => 'center-block img-responsive img-thumbnail'));
} 
the_content(); 

?></div>
								
						<?php	}
						} else {
							// no posts found
						}

						// Restore original Post Data
						wp_reset_postdata(); ?>

				</main><!-- #main -->
		</div><!-- .span -->
	</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
