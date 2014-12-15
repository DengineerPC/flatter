<?php
/**
 * The template for displaying all single posts.
 *
 * @package flatter
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
        
	<header class="entry-header">
		<div class="grid grid-pad entry-pad">
    		
            <div class="col-1-1">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        	</div><!-- .col-1-1 -->
    	</div><!-- .grid --> 
	</header><!-- .entry-header -->

	<div class="grid grid-pad">
		<div id="primary" class="content-area col-9-12">
			<main id="main" class="site-main" role="main">

			<?php get_template_part( 'content', 'single' ); ?>

			<?php flatter_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

			<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->

	<?php get_sidebar(); ?>
	</div><!-- grid -->
	<?php get_footer(); ?>