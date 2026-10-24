<?php


define( 'ELASTRA_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Add theme support for block styles and editor style.
 */
function elastra_setup() {
	add_editor_style( './assets/css/block-styles.css' );

	$styled_blocks = [ 'button', 'latest-comments', 'latest-posts', 'quote' ];
	foreach ( $styled_blocks as $block_name ) {
		$args = array(
			'handle' => "elastra-$block_name",
			'src'    => get_theme_file_uri( "assets/css/blocks-css/$block_name.min.css" ),
			'path'   => get_theme_file_path( "assets/css/blocks-css/$block_name.min.css" ),
		);
		wp_enqueue_block_style( "core/$block_name", $args );
	}

}
add_action( 'after_setup_theme', 'elastra_setup' );

/**
 * Enqueue the CSS files.
 */
function elastra_styles() {
	wp_enqueue_style(
		'elastra-style',
		get_stylesheet_uri(),
		[],
		ELASTRA_VERSION
	);
	wp_enqueue_style(
		'elastra-block-styles',
		get_theme_file_uri( 'assets/css/block-styles.css' ),
		[],
		ELASTRA_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'elastra_styles' );

// Block style examples.
require_once get_theme_file_path( 'include/register-block-styles.php' );

// Setup block patterns
require_once get_theme_file_path( '/include/register-block-patterns.php' );

if ( !function_exists( 'elastra_envo_extra_is_activated' ) ) {
	/**
	 * Query Envo extra activation
	 */
	function elastra_envo_extra_is_activated() {
		return defined( 'ENVO_EXTRA_CURRENT_VERSION' ) ? true : false;
	}
}
/**
 * Register Theme Info Page
 */
require_once( trailingslashit(get_template_directory()) . 'lib/elastra-dashboard.php' );
if ( is_admin() ) {
	require_once( trailingslashit( get_template_directory() ) . 'lib/elastra-plugin-install.php' );
}
if ( elastra_envo_extra_is_activated() ) {
	add_action( 'init', 'envo_extra_dashboard' );
	add_action( 'init', 'envo_extra_recommended_plugins' );
}
