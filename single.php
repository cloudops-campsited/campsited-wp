<?php 
/**
 * The template for displaying all single posts and attachments
 */
get_header(); ?>

<main id="main" class="lightgray">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php get_template_part( 'parts/loop', 'single' ); ?>
<?php endwhile; else : ?>
<?php get_template_part( 'parts/content', 'missing' ); ?>
<?php endif; ?>
</main> <!-- end #main -->
<?php get_footer(); ?>