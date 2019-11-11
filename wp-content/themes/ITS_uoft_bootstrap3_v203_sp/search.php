<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package uoft_bootstrap3
 */

get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<section id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
					<?php if ( have_posts() ) : ?>
						<header class="page-header">
							<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'uoft_bootstrap3' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
						</header><!-- .page-header -->

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'content', 'search' ); ?>

						<?php endwhile; ?>

						<?php uoft_bootstrap3_content_nav( 'nav-below' ); ?>

					<?php else : ?>

						<?php get_template_part( 'no-results', 'search' ); ?>

					<?php endif; ?>

					</main><!-- #main -->
			</section><!-- #primary -->
		</div><!-- .span -->
	</div><!-- .row -->
</div><!-- .container -->
<?php get_footer(); ?>
