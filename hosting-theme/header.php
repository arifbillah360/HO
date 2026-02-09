<?php
/**
 * The header template for the Hostorio theme.
 *
 * Displays the top info bar, main navigation header, and mobile navigation drawer.
 *
 * @package Hosting_Theme
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ===========================
     TOP INFO BAR
     =========================== -->
<div class="top-info-bar">
    <div class="container-wrapper">
        <div class="top-bar-content">
            <div class="top-left-links">
                <a href="<?php echo esc_url( home_url( '/help-center/' ) ); ?>" class="info-link">
                    <i class="fas fa-question-circle"></i>
                    <span><?php esc_html_e( 'Help Center', 'hosting-theme' ); ?></span>
                </a>
                <a href="tel:+8801779440297" class="info-link">
                    <i class="fas fa-phone-alt"></i>
                    <span>+8801779440297</span>
                </a>
                <?php if ( function_exists( 'pll_the_languages' ) ) : ?>
                <!-- Polylang Language Switcher -->
                <div class="language-selector" id="pllLanguageSelector">
                    <?php
                    // Get current language info.
                    $pll_current = pll_current_language( 'slug' );
                    $pll_langs   = pll_the_languages( array(
                        'raw'                 => 1,
                        'show_flags'          => 1,
                        'show_names'          => 1,
                        'hide_current'        => 0,
                        'hide_if_no_translation' => 0,
                    ) );

                    if ( ! empty( $pll_langs ) ) :
                        // Display current language as the selector trigger.
                        $current_lang = isset( $pll_langs[ $pll_current ] ) ? $pll_langs[ $pll_current ] : reset( $pll_langs );
                    ?>
                        <?php echo $current_lang['flag']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- HTML from Polylang ?>
                        <span><?php echo esc_html( $current_lang['name'] ); ?></span>
                        <i class="fas fa-chevron-down"></i>

                        <div class="language-dropdown-menu">
                            <?php foreach ( $pll_langs as $lang ) : ?>
                                <a href="<?php echo esc_url( $lang['url'] ); ?>"
                                   class="language-option<?php echo $lang['current_lang'] ? ' active' : ''; ?>"
                                   data-language="<?php echo esc_attr( $lang['slug'] ); ?>"
                                   hreflang="<?php echo esc_attr( $lang['slug'] ); ?>">
                                    <?php echo $lang['flag']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                                    <span><?php echo esc_html( $lang['name'] ); ?></span>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <?php else : ?>
                <!-- Static Language Selector (Polylang not active) -->
                <div class="language-selector">
                    <img src="<?php echo esc_url( HOSTING_THEME_URI . '/assets/images/flags/us.png' ); ?>" alt="<?php esc_attr_e( 'English', 'hosting-theme' ); ?>" class="flag-icon">
                    <span><?php esc_html_e( 'English', 'hosting-theme' ); ?></span>
                    <i class="fas fa-chevron-down"></i>

                    <div class="language-dropdown-menu">
                        <button class="language-option active" data-language="en" data-flag="<?php echo esc_url( HOSTING_THEME_URI . '/assets/images/flags/us.png' ); ?>">
                            <img src="<?php echo esc_url( HOSTING_THEME_URI . '/assets/images/flags/us.png' ); ?>" alt="<?php esc_attr_e( 'English', 'hosting-theme' ); ?>" class="flag-icon">
                            <span><?php esc_html_e( 'English', 'hosting-theme' ); ?></span>
                        </button>
                        <button class="language-option" data-language="bn" data-flag="<?php echo esc_url( HOSTING_THEME_URI . '/assets/images/flags/bd.png' ); ?>">
                            <img src="<?php echo esc_url( HOSTING_THEME_URI . '/assets/images/flags/bd.png' ); ?>" alt="Bangla" class="flag-icon">
                            <span>বাংলা</span>
                        </button>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <div class="top-right-links">
                <!-- Desktop Currency Switcher -->
                <div class="currency-switcher desktop-currency">
                    <button class="currency-btn active" data-currency="BDT">
                        <i class="fas fa-bangladeshi-taka-sign"></i>
                        <span>BDT</span>
                    </button>
                    <span class="currency-divider">|</span>
                    <button class="currency-btn" data-currency="USD">
                        <i class="fas fa-dollar-sign"></i>
                        <span>USD</span>
                    </button>
                </div>

                <!-- Mobile Currency Dropdown -->
                <div class="currency-dropdown mobile-currency">
                    <button class="currency-dropdown-btn" id="currencyDropdownBtn">
                        <i class="fas fa-bangladeshi-taka-sign"></i>
                        <span class="current-currency">BDT</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="currency-dropdown-menu" id="currencyDropdownMenu">
                        <button class="currency-option active" data-currency="BDT">
                            <i class="fas fa-bangladeshi-taka-sign"></i>
                            <span>BDT</span>
                        </button>
                        <button class="currency-option" data-currency="USD">
                            <i class="fas fa-dollar-sign"></i>
                            <span>USD</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ===========================
     MAIN NAVIGATION HEADER
     =========================== -->
<header class="main-header">
    <div class="container-wrapper">
        <div class="header-content">
            <!-- Logo (Left) -->
            <div class="brand-logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo esc_url( HOSTING_THEME_URI . '/assets/images/logo/hostorio-logo.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="logo-image">
                </a>
            </div>

            <!-- Desktop Navigation (Center on Desktop) -->
            <nav class="primary-nav desktop-nav">
                <ul class="nav-menu">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-item"><?php esc_html_e( 'Home', 'hosting-theme' ); ?></a></li>
                    <li class="nav-item-dropdown">
                        <a href="#" class="nav-item">
                            <?php esc_html_e( 'Web Hosting', 'hosting-theme' ); ?>
                            <i class="fas fa-chevron-down dropdown-arrow"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo esc_url( home_url( '/package/' ) ); ?>" class="dropdown-item">
                                <i class="fab fa-wordpress"></i>
                                <span><?php esc_html_e( 'Package', 'hosting-theme' ); ?></span>
                            </a></li>
                            <li><a href="<?php echo esc_url( home_url( '/wordpress-hosting/' ) ); ?>" class="dropdown-item">
                                <i class="fab fa-wordpress"></i>
                                <span><?php esc_html_e( 'WordPress Hosting', 'hosting-theme' ); ?></span>
                            </a></li>
                            <li><a href="<?php echo esc_url( home_url( '/turbo-hosting/' ) ); ?>" class="dropdown-item">
                                <i class="fas fa-bolt"></i>
                                <span><?php esc_html_e( 'Turbo Hosting', 'hosting-theme' ); ?></span>
                            </a></li>
                            <li><a href="<?php echo esc_url( home_url( '/reseller-hosting/' ) ); ?>" class="dropdown-item">
                                <i class="fas fa-store"></i>
                                <span><?php esc_html_e( 'Reseller Hosting', 'hosting-theme' ); ?></span>
                            </a></li>
                            <li><a href="<?php echo esc_url( home_url( '/student-hosting/' ) ); ?>" class="dropdown-item">
                                <i class="fas fa-graduation-cap"></i>
                                <span><?php esc_html_e( 'Student Hosting', 'hosting-theme' ); ?></span>
                            </a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo esc_url( home_url( '/business-email/' ) ); ?>" class="nav-item"><?php esc_html_e( 'Business Email', 'hosting-theme' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/vps-hosting/' ) ); ?>" class="nav-item"><?php esc_html_e( 'VPS', 'hosting-theme' ); ?></a></li>
                    <li class="nav-item-dropdown">
                        <a href="<?php echo esc_url( home_url( '/domain-registration/' ) ); ?>" class="nav-item">
                            <?php esc_html_e( 'Domain', 'hosting-theme' ); ?>
                            <i class="fas fa-chevron-down dropdown-arrow"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo esc_url( home_url( '/domain-registration/' ) ); ?>" class="dropdown-item">
                                <i class="fas fa-search"></i>
                                <span><?php esc_html_e( 'Domain Search', 'hosting-theme' ); ?></span>
                            </a></li>
                            <li><a href="<?php echo esc_url( home_url( '/domain-transfer/' ) ); ?>" class="dropdown-item">
                                <i class="fas fa-exchange-alt"></i>
                                <span><?php esc_html_e( 'Domain Transfer', 'hosting-theme' ); ?></span>
                            </a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="nav-item"><?php esc_html_e( 'Offer', 'hosting-theme' ); ?></a></li>
                </ul>
            </nav>

            <!-- Mobile My Account Button (Center on Mobile) -->
            <div class="mobile-account-center">
                <a href="#" class="account-btn"><?php esc_html_e( 'My Account', 'hosting-theme' ); ?></a>
            </div>

            <!-- Right Side -->
            <div class="header-right">
                <!-- Desktop My Account Button -->
                <a href="#" class="account-btn desktop-account"><?php esc_html_e( 'My Account', 'hosting-theme' ); ?></a>

                <!-- Mobile Menu Toggle -->
                <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="<?php esc_attr_e( 'Toggle Menu', 'hosting-theme' ); ?>">
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                </button>
            </div>
        </div>
    </div>
</header>

<!-- ===========================
     MOBILE NAVIGATION DRAWER
     =========================== -->
<nav class="primary-nav mobile-nav" id="mobileNav">
    <ul class="nav-menu">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-item"><?php esc_html_e( 'Home', 'hosting-theme' ); ?></a></li>
        <li class="nav-item-dropdown">
            <a href="#" class="nav-item mobile-dropdown-trigger">
                <?php esc_html_e( 'Web Hosting', 'hosting-theme' ); ?>
                <i class="fas fa-chevron-down dropdown-arrow"></i>
            </a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo esc_url( home_url( '/wordpress-hosting/' ) ); ?>" class="dropdown-item">
                    <i class="fab fa-wordpress"></i>
                    <span><?php esc_html_e( 'WordPress Hosting', 'hosting-theme' ); ?></span>
                </a></li>
                <li><a href="<?php echo esc_url( home_url( '/turbo-hosting/' ) ); ?>" class="dropdown-item">
                    <i class="fas fa-bolt"></i>
                    <span><?php esc_html_e( 'Turbo Hosting', 'hosting-theme' ); ?></span>
                </a></li>
                <li><a href="<?php echo esc_url( home_url( '/reseller-hosting/' ) ); ?>" class="dropdown-item">
                    <i class="fas fa-store"></i>
                    <span><?php esc_html_e( 'Reseller Hosting', 'hosting-theme' ); ?></span>
                </a></li>
                <li><a href="<?php echo esc_url( home_url( '/student-hosting/' ) ); ?>" class="dropdown-item">
                    <i class="fas fa-graduation-cap"></i>
                    <span><?php esc_html_e( 'Student Hosting', 'hosting-theme' ); ?></span>
                </a></li>
            </ul>
        </li>
        <li><a href="<?php echo esc_url( home_url( '/business-email/' ) ); ?>" class="nav-item"><?php esc_html_e( 'Business Email', 'hosting-theme' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/vps-hosting/' ) ); ?>" class="nav-item"><?php esc_html_e( 'VPS', 'hosting-theme' ); ?></a></li>
        <li class="nav-item-dropdown">
            <a href="<?php echo esc_url( home_url( '/domain-registration/' ) ); ?>" class="nav-item mobile-dropdown-trigger">
                <?php esc_html_e( 'Domain', 'hosting-theme' ); ?>
                <i class="fas fa-chevron-down dropdown-arrow"></i>
            </a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo esc_url( home_url( '/domain-registration/' ) ); ?>" class="dropdown-item">
                    <i class="fas fa-search"></i>
                    <span><?php esc_html_e( 'Domain Search', 'hosting-theme' ); ?></span>
                </a></li>
                <li><a href="<?php echo esc_url( home_url( '/domain-transfer/' ) ); ?>" class="dropdown-item">
                    <i class="fas fa-exchange-alt"></i>
                    <span><?php esc_html_e( 'Domain Transfer', 'hosting-theme' ); ?></span>
                </a></li>
            </ul>
        </li>
        <li><a href="#" class="nav-item"><?php esc_html_e( 'Offer', 'hosting-theme' ); ?></a></li>
    </ul>
</nav>
