<?php
/**
 * Template Name: Home
 * Description: Home page template for Hostorio theme.
 *
 * @package Hostorio
 */

// Register SEO meta and schema markup before get_header() fires wp_head
add_action( 'wp_head', function() {
    if ( ! defined( 'WPSEO_VERSION' ) && ! class_exists( 'RankMath' ) ) {
        echo '<meta name="description" content="Get fast web hosting from ৳999/year with free SSL, free domain registration, LiteSpeed servers &amp; 24/7 expert support. 99.9% uptime guaranteed. Start today!">' . "\n";
        echo '<link rel="canonical" href="https://hostorio.com/">' . "\n";
        echo '<meta name="robots" content="index, follow">' . "\n";
        echo '<meta property="og:type" content="website">' . "\n";
        echo '<meta property="og:title" content="Fast Web Hosting ৳999/yr | Free SSL &amp; Domain | Hostorio">' . "\n";
        echo '<meta property="og:description" content="Fast web hosting from ৳999/year with free SSL, free domain, LiteSpeed servers &amp; 24/7 expert support. 99.9% uptime. Trusted by 500+ Bangladesh businesses.">' . "\n";
        echo '<meta property="og:image" content="https://hostorio.com/assets/images/og-image-1200x630.jpg">' . "\n";
        echo '<meta property="og:image:width" content="1200">' . "\n";
        echo '<meta property="og:image:height" content="630">' . "\n";
        echo '<meta property="og:site_name" content="Hostorio">' . "\n";
        echo '<meta property="og:locale" content="en_US">' . "\n";
        echo '<meta property="og:url" content="https://hostorio.com/">' . "\n";
        echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
        echo '<meta name="twitter:site" content="@hostorio">' . "\n";
        echo '<meta name="twitter:title" content="Fast Web Hosting ৳999/yr | Free SSL &amp; Domain | Hostorio">' . "\n";
        echo '<meta name="twitter:description" content="Fast web hosting from ৳999/year with free SSL, free domain, LiteSpeed servers &amp; 24/7 expert support. 99.9% uptime. Trusted by 500+ Bangladesh businesses.">' . "\n";
        echo '<meta name="twitter:image" content="https://hostorio.com/assets/images/og-image-1200x630.jpg">' . "\n";
    }
    ?>
    <script type="application/ld+json">
{
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Hostorio",
      "url": "https://hostorio.com",
      "logo": "https://hostorio.com/assets/images/logo/hostorio-logo.png",
      "description": "Hostorio is a web hosting services provider in Bangladesh offering shared hosting, turbo hosting, reseller hosting, VPS, domain registration, and business email solutions.",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+8801779440297",
        "contactType": "customer service",
        "email": "mail@hostorio.com",
        "availableLanguage": ["English", "Bengali"]
      },
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "H-161, OABDA SOROK MATHBARIA",
        "addressLocality": "Kanchan, Rupganj",
        "addressRegion": "Narayanganj",
        "addressCountry": "BD"
      },
      "sameAs": [
        "https://www.facebook.com/hostorio",
        "https://x.com/hostorio",
        "https://www.youtube.com/@arifbillahcse",
        "https://www.linkedin.com/company/hostorio/"
      ]
    }
    </script>
    <script type="application/ld+json">
{
      "@context": "https://schema.org/",
      "@type": "Product",
      "name": "Starter Web Hosting Plan",
      "description": "Ideal for beginner and personal websites. Includes 5GB NVMe storage, 1 domain, 1TB bandwidth, 10 email accounts, free SSL certificate, and LiteSpeed server.",
      "image": "https://hostorio.com/assets/images/hostorio-domain-hosting-register.jpg",
      "brand": {
        "@type": "Brand",
        "name": "Hostorio"
      },
      "offers": {
        "@type": "Offer",
        "url": "https://hostorio.com/",
        "priceCurrency": "BDT",
        "price": 3000,
        "priceValidUntil": "2026-12-31",
        "availability": "https://schema.org/InStock",
        "shippingDetails": {
          "@type": "OfferShippingDetails",
          "shippingDestination": {
            "@type": "DefinedRegion",
            "addressCountry": "BD"
          },
          "deliveryTime": {
            "@type": "ShippingDeliveryTime",
            "handlingTime": {
              "@type": "QuantitativeValue",
              "minValue": 0,
              "maxValue": 1,
              "unitCode": "DAY"
            },
            "transitTime": {
              "@type": "QuantitativeValue",
              "minValue": 0,
              "maxValue": 0,
              "unitCode": "DAY"
            }
          },
          "shippingRate": {
            "@type": "MonetaryAmount",
            "value": 0,
            "currency": "BDT"
          }
        },
        "hasMerchantReturnPolicy": {
          "@type": "MerchantReturnPolicy",
          "applicableCountry": "BD",
          "returnPolicyCategory": "https://schema.org/MerchantReturnFiniteReturnWindow",
          "merchantReturnDays": 30,
          "returnMethod": "https://schema.org/ReturnByMail",
          "returnFees": "https://schema.org/FreeReturn"
        }
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": 4.8,
        "reviewCount": 500,
        "bestRating": 5,
        "worstRating": 1
      }
    }
    </script>
    <script type="application/ld+json">
{
      "@context": "https://schema.org/",
      "@type": "Product",
      "name": "Lite Starter Web Hosting Plan",
      "description": "Ideal for small business websites. Includes 10GB NVMe storage, 5 domains, 2TB bandwidth, unlimited email accounts and databases, free SSL certificate, and LiteSpeed server.",
      "image": "https://hostorio.com/assets/images/hostorio-domain-hosting-register.jpg",
      "brand": {
        "@type": "Brand",
        "name": "Hostorio"
      },
      "offers": {
        "@type": "Offer",
        "url": "https://hostorio.com/",
        "priceCurrency": "BDT",
        "price": 4200,
        "priceValidUntil": "2026-12-31",
        "availability": "https://schema.org/InStock",
        "shippingDetails": {
          "@type": "OfferShippingDetails",
          "shippingDestination": {
            "@type": "DefinedRegion",
            "addressCountry": "BD"
          },
          "deliveryTime": {
            "@type": "ShippingDeliveryTime",
            "handlingTime": {
              "@type": "QuantitativeValue",
              "minValue": 0,
              "maxValue": 1,
              "unitCode": "DAY"
            },
            "transitTime": {
              "@type": "QuantitativeValue",
              "minValue": 0,
              "maxValue": 0,
              "unitCode": "DAY"
            }
          },
          "shippingRate": {
            "@type": "MonetaryAmount",
            "value": 0,
            "currency": "BDT"
          }
        },
        "hasMerchantReturnPolicy": {
          "@type": "MerchantReturnPolicy",
          "applicableCountry": "BD",
          "returnPolicyCategory": "https://schema.org/MerchantReturnFiniteReturnWindow",
          "merchantReturnDays": 30,
          "returnMethod": "https://schema.org/ReturnByMail",
          "returnFees": "https://schema.org/FreeReturn"
        }
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": 4.8,
        "reviewCount": 500,
        "bestRating": 5,
        "worstRating": 1
      }
    }
    </script>
    <script type="application/ld+json">
{
      "@context": "https://schema.org/",
      "@type": "Product",
      "name": "Standard Web Hosting Plan",
      "description": "Most popular hosting plan. Includes 20GB NVMe storage, 10 domains, 5TB bandwidth, unlimited email accounts and databases, free SSL certificate, and LiteSpeed server.",
      "image": "https://hostorio.com/assets/images/hostorio-domain-hosting-register.jpg",
      "brand": {
        "@type": "Brand",
        "name": "Hostorio"
      },
      "offers": {
        "@type": "Offer",
        "url": "https://hostorio.com/",
        "priceCurrency": "BDT",
        "price": 6000,
        "priceValidUntil": "2026-12-31",
        "availability": "https://schema.org/InStock",
        "shippingDetails": {
          "@type": "OfferShippingDetails",
          "shippingDestination": {
            "@type": "DefinedRegion",
            "addressCountry": "BD"
          },
          "deliveryTime": {
            "@type": "ShippingDeliveryTime",
            "handlingTime": {
              "@type": "QuantitativeValue",
              "minValue": 0,
              "maxValue": 1,
              "unitCode": "DAY"
            },
            "transitTime": {
              "@type": "QuantitativeValue",
              "minValue": 0,
              "maxValue": 0,
              "unitCode": "DAY"
            }
          },
          "shippingRate": {
            "@type": "MonetaryAmount",
            "value": 0,
            "currency": "BDT"
          }
        },
        "hasMerchantReturnPolicy": {
          "@type": "MerchantReturnPolicy",
          "applicableCountry": "BD",
          "returnPolicyCategory": "https://schema.org/MerchantReturnFiniteReturnWindow",
          "merchantReturnDays": 30,
          "returnMethod": "https://schema.org/ReturnByMail",
          "returnFees": "https://schema.org/FreeReturn"
        }
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": 4.8,
        "reviewCount": 500,
        "bestRating": 5,
        "worstRating": 1
      }
    }
    </script>
    <script type="application/ld+json">
{
      "@context": "https://schema.org/",
      "@type": "Product",
      "name": "Advanced Web Hosting Plan",
      "description": "Ideal for eCommerce websites. Includes unlimited NVMe storage, unlimited domains and bandwidth, unlimited email accounts, 16 CPU cores, 16GB RAM, free SSL certificate, and LiteSpeed server.",
      "image": "https://hostorio.com/assets/images/hostorio-domain-hosting-register.jpg",
      "brand": {
        "@type": "Brand",
        "name": "Hostorio"
      },
      "offers": {
        "@type": "Offer",
        "url": "https://hostorio.com/",
        "priceCurrency": "BDT",
        "price": 12000,
        "priceValidUntil": "2026-12-31",
        "availability": "https://schema.org/InStock",
        "shippingDetails": {
          "@type": "OfferShippingDetails",
          "shippingDestination": {
            "@type": "DefinedRegion",
            "addressCountry": "BD"
          },
          "deliveryTime": {
            "@type": "ShippingDeliveryTime",
            "handlingTime": {
              "@type": "QuantitativeValue",
              "minValue": 0,
              "maxValue": 1,
              "unitCode": "DAY"
            },
            "transitTime": {
              "@type": "QuantitativeValue",
              "minValue": 0,
              "maxValue": 0,
              "unitCode": "DAY"
            }
          },
          "shippingRate": {
            "@type": "MonetaryAmount",
            "value": 0,
            "currency": "BDT"
          }
        },
        "hasMerchantReturnPolicy": {
          "@type": "MerchantReturnPolicy",
          "applicableCountry": "BD",
          "returnPolicyCategory": "https://schema.org/MerchantReturnFiniteReturnWindow",
          "merchantReturnDays": 30,
          "returnMethod": "https://schema.org/ReturnByMail",
          "returnFees": "https://schema.org/FreeReturn"
        }
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": 4.8,
        "reviewCount": 500,
        "bestRating": 5,
        "worstRating": 1
      }
    }
    </script>
    <script type="application/ld+json">
{
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "Hostorio",
      "image": "https://hostorio.com/assets/images/logo/hostorio-logo.png",
      "@id": "https://hostorio.com",
      "url": "https://hostorio.com",
      "telephone": "+8801779440297",
      "email": "mail@hostorio.com",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "H-161, OABDA SOROK MATHBARIA",
        "addressLocality": "Kanchan, Rupganj",
        "addressRegion": "Narayanganj",
        "addressCountry": "BD"
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
        "opens": "00:00",
        "closes": "23:59"
      },
      "priceRange": "৳৳"
    }
    </script>
    <script type="application/ld+json">
{
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://hostorio.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Web Hosting",
          "item": "https://hostorio.com/web-hosting.html"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Pricing",
          "item": "https://hostorio.com/#pricing"
        }
      ]
    }
    </script>
    <?php
}, 1 );

