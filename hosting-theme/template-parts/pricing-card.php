<?php
/**
 * Template part: Pricing Card
 *
 * Reusable component that renders a single hosting plan card.
 * Must be called inside a WP_Query loop or with a valid hosting_plan post.
 *
 * Expects: global $post to be a hosting_plan CPT.
 * Data attributes on the card enable client-side currency switching.
 *
 * @package Hosting_Theme
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// ── Fetch ACF fields ────────────────────────────────────────────────────────

$plan_name        = get_field( 'plan_name' );
$plan_description = get_field( 'plan_description' );
$is_popular       = get_field( 'is_popular' );

// Pricing.
$price_bdt          = (float) get_field( 'price_bdt' );
$price_usd          = get_field( 'price_usd' );
$price_original_bdt = get_field( 'price_original_bdt' );
$price_original_usd = get_field( 'price_original_usd' );
$discount_badge     = get_field( 'discount_badge' );

// Calculate USD if not set.
$usd_amount          = hosting_theme_get_usd_price( $price_bdt, $price_usd );
$usd_original_amount = ! empty( $price_original_bdt )
	? hosting_theme_get_usd_price( $price_original_bdt, $price_original_usd )
	: 0;

// Features repeater.
$features = get_field( 'features' );

// Order link.
$order_url         = get_field( 'order_url' );
$order_button_text = get_field( 'order_button_text' );
if ( empty( $order_button_text ) ) {
	$order_button_text = function_exists( 'pll__' ) ? pll__( 'Order Now' ) : __( 'Order Now', 'hosting-theme' );
}

// Period label.
$period_label = function_exists( 'pll__' ) ? pll__( '/mo' ) : __( '/mo', 'hosting-theme' );

// Fallback plan name to post title.
if ( empty( $plan_name ) ) {
	$plan_name = get_the_title();
}

// Card CSS class.
$card_class = 'cloud-card';
if ( $is_popular ) {
	$card_class .= ' popular';
}
?>

<!-- Pricing Card: <?php echo esc_attr( $plan_name ); ?> -->
<div class="<?php echo esc_attr( $card_class ); ?> pricing-card"
     data-price-bdt="<?php echo esc_attr( $price_bdt ); ?>"
     data-price-usd="<?php echo esc_attr( $usd_amount ); ?>"
     data-original-bdt="<?php echo esc_attr( $price_original_bdt ); ?>"
     data-original-usd="<?php echo esc_attr( $usd_original_amount ); ?>">

    <?php if ( $is_popular ) : ?>
        <div class="cloud-popular-badge">
            <?php
            if ( function_exists( 'pll__' ) ) {
                echo esc_html( pll__( 'Most Popular' ) );
            } else {
                esc_html_e( 'Most Popular', 'hosting-theme' );
            }
            ?>
        </div>
    <?php endif; ?>

    <div class="cloud-icon">
        <img src="<?php echo esc_url( HOSTING_THEME_URI . '/assets/images/pricing/data-server.svg' ); ?>" alt="<?php echo esc_attr( $plan_name ); ?>">
    </div>

    <h3 class="cloud-plan-name"><?php echo esc_html( $plan_name ); ?></h3>

    <?php if ( ! empty( $plan_description ) ) : ?>
        <p class="cloud-plan-desc"><?php echo esc_html( $plan_description ); ?></p>
    <?php endif; ?>

    <div class="cloud-pricing">
        <?php if ( ! empty( $price_original_bdt ) ) : ?>
            <div class="cloud-price-original">
                <span class="price-original-bdt">৳<?php echo esc_html( number_format( $price_original_bdt, 0 ) ); ?></span>
                <span class="price-original-usd" style="display:none;">$<?php echo esc_html( number_format( $usd_original_amount, 2 ) ); ?></span>
                <?php if ( ! empty( $discount_badge ) ) : ?>
                    <span class="cloud-save-badge"><?php echo esc_html( $discount_badge ); ?></span>
                <?php endif; ?>
            </div>
        <?php endif; ?>

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
            <?php foreach ( $features as $feature ) :
                $is_available = $feature['is_available'];
                $feature_text = $feature['feature_item'];
            ?>
                <li<?php echo ! $is_available ? ' class="feature-unavailable"' : ''; ?>>
                    <?php if ( $is_available ) : ?>
                        <svg class="cloud-icon-check" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <rect width="16" height="16" rx="3" fill="#E3F2FD"/>
                            <path d="M5 8L7 10L11 6" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    <?php else : ?>
                        <svg class="cloud-icon-cross" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <rect width="16" height="16" rx="3" fill="#FFEBEE"/>
                            <path d="M5 5L11 11M11 5L5 11" stroke="#EF5350" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    <?php endif; ?>
                    <span><?php echo wp_kses_post( $feature_text ); ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <?php if ( ! empty( $order_url ) ) : ?>
        <a href="<?php echo esc_url( $order_url ); ?>" class="cloud-order-btn">
            <?php echo esc_html( $order_button_text ); ?>
        </a>
    <?php else : ?>
        <button class="cloud-order-btn">
            <?php echo esc_html( $order_button_text ); ?>
        </button>
    <?php endif; ?>

</div>
