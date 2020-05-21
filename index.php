<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header(); ?>

<main id="main" class="lightgray">
<div class="grid-container grid-x">
<div class="cell medium-7">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   	<?php get_template_part( 'parts/loop', 'archive' ); ?>   	
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