<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package uoft_bootstrap3
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
// check if the post has a Post Thumbnail assigned to it.
if (has_post_thumbnail( $post->ID ) ):
?>
<?php $page_header_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

<header class="entry-header header-bg" style="background-image: url('<?php echo $page_header_img[0]; ?>')">
		<h1 class="entry-title"><?php the_title(); ?></h1>
</header>

<?php endif; ?>



	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'uoft_bootstrap3' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'uoft_bootstrap3' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
