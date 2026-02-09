<?php
/**
 * Hostorio Hosting Theme functions and definitions
 *
 * @package Hosting_Theme
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Define theme constants.
 */
define( 'HOSTING_THEME_VERSION', '1.0.0' );
define( 'HOSTING_THEME_DIR', get_template_directory() );
define( 'HOSTING_THEME_URI', get_template_directory_uri() );

/**
 * Include theme modules.
 */
require_once HOSTING_THEME_DIR . '/inc/custom-post-types.php';
require_once HOSTING_THEME_DIR . '/inc/acf-fields.php';
require_once HOSTING_THEME_DIR . '/inc/polylang-strings.php';

/**
 * Theme setup.
 *
 * Sets up theme defaults and registers support for various WordPress features.
 */
function hosting_theme_setup() {
	// Make theme available for translation.
	load_theme_textdomain( 'hosting-theme', HOSTING_THEME_DIR . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Switch default core markup to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	) );

	// Add support for custom logo.
	add_theme_support( 'custom-logo', array(
		'height'      => 60,
		'width'       => 200,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	// Register navigation menus.
	register_nav_menus( array(
		'primary'     => esc_html__( 'Primary Navigation', 'hosting-theme' ),
		'footer'      => esc_html__( 'Footer Navigation', 'hosting-theme' ),
		'quick-links' => esc_html__( 'Quick Links', 'hosting-theme' ),
	) );
}
add_action( 'after_setup_theme', 'hosting_theme_setup' );

/**
 * Enqueue styles and scripts.
 */
function hosting_theme_scripts() {
	// Font Awesome 6.
	wp_enqueue_style(
		'font-awesome',
		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css',
		array(),
		'6.5.2'
	);

	// Main theme stylesheet (extracted from HTML).
	wp_enqueue_style(
		'hosting-theme-main',
		HOSTING_THEME_URI . '/assets/css/theme.css',
		array( 'font-awesome' ),
		HOSTING_THEME_VERSION
	);

	// WordPress default stylesheet (theme header).
	wp_enqueue_style(
		'hosting-theme-style',
		get_stylesheet_uri(),
		array( 'hosting-theme-main' ),
		HOSTING_THEME_VERSION
	);

	// Header navigation script.
	wp_enqueue_script(
		'hosting-theme-header',
		HOSTING_THEME_URI . '/assets/js/header.js',
		array(),
		HOSTING_THEME_VERSION,
		true
	);

	// Utilities (language/currency switcher).
	wp_enqueue_script(
		'hosting-theme-utils',
		HOSTING_THEME_URI . '/assets/js/utils.js',
		array(),
		HOSTING_THEME_VERSION,
		true
	);

	// Pricing module.
	wp_enqueue_script(
		'hosting-theme-pricing',
		HOSTING_THEME_URI . '/assets/js/pricing.js',
		array(),
		HOSTING_THEME_VERSION,
		true
	);

	// Animations and interactive components (FAQ, testimonials).
	wp_enqueue_script(
		'hosting-theme-animations',
		HOSTING_THEME_URI . '/assets/js/animations.js',
		array(),
		HOSTING_THEME_VERSION,
		true
	);

	// Main entry point script.
	wp_enqueue_script(
		'hosting-theme-main',
		HOSTING_THEME_URI . '/assets/js/main.js',
		array(
			'hosting-theme-header',
			'hosting-theme-utils',
			'hosting-theme-pricing',
			'hosting-theme-animations',
		),
		HOSTING_THEME_VERSION,
		true
	);

	// Currency switcher (BDT ↔ USD toggle without reload).
	wp_enqueue_script(
		'hosting-theme-currency',
		HOSTING_THEME_URI . '/assets/js/currency-switcher.js',
		array(),
		HOSTING_THEME_VERSION,
		true
	);

	// Pass exchange rate and default currency to JS.
	$exchange_rate     = 0.0091;
	$default_currency  = 'BDT';
	if ( function_exists( 'get_field' ) ) {
		$saved_rate = get_field( 'exchange_rate', 'option' );
		if ( ! empty( $saved_rate ) ) {
			$exchange_rate = (float) $saved_rate;
		}
		$saved_currency = get_field( 'default_currency', 'option' );
		if ( ! empty( $saved_currency ) ) {
			$default_currency = $saved_currency;
		}
	}
	wp_localize_script( 'hosting-theme-currency', 'hostingCurrency', array(
		'rate'            => $exchange_rate,
		'defaultCurrency' => $default_currency,
	) );
}
add_action( 'wp_enqueue_scripts', 'hosting_theme_scripts' );

/**
 * Register widget areas.
 */
function hosting_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area', 'hosting-theme' ),
		'id'            => 'footer-widgets',
		'description'   => esc_html__( 'Add widgets here to appear in the footer.', 'hosting-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'hosting_theme_widgets_init' );

/**
 * Register ACF Options page for global theme settings.
 *
 * Provides a "Theme Settings" submenu under the top-level
 * Hosting Plans menu for managing exchange rate, company info,
 * contact details, and social media links.
 */
function hosting_theme_acf_options_page() {
	if ( ! function_exists( 'acf_add_options_page' ) ) {
		return;
	}

	acf_add_options_page( array(
		'page_title' => __( 'Theme Settings', 'hosting-theme' ),
		'menu_title' => __( 'Theme Settings', 'hosting-theme' ),
		'menu_slug'  => 'theme-settings',
		'capability' => 'manage_options',
		'redirect'   => false,
		'icon_url'   => 'dashicons-admin-generic',
		'position'   => 59,
	) );
}
add_action( 'acf/init', 'hosting_theme_acf_options_page' );

/**
 * Helper: get USD price from BDT using the exchange rate.
 *
 * If a manual USD price is provided it is returned as-is.
 * Otherwise the BDT amount is converted using the exchange
 * rate stored in Theme Settings.
 *
 * @param  float      $bdt_price  Price in BDT.
 * @param  float|null $usd_price  Manual USD override (or null/0).
 * @return float
 */
function hosting_theme_get_usd_price( $bdt_price, $usd_price = null ) {
	if ( ! empty( $usd_price ) ) {
		return (float) $usd_price;
	}

	$rate = 0.0091; // Fallback default.
	if ( function_exists( 'get_field' ) ) {
		$saved_rate = get_field( 'exchange_rate', 'option' );
		if ( ! empty( $saved_rate ) ) {
			$rate = (float) $saved_rate;
		}
	}

	return round( (float) $bdt_price * $rate, 2 );
}
