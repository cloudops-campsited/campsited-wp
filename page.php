<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>

<main id="main" class="grid-container">	
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php get_template_part( 'parts/loop', 'page' ); ?>
<?php endwhile; endif; ?>
</main> <!-- end #main -->
<?php get_footer(); ?>