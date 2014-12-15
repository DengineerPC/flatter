<?php
/**
 * @package flatter
 */
?>
	
    <div class="blog-archive-wrapper">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php if (has_post_thumbnail( $post->ID ) ): 
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		$image = $image[0]; 
		elseif ( (empty($image) ) && get_theme_mod( 'flatter_headerbg' )  ) : 
		$image = get_theme_mod( 'flatter_headerbg' ); 
		else : 
		$image = get_stylesheet_directory_uri() . '/img/contact-bg.jpg';   ?>
		<?php endif; ?>

		<a href="<?php the_permalink(); ?>">
		<div class="blog-entry-content" style="background-image: url('<?php echo $image; ?>'); background-size: cover; background-position: center center;">
			<h1 class="blog-entry-title"><?php the_title(); ?></h1>
        
    		<div class="blog-overlay"></div>
		</div><!-- .entry-content -->
    	</a>

		</article><!-- #post-## --> 
	</div><!-- blog-archive-wrapper --> 