<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package flatter
 */
?>

	</section><!-- #content -->  

	<footer id="colophon" class="site-footer" role="contentinfo"> 
    	<div class="grid grid-pad">
        	
            <div class="col-1-1">
            	<p class="footer-up">
            		<a href="#go-to-top"><i class="fa fa-angle-up"></i></a>
            	</p><!-- .footer-up -->   
        	
				<?php if ( get_theme_mod( 'flatter_footer_logo' ) ) : ?>
        			<img src="<?php echo esc_url( get_theme_mod( 'flatter_footer_logo' ) ); ?>" class="aligncenter footer-logo-size" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" >
        		<?php else : ?>   
				<?php endif; ?>
           	</div><!-- .col-1-1 -->  
        
        	<div class="col-1-3">
            	<?php if ( get_theme_mod( 'footer_icon_1' ) ) : ?>
            		<i class="fa <?php echo get_theme_mod( 'footer_icon_1' ); ?> fa-4x"></i> 
            	<?php else : ?>   
				<?php endif; ?> 
           
            	<?php if ( get_theme_mod( 'flatter_footer_phone' ) ) : ?>
        			<h5><?php echo get_theme_mod( 'flatter_footer_phone' ); ?></h5>
            	<?php else : ?>   
				<?php endif; ?>
        	</div><!-- .col-1-3 -->
        
        	<div class="col-1-3">
            	<?php if ( get_theme_mod( 'footer_icon_2' ) ) : ?>
            		<i class="fa <?php echo get_theme_mod( 'footer_icon_2' ); ?> fa-4x"></i> 
            	<?php else : ?>   
				<?php endif; ?> 
            
            	<?php if ( get_theme_mod( 'flatter_footer_address' ) ) : ?>
        			<h5><?php echo get_theme_mod( 'flatter_footer_address' ); ?></h5> 
            	<?php else : ?>   
				<?php endif; ?>
        	</div><!-- .col-1-3 -->
        
        	<div class="col-1-3">
            	<?php if ( get_theme_mod( 'footer_icon_3' ) ) : ?>
            		<i class="fa <?php echo get_theme_mod( 'footer_icon_3' ); ?> fa-4x"></i> 
            	<?php else : ?>
				<?php endif; ?> 
            
            	<?php if ( get_theme_mod( 'flatter_footer_contact' ) ) : ?>
        			<h5><?php echo get_theme_mod( 'flatter_footer_contact' ); ?></h5>
            	<?php else : ?>   
				<?php endif; ?>
        	</div><!-- .col-1-3 -->
        
        </div><!-- .grid -->
        
        <div><?php echo flatter_media_icons(); ?></div>
        
        <div class="site-info">
        
        <?php if ( get_theme_mod( 'flatter_footerid' ) ) : ?> 
        			<?php echo get_theme_mod( 'flatter_footerid' ); ?>  
				<?php else : ?>  
    				<?php	printf( __( 'Theme: %1$s by %2$s', 'flatter' ), 'flatter', '<a href="http://modernthemes.net" rel="designer">modernthemes.net</a>' ); ?> 
				<?php endif; ?> 

		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
