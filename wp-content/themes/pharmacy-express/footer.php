<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Pharmacy_Express
 * @since Pharmacy Express 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer background-light-blue" role="contentinfo">
			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'pharmacyexpress' ); ?>">
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

			<div class="site-info container buffer-padding-50">
				<?php
					/**
					 * Fires before the pharmacyexpress footer text for footer customization.
					 *
					 * @since Pharmacy Express 1.0
					 */
					do_action( 'pharmacyexpress_credits' );
				?>

				<div class="col-md-5">
					<span class="site-title"><a class="text-gold text-bold text-bitter font-size-150 text-decoration-none" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Copyright <?php bloginfo( 'name' ); ?> &copy; <?php echo date("Y"); ?></a></span>
				</div>

				<div class="col-md-4 col-md-offset-3">
					<img src="<?php the_field('footer_logo', 'option'); ?>" width="300"></img>
				</div>
			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
