<?php
/**
 * Hostorio Theme Functions
 *
 * @package Hostorio
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'HOSTORIO_VERSION', '1.0.0' );
define( 'HOSTORIO_DIR', get_template_directory() );
define( 'HOSTORIO_URI', get_template_directory_uri() );

/* ───────────────────────────────────────────
   Theme Setup
   ─────────────────────────────────────────── */
add_action( 'after_setup_theme', 'hostorio_setup' );
function hostorio_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
    ) );
}

/* ───────────────────────────────────────────
   Enqueue Styles & Scripts
   ─────────────────────────────────────────── */
add_action( 'wp_enqueue_scripts', 'hostorio_enqueue_assets' );
function hostorio_enqueue_assets() {
    // Styles
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', array(), '6.5.2' );
    wp_enqueue_style( 'hostorio-main', HOSTORIO_URI . '/assets/css/styles.css', array( 'font-awesome' ), HOSTORIO_VERSION );
    wp_enqueue_style( 'hostorio-style', get_stylesheet_uri(), array( 'hostorio-main' ), HOSTORIO_VERSION );

    // Translation scripts (load in footer, order matters)
    wp_enqueue_script( 'hostorio-translations-init', HOSTORIO_URI . '/assets/js/translations.js', array(), HOSTORIO_VERSION, true );
    wp_enqueue_script( 'hostorio-trans-header', HOSTORIO_URI . '/assets/js/translations/header-footer/header.js', array( 'hostorio-translations-init' ), HOSTORIO_VERSION, true );

    // Page-specific translations
    hostorio_enqueue_page_translations();

    wp_enqueue_script( 'hostorio-trans-footer', HOSTORIO_URI . '/assets/js/translations/header-footer/footer.js', array( 'hostorio-translations-init' ), HOSTORIO_VERSION . '.2', true );
    wp_enqueue_script( 'hostorio-i18n', HOSTORIO_URI . '/assets/js/i18n.js', array( 'hostorio-translations-init', 'hostorio-trans-footer' ), HOSTORIO_VERSION, true );

    // Pass admin settings to i18n
    $options = get_option( 'hostorio_settings', array() );
    $exchange_rate = isset( $options['exchange_rate'] ) ? floatval( $options['exchange_rate'] ) : 125;
    wp_localize_script( 'hostorio-i18n', 'hostorioSettings', array(
        'exchangeRate' => $exchange_rate,
        'themeUri'     => HOSTORIO_URI,
    ) );

    // Core scripts
    wp_enqueue_script( 'hostorio-header', HOSTORIO_URI . '/assets/js/header.js', array(), HOSTORIO_VERSION, true );
    wp_enqueue_script( 'hostorio-utils', HOSTORIO_URI . '/assets/js/utils.js', array( 'hostorio-i18n' ), HOSTORIO_VERSION, true );
    wp_enqueue_script( 'hostorio-pricing', HOSTORIO_URI . '/assets/js/pricing.js', array(), HOSTORIO_VERSION, true );
    wp_enqueue_script( 'hostorio-billing', HOSTORIO_URI . '/assets/js/billing.js', array( 'hostorio-i18n' ), HOSTORIO_VERSION, true );
    wp_enqueue_script( 'hostorio-animations', HOSTORIO_URI . '/assets/js/animations.js', array(), HOSTORIO_VERSION, true );
    wp_enqueue_script( 'hostorio-main', HOSTORIO_URI . '/assets/js/main.js', array( 'hostorio-billing', 'hostorio-animations' ), HOSTORIO_VERSION, true );

    // Countdown only on offer page
    if ( is_page_template( 'page-templates/page-offer.php' ) ) {
        wp_enqueue_script( 'hostorio-countdown', HOSTORIO_URI . '/assets/js/countdown.js', array(), HOSTORIO_VERSION, true );
    }
}

/**
 * Enqueue page-specific translation files based on current template.
 */
