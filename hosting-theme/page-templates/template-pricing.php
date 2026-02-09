<?php
/**
 * Template Name: Pricing Page
 *
 * Queries all published hosting_plan posts (filtered by current Polylang
 * language) and renders them using the pricing-card template part.
 *
 * @package Hosting_Theme
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

// Polylang-aware period label.
$period_label_monthly  = function_exists( 'pll__' ) ? pll__( 'Billed Monthly' )  : __( 'Billed Monthly', 'hosting-theme' );
$period_label_annually = function_exists( 'pll__' ) ? pll__( 'Billed Annually' ) : __( 'Billed Annually', 'hosting-theme' );
$save_badge_text       = function_exists( 'pll__' ) ? pll__( 'Save 15%!' )       : __( 'Save 15%!', 'hosting-theme' );
?>

<!-- ===========================
     PRICING SECTION (Dynamic)
     =========================== -->
<section class="pricing-section">
    <div class="container-wrapper">

        <!-- Section Header -->
        <div class="pricing-header">
            <h2 class="pricing-main-title">
                <?php
                if ( function_exists( 'pll__' ) ) {
                    echo esc_html( pll__( 'Find the Hosting Plan that\'s Right for Your Business' ) );
                } else {
                    esc_html_e( 'Find the Hosting Plan that\'s Right for Your Business', 'hosting-theme' );
                }
                ?>
            </h2>
            <p class="pricing-subtitle">
                <?php
                if ( function_exists( 'pll__' ) ) {
                    echo esc_html( pll__( 'We Have the Features and Service You Deserve!' ) );
                } else {
                    esc_html_e( 'We Have the Features and Service You Deserve!', 'hosting-theme' );
                }
                ?>
            </p>

            <!-- Billing Toggle -->
            <div class="billing-toggle">
                <span class="toggle-label"><?php echo esc_html( $period_label_monthly ); ?></span>
                <label class="toggle-switch">
                    <input type="checkbox" id="billingToggle">
                    <span class="toggle-slider"></span>
                </label>
                <span class="toggle-label active"><?php echo esc_html( $period_label_annually ); ?></span>
                <span class="save-badge"><?php echo esc_html( $save_badge_text ); ?></span>
            </div>
        </div>

        <!-- Cloud Pricing Section -->
        <section class="cloud-pricing-section">
            <div class="container-wrapper">

                <!-- Pricing Cards Grid -->
                <div class="cloud-pricing-cards">

                    <?php
                    // Query hosting plans, ordered by menu_order (page-attributes).
                    $plans_query = new WP_Query( array(
                        'post_type'      => 'hosting_plan',
                        'posts_per_page' => -1,
                        'orderby'        => 'menu_order',
                        'order'          => 'ASC',
                        'post_status'    => 'publish',
                    ) );

                    if ( $plans_query->have_posts() ) :
                        while ( $plans_query->have_posts() ) :
                            $plans_query->the_post();
                            get_template_part( 'template-parts/pricing-card' );
                        endwhile;
                        wp_reset_postdata();
                    else :
                    ?>
                        <p class="no-plans-message" style="text-align:center; padding:40px; color:#666;">
                            <?php esc_html_e( 'No hosting plans found. Add plans in the WordPress admin under Hosting Plans.', 'hosting-theme' ); ?>
                        </p>
                    <?php endif; ?>

                </div>

            </div>
        </section>

    </div>
</section>

<?php
get_footer();