get_header();
?>




    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container-wrapper">
            <div class="hero-content">
                <div class="hero-left">
                    <div class="hero-tag" data-i18n="hero.tag">WWW.HOSTORIO.COM</div>
                    <h1 class="hero-title" data-i18n="hero.title">
                        Everything You Need to Launch<br>
                        & Grow Online. 
                    </h1>
                    <p class="hero-description" data-i18n="hero.description">
                        From your first website to scaling a business - we provide lightning-fast hosting, domain, SSL certificates, and expert support. Trusted by 500+ entrepreneurs who started just like you.                    </p>
                    <a href="<?php echo esc_url( hostorio_page_url( 'web-hosting' ) ); ?>" class="cta-button" data-i18n="hero.ctaButton">
                        Get Started
                    </a>
                </div>
                <div class="hero-right">
                    <img src="<?php echo esc_url( HOSTORIO_URI ); ?>/assets/images/hero/hostorio-cloud.png" alt="Hostorio cloud hosting infrastructure with NVMe SSD storage and LiteSpeed technology in Bangladesh" class="hero-image">
                </div>
            </div>
        </div>
    </section>



       <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="container-wrapper">

            <!-- Section Header -->
            <div class="pricing-header">
                <h2 class="pricing-main-title" data-i18n="pricing.mainTitle">Find the Hosting Plan that's Right for Your Business</h2>
                <p class="pricing-subtitle" data-i18n="pricing.subtitle">We Have the Features and Service You Deserve!</p>

                <!-- Billing Toggle -->
                <div class="billing-toggle">
                    <span class="toggle-label" data-i18n="pricing.billedMonthly">Billed Monthly</span>
                    <label class="toggle-switch">
                        <input type="checkbox" id="billingToggle" checked>
                        <span class="toggle-slider"></span>
                    </label>
                    <span class="toggle-label active" data-i18n="pricing.billedAnnually">Billed Annually</span>
                    <span class="save-badge" data-i18n="pricing.saveBadge">Save 30%!</span>
                </div>
            </div>

        <!-- Cloud Pricing Section -->
        <section class="cloud-pricing-section">
        <div class="container-wrapper">

            <!-- Pricing Cards Grid -->
            <div class="cloud-pricing-cards">

                <!-- Card 1 - Starter -->
                <div class="cloud-card">
                    <div class="cloud-icon">
                        <img src="<?php echo esc_url( HOSTORIO_URI ); ?>/assets/images/pricing/data-server.svg" alt="Starter web hosting plan – 5GB NVMe storage for personal websites">
                    </div>

                    <h3 class="cloud-plan-name" data-i18n="pricing.plans.starter.name">Starter</h3>
                    <p class="cloud-plan-desc" data-i18n="pricing.plans.starter.desc">Ideal for beginner/personal websites</p>

                    <div class="cloud-pricing" data-yearly-price="3000">
                        <div class="cloud-price-original">
                            <span class="orig-currency" data-orig-currency>৳</span><span class="orig-amount"></span>
                            <span class="cloud-save-badge" data-i18n="pricing.save30">Save 30%</span>
                        </div>
                        <div class="cloud-price-current">
                            <span class="cloud-currency" data-currency-symbol>৳</span>
                            <span class="cloud-amount">3000</span>
                            <span class="cloud-period" data-i18n="pricing.perYear">/yr</span>
                        </div>
                    </div>

                    <ul class="cloud-features">
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><strong>5GB</strong> <span data-i18n="pricing.features.nvmeStorage">NVMe Storage</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><strong>1</strong> <span data-i18n="pricing.features.domain">Domain</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><strong>1TB</strong> <span data-i18n="pricing.features.bandwidth">Bandwidth</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><strong>10</strong> <span data-i18n="pricing.features.subDomain">Sub Domain</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><strong>10</strong> <span data-i18n="pricing.features.emailAccounts">Email Accounts</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><strong>10</strong> <span data-i18n="pricing.features.databases">Databases</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><strong>1 Core / 2GB RAM / 20 EP</strong> <span data-i18n="pricing.features.cpuRamEp">CPU Core / RAM / EP</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><strong>1Gbps</strong> <span data-i18n="pricing.features.connectivity">Connectivity</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span data-i18n="pricing.features.freeSSL">Free SSL Certificate</span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span data-i18n="pricing.features.liteSpeedServer">LiteSpeed Server</span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span data-i18n="pricing.features.cpanelPanel">cPanel</span>
                        </li>
                    </ul>

                    <a href="https://my.hostorio.com/cart.php?a=add&pid=55" class="cloud-order-btn" data-i18n="pricing.orderNow">Order Now</a>

                </div>

                <!-- Card 2 - Lite Starter -->
                <div class="cloud-card">
                    <div class="cloud-icon">
                        <img src="<?php echo esc_url( HOSTORIO_URI ); ?>/assets/images/pricing/data-server.svg" alt="Lite Starter web hosting plan – 10GB NVMe storage for small business websites">
                    </div>

                    <h3 class="cloud-plan-name" data-i18n="pricing.plans.plus.name">Lite Starter</h3>
                    <p class="cloud-plan-desc" data-i18n="pricing.plans.plus.desc">Ideal for small business websites</p>

                    <div class="cloud-pricing" data-yearly-price="4200">
                        <div class="cloud-price-original">
                            <span class="orig-currency" data-orig-currency>৳</span><span class="orig-amount"></span>
                            <span class="cloud-save-badge" data-i18n="pricing.save30">Save 30%</span>
                        </div>
                        <div class="cloud-price-current">
                            <span class="cloud-currency" data-currency-symbol>৳</span>
                            <span class="cloud-amount">4200</span>
                            <span class="cloud-period" data-i18n="pricing.perYear">/yr</span>
                        </div>
                    </div>

                    <ul class="cloud-features">
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><strong>10GB</strong> <span data-i18n="pricing.features.nvmeStorage">NVMe Storage</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><strong>5</strong> <span data-i18n="pricing.features.domain">Domain</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><strong>2TB</strong> <span data-i18n="pricing.features.bandwidth">Bandwidth</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><span data-i18n="pricing.features.unlimited">Unlimited</span> <span data-i18n="pricing.features.subDomain">Sub Domain</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><span data-i18n="pricing.features.unlimited">Unlimited</span> <span data-i18n="pricing.features.emailAccounts">Email Accounts</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><span data-i18n="pricing.features.unlimited">Unlimited</span> <span data-i18n="pricing.features.databases">Databases</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><strong>4 Core / 4GB RAM / 20 EP</strong> <span data-i18n="pricing.features.cpuRamEp">CPU Core / RAM / EP</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><strong>1Gbps</strong> <span data-i18n="pricing.features.connectivity">Connectivity</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span data-i18n="pricing.features.freeSSL">Free SSL Certificate</span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span data-i18n="pricing.features.liteSpeedServer">LiteSpeed Server</span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span data-i18n="pricing.features.cpanelPanel">cPanel</span>
                        </li>
                    </ul>

                    <a href="https://my.hostorio.com/cart.php?a=add&pid=56" class="cloud-order-btn" data-i18n="pricing.orderNow">Order Now</a>

                </div>

                <!-- Card 3 - Standard (Most Popular) -->
                <div class="cloud-card popular">
                    <div class="cloud-popular-badge" data-i18n="pricing.mostPopular">Most Popular</div>

                    <div class="cloud-icon">
                        <img src="<?php echo esc_url( HOSTORIO_URI ); ?>/assets/images/pricing/data-server.svg" alt="Standard web hosting plan – most popular plan with 20GB NVMe storage and 10 domains">
                    </div>

                    <h3 class="cloud-plan-name" data-i18n="pricing.plans.turbo.name">Standard</h3>
                    <p class="cloud-plan-desc" data-i18n="pricing.plans.turbo.desc">Most popular package</p>

                    <div class="cloud-pricing" data-yearly-price="6000">
                        <div class="cloud-price-original">
                            <span class="orig-currency" data-orig-currency>৳</span><span class="orig-amount"></span>
                            <span class="cloud-save-badge" data-i18n="pricing.save30">Save 30%</span>
                        </div>
                        <div class="cloud-price-current">
                            <span class="cloud-currency" data-currency-symbol>৳</span>
                            <span class="cloud-amount">6000</span>
                            <span class="cloud-period" data-i18n="pricing.perYear">/yr</span>
                        </div>
                    </div>

                    <ul class="cloud-features">
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><strong>20GB</strong> <span data-i18n="pricing.features.nvmeStorage">NVMe Storage</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><strong>10</strong> <span data-i18n="pricing.features.domain">Domain</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><strong>5TB</strong> <span data-i18n="pricing.features.bandwidth">Bandwidth</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><span data-i18n="pricing.features.unlimited">Unlimited</span> <span data-i18n="pricing.features.subDomain">Sub Domain</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><span data-i18n="pricing.features.unlimited">Unlimited</span> <span data-i18n="pricing.features.emailAccounts">Email Accounts</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><span data-i18n="pricing.features.unlimited">Unlimited</span> <span data-i18n="pricing.features.databases">Databases</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><strong>6 Core / 6GB RAM / 20 EP</strong> <span data-i18n="pricing.features.cpuRamEp">CPU Core / RAM / EP</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><strong>1Gbps</strong> <span data-i18n="pricing.features.connectivity">Connectivity</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span data-i18n="pricing.features.freeSSL">Free SSL Certificate</span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span data-i18n="pricing.features.liteSpeedServer">LiteSpeed Server</span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span data-i18n="pricing.features.cpanelPanel">cPanel</span>
                        </li>
                    </ul>

                    <a href="https://my.hostorio.com/cart.php?a=add&pid=57" class="cloud-order-btn" data-i18n="pricing.orderNow">Order Now</a>

                </div>

                <!-- Card 4 - Advanced -->
                <div class="cloud-card">
                    <div class="cloud-icon">
                        <img src="<?php echo esc_url( HOSTORIO_URI ); ?>/assets/images/pricing/data-server.svg" alt="Advanced web hosting plan – unlimited NVMe storage for eCommerce and high-traffic websites">
                    </div>

                    <h3 class="cloud-plan-name" data-i18n="pricing.plans.business.name">Advanced</h3>
                    <p class="cloud-plan-desc" data-i18n="pricing.plans.business.desc">Ideal for eCommerce websites</p>

                    <div class="cloud-pricing" data-yearly-price="12000">
                        <div class="cloud-price-original">
                            <span class="orig-currency" data-orig-currency>৳</span><span class="orig-amount"></span>
                            <span class="cloud-save-badge" data-i18n="pricing.save30">Save 30%</span>
                        </div>
                        <div class="cloud-price-current">
                            <span class="cloud-currency" data-currency-symbol>৳</span>
                            <span class="cloud-amount">12000</span>
                            <span class="cloud-period" data-i18n="pricing.perYear">/yr</span>
                        </div>
                    </div>

                    <ul class="cloud-features">
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><span data-i18n="pricing.features.unlimited">Unlimited</span> <span data-i18n="pricing.features.nvmeStorage">NVMe Storage</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><span data-i18n="pricing.features.unlimited">Unlimited</span> <span data-i18n="pricing.features.domain">Domain</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><span data-i18n="pricing.features.unlimited">Unlimited</span> <span data-i18n="pricing.features.bandwidth">Bandwidth</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><span data-i18n="pricing.features.unlimited">Unlimited</span> <span data-i18n="pricing.features.subDomain">Sub Domain</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><span data-i18n="pricing.features.unlimited">Unlimited</span> <span data-i18n="pricing.features.emailAccounts">Email Accounts</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><strong>20</strong> <span data-i18n="pricing.features.databases">Databases</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><strong>16 Core / 16GB RAM / 40 EP</strong> <span data-i18n="pricing.features.cpuRamEp">CPU Core / RAM / EP</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><strong>1Gbps</strong> <span data-i18n="pricing.features.connectivity">Connectivity</span></span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span data-i18n="pricing.features.freeSSL">Free SSL Certificate</span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span data-i18n="pricing.features.liteSpeedServer">LiteSpeed Server</span>
                        </li>
                        <li>
                            <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                                <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span data-i18n="pricing.features.cpanelPanel">cPanel</span>
                        </li>
                    </ul>

                    <a href="https://my.hostorio.com/cart.php?a=add&pid=58" class="cloud-order-btn" data-i18n="pricing.orderNow">Order Now</a>

                </div>

            </div>

        </div>
        </section>

        </div>
    </section>






