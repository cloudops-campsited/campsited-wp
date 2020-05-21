<?php
/*
Template Name: Home
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main id="main">	
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php get_template_part( 'parts/loop', 'page-home' ); ?>		
<?php endwhile; endif; ?>							
</main> <!-- end #main -->
<?php get_footer(); ?>