function hostorio_enqueue_page_translations() {
    $deps = array( 'hostorio-translations-init' );
    $v    = HOSTORIO_VERSION;

    if ( is_front_page() || is_page_template( 'page-templates/page-home.php' ) ) {
        wp_enqueue_script( 'hostorio-trans-home-hero', HOSTORIO_URI . '/assets/js/translations/Home/hero.js', $deps, $v, true );
        wp_enqueue_script( 'hostorio-trans-home-pricing', HOSTORIO_URI . '/assets/js/translations/Home/pricing.js', $deps, $v, true );
        wp_enqueue_script( 'hostorio-trans-home-domain', HOSTORIO_URI . '/assets/js/translations/Home/domain.js', $deps, $v, true );
        wp_enqueue_script( 'hostorio-trans-home-services', HOSTORIO_URI . '/assets/js/translations/Home/services.js', $deps, $v, true );
        wp_enqueue_script( 'hostorio-trans-home-wordpress', HOSTORIO_URI . '/assets/js/translations/Home/wordpress.js', $deps, $v, true );
        wp_enqueue_script( 'hostorio-trans-home-support', HOSTORIO_URI . '/assets/js/translations/Home/support.js', $deps, $v, true );
        return;
    }

    // Package-style pages share many common translation files
    $package_pages = array(
        'page-templates/page-web-hosting.php',
        'page-templates/page-turbo-hosting.php',
        'page-templates/page-reseller-hosting.php',
        'page-templates/page-student-hosting.php',
        'page-templates/page-vps.php',
        'page-templates/page-business-email.php',
        'page-templates/page-package.php',
        'page-templates/page-offer.php',
    );

    $current_template = get_page_template_slug();
    if ( in_array( $current_template, $package_pages, true ) ) {
        wp_enqueue_script( 'hostorio-trans-pkg-hero', HOSTORIO_URI . '/assets/js/translations/Package/hero.js', $deps, $v, true );
        wp_enqueue_script( 'hostorio-trans-pkg-pricing', HOSTORIO_URI . '/assets/js/translations/Package/pricing.js', $deps, $v, true );
        wp_enqueue_script( 'hostorio-trans-pkg-features', HOSTORIO_URI . '/assets/js/translations/Package/features.js', $deps, $v, true );
        wp_enqueue_script( 'hostorio-trans-pkg-comparison', HOSTORIO_URI . '/assets/js/translations/Package/comparison.js', $deps, $v, true );
        wp_enqueue_script( 'hostorio-trans-pkg-testimonial', HOSTORIO_URI . '/assets/js/translations/Package/testimonial.js', $deps, $v, true );
        wp_enqueue_script( 'hostorio-trans-pkg-faq', HOSTORIO_URI . '/assets/js/translations/Package/faq.js', $deps, $v, true );
        wp_enqueue_script( 'hostorio-trans-pkg-wordpress', HOSTORIO_URI . '/assets/js/translations/Package/wordpress.js', $deps, $v, true );
        wp_enqueue_script( 'hostorio-trans-pkg-support', HOSTORIO_URI . '/assets/js/translations/Package/support.js', $deps, $v, true );
    }

    // Page-specific pricing overrides
    $specific_translations = array(
        'page-templates/page-turbo-hosting.php'    => 'turbo-hosting/pricing',
        'page-templates/page-reseller-hosting.php'  => 'reseller-hosting/pricing',
        'page-templates/page-student-hosting.php'   => 'student-hosting/pricing',
        'page-templates/page-vps.php'               => 'vps/pricing',
        'page-templates/page-business-email.php'    => 'business-email/pricing',
        'page-templates/page-offer.php'             => 'offer/pricing',
    );

    if ( isset( $specific_translations[ $current_template ] ) ) {
        $path = $specific_translations[ $current_template ];
        $handle = 'hostorio-trans-' . sanitize_title( $path );
        wp_enqueue_script( $handle, HOSTORIO_URI . '/assets/js/translations/' . $path . '.js', $deps, $v, true );
    }

    // Legal pages
    if ( $current_template === 'page-templates/page-terms.php' ) {
        wp_enqueue_script( 'hostorio-trans-terms', HOSTORIO_URI . '/assets/js/translations/terms-and-conditions/terms.js', $deps, $v, true );
    }
    if ( $current_template === 'page-templates/page-privacy.php' ) {
        wp_enqueue_script( 'hostorio-trans-privacy', HOSTORIO_URI . '/assets/js/translations/privacy-policy/privacy.js', $deps, $v, true );
    }
}

/* ───────────────────────────────────────────
   Remove WordPress default items for clean output
   ─────────────────────────────────────────── */
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );

/* ───────────────────────────────────────────
   Customizer Settings
   ─────────────────────────────────────────── */
