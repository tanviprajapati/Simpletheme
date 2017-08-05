<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	<div class="content" >
	<?php if (is_active_sidebar( 'sidebar-footer-bottom' ) )   ?>
		<aside id="secondary" class="widget-area sidebar-bottom">
			<?php dynamic_sidebar( 'sidebar-footer-bottom' ); ?>
		</aside>
	<? endif; ?>

		<div class="footer-bottom">
		<div class="site-info">
			<div class="copyright">
				<?php printf( esc_html__( 'Copyright %1$s. All Rights Reserved.', 'starter' ), '<a href="'. get_site_url().'">'.get_bloginfo( 'name' ).'</a>' ); ?>
			</div>
			<div class="description">
			
				<?	$description = get_bloginfo( 'description' );
				if ( $description ) ?>
					<?php echo get_bloginfo( 'description' ); ?>
				<? endif; ?>	
			</div>
			<div class="clear"></div>
		</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
