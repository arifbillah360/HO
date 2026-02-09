<?php
/**
 * Polylang string translations.
 *
 * Registers all static UI strings with pll_register_string() so they
 * appear in Languages > Strings translations inside the WP admin.
 *
 * Strings are organised into logical groups matching their location
 * in the theme templates. Each group name is shown as a filter in the
 * Polylang admin to help translators find strings quickly.
 *
 * Usage in templates:
 *   pll_e( 'String' )          — echo translated string
 *   pll__( 'String' )          — return translated string
 *   pll_esc_html_e( 'String' ) — echo with esc_html (custom helper below)
 *
 * @package Hosting_Theme
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register theme strings with Polylang.
 *
 * Hooked to 'init' so Polylang is fully loaded.
 */
function hosting_theme_register_polylang_strings() {

	// Bail if Polylang is not active.
	if ( ! function_exists( 'pll_register_string' ) ) {
		return;
	}

	/*
	|--------------------------------------------------------------------------
	| Top Info Bar
	|--------------------------------------------------------------------------
	*/
	pll_register_string( 'top-bar-help-center', 'Help Center', 'Hosting Theme - Top Bar' );
	pll_register_string( 'top-bar-phone', '+8801779440297', 'Hosting Theme - Top Bar', false );

	/*
	|--------------------------------------------------------------------------
	| Navigation
	|--------------------------------------------------------------------------
	*/
	pll_register_string( 'nav-home', 'Home', 'Hosting Theme - Navigation' );
	pll_register_string( 'nav-web-hosting', 'Web Hosting', 'Hosting Theme - Navigation' );
	pll_register_string( 'nav-package', 'Package', 'Hosting Theme - Navigation' );
	pll_register_string( 'nav-wordpress-hosting', 'WordPress Hosting', 'Hosting Theme - Navigation' );
	pll_register_string( 'nav-turbo-hosting', 'Turbo Hosting', 'Hosting Theme - Navigation' );
	pll_register_string( 'nav-reseller-hosting', 'Reseller Hosting', 'Hosting Theme - Navigation' );
	pll_register_string( 'nav-student-hosting', 'Student Hosting', 'Hosting Theme - Navigation' );
	pll_register_string( 'nav-business-email', 'Business Email', 'Hosting Theme - Navigation' );
	pll_register_string( 'nav-vps', 'VPS', 'Hosting Theme - Navigation' );
	pll_register_string( 'nav-domain', 'Domain', 'Hosting Theme - Navigation' );
	pll_register_string( 'nav-domain-search', 'Domain Search', 'Hosting Theme - Navigation' );
	pll_register_string( 'nav-domain-transfer', 'Domain Transfer', 'Hosting Theme - Navigation' );
	pll_register_string( 'nav-offer', 'Offer', 'Hosting Theme - Navigation' );
	pll_register_string( 'nav-my-account', 'My Account', 'Hosting Theme - Navigation' );
	pll_register_string( 'nav-toggle-menu', 'Toggle Menu', 'Hosting Theme - Navigation' );

	/*
	|--------------------------------------------------------------------------
	| Hero Section
	|--------------------------------------------------------------------------
	*/
	pll_register_string( 'hero-tag', 'WWW.HOSTORIO.COM', 'Hosting Theme - Hero', false );
	pll_register_string( 'hero-title', 'Fastest Data Center Web Hosting', 'Hosting Theme - Hero' );
	pll_register_string( 'hero-description', 'We hosted more than 500+ happy customers. Small website to high traffic website customers. Get affordable web hosting package designed to help you start and run a successful website – regardless of your experience.', 'Hosting Theme - Hero', true );
	pll_register_string( 'hero-cta', 'Get Started', 'Hosting Theme - Hero' );

	/*
	|--------------------------------------------------------------------------
	| Pricing Section
	|--------------------------------------------------------------------------
	*/
	pll_register_string( 'pricing-main-title', 'Find the Hosting Plan that\'s Right for Your Business', 'Hosting Theme - Pricing' );
	pll_register_string( 'pricing-subtitle', 'We Have the Features and Service You Deserve!', 'Hosting Theme - Pricing' );
	pll_register_string( 'pricing-billed-monthly', 'Billed Monthly', 'Hosting Theme - Pricing' );
	pll_register_string( 'pricing-billed-annually', 'Billed Annually', 'Hosting Theme - Pricing' );
	pll_register_string( 'pricing-save-badge', 'Save 15%!', 'Hosting Theme - Pricing' );
	pll_register_string( 'pricing-order-now', 'Order Now', 'Hosting Theme - Pricing' );
	pll_register_string( 'pricing-most-popular', 'Most Popular', 'Hosting Theme - Pricing' );
	pll_register_string( 'pricing-per-month', '/mo', 'Hosting Theme - Pricing' );

	/*
	|--------------------------------------------------------------------------
	| Domain Search Section
	|--------------------------------------------------------------------------
	*/
	pll_register_string( 'domain-heading', 'Your Online Journey Starts With A Perfect Domain', 'Hosting Theme - Domain' );
	pll_register_string( 'domain-placeholder', 'Find your new domain name', 'Hosting Theme - Domain' );
	pll_register_string( 'domain-search-btn', 'Search', 'Hosting Theme - Domain' );

	/*
	|--------------------------------------------------------------------------
	| Services Section
	|--------------------------------------------------------------------------
	*/
	pll_register_string( 'services-main-title', 'Your Complete Roadmap to Digital Growth', 'Hosting Theme - Services' );
	pll_register_string( 'services-subtitle', 'Hosting is just the engine—we provide the whole vehicle.', 'Hosting Theme - Services' );

	pll_register_string( 'service-1-title', 'Secure Your Digital Identity', 'Hosting Theme - Services' );
	pll_register_string( 'service-1-desc', 'Grab the Perfect Domain Your domain is more than just an address; it\'s your brand\'s first impression. Use our lightning-fast search tool to find the perfect name that defines your business. Whether you\'re starting fresh or want to move an existing domain to a more reliable home, our seamless transfer process makes it effortless.', 'Hosting Theme - Services', true );
	pll_register_string( 'service-1-link', 'Explore Domain', 'Hosting Theme - Services' );

	pll_register_string( 'service-2-title', 'Performance-First Web Hosting', 'Hosting Theme - Services' );
	pll_register_string( 'service-2-desc', 'The Right Foundation for Every Project Whether you need the simplicity of Shared Hosting, the raw power of a VPS, or a specialized WordPress environment, we\'ve got you covered. Powered by NVMe storage and LiteSpeed Web Servers, our infrastructure is built to ensure your site stays fast, stable, and ready for high traffic.', 'Hosting Theme - Services', true );
	pll_register_string( 'service-2-link', 'Choose a hosting', 'Hosting Theme - Services' );

	pll_register_string( 'service-3-title', 'Professional Email Solutions', 'Hosting Theme - Services' );
	pll_register_string( 'service-3-desc', 'Build Trust with Every Inbox Move beyond generic email addresses and earn instant credibility with a custom address (name@yourdomain.com). Our secure, ad-free business email plans keep your communications organized, private, and professional, complete with integrated tools to keep your team in sync.', 'Hosting Theme - Services', true );
	pll_register_string( 'service-3-link', 'Business Email Plans', 'Hosting Theme - Services' );

	pll_register_string( 'service-4-title', 'Bulletproof Security', 'Hosting Theme - Services' );
	pll_register_string( 'service-4-desc', 'Protection for You and Your Visitors We take security seriously so you don\'t have to. Every Hostorio account comes standard with Free SSL certificates, BitNinja Server Security, and automated malware scanning. With 2-Factor Authentication (2FA) and premium DNS protection, your data—and your customers\' trust—remains safe.', 'Hosting Theme - Services', true );
	pll_register_string( 'service-4-link', 'Secure yourself', 'Hosting Theme - Services' );

	pll_register_string( 'service-5-title', 'Enterprise-Grade Security, Affordable Prices', 'Hosting Theme - Services' );
	pll_register_string( 'service-5-desc', 'Security isn\'t luxury—it\'s essential. Every Hostorio account includes free SSL certificates, DDoS protection via BitNinja, automatic malware scanning, and daily automated backups. We take the stress out of security so you can focus on growing your business. Sleep soundly knowing your data and your customers\' data are protected 24/7.', 'Hosting Theme - Services', true );
	pll_register_string( 'service-5-link', 'Learn about security', 'Hosting Theme - Services' );

	/*
	|--------------------------------------------------------------------------
	| WordPress Section
	|--------------------------------------------------------------------------
	*/
	pll_register_string( 'wp-section-title', 'WordPress Hosting Turbocharged', 'Hosting Theme - WordPress' );
	pll_register_string( 'wp-section-desc', 'WordPress powers the web, but we power WordPress. We provide a managed environment that offers the perfect balance of raw power and complete control. Whether you are a solo blogger or a large-scale agency, our infrastructure is fine-tuned to ensure your WordPress site is faster, more secure, and easier to manage than ever before.', 'Hosting Theme - WordPress', true );
	pll_register_string( 'wp-feature-1', '1-Click Script Deployment', 'Hosting Theme - WordPress' );
	pll_register_string( 'wp-feature-2', 'LiteSpeed-Optimized Stack', 'Hosting Theme - WordPress' );
	pll_register_string( 'wp-feature-3', 'Proactive Malware Defense', 'Hosting Theme - WordPress' );
	pll_register_string( 'wp-cta', 'Get Started Now', 'Hosting Theme - WordPress' );

	/*
	|--------------------------------------------------------------------------
	| Support Section
	|--------------------------------------------------------------------------
	*/
	pll_register_string( 'support-main-title', 'Customer Success Focus', 'Hosting Theme - Support' );
	pll_register_string( 'support-subtitle', 'We provide everything you need to succeed online', 'Hosting Theme - Support' );

	pll_register_string( 'support-1-title', 'Onboarding Support', 'Hosting Theme - Support' );
	pll_register_string( 'support-1-desc', 'Don\'t know where to start? Our step-by-step tutorials and 24/7 support team walk you through domain setup, hosting configuration, and WordPress installation. From zero to live in hours, not weeks. Check our detailed knowledge base.', 'Hosting Theme - Support', true );
	pll_register_string( 'support-1-btn', 'Get started', 'Hosting Theme - Support' );

	pll_register_string( 'support-2-title', 'Discover our Resources', 'Hosting Theme - Support' );
	pll_register_string( 'support-2-desc', 'Access our resource center for hosting best practices, security tips, performance optimization guides, and industry insights. Learn directly from our team\'s experience managing 500+ websites across Bangladesh.', 'Hosting Theme - Support', true );
	pll_register_string( 'support-2-btn', 'Get learning', 'Hosting Theme - Support' );

	pll_register_string( 'support-3-title', 'Hassle-Free Transfers', 'Hosting Theme - Support' );
	pll_register_string( 'support-3-desc', 'We guarantee: Free domain transfer, Free email migration, Free database transfer, Zero downtime. Switching hosts shouldn\'t feel like moving houses. With us, it\'s simple.', 'Hosting Theme - Support', true );
	pll_register_string( 'support-3-btn', 'Transfer today', 'Hosting Theme - Support' );

	/*
	|--------------------------------------------------------------------------
	| Package Page - Package Chooser
	|--------------------------------------------------------------------------
	*/
	pll_register_string( 'pkg-headline', 'Everything You Need to Launch', 'Hosting Theme - Package Page' );
	pll_register_string( 'pkg-choose-title', 'Choose Your Perfect Hosting Plan', 'Hosting Theme - Package Page' );
	pll_register_string( 'pkg-choose-subtitle', 'Everything you need to launch, manage, and scale your website.', 'Hosting Theme - Package Page' );

	/*
	|--------------------------------------------------------------------------
	| Package Page - Advanced Features
	|--------------------------------------------------------------------------
	*/
	pll_register_string( 'features-title', 'Advanced Features', 'Hosting Theme - Features' );
	pll_register_string( 'features-subtitle', 'Enterprise-grade tools included with every plan', 'Hosting Theme - Features' );

	/*
	|--------------------------------------------------------------------------
	| Package Page - Comparison Table
	|--------------------------------------------------------------------------
	*/
	pll_register_string( 'compare-title', 'Compare Hosting Plans', 'Hosting Theme - Comparison' );
	pll_register_string( 'compare-subtitle', 'Find the perfect plan for your needs', 'Hosting Theme - Comparison' );
	pll_register_string( 'compare-feature-label', 'Feature', 'Hosting Theme - Comparison' );

	/*
	|--------------------------------------------------------------------------
	| Package Page - Testimonials
	|--------------------------------------------------------------------------
	*/
	pll_register_string( 'testimonials-title', 'What Our Customers Say', 'Hosting Theme - Testimonials' );
	pll_register_string( 'testimonials-subtitle', 'Real reviews from real customers who trust Hostorio', 'Hosting Theme - Testimonials' );

	/*
	|--------------------------------------------------------------------------
	| Package Page - FAQ
	|--------------------------------------------------------------------------
	*/
	pll_register_string( 'faq-title', 'Frequently Asked Questions', 'Hosting Theme - FAQ' );
	pll_register_string( 'faq-subtitle', 'Got questions? We\'ve got answers.', 'Hosting Theme - FAQ' );

	/*
	|--------------------------------------------------------------------------
	| Footer
	|--------------------------------------------------------------------------
	*/
	pll_register_string( 'footer-description', 'Hostorio is a popular web hosting services provider. Hostorio provides Shared Hosting, Business Hosting, Reseller Hosting, VPS, and domain Registration-Transfer services.', 'Hosting Theme - Footer', true );
	pll_register_string( 'footer-important', 'IMPORTANT', 'Hosting Theme - Footer' );
	pll_register_string( 'footer-quick-links', 'QUICK LINKS', 'Hosting Theme - Footer' );
	pll_register_string( 'footer-contact-us', 'CONTACT US', 'Hosting Theme - Footer' );
	pll_register_string( 'footer-login', 'Log In', 'Hosting Theme - Footer' );
	pll_register_string( 'footer-support', 'Support', 'Hosting Theme - Footer' );
	pll_register_string( 'footer-contact-link', 'Contact Us', 'Hosting Theme - Footer' );
	pll_register_string( 'footer-privacy', 'Privacy Policy', 'Hosting Theme - Footer' );
	pll_register_string( 'footer-terms-conditions', 'Terms & Conditions', 'Hosting Theme - Footer' );
	pll_register_string( 'footer-terms-service', 'Terms of Service', 'Hosting Theme - Footer' );
	pll_register_string( 'footer-shared-hosting', 'Shared Hosting', 'Hosting Theme - Footer' );
	pll_register_string( 'footer-business-hosting', 'Business Hosting', 'Hosting Theme - Footer' );
	pll_register_string( 'footer-all-rights', 'All Rights Reserved.', 'Hosting Theme - Footer' );
	pll_register_string( 'footer-payment-alt', 'Payment Methods', 'Hosting Theme - Footer' );

	/*
	|--------------------------------------------------------------------------
	| Currency Labels
	|--------------------------------------------------------------------------
	*/
	pll_register_string( 'currency-per-month', '/mo', 'Hosting Theme - Currency' );
	pll_register_string( 'currency-per-month-bn', 'মাসে', 'Hosting Theme - Currency' );
	pll_register_string( 'currency-bdt', 'BDT', 'Hosting Theme - Currency', false );
	pll_register_string( 'currency-usd', 'USD', 'Hosting Theme - Currency', false );

	/*
	|--------------------------------------------------------------------------
	| Common / Misc
	|--------------------------------------------------------------------------
	*/
	pll_register_string( 'common-learn-more', 'Learn More', 'Hosting Theme - Common' );
	pll_register_string( 'common-get-started', 'Get Started', 'Hosting Theme - Common' );
	pll_register_string( 'common-order-now', 'Order Now', 'Hosting Theme - Common' );
	pll_register_string( 'common-page-not-found', 'Page Not Found', 'Hosting Theme - Common' );
	pll_register_string( 'common-404-desc', 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'Hosting Theme - Common', true );
	pll_register_string( 'common-back-home', 'Back to Homepage', 'Hosting Theme - Common' );
}
add_action( 'init', 'hosting_theme_register_polylang_strings' );

/**
 * Helper: echo a Polylang string with esc_html.
 *
 * Falls back to esc_html_e() when Polylang is not active.
 *
 * @param string $string The registered string.
 */
function hosting_pll_esc_e( $string ) {
	if ( function_exists( 'pll__' ) ) {
		echo esc_html( pll__( $string ) );
	} else {
		echo esc_html( $string );
	}
}

/**
 * Helper: return a Polylang string with esc_html.
 *
 * Falls back to the raw string when Polylang is not active.
 *
 * @param  string $string The registered string.
 * @return string
 */
function hosting_pll_esc( $string ) {
	if ( function_exists( 'pll__' ) ) {
		return esc_html( pll__( $string ) );
	}
	return esc_html( $string );
}
