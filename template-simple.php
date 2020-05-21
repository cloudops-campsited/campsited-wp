<?php
/*
Template Name: Simple
Template Post Type: page
*/
get_header(); ?>
<main role="main" class="lightgray">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php get_template_part( 'parts/loop', 'page-simple' ); ?>		
	<?php endwhile; endif; ?>							
</main> <!-- end #main -->
<?php get_footer(); ?>