<?php
/*
 * Template Name: WooCommerce
 */

get_header();

?>
<div id="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
    endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
