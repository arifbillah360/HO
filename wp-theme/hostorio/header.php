<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="main-header">
    <div class="container-wrapper">
        <div class="header-content">
            <!-- Logo (Left) -->
            <div class="brand-logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php
                    $logo = hostorio_get( 'logo_url' );
                    if ( empty( $logo ) ) {
                        $logo = HOSTORIO_URI . '/assets/images/logo/hostorio-logo.png';
                    }
                    ?>
                    <img src="<?php echo esc_url( $logo ); ?>" alt="<?php echo esc_attr( hostorio_get( 'business_name', 'Hostorio' ) ); ?> – web hosting company logo" class="logo-image">
                </a>
            </div>

            <!-- Desktop Navigation (Center on Desktop) -->
            <nav class="primary-nav desktop-nav">
                <ul class="nav-menu">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-item" data-i18n="nav.home">Home</a></li>
                    <li class="nav-item-dropdown">
                        <a href="#" class="nav-item">
                            <span data-i18n="nav.webHosting">Web Hosting</span>
                            <i class="fas fa-chevron-down dropdown-arrow"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo esc_url( hostorio_page_url( 'web-hosting' ) ); ?>" class="dropdown-item">
                                <i class="fas fa-server"></i>
                                <span data-i18n="nav.wordpressHosting">Web Hosting</span>
                            </a></li>
                            <li><a href="<?php echo esc_url( hostorio_page_url( 'turbo-hosting' ) ); ?>" class="dropdown-item">
                                <i class="fas fa-bolt"></i>
                                <span data-i18n="nav.turboHosting">Turbo Hosting</span>
                            </a></li>
                            <li><a href="<?php echo esc_url( hostorio_page_url( 'reseller-hosting' ) ); ?>" class="dropdown-item">
                                <i class="fas fa-store"></i>
                                <span data-i18n="nav.resellerHosting">Reseller Hosting</span>
                            </a></li>
                            <li><a href="<?php echo esc_url( hostorio_page_url( 'student-hosting' ) ); ?>" class="dropdown-item">
                                <i class="fas fa-graduation-cap"></i>
                                <span data-i18n="nav.studentHosting">Student Hosting</span>
                            </a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo esc_url( hostorio_page_url( 'business-email' ) ); ?>" class="nav-item" data-i18n="nav.businessEmail">Business Email</a></li>
                    <li><a href="<?php echo esc_url( hostorio_page_url( 'vps' ) ); ?>" class="nav-item" data-i18n="nav.vps">VPS</a></li>
                    <li class="nav-item-dropdown">
                        <a href="#" class="nav-item">
                            <span data-i18n="nav.domain">Domain</span>
                            <i class="fas fa-chevron-down dropdown-arrow"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo esc_url( hostorio_get( 'client_area_url', 'https://my.hostorio.com/' ) ); ?>cart.php?a=add&amp;domain=register" class="dropdown-item">
                                <i class="fas fa-globe"></i>
                                <span data-i18n="nav.domainRegistration">Domain Registration</span>
                            </a></li>
                            <li><a href="<?php echo esc_url( hostorio_get( 'client_area_url', 'https://my.hostorio.com/' ) ); ?>cart.php?a=add&amp;domain=register" class="dropdown-item">
                                <i class="fas fa-tags"></i>
                                <span data-i18n="nav.domainPricing">Domain Pricing</span>
                            </a></li>
                            <li><a href="<?php echo esc_url( hostorio_get( 'client_area_url', 'https://my.hostorio.com/' ) ); ?>cart.php?a=add&amp;domain=transfer" class="dropdown-item">
                                <i class="fas fa-exchange-alt"></i>
                                <span data-i18n="nav.domainTransfer">Domain Transfer</span>
                            </a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo esc_url( hostorio_page_url( 'offer' ) ); ?>" class="nav-item" data-i18n="nav.offer">Offer</a></li>
                </ul>
            </nav>

            <!-- Mobile My Account Button (Center on Mobile) -->
            <div class="mobile-account-center">
                <a href="<?php echo esc_url( hostorio_get( 'client_area_url', 'https://my.hostorio.com/' ) ); ?>" class="account-btn" data-i18n="nav.myAccount">My Account</a>
            </div>

            <!-- Right Side -->
            <div class="header-right">
                <!-- Desktop My Account Button -->
                <a href="<?php echo esc_url( hostorio_get( 'client_area_url', 'https://my.hostorio.com/' ) ); ?>" class="account-btn desktop-account" data-i18n="nav.myAccount">My Account</a>

                <!-- Mobile Menu Toggle -->
                <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle Menu">
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                </button>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Navigation Drawer -->
<nav class="primary-nav mobile-nav" id="mobileNav">
    <ul class="nav-menu">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-item" data-i18n="nav.home">Home</a></li>
        <li class="nav-item-dropdown">
            <a href="#" class="nav-item mobile-dropdown-trigger">
                <span data-i18n="nav.webHosting">Web Hosting</span>
                <i class="fas fa-chevron-down dropdown-arrow"></i>
            </a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo esc_url( hostorio_page_url( 'web-hosting' ) ); ?>" class="dropdown-item">
                    <i class="fas fa-server"></i>
                    <span data-i18n="nav.wordpressHosting">Web Hosting</span>
                </a></li>
                <li><a href="<?php echo esc_url( hostorio_page_url( 'turbo-hosting' ) ); ?>" class="dropdown-item">
                    <i class="fas fa-bolt"></i>
                    <span data-i18n="nav.turboHosting">Turbo Hosting</span>
                </a></li>
                <li><a href="<?php echo esc_url( hostorio_page_url( 'reseller-hosting' ) ); ?>" class="dropdown-item">
                    <i class="fas fa-store"></i>
                    <span data-i18n="nav.resellerHosting">Reseller Hosting</span>
                </a></li>
                <li><a href="<?php echo esc_url( hostorio_page_url( 'student-hosting' ) ); ?>" class="dropdown-item">
                    <i class="fas fa-graduation-cap"></i>
                    <span data-i18n="nav.studentHosting">Student Hosting</span>
                </a></li>
            </ul>
        </li>
        <li><a href="<?php echo esc_url( hostorio_page_url( 'business-email' ) ); ?>" class="nav-item" data-i18n="nav.businessEmail">Business Email</a></li>
        <li><a href="<?php echo esc_url( hostorio_page_url( 'vps' ) ); ?>" class="nav-item" data-i18n="nav.vps">VPS</a></li>
        <li class="nav-item-dropdown">
            <a href="#" class="nav-item mobile-dropdown-trigger">
                <span data-i18n="nav.domain">Domain</span>
                <i class="fas fa-chevron-down dropdown-arrow"></i>
            </a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo esc_url( hostorio_get( 'client_area_url', 'https://my.hostorio.com/' ) ); ?>cart.php?a=add&amp;domain=register" class="dropdown-item">
                    <i class="fas fa-globe"></i>
                    <span data-i18n="nav.domainRegistration">Domain Registration</span>
                </a></li>
                <li><a href="<?php echo esc_url( hostorio_get( 'client_area_url', 'https://my.hostorio.com/' ) ); ?>cart.php?a=add&amp;domain=register" class="dropdown-item">
                    <i class="fas fa-tags"></i>
                    <span data-i18n="nav.domainPricing">Domain Pricing</span>
                </a></li>
                <li><a href="<?php echo esc_url( hostorio_get( 'client_area_url', 'https://my.hostorio.com/' ) ); ?>cart.php?a=add&amp;domain=transfer" class="dropdown-item">
                    <i class="fas fa-exchange-alt"></i>
                    <span data-i18n="nav.domainTransfer">Domain Transfer</span>
                </a></li>
            </ul>
        </li>
        <li><a href="<?php echo esc_url( hostorio_page_url( 'offer' ) ); ?>" class="nav-item" data-i18n="nav.offer">Offer</a></li>
    </ul>
</nav>
