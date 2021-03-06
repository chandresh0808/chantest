<?php
/**
 * The template for displaying posts in the Link post format
 *
 * @since 1.0
 */
$custom_theme_options = custom_theme_options();
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="row">
			<div class="col-md-12">
				<?php get_template_part( 'content', 'header' ); ?>
				<h3 class="post-format"><?php _e( 'Link', 'custom' ); ?></h3>

			    <div class="entry-content">
				    <?php the_content( __( 'Read more &#133;', 'custom' ) ); ?>
			    </div><!-- .entry-content -->

			    <?php get_template_part( 'content', 'footer' ); ?>
			</div>
	    </div>
	</article>