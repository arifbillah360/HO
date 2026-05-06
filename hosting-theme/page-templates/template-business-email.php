<?php
/**
 * Template Name: Business Email
 * Template Post Type: page
 *
 * Page template for Business Email hosting packages.
 *
 * @package Hosting_Theme
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<!-- Business Email Header -->
<section class="email-hero" style="background: linear-gradient(135deg, var(--dark-blue) 0%, var(--primary-blue) 100%); padding: 60px 0 80px; color: #fff;">
    <div class="container-wrapper">
        <div style="text-align: center; max-width: 700px; margin: 0 auto;">
            <h1 style="font-size: 40px; font-weight: 700; margin: 0 0 16px;">
                <?php esc_html_e( 'Professional Business Email', 'hosting-theme' ); ?>
            </h1>
            <p style="font-size: 18px; opacity: 0.9; margin: 0;">
                <?php esc_html_e( 'Secure, reliable email with your own domain name', 'hosting-theme' ); ?>
            </p>
        </div>
    </div>
</section>

<!-- Email Packages -->
<section style="padding: 60px 0;">
    <div class="container-wrapper">
        <div style="text-align: center; margin-bottom: 50px;">
            <h2 style="font-size: 32px; color: var(--color-dark); margin: 0 0 16px;">
                <?php esc_html_e( 'Email Plans for Every Business', 'hosting-theme' ); ?>
            </h2>
            <p style="font-size: 16px; color: var(--color-text); max-width: 600px; margin: 0 auto;">
                <?php esc_html_e( 'Professional email hosting with advanced security and collaboration tools', 'hosting-theme' ); ?>
            </p>
        </div>

        <!-- Email Packages Grid -->
        <div class="cloud-pricing-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; max-width: 1000px; margin: 0 auto;">

            <?php
            $email_packages = array(
                array(
                    'title'       => 'Starter',
                    'description' => 'Perfect for individuals & small teams',
                    'price_bdt'   => 300,
                    'price_usd'   => 2.73,
                    'features'    => array(
                        '10 Email Accounts',
                        '50GB Storage',
                        'IMAP/POP3 Access',
                        'Webmail Interface',
                        'Spam Filtering',
                        'Basic Support',
                    ),
                    'order_url'   => 'https://my.hostorio.com/cart.php?a=add&pid=42',
                    'is_popular'  => false,
                ),
                array(
                    'title'       => 'Pro',
                    'description' => 'Growing businesses & teams',
                    'price_bdt'   => 600,
                    'price_usd'   => 5.46,
                    'features'    => array(
                        '50 Email Accounts',
                        '250GB Storage',
                        'IMAP/POP3 Access',
                        'Webmail Interface',
                        'Advanced Spam Filter',
                        'Priority Support',
                        'Mobile Sync',
                    ),
                    'order_url'   => 'https://my.hostorio.com/cart.php?a=add&pid=43',
                    'is_popular'  => true,
                ),
                array(
                    'title'       => 'Ultimate',
                    'description' => 'Enterprise email solution',
                    'price_bdt'   => 1200,
                    'price_usd'   => 10.92,
                    'features'    => array(
                        'Unlimited Accounts',
                        'Unlimited Storage',
                        'IMAP/POP3 Access',
                        'Advanced Webmail',
                        'Enterprise Spam Filter',
                        '24/7 Premium Support',
                        'Mobile Sync',
                        'Archiving & Backup',
                    ),
                    'order_url'   => 'https://my.hostorio.com/cart.php?a=add&pid=44',
                    'is_popular'  => false,
                ),
            );

            foreach ( $email_packages as $package ) :
                set_query_var( 'email_package', $package );
                get_template_part( 'template-parts/business-email-package' );
            endforeach;
            ?>

        </div>
    </div>
</section>

<!-- Email Features -->
<section style="background: var(--color-light-gray); padding: 60px 0;">
    <div class="container-wrapper">
        <div style="text-align: center; margin-bottom: 50px;">
            <h2 style="font-size: 32px; color: var(--color-dark); margin: 0 0 16px;">
                <?php esc_html_e( 'Features in All Plans', 'hosting-theme' ); ?>
            </h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; max-width: 1000px; margin: 0 auto;">

            <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                <h3 style="color: var(--primary-blue); font-size: 18px; margin: 0 0 12px;">
                    <i class="fas fa-lock"></i> Secure & Encrypted
                </h3>
                <p style="color: var(--color-text); font-size: 14px; margin: 0;">
                    <?php esc_html_e( 'SSL/TLS encryption for all email communications', 'hosting-theme' ); ?>
                </p>
            </div>

            <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                <h3 style="color: var(--primary-blue); font-size: 18px; margin: 0 0 12px;">
                    <i class="fas fa-mobile-alt"></i> Mobile Access
                </h3>
                <p style="color: var(--color-text); font-size: 14px; margin: 0;">
                    <?php esc_html_e( 'Full support for iOS, Android, and desktop clients', 'hosting-theme' ); ?>
                </p>
            </div>

            <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                <h3 style="color: var(--primary-blue); font-size: 18px; margin: 0 0 12px;">
                    <i class="fas fa-shield-alt"></i> Spam Protection
                </h3>
                <p style="color: var(--color-text); font-size: 14px; margin: 0;">
                    <?php esc_html_e( 'Advanced filters keep unwanted emails out of your inbox', 'hosting-theme' ); ?>
                </p>
            </div>

            <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                <h3 style="color: var(--primary-blue); font-size: 18px; margin: 0 0 12px;">
                    <i class="fas fa-headset"></i> Expert Support
                </h3>
                <p style="color: var(--color-text); font-size: 14px; margin: 0;">
                    <?php esc_html_e( 'Dedicated support team to help you get the most from your email', 'hosting-theme' ); ?>
                </p>
            </div>

            <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                <h3 style="color: var(--primary-blue); font-size: 18px; margin: 0 0 12px;">
                    <i class="fas fa-sync"></i> Backup & Recovery
                </h3>
                <p style="color: var(--color-text); font-size: 14px; margin: 0;">
                    <?php esc_html_e( 'Automatic backups ensure your data is never lost', 'hosting-theme' ); ?>
                </p>
            </div>

            <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                <h3 style="color: var(--primary-blue); font-size: 18px; margin: 0 0 12px;">
                    <i class="fas fa-users"></i> Collaboration
                </h3>
                <p style="color: var(--color-text); font-size: 14px; margin: 0;">
                    <?php esc_html_e( 'Work together with shared calendars and contacts', 'hosting-theme' ); ?>
                </p>
            </div>

        </div>
    </div>
</section>

<!-- Page Content -->
<?php
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        $content = get_the_content();
        if ( ! empty( $content ) ) :
?>
<section style="padding: 60px 0;">
    <div class="container-wrapper">
        <div style="max-width: 800px; margin: 0 auto; font-size: 16px; color: var(--color-text); line-height: 1.8;">
            <?php the_content(); ?>
        </div>
    </div>
</section>
        <?php
        endif;
    endwhile;
endif;
?>

<!-- Back Link -->
<section style="padding: 40px 0; text-align: center;">
    <div class="container-wrapper">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="display: inline-flex; align-items: center; gap: 8px; color: var(--primary-blue); font-weight: 600; font-size: 15px; text-decoration: none;">
            <i class="fas fa-arrow-left"></i>
            <?php esc_html_e( 'Back to All Services', 'hosting-theme' ); ?>
        </a>
    </div>
</section>

<?php
get_footer();
