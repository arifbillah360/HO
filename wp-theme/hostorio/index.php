<?php
/**
 * Default template - falls back to Home page template.
 *
 * @package Hostorio
 */

get_header();
?>

<main class="site-content">
    <div class="container-wrapper">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>
