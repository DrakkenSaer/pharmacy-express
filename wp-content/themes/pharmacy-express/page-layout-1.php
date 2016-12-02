<?php
/**
 * Template Name: Page Layout 1

 * @package WordPress
 * @subpackage Pharmacy_Express
 * @since Pharmacy Express 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

	<?php if( have_rows('section_layout') ): ?>
		<div class="container-fluid">
	    <?php while ( have_rows('section_layout') ) : the_row(); ?>
	
			<div class="row buffer-padding-50" id="<?php the_sub_field('section_id'); ?>" style="background-color: <?php the_sub_field('section_background_color'); ?>;">
				<div class="container">
			<?php if( get_sub_field('section_title') ): ?>
					<div class="row">
						<div class="col-md-11 col-md-offset-1">
							<h2 class="text-gold text-uppercase text-bold text-bitter font-size-280"><?php the_sub_field('section_title'); ?></h2>
						</div>
					</div>
			<?php endif; ?>
				
			<?php if( have_rows('section_content') ): ?>
					<div class="row">
						
			    	<?php while ( have_rows('section_content') ) : the_row(); ?>
		
						<div class="<?php the_sub_field('container_class'); ?>">
							<h3 class="<?php the_sub_field('content_title_class'); ?>"><?php the_sub_field('content_title'); ?></h3>
							<?php the_sub_field('content_body'); ?>
						</div>
					
				    <?php endwhile; ?>
				    
					</div>
			<?php else : ?>
			
			    // no rows found
			
			<?php endif; ?>
				</div>
			</div>
	
	    <?php endwhile; ?>
		</div>
	<?php endif; ?>

	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
