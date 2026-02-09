<?php
/**
 * The main template file (fallback).
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @package Hosting_Theme
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<!-- ===========================
     HERO SECTION
     =========================== -->
<section class="hero-section">
    <div class="container-wrapper">
        <div class="hero-content">
            <div class="hero-left">
                <div class="hero-tag">WWW.HOSTORIO.COM</div>
                <h1 class="hero-title">
                    Fastest Data Center<br>
                    Web Hosting
                </h1>
                <p class="hero-description">
                    We hosted more than 500+ happy customers. Small website to high traffic website customers. Get affordable web hosting package designed to help you start and run a successful website – regardless of your experience.
                </p>
                <a href="#" class="cta-button">
                    Get Started
                </a>
            </div>
            <div class="hero-right">
                <img src="<?php echo esc_url( HOSTING_THEME_URI . '/assets/images/hero/hostorio-cloud.png' ); ?>" alt="<?php esc_attr_e( 'Hostorio Cloud Servers', 'hosting-theme' ); ?>" class="hero-image">
            </div>
        </div>
    </div>
</section>

<!-- ===========================
     PRICING SECTION
     =========================== -->
<section class="pricing-section">
    <div class="container-wrapper">

        <!-- Section Header -->
        <div class="pricing-header">
            <h2 class="pricing-main-title">Find the Hosting Plan that's Right for Your Business</h2>
            <p class="pricing-subtitle">We Have the Features and Service You Deserve!</p>

            <!-- Billing Toggle -->
            <div class="billing-toggle">
                <span class="toggle-label">Billed Monthly</span>
                <label class="toggle-switch">
                    <input type="checkbox" id="billingToggle">
                    <span class="toggle-slider"></span>
                </label>
                <span class="toggle-label active">Billed Annually</span>
                <span class="save-badge">Save 15%!</span>
            </div>
        </div>

        <!-- Cloud Pricing Section -->
        <section class="cloud-pricing-section">
            <div class="container-wrapper">

                <!-- Pricing Cards Grid -->
                <div class="cloud-pricing-cards">

                    <!-- Card 1 - Starter Cloud -->
                    <div class="cloud-card">
                        <div class="cloud-icon">
                            <img src="<?php echo esc_url( HOSTING_THEME_URI . '/assets/images/pricing/data-server.svg' ); ?>" alt="Starter Cloud">
                        </div>

                        <h3 class="cloud-plan-name">Starter Cloud</h3>
                        <p class="cloud-plan-desc">Ideal for beginner/personal websites</p>

                        <div class="cloud-pricing">
                            <div class="cloud-price-original">$8.95 <span class="cloud-save-badge">Save 75%</span></div>
                            <div class="cloud-price-current">
                                <span class="cloud-currency">$</span>
                                <span class="cloud-amount">2.24</span>
                                <span class="cloud-period">/mo</span>
                            </div>
                        </div>

                        <ul class="cloud-features">
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>1</strong> Website</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>~10,000</strong> Visits Monthly</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>1 GB</strong> RAM</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>Unlimited</strong> NVMe Storage <span class="feature-badge new">NEW</span></span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>FREE</strong> cPanel</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>FREE</strong> &amp; Auto SSL Certificate</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>FREE</strong> Website Migrations</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>FREE</strong> LiteSpeed</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>30-Day</strong> Money-Back</span>
                            </li>
                        </ul>

                        <button class="cloud-order-btn">Order Now</button>
                    </div>

                    <!-- Card 2 - Plus Cloud -->
                    <div class="cloud-card">
                        <div class="cloud-icon">
                            <img src="<?php echo esc_url( HOSTING_THEME_URI . '/assets/images/pricing/data-server.svg' ); ?>" alt="Plus Cloud">
                        </div>

                        <h3 class="cloud-plan-name">Plus Cloud</h3>
                        <p class="cloud-plan-desc">Best for average-sized websites</p>

                        <div class="cloud-pricing">
                            <div class="cloud-price-original">$12.95 <span class="cloud-save-badge">Save 70%</span></div>
                            <div class="cloud-price-current">
                                <span class="cloud-currency">$</span>
                                <span class="cloud-amount">3.89</span>
                                <span class="cloud-period">/mo</span>
                            </div>
                        </div>

                        <ul class="cloud-features">
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>7</strong> Websites</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>~25,000</strong> Visits Monthly</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>2 GB</strong> RAM</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>Unlimited</strong> NVMe Storage <span class="feature-badge new">NEW</span></span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>FREE</strong> cPanel</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>FREE</strong> &amp; Auto SSL Certificate</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>FREE</strong> Website Migrations</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>FREE</strong> LiteSpeed</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>30-Day</strong> Money-Back</span>
                            </li>
                        </ul>

                        <button class="cloud-order-btn">Order Now</button>
                    </div>

                    <!-- Card 3 - Turbo Cloud (Most Popular) -->
                    <div class="cloud-card popular">
                        <div class="cloud-popular-badge">Most Popular</div>

                        <div class="cloud-icon">
                            <img src="<?php echo esc_url( HOSTING_THEME_URI . '/assets/images/pricing/data-server.svg' ); ?>" alt="Turbo Cloud">
                        </div>

                        <h3 class="cloud-plan-name">Turbo Cloud</h3>
                        <p class="cloud-plan-desc">Most popular package</p>

                        <div class="cloud-pricing">
                            <div class="cloud-price-original">$19.95 <span class="cloud-save-badge">Save 70%</span></div>
                            <div class="cloud-price-current">
                                <span class="cloud-currency">$</span>
                                <span class="cloud-amount">5.99</span>
                                <span class="cloud-period">/mo</span>
                            </div>
                        </div>

                        <ul class="cloud-features">
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>Unlimited</strong> Websites</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>~50,000</strong> Visits Monthly</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>3 GB</strong> RAM</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>Unlimited</strong> NVMe Storage</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>FREE</strong> Domain Name</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>FREE</strong> cPanel</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>FREE</strong> &amp; Auto SSL Certificate</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>FREE</strong> Website Migrations</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>FREE</strong> Security Suite</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>FREE</strong> LiteSpeed w/Turbo</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>30-Day</strong> Money-Back</span>
                            </li>
                        </ul>

                        <button class="cloud-order-btn">Order Now</button>
                    </div>

                    <!-- Card 4 - Business Cloud -->
                    <div class="cloud-card">
                        <div class="cloud-icon">
                            <img src="<?php echo esc_url( HOSTING_THEME_URI . '/assets/images/pricing/data-server.svg' ); ?>" alt="Business Cloud">
                        </div>

                        <h3 class="cloud-plan-name">Business Cloud</h3>
                        <p class="cloud-plan-desc">Ideal for eCommerce websites</p>

                        <div class="cloud-pricing">
                            <div class="cloud-price-original">$29.95 <span class="cloud-save-badge">Save 70%</span></div>
                            <div class="cloud-price-current">
                                <span class="cloud-currency">$</span>
                                <span class="cloud-amount">8.99</span>
                                <span class="cloud-period">/mo</span>
                            </div>
                        </div>

                        <ul class="cloud-features">
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>Unlimited</strong> Websites</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>~100,000</strong> Visits Monthly</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>4 GB</strong> RAM</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>Unlimited</strong> NVMe Storage</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>FREE</strong> Domain Name</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>FREE</strong> cPanel</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>FREE</strong> &amp; Auto SSL Certificate</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>FREE</strong> Website Migrations</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>FREE</strong> Security Suite</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>FREE</strong> Email Filtering</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>FREE</strong> LiteSpeed w/Turbo</span>
                            </li>
                            <li>
                                <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                    <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span><strong>30-Day</strong> Money-Back</span>
                            </li>
                        </ul>

                        <button class="cloud-order-btn">Order Now</button>
                    </div>

                </div>

            </div>
        </section>

    </div>
</section>

<!-- ===========================
     DOMAIN SEARCH SECTION
     =========================== -->
<section class="domain-search-section">
    <div class="container-wrapper">
        <div class="domain-search-content">
            <h2 class="section-heading">Your Online Journey Starts With A Perfect Domain</h2>

            <!-- Search Box -->
            <div class="search-box-wrapper">
                <div class="search-input-container">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" class="domain-input" placeholder="<?php esc_attr_e( 'Find your new domain name', 'hosting-theme' ); ?>">
                </div>
                <button class="search-button"><?php esc_html_e( 'Search', 'hosting-theme' ); ?></button>
            </div>

            <!-- Domain Extensions with Prices -->
            <div class="domain-extensions">
                <div class="extension-item">
                    <span class="extension-name">.com</span>
                    <span class="extension-price">$17.98</span>
                </div>
                <div class="extension-item">
                    <span class="extension-name">.net</span>
                    <span class="extension-price">$19.98</span>
                </div>
                <div class="extension-item">
                    <span class="extension-name">.org</span>
                    <span class="extension-price">$15.08</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===========================
     SERVICES SECTION
     =========================== -->
<section class="services-section">
    <div class="container-wrapper">
        <!-- Section Header -->
        <div class="section-header">
            <h2 class="section-main-title">Your Complete Roadmap to Digital Growth</h2>
            <p class="section-subtitle">Hosting is just the engine—we provide the whole vehicle.</p>
        </div>

        <!-- Services List -->
        <div class="services-list">

            <!-- Service Item 1 -->
            <div class="service-item">
                <div class="service-image">
                    <img src="<?php echo esc_url( HOSTING_THEME_URI . '/assets/images/services/buy-a-domain.svg' ); ?>" alt="Buy a domain">
                </div>
                <div class="service-content">
                    <h3 class="service-title">Secure Your Digital Identity</h3>
                    <p class="service-description">
                        Grab the Perfect Domain Your domain is more than just an address; it's your brand's first impression. Use our lightning-fast search tool to find the perfect name that defines your business. Whether you're starting fresh or want to move an existing domain to a more reliable home, our seamless transfer process makes it effortless.
                    </p>
                    <a href="#" class="service-link">
                        <span>Explore Domain</span>
                        <i class="arrow-icon">&rarr;</i>
                    </a>
                </div>
            </div>

            <!-- Service Item 2 -->
            <div class="service-item reverse">
                <div class="service-image">
                    <img src="<?php echo esc_url( HOSTING_THEME_URI . '/assets/images/services/find-a-hosting.svg' ); ?>" alt="Find the right hosting">
                </div>
                <div class="service-content">
                    <h3 class="service-title">Performance-First Web Hosting</h3>
                    <p class="service-description">
                        The Right Foundation for Every Project Whether you need the simplicity of Shared Hosting, the raw power of a VPS, or a specialized WordPress environment, we've got you covered. Powered by NVMe storage and LiteSpeed Web Servers, our infrastructure is built to ensure your site stays fast, stable, and ready for high traffic.
                    </p>
                    <a href="#" class="service-link">
                        <span>Choose a hosting</span>
                        <i class="arrow-icon">&rarr;</i>
                    </a>
                </div>
            </div>

            <!-- Service Item 3 -->
            <div class="service-item">
                <div class="service-image">
                    <img src="<?php echo esc_url( HOSTING_THEME_URI . '/assets/images/services/add-email.svg' ); ?>" alt="Add professional email">
                </div>
                <div class="service-content">
                    <h3 class="service-title">Professional Email Solutions</h3>
                    <p class="service-description">
                        Build Trust with Every Inbox Move beyond generic email addresses and earn instant credibility with a custom address (name@yourdomain.com). Our secure, ad-free business email plans keep your communications organized, private, and professional, complete with integrated tools to keep your team in sync.
                    </p>
                    <a href="#" class="service-link">
                        <span>Business Email Plans</span>
                        <i class="arrow-icon">&rarr;</i>
                    </a>
                </div>
            </div>

            <!-- Service Item 4 -->
            <div class="service-item reverse">
                <div class="service-image">
                    <img src="<?php echo esc_url( HOSTING_THEME_URI . '/assets/images/services/security.svg' ); ?>" alt="Security">
                </div>
                <div class="service-content">
                    <h3 class="service-title">Bulletproof Security</h3>
                    <p class="service-description">
                        Protection for You and Your Visitors We take security seriously so you don't have to. Every Hostorio account comes standard with Free SSL certificates, BitNinja Server Security, and automated malware scanning. With 2-Factor Authentication (2FA) and premium DNS protection, your data—and your customers' trust—remains safe.
                    </p>
                    <a href="#" class="service-link">
                        <span>Secure yourself</span>
                        <i class="arrow-icon">&rarr;</i>
                    </a>
                </div>
            </div>

            <!-- Service Item 5 -->
            <div class="service-item">
                <div class="service-image">
                    <img src="<?php echo esc_url( HOSTING_THEME_URI . '/assets/images/services/boost-performance.svg' ); ?>" alt="Boost performance">
                </div>
                <div class="service-content">
                    <h3 class="service-title">Enterprise-Grade Security, Affordable Prices</h3>
                    <p class="service-description">
                        Security isn't luxury—it's essential. Every Hostorio account includes free SSL certificates, DDoS protection via BitNinja, automatic malware scanning, and daily automated backups. We take the stress out of security so you can focus on growing your business. Sleep soundly knowing your data and your customers' data are protected 24/7.
                    </p>
                    <a href="#" class="service-link">
                        <span>Learn about security</span>
                        <i class="arrow-icon">&rarr;</i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ===========================
     WORDPRESS HOSTING SECTION
     =========================== -->
<section class="wordpress-section">
    <div class="container-wrapper">
        <div class="wordpress-content">

            <!-- Left Side - Graphic -->
            <div class="wordpress-graphic">
                <!-- Browser Window -->
                <div class="browser-window">
                    <div class="browser-header">
                        <span class="browser-dot"></span>
                        <span class="browser-dot"></span>
                        <span class="browser-dot"></span>
                    </div>
                    <div class="browser-content">
                        <!-- Hero Section -->
                        <div class="wp-hero">
                            <h3 class="wp-blog-title">Your Blog Title</h3>
                        </div>

                        <!-- Latest Post Section -->
                        <div class="wp-posts-section">
                            <p class="wp-section-title">Latest Post</p>
                            <div class="wp-posts-grid">
                                <div class="wp-post-card">
                                    <div class="wp-post-image"></div>
                                    <div class="wp-post-lines">
                                        <span class="line"></span>
                                        <span class="line short"></span>
                                    </div>
                                </div>
                                <div class="wp-post-card">
                                    <div class="wp-post-image"></div>
                                    <div class="wp-post-lines">
                                        <span class="line"></span>
                                        <span class="line short"></span>
                                    </div>
                                </div>
                                <div class="wp-post-card add-new">
                                    <div class="wp-post-image faded"></div>
                                    <div class="wp-post-lines">
                                        <span class="line faded"></span>
                                        <span class="line short faded"></span>
                                    </div>
                                    <div class="add-icon">+</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Floating Elements -->
                <div class="floating-element top-element">
                    <div class="theme-preview">
                        <div class="theme-grid">
                            <div class="theme-box orange"></div>
                            <div class="theme-box-row">
                                <div class="theme-box small orange"></div>
                                <div class="theme-box small orange"></div>
                            </div>
                        </div>
                        <div class="theme-grid">
                            <div class="theme-box gray"></div>
                            <div class="theme-box gray"></div>
                        </div>
                        <div class="theme-grid">
                            <div class="theme-box-list">
                                <span class="theme-line gray"></span>
                                <span class="theme-line gray"></span>
                            </div>
                            <div class="theme-box-list">
                                <span class="theme-line gray"></span>
                                <span class="theme-line gray"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="floating-element left-element">
                    <div class="dashboard-menu">
                        <div class="menu-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect x="3" y="3" width="7" height="7" fill="#FF7800"/>
                                <rect x="3" y="14" width="7" height="7" fill="#FF7800"/>
                                <rect x="14" y="3" width="7" height="7" fill="#FF7800"/>
                                <rect x="14" y="14" width="7" height="7" fill="#FF7800"/>
                            </svg>
                        </div>
                        <ul class="menu-list">
                            <li>Dashboard</li>
                            <li>Posts</li>
                            <li>Media</li>
                            <li>Pages</li>
                            <li>Comments</li>
                            <li>Appearance</li>
                            <li>Plugins</li>
                            <li>Users</li>
                            <li>Tools</li>
                            <li>Settings</li>
                        </ul>
                    </div>
                </div>

                <div class="floating-element bottom-element">
                    <div class="editor-toolbar">
                        <svg width="100%" height="40" viewBox="0 0 200 40" fill="none">
                            <circle cx="20" cy="20" r="8" fill="#0170B9"/>
                            <circle cx="50" cy="20" r="8" fill="#0170B9"/>
                            <circle cx="80" cy="20" r="8" fill="#0170B9"/>
                            <circle cx="110" cy="20" r="8" fill="#0170B9"/>
                            <circle cx="140" cy="20" r="8" fill="#0170B9"/>
                            <circle cx="170" cy="20" r="8" fill="#0170B9"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Right Side - Content -->
            <div class="wordpress-text">
                <h2 class="wordpress-title">WordPress Hosting Turbocharged</h2>
                <p class="wordpress-description">
                    WordPress powers the web, but we power WordPress. We provide a managed environment that offers the perfect balance of raw power and complete control. Whether you are a solo blogger or a large-scale agency, our infrastructure is fine-tuned to ensure your WordPress site is faster, more secure, and easier to manage than ever before.
                </p>

                <!-- Features List -->
                <div class="features-list">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                                <circle cx="24" cy="24" r="20" fill="#FF7800" opacity="0.2"/>
                                <path d="M17 20L22 28L32 18" stroke="#FF7800" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3 class="feature-title">1-Click Script Deployment</h3>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                                <circle cx="24" cy="24" r="20" fill="#0170B9" opacity="0.2"/>
                                <path d="M24 12L28 20L36 21L30 27L32 36L24 31L16 36L18 27L12 21L20 20L24 12Z" stroke="#0170B9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3 class="feature-title">LiteSpeed-Optimized Stack</h3>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                                <circle cx="24" cy="24" r="20" fill="#FF7800" opacity="0.2"/>
                                <path d="M24 8V16M24 32V40M35 24H27M21 24H13M33 13L28 18M28 30L33 35M13 13L18 18M18 30L13 35" stroke="#FF7800" stroke-width="2.5" stroke-linecap="round"/>
                                <circle cx="24" cy="24" r="6" stroke="#FF7800" stroke-width="2.5"/>
                            </svg>
                        </div>
                        <h3 class="feature-title">Proactive Malware Defense</h3>
                    </div>
                </div>

                <!-- CTA Button -->
                <div class="wordpress-cta">
                    <a href="#" class="cta-button">Get Started Now</a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ===========================
     SUPPORT SECTION
     =========================== -->
<section class="support-section">
    <div class="container-wrapper">
        <!-- Section Header -->
        <div class="section-header">
            <h2 class="section-main-title">Customer Success Focus</h2>
            <p class="section-subtitle">We provide everything you need to succeed online</p>
        </div>

        <!-- Support Cards -->
        <div class="support-cards">

            <!-- Card 1 -->
            <div class="support-card">
                <div class="card-icon-wrapper blue-bg">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                            <circle cx="12" cy="8" r="3"></circle>
                        </svg>
                    </div>
                </div>
                <div class="card-content">
                    <h3 class="card-title">Onboarding Support</h3>
                    <p class="card-description">
                        Don't know where to start? Our step-by-step tutorials and 24/7 support team walk you through domain setup, hosting configuration, and WordPress installation. From zero to live in hours, not weeks. Check our detailed knowledge base.
                    </p>
                    <a href="#" class="card-button">Get started</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="support-card">
                <div class="card-icon-wrapper green-bg">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                            <line x1="8" y1="21" x2="16" y2="21"></line>
                            <line x1="12" y1="17" x2="12" y2="21"></line>
                            <path d="M6 8h12v5H6z"></path>
                        </svg>
                    </div>
                </div>
                <div class="card-content">
                    <h3 class="card-title">Discover our Resources</h3>
                    <p class="card-description">
                        Access our resource center for hosting best practices, security tips, performance optimization guides, and industry insights. Learn directly from our team's experience managing 500+ websites across Bangladesh.
                    </p>
                    <a href="#" class="card-button">Get learning</a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="support-card">
                <div class="card-icon-wrapper orange-bg">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                    </div>
                </div>
                <div class="card-content">
                    <h3 class="card-title">Hassle-Free Transfers</h3>
                    <p class="card-description">
                        We guarantee: Free domain transfer, Free email migration, Free database transfer, Zero downtime. Switching hosts shouldn't feel like moving houses. With us, it's simple.
                    </p>
                    <a href="#" class="card-button">Transfer today</a>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
get_footer();
