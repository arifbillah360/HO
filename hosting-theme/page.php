<?php
/**
 * The template for displaying all pages.
 *
 * This is the default page template. It displays the page content
 * within the standard header/footer layout.
 *
 * @package Hosting_Theme
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main class="site-main" style="padding: 60px 0;">
    <div class="container-wrapper">
        <?php
        while ( have_posts() ) :
            the_post();
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1 class="page-title" style="font-size: 32px; color: var(--color-dark); margin-bottom: 20px;">
                    <?php the_title(); ?>
                </h1>
                <div class="page-content" style="font-size: 16px; color: var(--color-text); line-height: 1.8;">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</main>

<?php
get_footer();
