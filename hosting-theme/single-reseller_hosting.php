<?php
/**
 * Single Reseller Hosting template.
 *
 * @package Hosting_Theme
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

while ( have_posts() ) :
	the_post();

	$plan_name        = get_field( 'plan_name' );
	$plan_description = get_field( 'plan_description' );
	$is_popular       = get_field( 'is_popular' );
	$price_bdt        = (float) get_field( 'price_bdt' );
	$price_usd        = get_field( 'price_usd' );
	$price_original_bdt = get_field( 'price_original_bdt' );
	$price_original_usd = get_field( 'price_original_usd' );
	$discount_badge   = get_field( 'discount_badge' );

	$usd_amount          = hosting_theme_get_usd_price( $price_bdt, $price_usd );
	$usd_original_amount = ! empty( $price_original_bdt )
		? hosting_theme_get_usd_price( $price_original_bdt, $price_original_usd )
		: 0;

	$features = get_field( 'features' );
	$order_url         = get_field( 'order_url' );
	$order_button_text = get_field( 'order_button_text' );
	if ( empty( $order_button_text ) ) {
		$order_button_text = function_exists( 'pll__' ) ? pll__( 'Order Now' ) : __( 'Order Now', 'hosting-theme' );
	}

	$period_label = function_exists( 'pll__' ) ? pll__( '/mo' ) : __( '/mo', 'hosting-theme' );
	if ( empty( $plan_name ) ) {
		$plan_name = get_the_title();
	}

	$storage          = get_field( 'storage' );
	$bandwidth        = get_field( 'bandwidth' );
	$ram              = get_field( 'ram' );
	$cpu_cores        = get_field( 'cpu_cores' );
	$websites_allowed = get_field( 'websites_allowed' );
	$visits_monthly   = get_field( 'visits_monthly' );
	$databases        = get_field( 'databases' );
	$email_accounts   = get_field( 'email_accounts' );
	$inodes           = get_field( 'inodes' );
	$free_domain      = get_field( 'free_domain' );
?>

<section class="single-plan-hero" style="background: linear-gradient(135deg, var(--dark-blue) 0%, var(--primary-blue) 100%); padding: 60px 0 80px; color: #fff;">
    <div class="container-wrapper">
        <div style="text-align: center; max-width: 700px; margin: 0 auto;">
            <?php if ( $is_popular ) : ?>
                <span style="display: inline-block; background: var(--orange-primary); color: #fff; padding: 4px 16px; border-radius: var(--radius-full); font-size: 13px; font-weight: 600; margin-bottom: 16px;">
                    <?php echo esc_html( pll__( 'Most Popular' ) ); ?>
                </span>
            <?php endif; ?>
            <h1 style="font-size: 36px; font-weight: 700; margin: 0 0 12px;"><?php echo esc_html( $plan_name ); ?></h1>
            <?php if ( ! empty( $plan_description ) ) : ?>
                <p style="font-size: 18px; opacity: 0.9; margin: 0;"><?php echo esc_html( $plan_description ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>

<section style="padding: 60px 0;">
    <div class="container-wrapper">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: start; max-width: 1000px; margin: 0 auto;">

            <!-- Left: Pricing Card -->
            <div>
                <?php get_template_part( 'template-parts/pricing-card' ); ?>
            </div>

            <!-- Right: Resource Details -->
            <div style="background: #fff; border: 1px solid var(--color-border); border-radius: var(--radius-xl); padding: 32px;">
                <h2 style="font-size: 22px; color: var(--color-dark); margin: 0 0 24px; padding-bottom: 16px; border-bottom: 2px solid var(--primary-blue);">
                    <?php esc_html_e( 'Plan Resources', 'hosting-theme' ); ?>
                </h2>

                <table style="width: 100%; border-collapse: collapse;">
                    <?php
                    $resources = array();
                    if ( ! empty( $storage ) ) { $resources[] = array( __( 'Storage', 'hosting-theme' ), $storage ); }
                    if ( ! empty( $bandwidth ) ) { $resources[] = array( __( 'Bandwidth', 'hosting-theme' ), $bandwidth ); }
                    if ( ! empty( $ram ) ) { $resources[] = array( __( 'RAM', 'hosting-theme' ), $ram ); }
                    if ( ! empty( $cpu_cores ) ) { $resources[] = array( __( 'CPU Cores', 'hosting-theme' ), $cpu_cores ); }
                    if ( ! empty( $websites_allowed ) ) { $resources[] = array( __( 'Websites', 'hosting-theme' ), $websites_allowed ); }
                    if ( ! empty( $visits_monthly ) ) { $resources[] = array( __( 'Monthly Visits', 'hosting-theme' ), $visits_monthly ); }
                    if ( ! empty( $databases ) ) { $resources[] = array( __( 'Databases', 'hosting-theme' ), $databases ); }
                    if ( ! empty( $email_accounts ) ) { $resources[] = array( __( 'Email Accounts', 'hosting-theme' ), $email_accounts ); }
                    if ( ! empty( $inodes ) ) { $resources[] = array( __( 'Inodes', 'hosting-theme' ), $inodes ); }
                    if ( ! empty( $free_domain ) ) { $resources[] = array( __( 'Free Domain', 'hosting-theme' ), $free_domain ); }

                    foreach ( $resources as $i => $resource ) :
                        $bg = $i % 2 === 0 ? 'background: var(--color-light-gray);' : '';
                    ?>
                        <tr>
                            <td style="padding: 12px 16px; font-weight: 600; color: var(--color-dark); font-size: 14px; <?php echo $bg; ?> border-radius: 4px 0 0 4px;">
                                <?php echo esc_html( $resource[0] ); ?>
                            </td>
                            <td style="padding: 12px 16px; color: var(--color-text); font-size: 14px; text-align: right; <?php echo $bg; ?> border-radius: 0 4px 4px 0;">
                                <?php echo esc_html( $resource[1] ); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>

                <?php if ( ! empty( $order_url ) ) : ?>
                    <div style="margin-top: 24px; text-align: center;">
                        <a href="<?php echo esc_url( $order_url ); ?>" class="cloud-order-btn" style="display: inline-block; width: 100%; text-align: center;">
                            <?php echo esc_html( $order_button_text ); ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>

        </div>

        <?php $content = get_the_content(); if ( ! empty( $content ) ) : ?>
            <div style="max-width: 800px; margin: 40px auto 0; font-size: 16px; color: var(--color-text); line-height: 1.8;">
                <?php the_content(); ?>
            </div>
        <?php endif; ?>

        <div style="text-align: center; margin-top: 40px;">
            <a href="<?php echo esc_url( home_url( '/reseller-hosting/' ) ); ?>" style="display: inline-flex; align-items: center; gap: 8px; color: var(--primary-blue); font-weight: 600; font-size: 15px; text-decoration: none;">
                <i class="fas fa-arrow-left"></i>
                <?php esc_html_e( 'View All Plans', 'hosting-theme' ); ?>
            </a>
        </div>

    </div>
</section>

<?php
endwhile;

get_footer();
