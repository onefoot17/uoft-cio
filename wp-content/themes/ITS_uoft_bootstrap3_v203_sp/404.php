<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package uoft_bootstrap3
 */

get_header(); ?>


<div id="content" class="site-content container">
    <div class="row">
        <div class="col-md-12" id="main" class="body" role="main">
            <main id="main" class="body" role="main">
      			<section class="error-404 not-found">
      				<header class="page-header">
      					<h1 class="page-title"><?php _e( 'Page Not Found', 'uoft_bootstrap3' ); ?></h1>
      				</header><!-- .page-header -->
      				<div class="page-content">
      					<p>We’re sorry, but the page you requested can’t be found.</p>
      					<p>You could try one or more of the following options:</p>
      					<ul>
      						<li><p>Please use the navigation above or search to find what you are looking for.</p><br />
                  <div class="row">
                  <div class="col-sm-4 clearfix"><?php get_search_form(); ?></div></div><br />
      						</li>
      						<li><a href="<?php echo get_site_url(); ?>">Return to the home page</a></li>
      					</ul>
      				</div><!-- .page-content -->
      			</section><!-- .error-404 -->
      		</main><!-- #main -->
        </div><!-- .span -->
    </div><!-- .row -->
</div><!-- .container -->
<?php get_footer(); ?>
