<?php
/**
 * Displays archive pages if a speicifc template is not set. 
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
get_header(); ?>
<main class="grid-container" role="main">
	<header>
		<h1 class="page-title"><?php the_archive_title();?></h1>
		<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
	</header>
	<div class="grid-x">
	<div class="medium-8 cell">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<!-- To see additional archive styles, visit the /parts directory -->
		<?php get_template_part( 'parts/loop', 'archive' ); ?>	    
	<?php endwhile; ?>		
	<?php else : ?>								
		<?php get_template_part( 'parts/content', 'missing' ); ?>			
	<?php endif; ?>
	</div>
	<div class="medium-4 cell">
	<?php get_sidebar(); ?>
	</div>
</main> <!-- end #main -->
<?php get_footer(); ?>