add_action( 'customize_register', 'hostorio_customizer' );
function hostorio_customizer( $wp_customize ) {

    // Business Info Section
    $wp_customize->add_section( 'hostorio_business', array(
        'title'    => __( 'Business Information', 'hostorio' ),
        'priority' => 30,
    ) );

    $fields = array(
        'business_name'    => array( 'Business Name', 'Hostorio' ),
        'business_phone'   => array( 'Phone Number', '+8801779440297' ),
        'business_email'   => array( 'Email Address', 'mail@hostorio.com' ),
        'business_address' => array( 'Street Address', 'H-161, OABDA SOROK MATHBARIA' ),
        'business_city'    => array( 'City / Region', 'Kanchan, Rupganj, Narayanganj' ),
        'client_area_url'  => array( 'Client Area URL', 'https://my.hostorio.com/' ),
    );

    foreach ( $fields as $id => $info ) {
        $wp_customize->add_setting( 'hostorio_' . $id, array(
            'default'           => $info[1],
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        ) );
        $wp_customize->add_control( 'hostorio_' . $id, array(
            'label'   => $info[0],
            'section' => 'hostorio_business',
            'type'    => 'text',
        ) );
    }

    // Social Media Section
    $wp_customize->add_section( 'hostorio_social', array(
        'title'    => __( 'Social Media Links', 'hostorio' ),
        'priority' => 35,
    ) );

    $socials = array(
        'facebook'  => array( 'Facebook URL', 'https://www.facebook.com/hostorio' ),
        'twitter'   => array( 'Twitter/X URL', 'https://x.com/hostorio' ),
        'youtube'   => array( 'YouTube URL', 'https://www.youtube.com/@arifbillahcse' ),
        'linkedin'  => array( 'LinkedIn URL', 'https://www.linkedin.com/company/hostorio/' ),
    );

    foreach ( $socials as $id => $info ) {
        $wp_customize->add_setting( 'hostorio_social_' . $id, array(
            'default'           => $info[1],
            'sanitize_callback' => 'esc_url_raw',
            'transport'         => 'refresh',
        ) );
        $wp_customize->add_control( 'hostorio_social_' . $id, array(
            'label'   => $info[0],
            'section' => 'hostorio_social',
            'type'    => 'url',
        ) );
    }

    // Header Section
    $wp_customize->add_section( 'hostorio_header', array(
        'title'    => __( 'Header Settings', 'hostorio' ),
        'priority' => 25,
    ) );

    $wp_customize->add_setting( 'hostorio_logo_url', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hostorio_logo_url', array(
        'label'   => __( 'Site Logo', 'hostorio' ),
        'section' => 'hostorio_header',
    ) ) );

    // Footer Section
    $wp_customize->add_section( 'hostorio_footer', array(
        'title'    => __( 'Footer Settings', 'hostorio' ),
        'priority' => 40,
    ) );

    $wp_customize->add_setting( 'hostorio_footer_description', array(
        'default'           => 'Hostorio is a popular web hosting services provider. Hostorio provides Shared Hosting, Business Hosting, Reseller Hosting, VPS, and domain Registration-Transfer services.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'hostorio_footer_description', array(
        'label'   => __( 'Footer Description', 'hostorio' ),
        'section' => 'hostorio_footer',
        'type'    => 'textarea',
    ) );

    $wp_customize->add_setting( 'hostorio_copyright', array(
        'default'           => '&copy; ' . date( 'Y' ) . ' Hostorio. All Rights Reserved.',
        'sanitize_callback' => 'wp_kses_post',
    ) );
    $wp_customize->add_control( 'hostorio_copyright', array(
        'label'   => __( 'Copyright Text', 'hostorio' ),
        'section' => 'hostorio_footer',
        'type'    => 'text',
    ) );
}

/* ───────────────────────────────────────────
   Helper: get customizer value with default
   ─────────────────────────────────────────── */
function hostorio_get( $key, $default = '' ) {
    return get_theme_mod( 'hostorio_' . $key, $default );
}

/* ───────────────────────────────────────────
   Allow SEO plugins to manage head
   ─────────────────────────────────────────── */
add_theme_support( 'yoast-seo-breadcrumbs' );

/* ───────────────────────────────────────────
   Include Admin Panel
   ─────────────────────────────────────────── */
require_once HOSTORIO_DIR . '/inc/admin-settings.php';
require_once HOSTORIO_DIR . '/inc/theme-activation.php';

/* ───────────────────────────────────────────
   Schema.org output helper
   ─────────────────────────────────────────── */
function hostorio_schema_json( $schema ) {
    echo '<script type="application/ld+json">' . "\n";
    echo wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT );
    echo "\n</script>\n";
}

/* ───────────────────────────────────────────
   Page slug to template mapping for navigation
   ─────────────────────────────────────────── */
function hostorio_page_url( $slug ) {
    $page = get_page_by_path( $slug );
    if ( $page ) {
        return get_permalink( $page );
    }
    return home_url( '/' . $slug . '/' );
}
