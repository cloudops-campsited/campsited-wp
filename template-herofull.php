<?php
/*
Template Name: Hero full
Template Post Type: page, post
*/
?>
<?php get_header(); ?>
<main id="main">	
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php get_template_part( 'parts/loop', 'page-herofull' ); ?>
<?php endwhile; endif; ?>
</main> <!-- end #main -->
<?php get_footer(); ?>