<!-- ===========================
     DYNAMIC DOMAIN SEARCH SECTION
     =========================== -->
<section class="domain-search-section">
    <div class="container-wrapper">
        <div class="domain-search-content">
            <h2 class="section-heading">Find Your Perfect Domain Name</h2>
            
            <!-- Dynamic Search Box Form -->
            <form method="post" action="https://my.hostorio.com/cart.php?a=add&domain=register" id="domain-searchform" class="search-box-wrapper">
                <!-- Hidden Token Field -->
                <input type="hidden" name="token" value="310831da269f185aeff91e84768ddf9e675287bc">
                
                <div class="search-input-container">
                    <i class="fas fa-search search-icon"></i>
                    <input
                        type="text"
                        name="sld"
                        id="sld"
                        class="domain-input"
                        placeholder="Search for your domain name"
                        required
                        autocomplete="off"
                    >
                </div>
                <button type="submit" class="search-button">Search</button>
            </form>
            
            <!-- Domain Extensions -->
            <div class="domain-extensions">
                <div class="extension-item">
                    <span class="extension-name">.COM</span>
                </div>
                <div class="extension-item">
                    <span class="extension-name">.XYZ</span>
                </div>
                <div class="extension-item">
                    <span class="extension-name">.TOP</span>
                </div>                
                <div class="extension-item">
                    <span class="extension-name">.SHOP</span>
                </div>
                <div class="extension-item">
                    <span class="extension-name">.INFO</span>
                </div>
            </div>
        </div>
    </div>
