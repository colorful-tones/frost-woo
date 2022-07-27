<?php
/**
 * This file adds functions to the Frost WooCommerce theme.
 *
 * @package Frost-WooCommerce
 * @author  WP Engine
 * @license GNU General Public License v2 or later
 * @link    https://frostwp.com/
 */

if ( ! function_exists( 'frost_woocommerce_setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WooCommerce features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 * 
	 * @link https://woocommerce.com/document/woocommerce-theme-developer-handbook/
	 *
	 * @since 0.0.1
	 *
	 * @return void
	 */
	function frost_woocommerce_setup() {

		// Register WooCommerce theme features.
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
		add_theme_support( 
			'woocommerce',
			array(
				'thumbnail_image_width' => 400,
				'single_image_width'    => 600,
			)
		);
	}
}
add_action( 'after_setup_theme', 'frost_woocommerce_setup' );

if ( ! function_exists( 'is_woocommerce_activated' ) ) {
	// This theme does not have a traditional sidebar.
	remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

	/**
	 * Alter the queue for WooCommerce styles and scripts.
	 *
	 * @since 0.0.1
	 *
	 * @param array $styles Array of registered styles.
	 *
	 * @return array
	 */
	function frost_woocommerce_enqueue_styles( $styles ) {
		// Get a theme version for cache busting.
		$theme_version = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		// Add Frost's WooCommerce styles.
		$styles['frost-woocommerce'] = array(
			'src'     => get_stylesheet_directory_uri() . '/assets/css/woocommerce.css',
			'deps'    => '',
			'version' => $version_string,
			'media'   => 'all',
			'has_rtl' => true,
		);

		return apply_filters( 'woocommerce_frost_styles', $styles );
	}
	add_filter( 'woocommerce_enqueue_styles', 'frost_woocommerce_enqueue_styles' );
}