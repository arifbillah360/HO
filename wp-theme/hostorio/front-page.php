<?php
/**
 * Front Page template.
 * Loads the Home page template when a static front page is set,
 * or falls back to the default home template.
 *
 * @package Hostorio
 */

// If using a page template, let WordPress handle it
$template = get_page_template_slug();
if ( $template ) {
    include locate_template( $template );
    return;
}

// Default: include the Home page template
include get_template_directory() . '/page-templates/page-home.php';
