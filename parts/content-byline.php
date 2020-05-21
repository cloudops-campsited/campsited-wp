<?php
/**
 * The template part for displaying an author byline
 * - <?php the_category(', ') ?>
 */
?>

<p class="byline">
	Posted on <?php the_time('F j, Y') ?> by <?php the_author_posts_link(); ?>  
</p>	