<?php
/**
 * Theme Activation - Auto-create pages with correct templates.
 *
 * @package Hostorio
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action( 'after_switch_theme', 'hostorio_create_pages' );

/**
 * Create all required pages on theme activation.
 */
function hostorio_create_pages() {
    $pages = array(
        array(
            'title'    => 'Home',
            'slug'     => 'home',
            'template' => 'page-templates/page-home.php',
        ),
        array(
            'title'    => 'Web Hosting',
            'slug'     => 'web-hosting',
            'template' => 'page-templates/page-web-hosting.php',
        ),
        array(
            'title'    => 'Turbo Hosting',
            'slug'     => 'turbo-hosting',
            'template' => 'page-templates/page-turbo-hosting.php',
        ),
        array(
            'title'    => 'Reseller Hosting',
            'slug'     => 'reseller-hosting',
            'template' => 'page-templates/page-reseller-hosting.php',
        ),
        array(
            'title'    => 'Student Hosting',
            'slug'     => 'student-hosting',
            'template' => 'page-templates/page-student-hosting.php',
        ),
        array(
            'title'    => 'VPS',
            'slug'     => 'vps',
            'template' => 'page-templates/page-vps.php',
        ),
        array(
            'title'    => 'Business Email',
            'slug'     => 'business-email',
            'template' => 'page-templates/page-business-email.php',
        ),
        array(
            'title'    => 'Package',
            'slug'     => 'package',
            'template' => 'page-templates/page-package.php',
        ),
        array(
            'title'    => 'Offer',
            'slug'     => 'offer',
            'template' => 'page-templates/page-offer.php',
        ),
        array(
            'title'    => 'Terms & Conditions',
            'slug'     => 'terms-and-conditions',
            'template' => 'page-templates/page-terms.php',
        ),
        array(
            'title'    => 'Privacy Policy',
            'slug'     => 'privacy-policy',
            'template' => 'page-templates/page-privacy.php',
        ),
    );

    foreach ( $pages as $page_data ) {
        // Skip if page already exists
        $existing = get_page_by_path( $page_data['slug'] );
        if ( $existing ) {
            // Just update the template if it's not set
            $current_template = get_post_meta( $existing->ID, '_wp_page_template', true );
            if ( empty( $current_template ) || 'default' === $current_template ) {
                update_post_meta( $existing->ID, '_wp_page_template', $page_data['template'] );
            }
            continue;
        }

        $page_id = wp_insert_post( array(
            'post_title'   => $page_data['title'],
            'post_name'    => $page_data['slug'],
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_content' => '',
        ) );

        if ( ! is_wp_error( $page_id ) ) {
            update_post_meta( $page_id, '_wp_page_template', $page_data['template'] );
        }
    }

    // Set the Home page as the static front page
    $home_page = get_page_by_path( 'home' );
    if ( $home_page ) {
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $home_page->ID );
    }
}
