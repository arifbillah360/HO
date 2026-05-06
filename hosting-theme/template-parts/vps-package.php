<?php
/**
 * Template part: VPS Package
 *
 * Reusable component for displaying a single VPS package.
 *
 * @package Hosting_Theme
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Package data (passed via array).
$title = isset( $vps_package['title'] ) ? $vps_package['title'] : '';
$description = isset( $vps_package['description'] ) ? $vps_package['description'] : '';
$price_bdt = isset( $vps_package['price_bdt'] ) ? (float) $vps_package['price_bdt'] : 0;
$price_usd = isset( $vps_package['price_usd'] ) ? $vps_package['price_usd'] : 0;
$features = isset( $vps_package['features'] ) ? $vps_package['features'] : array();
$is_popular = isset( $vps_package['is_popular'] ) ? $vps_package['is_popular'] : false;

$usd_amount = hosting_theme_get_usd_price( $price_bdt, $price_usd );
$period_label = function_exists( 'pll__' ) ? pll__( '/mo' ) : __( '/mo', 'hosting-theme' );
$order_url = 'https://my.hostorio.com/cart.php?a=add&pid=12';
$order_button_text = function_exists( 'pll__' ) ? pll__( 'Order Now' ) : __( 'Order Now', 'hosting-theme' );

$card_class = 'cloud-card';
if ( $is_popular ) {
	$card_class .= ' popular';
}
?>

<div class="<?php echo esc_attr( $card_class ); ?> pricing-card" data-price-bdt="<?php echo esc_attr( $price_bdt ); ?>" data-price-usd="<?php echo esc_attr( $usd_amount ); ?>">

    <?php if ( $is_popular ) : ?>
        <div class="cloud-popular-badge">
            <?php echo esc_html( pll__( 'Most Popular' ) ); ?>
        </div>
    <?php endif; ?>

    <div class="cloud-icon">
        <img src="<?php echo esc_url( HOSTING_THEME_URI . '/assets/images/pricing/server.svg' ); ?>" alt="<?php echo esc_attr( $title ); ?>" style="width: 60px; height: 60px;">
    </div>

    <h3 class="cloud-plan-name"><?php echo esc_html( $title ); ?></h3>

    <?php if ( ! empty( $description ) ) : ?>
        <p class="cloud-plan-desc"><?php echo esc_html( $description ); ?></p>
    <?php endif; ?>

    <div class="cloud-pricing">
        <div class="cloud-price-current">
            <span class="cloud-currency currency-symbol-bdt">৳</span>
            <span class="cloud-currency currency-symbol-usd" style="display:none;">$</span>
            <span class="cloud-amount amount-bdt"><?php echo esc_html( number_format( $price_bdt, 0 ) ); ?></span>
            <span class="cloud-amount amount-usd" style="display:none;"><?php echo esc_html( number_format( $usd_amount, 2 ) ); ?></span>
            <span class="cloud-period"><?php echo esc_html( $period_label ); ?></span>
        </div>
    </div>

    <?php if ( ! empty( $features ) ) : ?>
        <ul class="cloud-features">
            <?php foreach ( $features as $feature ) : ?>
                <li>
                    <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                        <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span><?php echo esc_html( $feature ); ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <a href="<?php echo esc_url( $order_url ); ?>" class="cloud-order-btn">
        <?php echo esc_html( $order_button_text ); ?>
    </a>

</div>
