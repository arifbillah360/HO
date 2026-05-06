<?php
/**
 * Template Name: Special Offers
 * Template Post Type: page
 *
 * Page template for special promotional offers.
 *
 * @package Hosting_Theme
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<!-- Offers Header -->
<section class="offers-hero" style="background: linear-gradient(135deg, var(--orange-primary) 0%, var(--dark-blue) 100%); padding: 60px 0 80px; color: #fff;">
    <div class="container-wrapper">
        <div style="text-align: center; max-width: 700px; margin: 0 auto;">
            <h1 style="font-size: 40px; font-weight: 700; margin: 0 0 16px;">
                <?php esc_html_e( 'Limited Time Offers', 'hosting-theme' ); ?>
            </h1>
            <p style="font-size: 18px; opacity: 0.9; margin: 0;">
                <?php esc_html_e( 'Grab these exclusive deals before they\'re gone!', 'hosting-theme' ); ?>
            </p>
        </div>
    </div>
</section>

<!-- Offers Packages -->
<section style="padding: 60px 0;">
    <div class="container-wrapper">
        <div style="text-align: center; margin-bottom: 50px;">
            <h2 style="font-size: 32px; color: var(--color-dark); margin: 0 0 16px;">
                <?php esc_html_e( 'Special Promotional Bundles', 'hosting-theme' ); ?>
            </h2>
            <p style="font-size: 16px; color: var(--color-text); max-width: 600px; margin: 0 auto;">
                <?php esc_html_e( 'Unbeatable value on domain + hosting bundles. Limited time only!', 'hosting-theme' ); ?>
            </p>
        </div>

        <!-- Offers Packages Grid -->
        <div class="cloud-pricing-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; max-width: 1200px; margin: 0 auto;">

            <?php
            $offer_packages = array(
                array(
                    'title'       => '2GB + .SHOP',
                    'description' => 'Hosting + Premium Domain',
                    'price_bdt'   => 800,
                    'price_usd'   => 7.28,
                    'features'    => array(
                        '2GB SSD Storage',
                        '2 Email Accounts',
                        '1 .SHOP Domain (1 year)',
                        'Free SSL Certificate',
                        'Free cPanel',
                        'Money-Back Guarantee',
                    ),
                    'order_url'   => 'https://my.hostorio.com/cart.php?a=add&pid=16',
                    'is_popular'  => false,
                ),
                array(
                    'title'       => '5GB + XYZ',
                    'description' => 'Best value bundle',
                    'price_bdt'   => 1200,
                    'price_usd'   => 10.92,
                    'features'    => array(
                        '5GB SSD Storage',
                        '5 Email Accounts',
                        '1 .XYZ Domain (1 year)',
                        'Free SSL Certificate',
                        'Free cPanel',
                        'Priority Support',
                    ),
                    'order_url'   => 'https://my.hostorio.com/cart.php?a=add&pid=17',
                    'is_popular'  => true,
                ),
                array(
                    'title'       => '5GB + .COM',
                    'description' => 'Classic .COM domain',
                    'price_bdt'   => 1500,
                    'price_usd'   => 13.65,
                    'features'    => array(
                        '5GB SSD Storage',
                        '5 Email Accounts',
                        '1 .COM Domain (1 year)',
                        'Free SSL Certificate',
                        'Free cPanel',
                        'Priority Support',
                    ),
                    'order_url'   => 'https://my.hostorio.com/cart.php?a=add&pid=18',
                    'is_popular'  => false,
                ),
                array(
                    'title'       => '20GB + .COM',
                    'description' => 'Premium bundle',
                    'price_bdt'   => 3500,
                    'price_usd'   => 31.85,
                    'features'    => array(
                        '20GB SSD Storage',
                        '20 Email Accounts',
                        '1 .COM Domain (1 year)',
                        'Free SSL Certificate',
                        'Free cPanel',
                        '24/7 Premium Support',
                    ),
                    'order_url'   => 'https://my.hostorio.com/cart.php?a=add&pid=19',
                    'is_popular'  => false,
                ),
            );

            foreach ( $offer_packages as $package ) :
                set_query_var( 'offer_package', $package );
                get_template_part( 'template-parts/offer-package' );
            endforeach;
            ?>

        </div>
    </div>
</section>

<!-- Why Choose Our Offers -->
<section style="background: var(--color-light-gray); padding: 60px 0;">
    <div class="container-wrapper">
        <div style="text-align: center; margin-bottom: 50px;">
            <h2 style="font-size: 32px; color: var(--color-dark); margin: 0 0 16px;">
                <?php esc_html_e( 'Why Choose These Bundles?', 'hosting-theme' ); ?>
            </h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; max-width: 1000px; margin: 0 auto;">

            <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                <h3 style="color: var(--orange-primary); font-size: 18px; margin: 0 0 12px;">
                    <i class="fas fa-tags"></i> Huge Savings
                </h3>
                <p style="color: var(--color-text); font-size: 14px; margin: 0;">
                    <?php esc_html_e( 'Save 30-40% compared to buying hosting and domain separately', 'hosting-theme' ); ?>
                </p>
            </div>

            <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                <h3 style="color: var(--orange-primary); font-size: 18px; margin: 0 0 12px;">
                    <i class="fas fa-check-circle"></i> All-in-One
                </h3>
                <p style="color: var(--color-text); font-size: 14px; margin: 0;">
                    <?php esc_html_e( 'Everything you need in one simple package to get online fast', 'hosting-theme' ); ?>
                </p>
            </div>

            <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                <h3 style="color: var(--orange-primary); font-size: 18px; margin: 0 0 12px;">
                    <i class="fas fa-clock"></i> Limited Time
                </h3>
                <p style="color: var(--color-text); font-size: 14px; margin: 0;">
                    <?php esc_html_e( 'These exclusive offers won\'t last long—grab yours today!', 'hosting-theme' ); ?>
                </p>
            </div>

            <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                <h3 style="color: var(--orange-primary); font-size: 18px; margin: 0 0 12px;">
                    <i class="fas fa-undo"></i> Money-Back
                </h3>
                <p style="color: var(--color-text); font-size: 14px; margin: 0;">
                    <?php esc_html_e( '30-day money-back guarantee if you\'re not satisfied', 'hosting-theme' ); ?>
                </p>
            </div>

            <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                <h3 style="color: var(--orange-primary); font-size: 18px; margin: 0 0 12px;">
                    <i class="fas fa-bolt"></i> Free Migration
                </h3>
                <p style="color: var(--color-text); font-size: 14px; margin: 0;">
                    <?php esc_html_e( 'We handle the migration for you—zero downtime guaranteed', 'hosting-theme' ); ?>
                </p>
            </div>

            <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                <h3 style="color: var(--orange-primary); font-size: 18px; margin: 0 0 12px;">
                    <i class="fas fa-headset"></i> Support
                </h3>
                <p style="color: var(--color-text); font-size: 14px; margin: 0;">
                    <?php esc_html_e( '24/7 expert support to help you succeed online', 'hosting-theme' ); ?>
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
