<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Hosting_Theme
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<section class="error-404-section" style="padding: 80px 0; text-align: center;">
    <div class="container-wrapper">
        <h1 style="font-size: 72px; color: var(--primary-blue); margin-bottom: 20px;">404</h1>
        <h2 style="font-size: 28px; color: var(--color-dark); margin-bottom: 15px;"><?php esc_html_e( 'Page Not Found', 'hosting-theme' ); ?></h2>
        <p style="font-size: 16px; color: var(--color-gray); margin-bottom: 30px;"><?php esc_html_e( 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'hosting-theme' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="cta-button"><?php esc_html_e( 'Back to Homepage', 'hosting-theme' ); ?></a>
    </div>
</section>

<?php
get_footer();
