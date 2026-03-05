<?php
/**
 * Footer template
 *
 * @package Hostorio
 */

$client_url = hostorio_get( 'client_area_url', 'https://my.hostorio.com/' );
?>

    <footer class="main-footer">
        <div class="container-wrapper">
            <div class="footer-content">

                <!-- Column 1: About -->
                <div class="footer-column footer-about">
                    <div class="footer-logo">
                        <h3><span class="logo-host">HOST</span><span class="logo-orio">ORIO</span></h3>
                    </div>
                    <p class="footer-description" data-i18n="footer.description">
                        <?php echo esc_html( get_theme_mod( 'hostorio_footer_description', 'Hostorio is a popular web hosting services provider. Hostorio provides Shared Hosting, Business Hosting, Reseller Hosting, VPS, and domain Registration-Transfer services.' ) ); ?>
                    </p>
                    <div class="social-links">
                        <?php
                        $socials = array(
                            'facebook' => 'fab fa-facebook-f',
                            'twitter'  => 'fab fa-twitter',
                            'youtube'  => 'fab fa-youtube',
                            'linkedin' => 'fab fa-linkedin-in',
                        );
                        foreach ( $socials as $network => $icon ) :
                            $url = get_theme_mod( 'hostorio_social_' . $network, '' );
                            if ( ! empty( $url ) ) :
                        ?>
                        <a href="<?php echo esc_url( $url ); ?>" class="social-icon" aria-label="<?php echo esc_attr( ucfirst( $network ) ); ?>">
                            <i class="<?php echo esc_attr( $icon ); ?>"></i>
                        </a>
                        <?php
                            endif;
                        endforeach;
                        ?>
                    </div>
                </div>

                <!-- Column 2: Quick Links -->
                <div class="footer-column">
                    <h4 class="footer-title" data-i18n="footer.important.title">QUICK LINKS</h4>
                    <ul class="footer-links">
                        <li>
                            <a href="<?php echo esc_url( hostorio_page_url( 'about-us' ) ); ?>">
                                <i class="fas fa-caret-right"></i>
                                <span data-i18n="footer.important.aboutUs">About Us</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( $client_url ); ?>supporttickets.php">
                                <i class="fas fa-caret-right"></i>
                                <span data-i18n="footer.important.contact">Contact Us</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( $client_url ); ?>login">
                                <i class="fas fa-caret-right"></i>
                                <span data-i18n="footer.important.login">Log In</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( $client_url ); ?>submitticket.php">
                                <i class="fas fa-caret-right"></i>
                                <span data-i18n="footer.important.support">Support</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( $client_url ); ?>knowledgebase">
                                <i class="fas fa-caret-right"></i>
                                <span data-i18n="footer.important.knowledgebase">Knowledgebase</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Column 3: Our Services -->
                <div class="footer-column">
                    <h4 class="footer-title" data-i18n="footer.quickLinks.title">OUR SERVICES</h4>
                    <ul class="footer-links">
                        <li>
                            <a href="<?php echo esc_url( hostorio_page_url( 'web-hosting' ) ); ?>">
                                <i class="fas fa-caret-right"></i>
                                <span data-i18n="footer.quickLinks.shared">Web Hosting</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( hostorio_page_url( 'turbo-hosting' ) ); ?>">
                                <i class="fas fa-caret-right"></i>
                                <span data-i18n="footer.quickLinks.business">Turbo Hosting</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( hostorio_page_url( 'business-email' ) ); ?>">
                                <i class="fas fa-caret-right"></i>
                                <span data-i18n="footer.quickLinks.email">Business Email</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( hostorio_page_url( 'reseller-hosting' ) ); ?>">
                                <i class="fas fa-caret-right"></i>
                                <span data-i18n="footer.quickLinks.reseller">Reseller Hosting</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( hostorio_page_url( 'offer' ) ); ?>">
                                <i class="fas fa-caret-right"></i>
                                <span data-i18n="footer.quickLinks.offer">Offer (Deals)</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Column 4: Contact Us -->
                <div class="footer-column">
                    <h4 class="footer-title" data-i18n="footer.contactUs.title">CONTACT US</h4>
                    <ul class="footer-contact">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span><?php echo esc_html( hostorio_get( 'business_city', 'Kanchan, Rupganj, Narayanganj' ) ); ?></span>
                        </li>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span><?php echo esc_html( hostorio_get( 'business_address', 'H-161, OABDA SOROK MATHBARIA' ) ); ?></span>
                        </li>
                        <li>
                            <i class="fas fa-phone-alt"></i>
                            <span><?php echo esc_html( hostorio_get( 'business_phone', '+8801779440297' ) ); ?></span>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span><?php echo esc_html( hostorio_get( 'business_email', 'mail@hostorio.com' ) ); ?></span>
                        </li>
                    </ul>
                    <div class="payment-methods">
                        <img src="<?php echo esc_url( HOSTORIO_URI ); ?>/assets/images/payment/payment-gateway.svg" alt="Accepted payment methods at Hostorio – bKash, Nagad, Visa, MasterCard and more">
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container-wrapper">
            <div class="footer-bottom-content">
                <p class="copyright" data-i18n="footer.copyright">
                    <?php echo wp_kses_post( get_theme_mod( 'hostorio_copyright', '&copy; ' . date( 'Y' ) . ' Hostorio. All Rights Reserved.' ) ); ?>
                </p>
                <div class="footer-bottom-links">
                    <a href="<?php echo esc_url( hostorio_page_url( 'privacy-policy' ) ); ?>" data-i18n="footer.privacyPolicy">Privacy Policy</a>
                    <span class="separator">|</span>
                    <a href="<?php echo esc_url( hostorio_page_url( 'terms-and-conditions' ) ); ?>" data-i18n="footer.termsOfService">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>

<?php wp_footer(); ?>
</body>
</html>
