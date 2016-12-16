<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Pharmacy_Express
 * @since Pharmacy Express 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<div class="site-inner">
	
			<header id="masthead" class="site-header" role="banner" style="background-image: url('<?php header_image(); ?>'); background-size: cover;">
				<nav class="navbar navbar-fixed-top background-white-50 no-border-radius" style="height: 135px;">
				  <div class="container">
				    <!-- Brand and toggle get grouped for better xs display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed buffer-margin-50 background-dark-blue" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar background-white"></span>
				        <span class="icon-bar background-white"></span>
				        <span class="icon-bar background-white"></span>
				      </button>
				      <div class="navbar-brand buffer-margin-10">
					      <?php pharmacyexpress_the_custom_logo(); ?>
				      </div>
				    </div>
				
				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse text-dark-blue text-bold background-white-50-mobile" id="navbar-collapse">
						<?php if ( has_nav_menu( 'sub-primary' ) ) : ?>
						<div class="container">
							<?php wp_nav_menu( array(
									'theme_location' => 'sub-primary',
									'menu_class'     => 'nav navbar-nav navbar-right sub-header-menu font-size-120 buffer-padding-10 no-padding-xs text-white-xs font-size-100-mobile text-transform-none-mobile',
								 ) ); ?>
						</div>
						<?php endif; ?>

						<?php if ( has_nav_menu( 'primary' ) ) : ?>
						<div class="container">
							<?php wp_nav_menu( array(
									'theme_location' => 'primary',
									'menu_class'     => 'nav navbar-nav navbar-right primary-menu font-size-150 text-uppercase border-bottom-gold-3 text-white-xs no-border-xs font-size-100-mobile text-transform-none-mobile',
								 ) ); ?>
						</div>
						<?php endif; ?>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>

				<div class="site-header-main container-fluid text-center buffer-padding-top-200 height-100">
					<div class="site-branding">
						<img src="<?php the_field('header_image'); ?>" height="300"></img>
					</div><!-- .site-branding -->
					<span class="text-gold">
						<div class="buffer-margin-100">
							<?php
							$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) : ?>
								<p class="site-description"><?php echo $description; ?></p>
							<?php endif; ?>
						</div>
	
						<div class="buffer-margin-50">
							<a class="skip-link screen-reader-text" href="#content"><?php _e( '<i class="fa fa-angle-double-down fa-5x" aria-hidden="true"></i>', 'pharmacyexpress' ); ?></a>
						</div>
					</span>
				</div><!-- .site-header-main -->
			</header><!-- .site-header -->
	
	
			<div id="content" class="site-content">
