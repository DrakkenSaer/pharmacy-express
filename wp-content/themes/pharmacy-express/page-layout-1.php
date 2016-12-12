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
			<section class="row <?php the_sub_field('section_class'); ?>" id="<?php the_sub_field('section_id'); ?>" style="background-color: <?php the_sub_field('section_background_color'); ?>;">

			<?php if( get_sub_field('section_title') ): ?>
				<div class="container">
					<div class="row">
						<div class="col-md-11 col-md-offset-1">
							<h2 class="text-gold text-uppercase text-bold text-bitter font-size-280"><?php the_sub_field('section_title'); ?></h2>
						</div>
					</div>
				</div>
			<?php endif; ?>
				
			<?php if( have_rows('section_content') ): ?>
				<div class="container">
					<div class="row">
						
			    	<?php while ( have_rows('section_content') ) : the_row(); ?>
		
						<div class="<?php the_sub_field('container_class'); ?>">
							<h3 class="<?php the_sub_field('content_title_class'); ?>"><?php the_sub_field('content_title'); ?></h3>
							<?php the_sub_field('content_body'); ?>
						</div>
					
				    <?php endwhile; ?>
				    
					</div>
				</div>
			<?php endif; ?>

			<?php if( have_rows('section_carousel') ): ?>
				<div class="container-fluid">
			    	<?php while ( have_rows('section_carousel') ) : the_row(); $slide_id = get_sub_field('carousel_id'); $row_count = count( get_sub_field('carousel_slide') ); ?>

					<div class="row">
						<?php $index = 0; while ( have_rows('carousel_slide') ) : the_row(); ?>
						
						<button data-target="#<?php echo $slide_id; ?>" data-slide-to="<?php echo $index ?>" class="<?php echo 'col-sm-'.(12/$row_count); echo ($index == 0) ? ' active ' : ' '; get_sub_field('indicator_class') ? the_sub_field('indicator_class') : ''; ?>">
							<?php the_sub_field('indicator_title'); ?>
						</button>

						<?php $index++; endwhile; ?>
					</div>
					
					<div class="row">
						<div id="<?php echo $slide_id; ?>" class="carousel slide" data-ride="carousel" style="height: <?php the_sub_field('carousel_height'); ?>;">
							<div class="carousel-inner" role="listbox">
								<?php $index = 0; while ( have_rows('carousel_slide') ) : the_row(); ?>
						
								<div class="item <?php echo ($index == 0) ? 'active' : ''; ?>">
									<?php the_sub_field('slide_content'); ?>
								</div>

								<?php $index++; endwhile; ?>
							</div>
						</div>
					</div>

				    <?php endwhile; ?>
				</div>
			<?php endif; ?>

			</section>
	    <?php endwhile; ?>
		</div>
	<?php endif; ?>

	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