</section>


        <!-- Services Section -->
    <section class="services-section">
        <div class="container-wrapper">
            <!-- Section Header -->
            <div class="section-header">
                <h2 class="section-main-title" data-i18n="services.sectionTitle">Your Complete Roadmap to Digital Growth</h2>
                <p class="section-subtitle" data-i18n="services.sectionSubtitle">Hosting is just the engine—we provide the whole vehicle.</p>
            </div>

            <!-- Services List -->
            <div class="services-list">

                <!-- Service Item 1 -->
                <div class="service-item">
                    <div class="service-image">
                        <img src="<?php echo esc_url( HOSTORIO_URI ); ?>/assets/images/hostorio-domain-hosting-register.jpg" alt="Hostorio domain registration – find and secure your perfect domain name online">
                    </div>
                    <div class="service-content">
                        <h3 class="service-title" data-i18n="services.item1.title">Secure Your Digital Identity</h3>
                        <p class="service-description" data-i18n="services.item1.desc">
                            Grab the Perfect Domain Your domain is more than just an address; it's your brand's first impression. Use our lightning-fast search tool to find the perfect name that defines your business. Whether you're starting fresh or want to move an existing domain to a more reliable home, our seamless transfer process makes it effortless.
                        </p>
                        <a href="https://my.hostorio.com/cart.php?a=add&domain=register" class="service-link">
                            <span data-i18n="services.item1.link">Explore Domain</span>
                            <i class="arrow-icon">→</i>
                        </a>
                    </div>
                </div>

                <!-- Service Item 2 -->
                <div class="service-item reverse">
                    <div class="service-image">
                        <img src="<?php echo esc_url( HOSTORIO_URI ); ?>/assets/images/hostorio-performance.webp" alt="Hostorio high-performance web hosting powered by LiteSpeed servers and NVMe SSD storage">
                    </div>
                    <div class="service-content">
                        <h3 class="service-title" data-i18n="services.item2.title">Performance-First Web Hosting</h3>
                        <p class="service-description" data-i18n="services.item2.desc">
                            The Right Foundation for Every Project Whether you need the simplicity of Shared Hosting, the raw power of a VPS, or a specialized WordPress environment, we've got you covered. Powered by NVMe storage and LiteSpeed Web Servers, our infrastructure is built to ensure your site stays fast, stable, and ready for high traffic.
                        </p>
                        <a href="<?php echo esc_url( hostorio_page_url( 'web-hosting' ) ); ?>" class="service-link">
                            <span data-i18n="services.item2.link">Choose a hosting</span>
                            <i class="arrow-icon">→</i>
                        </a>
                    </div>
                </div>

                <!-- Service Item 3 -->
                <div class="service-item">
                    <div class="service-image">
                        <img src="<?php echo esc_url( HOSTORIO_URI ); ?>/assets/images/hostorio-email-solution.webp" alt="Hostorio professional business email hosting with custom domain – name@yourdomain.com">
                    </div>
                    <div class="service-content">
                        <h3 class="service-title" data-i18n="services.item3.title">Professional Email Solutions</h3>
                        <p class="service-description" data-i18n="services.item3.desc">
                            Build Trust with Every Inbox Move beyond generic email addresses and earn instant credibility with a custom address (name@yourdomain.com). Our secure, ad-free business email plans keep your communications organized, private, and professional, complete with integrated tools to keep your team in sync.
                        </p>
                        <a href="<?php echo esc_url( hostorio_page_url( 'business-email' ) ); ?>" class="service-link">
                            <span data-i18n="services.item3.link">Business Email Plans</span>
                            <i class="arrow-icon">→</i>
                        </a>
                    </div>
                </div>

                <!-- Service Item 4 -->
                <div class="service-item reverse">
                    <div class="service-image">
                        <img src="<?php echo esc_url( HOSTORIO_URI ); ?>/assets/images/hostorio-ssl-security.webp" alt="Hostorio free SSL certificate and DDoS protection keeping websites secure 24/7">
                    </div>
                    <div class="service-content">
                        <h3 class="service-title" data-i18n="services.item4.title">Bulletproof Security</h3>
                        <p class="service-description" data-i18n="services.item4.desc">
                            Protection for You and Your Visitors We take security seriously so you don't have to. Every Hostorio account comes standard with Free SSL certificates, BitNinja Server Security, and automated malware scanning. With 2-Factor Authentication (2FA) and premium DNS protection, your data—and your customers' trust—remains safe.
                        </p>
                        <a href="<?php echo esc_url( hostorio_page_url( 'offer' ) ); ?>" class="service-link">
                            <span data-i18n="services.item4.link">Secure yourself</span>
                            <i class="arrow-icon">→</i>
                        </a>
                    </div>
                </div>

                <!-- Service Item 5 -->
                <div class="service-item">
                    <div class="service-image">
                        <img src="<?php echo esc_url( HOSTORIO_URI ); ?>/assets/images/enterprice-security.jpg" alt="Hostorio enterprise-grade security with free SSL, DDoS protection via BitNinja and automated daily backups">
                    </div>
                    <div class="service-content">
                        <h3 class="service-title" data-i18n="services.item5.title">Enterprise-Grade Security, Affordable Prices</h3>
                        <p class="service-description" data-i18n="services.item5.desc">
                            Security isn't luxury—it's essential. Every Hostorio account includes free SSL certificates, DDoS protection via BitNinja, automatic malware scanning, and daily automated backups. We take the stress out of security so you can focus on growing your business. Sleep soundly knowing your data and your customers' data are protected 24/7.
                        </p>
                        <a href="<?php echo esc_url( hostorio_page_url( 'turbo-hosting' ) ); ?>" class="service-link">
                            <span data-i18n="services.item5.link">Learn about security</span>
                            <i class="arrow-icon">→</i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>


       <!-- WordPress Hosting Section -->
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
                                <h3 class="wp-blog-title" data-i18n="wordpress.blogTitle">Your Blog Title</h3>
                            </div>

                            <!-- Latest Post Section -->
                            <div class="wp-posts-section">
                                <p class="wp-section-title" data-i18n="wordpress.latestPost">Latest Post</p>
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
                    <h2 class="wordpress-title" data-i18n="wordpress.title">WordPress Hosting Turbocharged</h2>
                    <p class="wordpress-description" data-i18n="wordpress.description">
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
                            <h3 class="feature-title" data-i18n="wordpress.feature1">1-Click Script Deployment</h3>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                                    <circle cx="24" cy="24" r="20" fill="#0170B9" opacity="0.2"/>
                                    <path d="M24 12L28 20L36 21L30 27L32 36L24 31L16 36L18 27L12 21L20 20L24 12Z" stroke="#0170B9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <h3 class="feature-title" data-i18n="wordpress.feature2">LiteSpeed-Optimized Stack</h3>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                                    <circle cx="24" cy="24" r="20" fill="#FF7800" opacity="0.2"/>
                                    <path d="M24 8V16M24 32V40M35 24H27M21 24H13M33 13L28 18M28 30L33 35M13 13L18 18M18 30L13 35" stroke="#FF7800" stroke-width="2.5" stroke-linecap="round"/>
                                    <circle cx="24" cy="24" r="6" stroke="#FF7800" stroke-width="2.5"/>
                                </svg>
                            </div>
                            <h3 class="feature-title" data-i18n="wordpress.feature3">Proactive Malware Defense</h3>
                        </div>
                    </div>

                    <!-- CTA Button -->
                    <div class="wordpress-cta">
                        <a href="<?php echo esc_url( hostorio_page_url( 'web-hosting' ) ); ?>" class="cta-button" data-i18n="wordpress.cta">Get Started Now</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Support Section -->
    <section class="support-section">
        <div class="container-wrapper">
            <!-- Section Header -->
            <div class="section-header">
                <h2 class="section-main-title" data-i18n="support.sectionTitle">Customer Success Focus</h2>
                <p class="section-subtitle" data-i18n="support.sectionSubtitle">We provide everything you need to succeed online</p>
            </div>

            <!-- Support Cards -->
            <div class="support-cards">

                <!-- Card 1 -->
                <div class="support-card">
                    <div class="card-image-wrapper">
                        <img src="<?php echo esc_url( HOSTORIO_URI ); ?>/assets/images/support/support-hostorio.webp" alt="Hostorio 24/7 customer support team guiding new users through web hosting setup and configuration" class="card-image">
                        <div class="image-overlay blue-overlay"></div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title" data-i18n="support.card1.title">Onboarding Support</h3>
                        <p class="card-description" data-i18n="support.card1.desc">
                            Don't know where to start? Our step-by-step tutorials and 24/7 support team walk you through domain setup, hosting configuration, and WordPress installation.
                        </p>
                        <a href="https://my.hostorio.com/submitticket.php" class="card-button" data-i18n="support.card1.btn">Get started</a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="support-card">
                    <div class="card-image-wrapper">
                        <img src="<?php echo esc_url( HOSTORIO_URI ); ?>/assets/images/support/blog-hostorio.webp" alt="Hostorio knowledge base and resource center with web hosting tutorials, guides and security tips" class="card-image">
                        <div class="image-overlay green-overlay"></div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title" data-i18n="support.card2.title">Discover our Resources</h3>
                        <p class="card-description" data-i18n="support.card2.desc">
                            Access our resource center for hosting best practices, security tips, performance optimization guides, and industry insights.
                        </p>
                        <a href="https://my.hostorio.com/knowledgebase" class="card-button" data-i18n="support.card2.btn">Get learning</a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="support-card">
                    <div class="card-image-wrapper">
                        <img src="<?php echo esc_url( HOSTORIO_URI ); ?>/assets/images/support/trasfer-hosting-hostorio.webp" alt="Hassle-free domain and web hosting transfer service to Hostorio – fast, easy migration" class="card-image">
                        <div class="image-overlay orange-overlay"></div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title" data-i18n="support.card3.title">Hassle-Free Transfers</h3>
                        <p class="card-description" data-i18n="support.card3.desc">
                            Move your domain and Hosting to Us. Switching hosts shouldn't feel like moving houses. With us, it's simple.
                        </p>
                        <a href="https://my.hostorio.com/cart.php?a=add&domain=transfer" class="card-button" data-i18n="support.card3.btn">Transfer today</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
   
   
    <!-- Main Footer -->
    
<?php get_footer(); ?>
