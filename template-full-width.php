<?php
/*
Template Name: Full Width (No Sidebar)
Template Post Type: page, post
*/
get_header(); ?>
<main role="main" class="grid-container grid-container-padded">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php get_template_part( 'parts/loop', 'page-fullwith' ); ?>		
	<?php endwhile; endif; ?>							
</main> <!-- end #main -->
<?php get_footer(); ?>
