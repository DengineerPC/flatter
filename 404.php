<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package flatter
 */

get_header(); ?>

	<header class="entry-header">
		<div class="grid grid-pad entry-pad">
    		<div class="col-1-1">
				<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'flatter' ); ?></h1>
        	</div>
    	</div>
	</header><!-- .entry-header -->

	<div class="grid grid-pad">
		<div id="primary" class="content-area col-1-1">
			<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				
				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'flatter' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- grid --> 

<?php get_footer(); ?>
