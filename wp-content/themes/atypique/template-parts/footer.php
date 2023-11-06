<?php
/**
 * The template for displaying footer.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$footer_nav_menu = wp_nav_menu( [
	'theme_location' => 'menu-2',
	'fallback_cb' => false,
	'echo' => false,
] );
?>
<footer id="site-footer" class="site-footer" role="contentinfo">
	<div class="site-footer__logo">
    <img class="logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo-footer.png'; ?>" alt="<?php echo esc_attr__( 'logo atypique spa', 'spa' ); ?>" />
  </div>
</footer>
