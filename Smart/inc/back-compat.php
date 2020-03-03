<?php
/**
 * Smart back compat functionality
 *
 * Prevents Smart from running on WordPress versions prior to 4.1,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.1.
 *
 * @package WordPress
 * @subpackage Smart
 * @since SMART 1.0
 */

/**
 * Prevent switching to Smart on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since SMART 1.0
 */
function Smart_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'Smart_upgrade_notice' );
}
add_action( 'after_switch_theme', 'Smart_switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Smart on WordPress versions prior to 4.1.
 *
 * @since SMART 1.0
 */
function Smart_upgrade_notice() {
	$message = sprintf( __( 'Smart requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'Smart' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevent the Customizer from being loaded on WordPress versions prior to 4.1.
 *
 * @since SMART 1.0
 */
function Smart_customize() {
	wp_die( sprintf( __( 'Smart requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'Smart' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'Smart_customize' );

/**
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 4.1.
 *
 * @since SMART 1.0
 */
function Smart_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Smart requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'Smart' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'Smart_preview' );
