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
		add_theme_support( 'woocommerce' );

	}
}
add_action( 'after_setup_theme', 'frost_woocommerce_setup' );
