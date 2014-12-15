<?php
/**
Template Name: Home Page
 *
 * @package flatter
 */

get_header('home'); ?>

	<div id="sequence">
			<span class="sequence-prev" alt="Previous" /><i class="fa fa-angle-left"></i></span>
			<span class="sequence-next" alt="Next" /><i class="fa fa-angle-right"></i></span>

		<ul class="sequence-canvas">
        
        	<?php query_posts( array ( 'post_type' => 'slider', 'posts_per_page' => 5 ) );
			
					while ( have_posts() ) : the_post(); ?> 
                    
                	<li>
                    <div class="slide-title"><?php the_title(); ?></div>
                    <div class="slide-description"><?php global $post; $text = get_post_meta( $post->ID, '_sr_slider_description', true ); echo $text; ?></div>   
                    <a class="slide-arrow" href="<?php global $post; $text = get_post_meta( $post->ID, '_sr_slider_url', true ); echo $text; ?>"><?php global $post; $text = get_post_meta( $post->ID, '_sr_slider_button', true ); echo $text; ?></a>
                 	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); $url = $thumb['0']; ?>	
                    
                    <div class="bg" style="background: url('<?php echo $url ?>') center center; -webkit-background-size: cover; -moz-background-size: cover; -ms-background-size: cover; -o-background-size: cover; background-size: cover;">
                	</li> 
        
			<?php endwhile; // end of the loop. ?>   
     
		</ul><!-- .sequence-canvas --> 
	</div><!-- sequence -->
    
    <?php if( get_theme_mod( 'active_services' ) == '') : ?>
    
    <div class="services">
    	<div class="grid grid-pad">
        	
            <div class="col-1-4">
            	
				<?php if ( get_theme_mod( 'home_icon_1' ) ) : ?>
            		<i class="fa <?php echo get_theme_mod( 'home_icon_1' ); ?>"></i> 
            	<?php else : ?>   
				<?php endif; ?>
            	
                <?php if ( get_theme_mod( 'icon_title_1' ) ) : ?>
            		<h1><?php echo get_theme_mod( 'icon_title_1' ); ?></h1> 
            	<?php else : ?>   
				<?php endif; ?>
            	
                <?php if ( get_theme_mod( 'icon_desc_1' ) ) : ?>
            		<p><?php echo get_theme_mod( 'icon_desc_1' ); ?></p>
            	<?php else : ?>   
				<?php endif; ?>
            
            </div><!-- col-1-4 -->
        
        	<div class="col-1-4">
            
            	<?php if ( get_theme_mod( 'home_icon_2' ) ) : ?>
            		<i class="fa <?php echo get_theme_mod( 'home_icon_2' ); ?>"></i>
            	<?php else : ?>   
				<?php endif; ?>
                
                <?php if ( get_theme_mod( 'icon_title_2' ) ) : ?>
            		<h1><?php echo get_theme_mod( 'icon_title_2' ); ?></h1>
            	<?php else : ?>   
				<?php endif; ?>
            	
                <?php if ( get_theme_mod( 'icon_desc_2' ) ) : ?>
            		<p><?php echo get_theme_mod( 'icon_desc_2' ); ?></p>
            	<?php else : ?>   
				<?php endif; ?>
            
            </div><!-- col-1-4 -->
            
        	<div class="col-1-4">
            	
                <?php if ( get_theme_mod( 'home_icon_3' ) ) : ?>
            		<i class="fa <?php echo get_theme_mod( 'home_icon_3' ); ?>"></i>
            	<?php else : ?>   
				<?php endif; ?>
                
                <?php if ( get_theme_mod( 'icon_title_3' ) ) : ?>
            		<h1><?php echo get_theme_mod( 'icon_title_3' ); ?></h1>
            	<?php else : ?>   
				<?php endif; ?>
            
            	<?php if ( get_theme_mod( 'icon_desc_3' ) ) : ?>
            		<p><?php echo get_theme_mod( 'icon_desc_3' ); ?></p>
            	<?php else : ?>   
				<?php endif; ?>
                
            </div><!-- col-1-4 --> 
        
        	<div class="col-1-4">
            
            	<?php if ( get_theme_mod( 'home_icon_4' ) ) : ?>
            		<i class="fa <?php echo get_theme_mod( 'home_icon_4' ); ?>"></i>
            	<?php else : ?>   
				<?php endif; ?>
            	
                <?php if ( get_theme_mod( 'icon_title_4' ) ) : ?>
            		<h1><?php echo get_theme_mod( 'icon_title_4' ); ?></h1>
            	<?php else : ?>   
				<?php endif; ?>
                
            	<?php if ( get_theme_mod( 'icon_desc_4' ) ) : ?>
            		<p><?php echo get_theme_mod( 'icon_desc_4' ); ?></p>
            	<?php else : ?>   
				<?php endif; ?>
            
            </div><!-- col-1-4 -->
    	
        </div><!-- grid -->
    </div><!-- services --> 
    
    <?php else : ?>  
	<?php endif; ?>
	<?php // end if ?>
    
    <?php if( get_theme_mod( 'active_cta' ) == '') : ?>
    
    <div class="cta">
    	<div class="grid grid-pad">
    		<div class="col-1-1">
        		
                <?php if ( get_theme_mod( 'middle_title' ) ) : ?>
            		<h1><?php echo get_theme_mod( 'middle_title' ); ?></h1>
            	<?php else : ?>   
				<?php endif; ?> 
                
				<?php if ( is_active_sidebar('middle-section') ) : ?>
    				<?php dynamic_sidebar('middle-section'); ?> 
    			<?php endif; ?>
    		
            </div><!-- col-1-1 --> 
    	</div><!-- grid --> 
    </div><!-- cta -->
    
    <?php else : ?>  
	<?php endif; ?>
	<?php // end if ?>
    
    <?php if( get_theme_mod( 'active_before_footer' ) == '') : ?>
    
    <div class="home-contact" style="background: url('<?php echo get_theme_mod( 'before_footer_background' ); ?>') no-repeat center center;">  
    	<div class="grid grid-pad"> 
    		
            <div class="col-1-3">
            	
				<?php if ( get_theme_mod( 'bf_icon_1' ) ) : ?>
            		<i class="fa <?php echo get_theme_mod( 'bf_icon_1' ); ?>"></i>
            	<?php else : ?>   
				<?php endif; ?>
            	
                <?php if ( get_theme_mod( 'bf_title_1' ) ) : ?>
            		<h1><?php echo get_theme_mod( 'bf_title_1' ); ?></h1>
            	<?php else : ?>   
				<?php endif; ?> 
                
                <?php if ( get_theme_mod( 'bf_desc_1' ) ) : ?>
            		<p><?php echo get_theme_mod( 'bf_desc_1' ); ?></p>
            	<?php else : ?>   
				<?php endif; ?> 
    			
    		</div><!-- col-1-3 --> 
            
    		<div class="col-1-3">
            
            	<?php if ( get_theme_mod( 'bf_icon_2' ) ) : ?>
            		<i class="fa <?php echo get_theme_mod( 'bf_icon_2' ); ?>"></i>
            	<?php else : ?>   
				<?php endif; ?>
                
                <?php if ( get_theme_mod( 'bf_title_2' ) ) : ?>
            		<h1><?php echo get_theme_mod( 'bf_title_2' ); ?></h1>
            	<?php else : ?>   
				<?php endif; ?>
            	
                <?php if ( get_theme_mod( 'bf_desc_2' ) ) : ?>
            		<p><?php echo get_theme_mod( 'bf_desc_2' ); ?></p>
            	<?php else : ?>   
				<?php endif; ?>
    			
    		</div><!-- col-1-3 -->
            
    		<div class="col-1-3"> 
            
            	<?php if ( get_theme_mod( 'bf_icon_3' ) ) : ?>
            		<i class="fa <?php echo get_theme_mod( 'bf_icon_3' ); ?>"></i>
            	<?php else : ?>
				<?php endif; ?>
            	
                <?php if ( get_theme_mod( 'bf_title_3' ) ) : ?>
            		 <h1><?php echo get_theme_mod( 'bf_title_3' ); ?></h1>
            	<?php else : ?>   
				<?php endif; ?>
           		
                <?php if ( get_theme_mod( 'bf_desc_3' ) ) : ?>
            		 <p><?php echo get_theme_mod( 'bf_desc_3' ); ?></p>
            	<?php else : ?>
				<?php endif; ?>
    		
    		</div><!-- col-1-3 --> 
            
    	</div><!-- grid --> 
    </div><!-- home-contact -->
    
    <?php else : ?>  
	<?php endif; ?>
	<?php // end if ?>


<?php get_footer(); ?>
