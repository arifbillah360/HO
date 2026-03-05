<?php
/**
 * 404 Page Not Found template.
 *
 * @package Hostorio
 */

get_header();
?>

<section class="error-404" style="padding: 120px 20px; text-align: center; min-height: 60vh; display: flex; align-items: center; justify-content: center;">
    <div class="container-wrapper">
        <h1 style="font-size: 4rem; color: var(--primary-blue); margin-bottom: 1rem;">404</h1>
        <h2 style="margin-bottom: 1rem; color: var(--neutral-800);">Page Not Found</h2>
        <p style="color: var(--neutral-600); margin-bottom: 2rem;">The page you're looking for doesn't exist or has been moved.</p>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="cta-button">Go Back Home</a>
    </div>
</section>

<?php get_footer(); ?>
