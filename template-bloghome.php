<?php
/*
Template Name: Blog Home
Template Post Type: page, post
*/
get_header(); ?>

<main id="main" class="lightgray">
<div class="grid-container grid-x">
<div class="cell medium-12">
<h1>Campsited Blog</h1>
</div>
<div class="cell medium-7">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   	<?php get_template_part( 'parts/loop', 'page-bloghome' ); ?>   	
<?php endwhile; else : ?>
	<?php get_template_part( 'parts/content', 'missing' ); ?>
<?php endif; ?>
</div>
<aside class="cell medium-offset-1 medium-4">
	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
<?php dynamic_sidebar( 'sidebar1' ); ?>
<?php else : ?>
<!-- This content shows up if there are no widgets defined in the backend. -->		
<div class="alert help">
<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
</div>
<?php endif; ?>
</aside>
</div>
</main> <!-- end #main -->
<?php get_footer(); ?>