<?php
/**
 * Template Name: VPS Hosting
 * Template Post Type: page
 *
 * Page template for displaying VPS hosting packages.
 * Assign this template via Page > Page Attributes > Template.
 *
 * @package Hosting_Theme
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<!-- VPS Header -->
<section class="vps-hero" style="background: linear-gradient(135deg, var(--dark-blue) 0%, var(--primary-blue) 100%); padding: 60px 0 80px; color: #fff;">
    <div class="container-wrapper">
        <div style="text-align: center; max-width: 700px; margin: 0 auto;">
            <h1 style="font-size: 40px; font-weight: 700; margin: 0 0 16px;">
                <?php esc_html_e( 'Virtual Private Server Hosting', 'hosting-theme' ); ?>
            </h1>
            <p style="font-size: 18px; opacity: 0.9; margin: 0;">
                <?php esc_html_e( 'Full control, flexibility, and power for your applications', 'hosting-theme' ); ?>
            </p>
        </div>
    </div>
</section>

<!-- VPS Packages -->
<section style="padding: 60px 0;">
    <div class="container-wrapper">
        <div style="text-align: center; margin-bottom: 50px;">
            <h2 style="font-size: 32px; color: var(--color-dark); margin: 0 0 16px;">
                <?php esc_html_e( 'Choose Your VPS Plan', 'hosting-theme' ); ?>
            </h2>
            <p style="font-size: 16px; color: var(--color-text); max-width: 600px; margin: 0 auto;">
                <?php esc_html_e( 'Powerful, reliable, and scalable VPS hosting with 99.9% uptime guarantee', 'hosting-theme' ); ?>
            </p>
        </div>

        <!-- VPS Packages Grid -->
        <div class="cloud-pricing-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; max-width: 1200px; margin: 0 auto;">

            <?php
            // VPS Package Tiers
            $vps_packages = array(
                array(
                    'title'       => 'VPS 1GB',
                    'description' => 'Starter VPS for small apps',
                    'price_bdt'   => 1500,
                    'price_usd'   => 13.65,
                    'features'    => array(
                        '1 vCore',
                        '1GB RAM',
                        '30GB SSD',
                        'Unlimited Bandwidth',
                        'Free cPanel/WHM',
                        'Free SSL',
                        'Full Root Access',
                    ),
                    'is_popular'  => false,
                ),
                array(
                    'title'       => 'VPS 2GB',
                    'description' => 'Growing applications',
                    'price_bdt'   => 2500,
                    'price_usd'   => 22.75,
                    'features'    => array(
                        '2 vCores',
                        '2GB RAM',
                        '60GB SSD',
                        'Unlimited Bandwidth',
                        'Free cPanel/WHM',
                        'Free SSL',
                        'Full Root Access',
                    ),
                    'is_popular'  => true,
                ),
                array(
                    'title'       => 'VPS 4GB',
                    'description' => 'Production applications',
                    'price_bdt'   => 4500,
                    'price_usd'   => 40.95,
                    'features'    => array(
                        '4 vCores',
                        '4GB RAM',
                        '120GB SSD',
                        'Unlimited Bandwidth',
                        'Free cPanel/WHM',
                        'Free SSL',
                        'Full Root Access',
                    ),
                    'is_popular'  => false,
                ),
                array(
                    'title'       => 'VPS 8GB',
                    'description' => 'Enterprise applications',
                    'price_bdt'   => 8000,
                    'price_usd'   => 72.80,
                    'features'    => array(
                        '8 vCores',
                        '8GB RAM',
                        '240GB SSD',
                        'Unlimited Bandwidth',
                        'Free cPanel/WHM',
                        'Free SSL',
                        'Full Root Access',
                    ),
                    'is_popular'  => false,
                ),
            );

            foreach ( $vps_packages as $package ) :
                set_query_var( 'vps_package', $package );
                get_template_part( 'template-parts/vps-package' );
            endforeach;
            ?>

        </div>
    </div>
</section>

<!-- VPS Features -->
<section style="background: var(--color-light-gray); padding: 60px 0;">
    <div class="container-wrapper">
        <div style="text-align: center; margin-bottom: 50px;">
            <h2 style="font-size: 32px; color: var(--color-dark); margin: 0 0 16px;">
                <?php esc_html_e( 'Included in Every VPS Plan', 'hosting-theme' ); ?>
            </h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; max-width: 1000px; margin: 0 auto;">

            <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                <h3 style="color: var(--primary-blue); font-size: 18px; margin: 0 0 12px;">
                    <i class="fas fa-clock"></i> 99.9% Uptime
                </h3>
                <p style="color: var(--color-text); font-size: 14px; margin: 0;">
                    <?php esc_html_e( 'Guaranteed uptime SLA with redundant infrastructure', 'hosting-theme' ); ?>
                </p>
            </div>

            <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                <h3 style="color: var(--primary-blue); font-size: 18px; margin: 0 0 12px;">
                    <i class="fas fa-shield-alt"></i> DDoS Protection
                </h3>
                <p style="color: var(--color-text); font-size: 14px; margin: 0;">
                    <?php esc_html_e( 'Advanced DDoS mitigation and firewall protection', 'hosting-theme' ); ?>
                </p>
            </div>

            <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                <h3 style="color: var(--primary-blue); font-size: 18px; margin: 0 0 12px;">
                    <i class="fas fa-headset"></i> 24/7 Support
                </h3>
                <p style="color: var(--color-text); font-size: 14px; margin: 0;">
                    <?php esc_html_e( 'Expert support team available around the clock', 'hosting-theme' ); ?>
                </p>
            </div>

            <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                <h3 style="color: var(--primary-blue); font-size: 18px; margin: 0 0 12px;">
                    <i class="fas fa-tachometer-alt"></i> SSD Storage
                </h3>
                <p style="color: var(--color-text); font-size: 14px; margin: 0;">
                    <?php esc_html_e( 'Lightning-fast NVMe SSD storage for optimal performance', 'hosting-theme' ); ?>
                </p>
            </div>

            <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                <h3 style="color: var(--primary-blue); font-size: 18px; margin: 0 0 12px;">
                    <i class="fas fa-lock"></i> Full Root Access
                </h3>
                <p style="color: var(--color-text); font-size: 14px; margin: 0;">
                    <?php esc_html_e( 'Complete control over your server environment', 'hosting-theme' ); ?>
                </p>
            </div>

            <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                <h3 style="color: var(--primary-blue); font-size: 18px; margin: 0 0 12px;">
                    <i class="fas fa-sync"></i> Free Backups
                </h3>
                <p style="color: var(--color-text); font-size: 14px; margin: 0;">
                    <?php esc_html_e( 'Automatic daily backups to protect your data', 'hosting-theme' ); ?>
                </p>
            </div>

        </div>
    </div>
</section>

<!-- Page Content (if editor content exists) -->
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

<!-- Back to Services -->
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
