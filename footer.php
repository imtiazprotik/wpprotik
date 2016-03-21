<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package wpprotik
 */

?>

</div><!-- end row -->
</div><!-- #content -->

<footer id="colophon" class="site-footer container" role="contentinfo">
	<div class="container">
			<div class="row">

			<?php get_sidebar( 'footer' ); ?>


				<div class="col-md-6">
					<div class="site-info">
						&copy; copywights by<?php echo date('Y') ?> <a href="<?php echo home_url(); ?>"><?php bloginfo('name');?></a>
					</div><!-- .site-info -->
				</div>
				<div class="col-md-6">
					<?php
						wp_nav_menu( array(
							'menu'              => 'footer',
							'theme_location'    => 'footer',
							'depth'             => 1,
							'container'         => 'div',
							'container_class'   => '',
							'container_id'      => '',
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker())
						);
						?>
				</div>
			</div>
		</div>
	
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
