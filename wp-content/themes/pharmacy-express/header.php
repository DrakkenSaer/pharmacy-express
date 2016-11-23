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
				<nav class="navbar background-white-30 no-border-radius" style="height: 200px;">
				  <div class="container">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <div class="navbar-brand">
					      <?php pharmacyexpress_the_custom_logo(); ?>
				      </div>
				    </div>
				
				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="navbar-collapse">
						<?php if ( has_nav_menu( 'sub-primary' ) ) : ?>
						<div class="width-100">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'sub-primary',
									'menu_class'     => 'nav navbar-nav navbar-right sub-header-menu text-white font-size-120',
								 ) );
							?>
						</div>
						<?php endif; ?>

						<?php if ( has_nav_menu( 'primary' ) ) : ?>
						<div class="width-100">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'primary',
									'menu_class'     => 'nav navbar-nav navbar-right primary-menu text-white font-size-200 text-uppercase',
								 ) );
							?>
						</div>
						<?php endif; ?>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>

				<div class="site-header-main">
					<div class="site-branding">
						<?php
						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $description; ?></p>
						<?php endif; ?>
					</div><!-- .site-branding -->
	
					<?php if ( has_nav_menu( 'social' ) ) : ?>
						<button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'pharmacyexpress' ); ?></button>
	
						<div id="site-header-menu" class="site-header-menu">
	
							<?php if ( has_nav_menu( 'social' ) ) : ?>
								<nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'pharmacyexpress' ); ?>">
									<?php
										wp_nav_menu( array(
											'theme_location' => 'social',
											'menu_class'     => 'social-links-menu',
											'depth'          => 1,
											'link_before'    => '<span class="screen-reader-text">',
											'link_after'     => '</span>',
										) );
									?>
								</nav><!-- .social-navigation -->
							<?php endif; ?>
						</div><!-- .site-header-menu -->
					<?php endif; ?>
				</div><!-- .site-header-main -->
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'pharmacyexpress' ); ?></a>
			</header><!-- .site-header -->
	
	
			<div id="content" class="site-content">
