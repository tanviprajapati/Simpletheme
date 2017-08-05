<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter
 */

if ( ! is_active_sidebar( 'sidebar-footer-top' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area sidebar-top">
	<?php dynamic_sidebar( 'sidebar-footer-top' ); ?>
</aside>

<!-- #secondary -->
