<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$header_nav_menu = wp_nav_menu( [
	'theme_location' => 'menu-1',
	'fallback_cb' => false,
	'echo' => false,
] );

$viewport_content = apply_filters( 'hello_elementor_viewport_content', 'width=device-width, initial-scale=1' );
$enable_skip_link = apply_filters( 'hello_elementor_enable_skip_link', true );
$skip_link_url = apply_filters( 'hello_elementor_skip_link_url', '#content' );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="<?php echo esc_attr( $viewport_content ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <script src="<?php echo get_stylesheet_directory_uri() . '/assets/js/menu.js'; ?>"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="container-logo">
  <div>
    <?php if ( $enable_skip_link ) { ?>
      <img class="logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo.png'; ?>" alt="<?php echo esc_attr__( 'logo atypique spa', 'spa' ); ?>" />
    <?php } ?>
  </div>
  <div class="container-menu">
    <div role="button" class="test" id="openBtn">
      <span class="burger-icon">
        <span></span>
        <span></span>
        <span></span>
      </span>
    </div>
    <div class="menu-items">
      <?php if ( $header_nav_menu ) : ?>
        <div class="site-navigation">
          <?php
            // PHPCS - escaped by WordPress with "wp_nav_menu"
            echo $header_nav_menu; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
          ?>
        </div>
	    <?php endif; ?>
    </div>
  </div>
</div>

<?php
if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) {
	get_template_part( 'template-parts/header' );
}
